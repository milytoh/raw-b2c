<!-- <?php
include 'includes/protect.php';
$page_title = 'Dashboard | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';

require '../config/database.php';

// Dashboard Statistics
$totalWorkers = $pdo->query("SELECT COUNT(*) FROM workers")->fetchColumn();

$totalProducts = $pdo->query("
    SELECT COUNT(*)
    FROM products
    WHERE status='Active'
")->fetchColumn();

$pendingReviews = $pdo->query("
    SELECT COUNT(*)
    FROM reviews
    WHERE status='Pending'
")->fetchColumn();

$totalRewards = $pdo->query("
    SELECT COUNT(*)
    FROM rewards
")->fetchColumn();


$activities = [];


/* Products */
$stmt = $pdo->query("
    SELECT
        name AS title,
        created_at,
        'product' AS type
    FROM products
");

$activities = array_merge(
    $activities,
    $stmt->fetchAll(PDO::FETCH_ASSOC)
);


/* Blog Posts */
$stmt = $pdo->query("
    SELECT
        title,
        created_at,
        'blog' AS type
    FROM blog_posts
");

$activities = array_merge(
    $activities,
    $stmt->fetchAll(PDO::FETCH_ASSOC)
);


/* Gallery */
$stmt = $pdo->query("
    SELECT
        title,
        uploaded_at AS created_at,
        'gallery' AS type
    FROM gallery
");

$activities = array_merge(
    $activities,
    $stmt->fetchAll(PDO::FETCH_ASSOC)
);


/* Sort newest first */
usort($activities, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});


/* Only latest 4 */
$activities = array_slice($activities, 0, 4);

?> -->



<!-- Main Content Area -->
<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <!-- Scrollable Content -->
    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="mb-10">
                <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Welcome Back, Admin!</h1>
                <p class="text-on-surface-variant">Here is an overview of what's happening today across the ecosystem.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <!-- Stat Card 1 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-primary-fixed rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary text-3xl">badge</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Total Workers</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary"><?php echo $totalWorkers; ?></h3>
                    </div>
                </div>
                
                <!-- Stat Card 2 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-secondary-container rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary text-3xl">inventory_2</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Active Products</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary"><?php echo $totalProducts; ?></h3>
                    </div>
                </div>
                
                <!-- Stat Card 3 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-error-container rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-error text-3xl">reviews</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Pending Reviews</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary"><?php echo $pendingReviews; ?></h3>
                    </div>
                </div>
                
                <!-- Stat Card 4 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-tertiary-fixed rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-tertiary text-3xl">stars</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Reward Claims</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary"><?php echo $totalRewards; ?></h3>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Recent Activity Feed -->
                <div class="lg:col-span-2 bg-white rounded-[32px] shadow-premium border border-outline-variant/10 p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-headline-md text-xl font-bold text-primary">Recent Activity</h3>
                        <a href="#" class="text-sm font-bold text-primary hover:underline">View All</a>
                    </div>
                    
                   <div class="space-y-6">

                        <?php foreach($activities as $activity): ?>

                        <?php

                        $icon = 'info';
                        $bgClass = 'bg-primary-fixed';
                        $textClass = 'text-primary';
                        $message = '';

                        if($activity['type'] === 'product'){

                            $icon = 'inventory_2';
                            $message = 'New product added: <strong>'
                                    . htmlspecialchars($activity['title'])
                                    . '</strong>';

                        }

                        elseif($activity['type'] === 'blog'){

                            $icon = 'edit_document';
                            $bgClass = 'bg-secondary-container';
                            $textClass = 'text-secondary';

                            $message = 'New blog post published: <strong>'
                                    . htmlspecialchars($activity['title'])
                                    . '</strong>';

                        }

                        elseif($activity['type'] === 'gallery'){

                            $icon = 'add_photo_alternate';
                            $bgClass = 'bg-tertiary-container';
                            $textClass = 'text-tertiary';

                            $message = 'New media uploaded: <strong>'
                                    . htmlspecialchars($activity['title'])
                                    . '</strong>';

                        }

                        ?>

                        <div class="flex gap-4">

                            <div class="w-10 h-10 <?= $bgClass ?> rounded-full flex items-center justify-center shrink-0 mt-1">

                                <span class="material-symbols-outlined <?= $textClass ?> text-sm">
                                    <?= $icon ?>
                                </span>

                            </div>

                            <div>

                                <p class="text-sm text-on-surface">
                                    <?= $message ?>
                                </p>

                                <p class="text-xs text-on-surface-variant mt-1">
                                    <?= date('M d, Y • h:i A', strtotime($activity['created_at'])) ?>
                                </p>

                            </div>

                        </div>

                        <?php endforeach; ?>

                        </div>
                </div>

                <!-- Quick Actions Placeholder -->
                <div class="bg-primary text-on-primary rounded-[32px] shadow-premium p-8 relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                    <h3 class="font-headline-md text-xl font-bold mb-6">Quick Actions</h3>
                    
                    <div class="space-y-4">
                                                <a href="add-product.php"
                        class="w-full bg-white text-primary px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 hover:bg-primary-fixed transition-colors">

                            <span class="material-symbols-outlined">
                                add_circle
                            </span>

                            Add New Product

                        </a>
                        <a href="add-blog.php"
                        class="w-full bg-primary-container text-white px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 border border-on-primary/20 hover:bg-primary-fixed hover:text-primary transition-colors">

                            <span class="material-symbols-outlined">
                                edit_document
                            </span>

                            Draft Blog Post

                        </a>

                        <a href="add-gallery.php"
                        class="w-full bg-primary-container text-white px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 border border-on-primary/20 hover:bg-primary-fixed hover:text-primary transition-colors">

                            <span class="material-symbols-outlined">
                                cloud_upload
                            </span>

                            Upload Media

</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
