<?php

$page_title = 'Gallery Details | RAW B2C LTD';

require '../config/database.php';


$id = $_GET['id'] ?? 0;


$stmt = $pdo->prepare("
    SELECT *
    FROM gallery
    WHERE id = ?
");

$stmt->execute([$id]);


$item = $stmt->fetch();



if(!$item){

    header("Location: gallery.php");
    exit;

}



$home_link = "../index.php";
$about_link = "about.php";
$products_link = "product.php";
$gallery_link = "gallery.php";
$blog_link = "blog.php";
$reviews_link = "reviews.php";

include '../includes/header.php';
include '../includes/navbar.php';

?>



<section class="pt-40 pb-24 px-margin-desktop">

<div class="max-w-6xl mx-auto">

    <!-- Back Button -->
    <a href="gallery.php"
       class="inline-flex items-center gap-2 mb-8 text-primary font-semibold hover:gap-3 transition-all duration-300">

        <span class="material-symbols-outlined">
            arrow_back
        </span>

        Back to Gallery

    </a>


    <!-- Main Card -->
    <div class="bg-white rounded-[32px] shadow-premium overflow-hidden border border-outline-variant/10 animate-fade-up">

        <!-- Image Section -->
        <div class="relative overflow-hidden bg-black">

            <img
                src="../uploads/gallery/<?= htmlspecialchars($item['image_path']) ?>"
                alt="<?= htmlspecialchars($item['title']) ?>"
                class="w-full max-h-[750px] object-contain transition-transform duration-700 hover:scale-105">

            <!-- Floating Category Badge -->
            <div class="absolute top-6 left-6">

                <span class="bg-primary text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg backdrop-blur-sm animate-pulse">

                    <?= htmlspecialchars($item['category']) ?>

                </span>

            </div>

        </div>


        <!-- Details -->
        <div class="p-8 md:p-12">

            <div class="flex flex-wrap items-center gap-4 mb-4">

                <span class="bg-surface-container px-4 py-2 rounded-full text-sm font-medium">

                    <span class="material-symbols-outlined text-sm align-middle mr-1">
                        calendar_month
                    </span>

                    <?= date("F d, Y", strtotime($item['uploaded_at'])) ?>

                </span>

            </div>


            <h1 class="text-3xl md:text-5xl font-bold text-primary mb-6 leading-tight">

                <?= htmlspecialchars($item['title']) ?>

            </h1>


            <p class="text-on-surface-variant text-lg leading-relaxed mb-8">

                Explore this gallery item from RAW B2C's growing ecosystem of projects,
                products, workers, and community initiatives.

            </p>


            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4">

                <button
                    onclick="copyGalleryLink()"
                    class="bg-primary text-white px-6 py-3 rounded-xl font-bold hover:scale-105 hover:shadow-lg transition-all duration-300">

                    <span class="material-symbols-outlined align-middle mr-2">
                        share
                    </span>

                    Copy Share Link

                </button>

                <a href="../uploads/gallery/<?= urlencode($item['image_path']) ?>"
                   target="_blank"
                   class="bg-surface border border-outline-variant/30 px-6 py-3 rounded-xl font-bold hover:border-primary hover:text-primary transition-all duration-300">

                    <span class="material-symbols-outlined align-middle mr-2">
                        open_in_new
                    </span>

                    View Full Image

                </a>

            </div>

        </div>

    </div>

</div>

</section>



<?php include '../includes/footer.php'; ?>