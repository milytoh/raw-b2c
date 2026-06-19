<?php

$page_title = 'Blog Details | RAW B2C LTD';


$base_path = '../';

$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
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



if(!isset($_GET['id']) || empty($_GET['id'])){

    header("Location: blog.php");
    exit;

}


$id = (int)$_GET['id'];



$stmt = $pdo->prepare("
    SELECT *
    FROM blog_posts
    WHERE id = ?
    AND status='Published'
");


$stmt->execute([$id]);


$post = $stmt->fetch();



if(!$post){

    echo "

    <div class='min-h-screen flex items-center justify-center'>

        <div class='text-center'>

            <h1 class='text-4xl font-bold text-primary'>
                Blog Not Found
            </h1>


            <a href='blog.php'
            class='inline-block mt-6 bg-primary text-white px-6 py-3 rounded-xl'>

            Back To Blog

            </a>

        </div>

    </div>

    ";

    include '../includes/footer.php';
    exit;

}



?>





<!-- HERO -->


<section class="relative pt-36 pb-24 overflow-hidden">


<div class="absolute inset-0">

<div class="absolute inset-0 bg-primary/80 z-10"></div>


<?php if(!empty($post['image_path'])): ?>


<img

src="../uploads/blog/<?=htmlspecialchars($post['image_path'])?>"

class="w-full h-full object-cover">


<?php endif; ?>


</div>



<div class="relative z-10 max-w-4xl mx-auto px-6 text-center">


<span class="bg-white text-primary px-4 py-2 rounded-full text-sm font-bold">

<?=htmlspecialchars($post['category'])?>

</span>



<h1 class="text-4xl md:text-6xl text-white font-bold mt-6 reveal active">


<?=htmlspecialchars($post['title'])?>


</h1>



<p class="text-white/80 mt-5">

<?=date("F d, Y",strtotime($post['created_at']))?>

</p>


</div>


</section>








<!-- CONTENT -->


<section class="py-20 max-w-5xl mx-auto px-6">



<div class="bg-white rounded-[32px] shadow-premium p-8 md:p-12 reveal active">





<?php if(!empty($post['image_path'])): ?>


<img

src="../uploads/blog/<?=htmlspecialchars($post['image_path'])?>"

class="w-full h-[450px] object-cover rounded-3xl mb-10">


<?php endif; ?>






<div class="prose max-w-none text-on-surface-variant leading-8">


<?=nl2br(htmlspecialchars($post['content']))?>


</div>






<div class="mt-12 border-t pt-8">


<a href="blog.php"

class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-bold hover:scale-105 transition">


<span class="material-symbols-outlined">

arrow_back

</span>


Back To Blog


</a>


</div>





</div>



</section>






<?php include '../includes/footer.php'; ?>