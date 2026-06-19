<?php

$page_title = 'Client Feedback & Reviews | RAW B2C LTD';

$base_path = '../';

$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = '#';
$contact_link = 'contact.php';


$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';


include '../includes/header.php';
include '../includes/navbar.php';


require '../config/database.php';




// FLASH MESSAGE

if(isset($_SESSION['review_success'])):

?>

<div class="fixed top-24 right-6 z-50 bg-green-600 text-white px-6 py-4 rounded-xl shadow-xl animate-bounce">

<?= $_SESSION['review_success']; ?>

</div>

<?php

unset($_SESSION['review_success']);

endif;





// PRODUCTS / SERVICES

$productStmt = $pdo->query("
SELECT id,name
FROM products
WHERE status='Active'
ORDER BY name ASC
");

$products = $productStmt->fetchAll();





// APPROVED REVIEWS

$reviewStmt = $pdo->query("
SELECT 
reviews.*,
products.name AS product_name

FROM reviews

LEFT JOIN products
ON reviews.product_id = products.id

WHERE reviews.status='Approved'

ORDER BY reviews.created_at DESC

LIMIT 12

");


$reviews = $reviewStmt->fetchAll();


?>



<!-- Hero -->

<section class="relative pt-40 pb-32 overflow-hidden">

<div class="absolute inset-0">

<div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>


<img 
class="w-full h-full object-cover scale-105"
src="https://images.unsplash.com/photo-1522071820081-009f0129c71c">

</div>


<div class="relative z-10 text-center max-w-container-max mx-auto px-6">

<h1 class="text-5xl text-white font-bold reveal active">

Client Feedback

</h1>


<p class="text-white/80 mt-4 reveal active">

Read what our customers say about RAW B2C LTD

</p>


</div>


</section>





<!-- REVIEWS -->


<section class="py-20 px-6 max-w-container-max mx-auto">


<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">


<?php if(count($reviews)): ?>


<?php foreach($reviews as $index=>$review): ?>


<div class="reveal active <?= $index%2 ? 'delay-100':'' ?>

bg-white p-10 rounded-[32px] shadow-premium border">


<div class="flex gap-1 text-secondary mb-6">


<?php for($i=1;$i<=5;$i++): ?>


<span class="material-symbols-outlined"

style="font-variation-settings:'FILL' <?= $i <= $review['rating'] ? 1:0 ?>">

star

</span>


<?php endfor; ?>


</div>



<p class="italic text-lg text-on-surface-variant mb-8">


"<?= htmlspecialchars($review['review_text']) ?>"


</p>




<div class="flex items-center gap-4">


<div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center font-bold text-primary">

<?= strtoupper(substr($review['customer_name'],0,2)) ?>


</div>



<div>

<h4 class="font-bold text-primary">

<?= htmlspecialchars($review['customer_name']) ?>

</h4>


<p class="text-xs text-gray-500">

<?= htmlspecialchars($review['product_name'] ?? 'RAW B2C') ?>

</p>


</div>


</div>


</div>


<?php endforeach; ?>


<?php else: ?>


<div class="col-span-full text-center">

<h2 class="text-2xl font-bold text-primary">

No reviews yet

</h2>


<p class="text-gray-500">

Be the first to review us

</p>


</div>


<?php endif; ?>


</div>






<!-- REVIEW FORM -->


<div class="bg-surface-container-low p-10 rounded-[32px] shadow-premium max-w-3xl mx-auto">


<h2 class="text-3xl font-bold text-primary text-center mb-6">

Leave a Review

</h2>



<form method="POST" action="submit-review.php" class="space-y-5">



<input

required

name="customer_name"

placeholder="Your name"

class="w-full rounded-xl p-4 border">





<input

required

type="email"

name="email"

placeholder="Email address"

class="w-full rounded-xl p-4 border">





<select

required

name="product_id"

class="w-full rounded-xl p-4 border">


<option value="">Select Service</option>


<?php foreach($products as $p): ?>

<option value="<?= $p['id'] ?>">

<?= htmlspecialchars($p['name']) ?>

</option>


<?php endforeach; ?>


</select>






<select

name="rating"

class="w-full rounded-xl p-4 border">


<option value="5">⭐⭐⭐⭐⭐ Excellent</option>

<option value="4">⭐⭐⭐⭐ Very Good</option>

<option value="3">⭐⭐⭐ Average</option>

<option value="2">⭐⭐ Poor</option>

<option value="1">⭐ Bad</option>


</select>





<textarea

required

name="review_text"

rows="5"

placeholder="Write your experience..."

class="w-full rounded-xl p-4 border"></textarea>





<button

class="bg-primary text-white px-10 py-4 rounded-xl font-bold hover:scale-105 transition w-full">


Submit Review


</button>



<p class="text-xs text-center text-gray-500">

Reviews are moderated before publishing

</p>


</form>



</div>


</section>




<?php include '../includes/footer.php'; ?>