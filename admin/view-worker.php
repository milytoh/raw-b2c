<?php

include 'includes/protect.php';
require '../config/database.php';


$id = (int)$_GET['id'];


$stmt=$pdo->prepare("
SELECT *
FROM workers
WHERE id=?
");


$stmt->execute([$id]);


$worker=$stmt->fetch();


if(!$worker){
    header("Location: workers.php");
    exit;
}



$page_title="Worker Details";

include 'includes/header.php';
include 'includes/sidebar.php';

?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">

    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">

        <div class="max-w-6xl mx-auto">

            <!-- Header -->
            <div class="mb-8">

                <a href="workers.php"
                class="inline-flex items-center gap-2 text-primary font-medium hover:underline mb-4">

                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>

                    Back to Workers

                </a>

                <h1 class="text-4xl font-bold text-primary">
                    Worker Profile
                </h1>

                <p class="text-on-surface-variant mt-2">
                    Detailed information about this worker.
                </p>

            </div>



            <!-- Profile Card -->

            <div class="bg-white rounded-[32px] shadow-premium overflow-hidden border border-outline-variant/10">

                <!-- Banner -->

                <div class="h-40 bg-gradient-to-r from-primary via-primary-container to-secondary"></div>

                <!-- Profile -->

                <div class="px-8 pb-8">

                    <div class="-mt-16 flex flex-col md:flex-row md:items-end gap-6">

                        <!-- Avatar -->

                        <div class="w-32 h-32 rounded-full bg-primary text-white flex items-center justify-center text-4xl font-bold border-4 border-white shadow-lg">

                            <?= strtoupper(substr($worker['first_name'],0,1).substr($worker['last_name'],0,1)) ?>

                        </div>

                        <div class="flex-1">

                            <h2 class="text-3xl font-bold text-primary">

                                <?= htmlspecialchars($worker['first_name'].' '.$worker['last_name']) ?>

                            </h2>

                            <p class="text-on-surface-variant">

                                <?= htmlspecialchars($worker['skill_area']) ?>

                            </p>

                        </div>

                        <div>

                            <a href="edit-worker.php?id=<?= $worker['id'] ?>"
                            class="bg-primary text-white px-6 py-3 rounded-xl font-bold hover:-translate-y-1 transition-all inline-flex items-center gap-2">

                                <span class="material-symbols-outlined">
                                    edit
                                </span>

                                Edit Worker

                            </a>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Information Grid -->

            <div class="grid lg:grid-cols-2 gap-8 mt-8">

                <!-- Personal Information -->

                <div class="bg-white rounded-[28px] shadow-premium p-8">

                    <h3 class="text-xl font-bold text-primary mb-6">
                        Personal Information
                    </h3>

                    <div class="space-y-5">

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Email
                            </p>
                            <p class="font-medium text-lg">
                                <?= htmlspecialchars($worker['email']) ?>
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Phone Number
                            </p>
                            <p class="font-medium text-lg">
                                <?= htmlspecialchars($worker['phone']) ?>
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                State
                            </p>
                            <p class="font-medium text-lg">
                                <?= htmlspecialchars($worker['state']) ?>
                            </p>
                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Local Government
                            </p>
                            <p class="font-medium text-lg">
                                <?= htmlspecialchars($worker['local_government']) ?>
                            </p>
                        </div>

                    </div>

                </div>



                <!-- Professional Information -->

                <div class="bg-white rounded-[28px] shadow-premium p-8">

                    <h3 class="text-xl font-bold text-primary mb-6">
                        Professional Information
                    </h3>

                    <div class="space-y-5">

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Skill Area
                            </p>

                            <span class="inline-block bg-secondary-container text-on-secondary-container px-4 py-2 rounded-full font-bold">

                                <?= htmlspecialchars($worker['skill_area']) ?>

                            </span>

                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Experience
                            </p>

                            <p class="font-medium text-lg">
                                <?= $worker['experience_years'] ?> Years
                            </p>

                        </div>

                        <div>
                            <p class="text-xs uppercase tracking-wide text-on-surface-variant">
                                Date Registered
                            </p>

                            <p class="font-medium text-lg">

                                <?= date('F d, Y', strtotime($worker['created_at'])) ?>

                            </p>

                        </div>

                    </div>

                </div>

            </div>



            <!-- Skills Details -->

            <div class="bg-white rounded-[28px] shadow-premium p-8 mt-8">

                <h3 class="text-xl font-bold text-primary mb-6">
                    Skills & Experience Details
                </h3>

                <div class="leading-relaxed text-on-surface-variant">

                    <?= nl2br(htmlspecialchars($worker['skills_details'])) ?>

                </div>

            </div>



            <!-- CV Section -->

            <?php if(!empty($worker['cv_file_path'])): ?>

            <div class="bg-white rounded-[28px] shadow-premium p-8 mt-8 flex flex-col md:flex-row justify-between items-center gap-4">

                <div>

                    <h3 class="text-xl font-bold text-primary">
                        Curriculum Vitae (CV)
                    </h3>

                    <p class="text-on-surface-variant">
                        View or download the uploaded CV document.
                    </p>

                </div>

                <a href="../<?= $worker['cv_file_path'] ?>"
                target="_blank"
                class="bg-secondary text-white px-6 py-3 rounded-xl font-bold hover:-translate-y-1 transition-all inline-flex items-center gap-2">

                    <span class="material-symbols-outlined">
                        description
                    </span>

                    View CV

                </a>

            </div>

            <?php endif; ?>

        </div>

    </main>

</div>




<?php include 'includes/footer.php'; ?>