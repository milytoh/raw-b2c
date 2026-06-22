<?php

include 'includes/protect.php';
require '../config/database.php';


$id = (int)($_GET['id'] ?? 0);


$stmt = $pdo->prepare("
SELECT *
FROM workers
WHERE id = ?
");

$stmt->execute([$id]);

$worker = $stmt->fetch();


if(!$worker){

    $_SESSION['error'] = "Worker not found";

    header("Location: workers.php");
    exit;
}



$page_title = "Edit Worker | RAW B2C LTD";

include 'includes/header.php';
include 'includes/sidebar.php';


?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-5xl mx-auto">


<form
action="update-worker.php"
method="POST"
enctype="multipart/form-data"
class="space-y-8">


<input 
type="hidden"
name="id"
value="<?= $worker['id'] ?>">



<!-- HEADER -->

<div class="bg-white rounded-[30px] shadow-premium p-8 flex justify-between items-center">


<div>

<a href="workers.php"
class="flex items-center gap-2 text-primary mb-4 font-bold">

<span class="material-symbols-outlined">
arrow_back
</span>

Back to Workers

</a>


<h1 class="text-4xl font-bold text-primary">
Edit Worker
</h1>


<p class="text-on-surface-variant mt-2">
Update worker details and documents
</p>


</div>


<div class="w-24 h-24 rounded-full bg-primary-fixed flex items-center justify-center">

<span class="material-symbols-outlined text-primary text-5xl">
person
</span>

</div>


</div>





<!-- PERSONAL -->

<div class="bg-white rounded-[30px] shadow-premium p-8">


<h2 class="text-xl font-bold text-primary mb-6 flex gap-2 items-center">

<span class="material-symbols-outlined">
person
</span>

Personal Information

</h2>



<div class="grid md:grid-cols-2 gap-6">



<div>

<label class="font-bold">
First Name
</label>

<input
name="first_name"
required
value="<?= htmlspecialchars($worker['first_name']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>




<div>

<label class="font-bold">
Last Name
</label>

<input
name="last_name"
required
value="<?= htmlspecialchars($worker['last_name']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>




<div>

<label class="font-bold">
Email
</label>

<input
type="email"
name="email"
required
value="<?= htmlspecialchars($worker['email']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>




<div>

<label class="font-bold">
Phone
</label>

<input
name="phone"
required
value="<?= htmlspecialchars($worker['phone']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>


</div>


</div>







<!-- LOCATION -->


<div class="bg-white rounded-[30px] shadow-premium p-8">


<h2 class="text-xl font-bold text-primary mb-6 flex gap-2 items-center">

<span class="material-symbols-outlined">
location_on
</span>

Location

</h2>



<div class="grid md:grid-cols-2 gap-6">


<div>

<label class="font-bold">
State
</label>


<input
name="state"
required
value="<?= htmlspecialchars($worker['state']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>



<div>

<label class="font-bold">
Local Government
</label>


<input
name="local_government"
required
value="<?= htmlspecialchars($worker['local_government']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>


</div>


</div>








<!-- WORK INFO -->


<div class="bg-white rounded-[30px] shadow-premium p-8">


<h2 class="text-xl font-bold text-primary mb-6 flex gap-2 items-center">

<span class="material-symbols-outlined">
engineering
</span>

Professional Details

</h2>



<div class="space-y-6">


<div>


<label class="font-bold">
Skill Area
</label>


<input
name="skill_area"
required
value="<?= htmlspecialchars($worker['skill_area']) ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>




<div>


<label class="font-bold">
Years Of Experience
</label>


<input
type="number"
min="0"
name="experience_years"
value="<?= $worker['experience_years'] ?>"
class="w-full mt-2 px-4 py-3 border rounded-xl">


</div>




<div>


<label class="font-bold">
Skills Description
</label>


<textarea
name="skills_details"
rows="6"
class="w-full mt-2 px-4 py-3 border rounded-xl"><?= htmlspecialchars($worker['skills_details']) ?></textarea>


</div>



</div>


</div>








<!-- CV -->


<div class="bg-white rounded-[30px] shadow-premium p-8">


<h2 class="text-xl font-bold text-primary mb-6 flex gap-2 items-center">


<span class="material-symbols-outlined">
description
</span>


CV Document

</h2>




<?php if(!empty($worker['cv_file_path'])): ?>


<div class="bg-surface-container-low rounded-2xl p-5 flex justify-between items-center mb-5">


<div>

<p class="font-bold text-primary">
Current CV
</p>


<p class="text-sm text-on-surface-variant">
Uploaded document
</p>


</div>



<a
target="_blank"
href="../<?= $worker['cv_file_path'] ?>"
class="bg-secondary text-white px-5 py-3 rounded-xl">


View CV


</a>



</div>


<?php endif; ?>




<label class="font-bold">
Replace CV
</label>


<input
type="file"
name="cv_file"
accept=".pdf,.doc,.docx"
class="w-full mt-2 px-4 py-3 border rounded-xl">



</div>







<button
class="w-full bg-primary text-white py-4 rounded-2xl font-bold text-lg shadow-lg hover:-translate-y-1 transition">


Update Worker Profile


</button>




</form>


</div>


</main>


</div>


<?php include 'includes/footer.php'; ?>