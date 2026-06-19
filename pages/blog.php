<?php

$page_title = 'Blog & Updates | RAW B2C LTD';

$base_path = '../';

$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = '#';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';


$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = '#';
$footer_contact = 'contact.php';


include '../includes/header.php';
include '../includes/navbar.php';


require '../config/database.php';



/*
|--------------------------------------------------------------------------
| FILTER
|--------------------------------------------------------------------------
*/

$category = isset($_GET['category'])
    ? trim($_GET['category'])
    : '';



/*
|--------------------------------------------------------------------------
| PAGINATION
|--------------------------------------------------------------------------
*/


$limit = 6;


$page = isset($_GET['page'])
    ? (int)$_GET['page']
    : 1;


if($page < 1){
    $page = 1;
}


$offset = ($page - 1) * $limit;



/*
|--------------------------------------------------------------------------
| CATEGORIES
|--------------------------------------------------------------------------
*/


$categoriesStmt = $pdo->query("
    SELECT DISTINCT category
    FROM blog_posts
    WHERE status='Published'
    ORDER BY category ASC
");


$categories = $categoriesStmt->fetchAll(PDO::FETCH_COLUMN);




/*
|--------------------------------------------------------------------------
| COUNT
|--------------------------------------------------------------------------
*/


if(!empty($category)){


    $countStmt = $pdo->prepare("
        SELECT COUNT(*)
        FROM blog_posts
        WHERE status='Published'
        AND category = ?
    ");


    $countStmt->execute([$category]);


}else{


    $countStmt = $pdo->query("
        SELECT COUNT(*)
        FROM blog_posts
        WHERE status='Published'
    ");


}


$totalPosts = $countStmt->fetchColumn();


$totalPages = ceil($totalPosts / $limit);




/*
|--------------------------------------------------------------------------
| FETCH POSTS
|--------------------------------------------------------------------------
*/


if(!empty($category)){


$stmt = $pdo->prepare("
    SELECT *
    FROM blog_posts
    WHERE status='Published'
    AND category = ?
    ORDER BY created_at DESC
    LIMIT $limit OFFSET $offset
");


$stmt->execute([$category]);



}else{


$stmt = $pdo->query("
    SELECT *
    FROM blog_posts
    WHERE status='Published'
    ORDER BY created_at DESC
    LIMIT $limit OFFSET $offset
");


}


$posts = $stmt->fetchAll();



?>



<!-- HERO -->

<section class="relative pt-40 pb-32 overflow-hidden">


<div class="absolute inset-0">

<div class="absolute inset-0 bg-primary/80 z-10"></div>


<img
class="w-full h-full object-cover"
src="https://images.unsplash.com/photo-1542838132-92c53300491e">


</div>



<div class="relative z-10 text-center">


<h1 class="text-5xl text-white font-bold reveal active">

Latest Updates & News

</h1>


<p class="text-white/80 mt-4 reveal active">

Insights, success stories, and news.

</p>


</div>


</section>






<!-- FILTER -->


<section class="py-10 bg-surface-container-low">


<div class="flex justify-center flex-wrap gap-3">


<a href="blog.php"
class="<?= empty($category)
?'bg-primary text-white'
:'bg-white text-primary'
?> px-6 py-3 rounded-full font-bold">

All

</a>



<?php foreach($categories as $cat): ?>


<a href="?category=<?=urlencode($cat)?>"

class="<?= $category==$cat
?'bg-primary text-white'
:'bg-white text-primary'
?> px-6 py-3 rounded-full font-bold">


<?=htmlspecialchars($cat)?>


</a>



<?php endforeach; ?>


</div>


</section>








<!-- BLOG GRID -->


<section class="py-16 max-w-container-max mx-auto px-6">


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">



<?php if(count($posts)>0): ?>



<?php foreach($posts as $post): ?>



<a href="blog-details.php?id=<?=$post['id']?>"

class="reveal active bg-white rounded-3xl overflow-hidden shadow-premium border hover:-translate-y-2 transition-all duration-500">



<div class="h-56 overflow-hidden">


<?php if(!empty($post['image_path'])): ?>


<img

src="../uploads/blog/<?=htmlspecialchars($post['image_path'])?>"

class="w-full h-full object-cover hover:scale-110 transition duration-700">


<?php else: ?>


<div class="h-full flex items-center justify-center">

<span class="material-symbols-outlined text-5xl">

article

</span>

</div>


<?php endif; ?>


</div>






<div class="p-7">


<div class="flex justify-between">


<span class="text-primary text-xs font-bold uppercase">

<?=htmlspecialchars($post['category'])?>

</span>


<span class="text-xs">

<?=date("M d,Y",strtotime($post['created_at']))?>

</span>


</div>





<h2 class="text-xl font-bold text-primary my-4">

<?=htmlspecialchars($post['title'])?>

</h2>





<p class="text-on-surface-variant text-sm line-clamp-3">


<?=substr(strip_tags($post['content']),0,150)?>


...


</p>





<div class="mt-5 text-primary font-bold">


Read Article →

</div>


</div>


</a>




<?php endforeach; ?>



<?php else: ?>


<div class="col-span-full text-center py-20">


<h2 class="text-3xl font-bold">

No Articles Found

</h2>


</div>


<?php endif; ?>



</div>









<!-- PAGINATION -->


<?php if($totalPages > 1): ?>


<div class="flex justify-center gap-3 mt-16 flex-wrap">



<?php for($i=1;$i<=$totalPages;$i++): ?>


<a href="?page=<?=$i?>&category=<?=urlencode($category)?>"

class="w-12 h-12 rounded-xl flex items-center justify-center font-bold

<?=$page==$i
?'bg-primary text-white'
:'bg-white border'
?>">


<?=$i?>


</a>



<?php endfor; ?>


</div>



<?php endif; ?>



</section>






<?php include '../includes/footer.php'; ?>