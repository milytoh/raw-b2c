<?php
$page_title = 'Our Products | RAW B2C LTD';

$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = '#';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = '#';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';


include '../includes/header.php';
include '../includes/navbar.php';


require '../config/database.php';



$stmt = $pdo->query("
SELECT *
FROM products
WHERE status='Active'
ORDER BY created_at DESC
");


$products = $stmt->fetchAll();

?>



<!-- Hero -->
<section class="relative pt-40 pb-32 overflow-hidden">


<div class="absolute inset-0">

<div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>


<img 
src="https://images.unsplash.com/photo-1542291026-7eec264c27ff"
class="w-full h-full object-cover scale-105">


</div>



<div class="relative z-10 text-center max-w-container-max mx-auto px-6">


<h1 class="text-white text-5xl font-bold mb-5 reveal active">

Our Products

</h1>


<p class="text-white/80 text-lg reveal active delay-100">

Discover products from our growing ecosystem.

</p>


</div>


</section>





<!-- Products -->

<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">



<?php if(count($products)>0): ?>



<?php foreach($products as $index=>$product): ?>


<div 
class="reveal active delay-<?= $index*100 ?>
bg-white rounded-3xl overflow-hidden 
shadow-premium border border-outline-variant/10
group hover:-translate-y-3 transition-all duration-500">


<!-- image -->


<div class="h-64 overflow-hidden">


<?php if(!empty($product['image_path'])): ?>


<img
src="../uploads/products/<?= htmlspecialchars($product['image_path']) ?>"
class="w-full h-full object-cover 
group-hover:scale-110 transition duration-700">


<?php else: ?>


<div class="h-full flex items-center justify-center bg-surface-container">

<span class="material-symbols-outlined text-5xl">
image
</span>

</div>


<?php endif; ?>


</div>





<div class="p-7">


<span class="text-primary text-xs font-bold uppercase tracking-widest">

<?= htmlspecialchars($product['brand']) ?>

</span>



<h2 class="text-2xl font-bold text-primary mt-3 mb-3">


<?= htmlspecialchars($product['name']) ?>


</h2>



<p class="text-on-surface-variant text-sm leading-relaxed mb-5">


<?= substr(
htmlspecialchars($product['description']),
0,
140
) ?>...


</p>





<div class="flex justify-between items-center">


<span class="font-bold text-primary">


₦<?= number_format($product['price'],2) ?>


</span>



<a href="product-details.php?id=<?= $product['id'] ?>"
class="text-primary font-bold flex items-center gap-1">


View

<span class="material-symbols-outlined text-sm">
arrow_forward
</span>


</a>


</div>


</div>


</div>



<?php endforeach; ?>



<?php else: ?>


<div class="col-span-full text-center py-20">


<h2 class="text-2xl font-bold text-primary">

No products available

</h2>


<p class="text-on-surface-variant">

Products will appear here once added.

</p>


</div>



<?php endif; ?>



</div>



</section>





<?php include '../includes/footer.php'; ?>