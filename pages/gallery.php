<?php
$page_title = 'Gallery | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = '#';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';

include '../includes/header.php';
include '../includes/navbar.php';

require '../config/database.php';


$category = $_GET['category'] ?? 'All';

$limit = 12;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if($page < 1){
    $page = 1;
}

$offset = ($page - 1) * $limit;



if($category == "All"){

    $countStmt = $pdo->query("
        SELECT COUNT(*)
        FROM gallery
    ");

    $totalItems = $countStmt->fetchColumn();


    $stmt = $pdo->prepare("
        SELECT *
        FROM gallery
        ORDER BY uploaded_at DESC
        LIMIT $limit OFFSET $offset
    ");

    $stmt->execute();

}
else{

    $countStmt = $pdo->prepare("
        SELECT COUNT(*)
        FROM gallery
        WHERE category = ?
    ");

    $countStmt->execute([$category]);

    $totalItems = $countStmt->fetchColumn();



    $stmt = $pdo->prepare("
        SELECT *
        FROM gallery
        WHERE category = ?
        ORDER BY uploaded_at DESC
        LIMIT $limit OFFSET $offset
    ");

    $stmt->execute([$category]);

}

$galleryItems = $stmt->fetchAll();

$totalPages = ceil($totalItems / $limit);
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Projects Gallery</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Visualizing our footprint across the continent. Explore our projects, people, and community impact.
        </p>
    </div>
</section>

<!-- Filter Buttons -->
<section class="py-12 bg-surface-container-low border-b border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-desktop text-center">

        <div class="flex flex-wrap justify-center gap-4">

            <?php

            $filters = [
                'All',
                'Projects',
                'Workers',
                'Products',
                'Community'
            ];

            foreach($filters as $filter):

            ?>

            <a
                href="?category=<?= urlencode($filter) ?>"
                class="px-6 py-2 rounded-full font-bold text-sm transition-colors

                <?= $category == $filter
                    ? 'bg-primary text-white'
                    : 'bg-white text-on-surface-variant border border-outline-variant/30 hover:border-primary hover:text-primary'
                ?>">

                <?= $filter ?>

            </a>

            <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- Gallery Grid -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">


<?php if(count($galleryItems) > 0): ?>


<?php foreach($galleryItems as $item): ?>


<a href="gallery-details.php?id=<?= $item['id'] ?>"
    class="relative overflow-hidden rounded-3xl shadow-premium group block">


    <img
    src="../uploads/gallery/<?= htmlspecialchars($item['image_path']) ?>"
    alt="<?= htmlspecialchars($item['title']) ?>"
    class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700">



    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>



    <div class="absolute bottom-0 left-0 right-0 p-6">


        <span class="inline-block bg-primary text-white text-xs font-bold px-3 py-1 rounded-full mb-3">

            <?= htmlspecialchars($item['category']) ?>

        </span>



        <h3 class="text-white text-xl font-bold mb-2">

            <?= htmlspecialchars($item['title']) ?>

        </h3>



        <p class="text-white/70 text-sm">

            <?= date(
                'M d, Y',
                strtotime($item['uploaded_at'])
            ) ?>

        </p>


    </div>


</a>


<?php endforeach; ?>


<?php else: ?>


<div class="col-span-full text-center py-20">

    <h3 class="text-xl font-bold text-primary">
        No Images Found
    </h3>

</div>


<?php endif; ?>


</div>

</section>

<?php if($totalPages > 1): ?>

<section class="pb-20">

    <div class="flex justify-center gap-2">

        <?php for($i=1; $i <= $totalPages; $i++): ?>

            <a
                href="?page=<?= $i ?>&category=<?= urlencode($category) ?>"
                class="px-4 py-2 rounded-lg font-bold

                <?= $page == $i
                    ? 'bg-primary text-white'
                    : 'bg-white border border-outline-variant/30 hover:border-primary'
                ?>">

                <?= $i ?>

            </a>

        <?php endfor; ?>

    </div>

</section>

<?php endif; ?>

<?php include '../includes/footer.php'; ?>
