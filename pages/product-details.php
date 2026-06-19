<?php
session_start();
$page_title = 'Product Details | RAW B2C LTD';

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




?>


<!-- Flash Message -->

<?php if(isset($_SESSION['success'])): ?>

<div 
id="flashMessage"
class="fixed top-24 right-6 z-50 bg-green-600 text-white px-6 py-4 rounded-2xl shadow-xl flex items-center gap-3 transition-all duration-500 animate-bounce">


<span class="material-symbols-outlined">
check_circle
</span>


<p>
<?= htmlspecialchars($_SESSION['success']); ?>
</p>


</div>


<script>

setTimeout(()=>{

    const msg = document.getElementById("flashMessage");


    if(msg){

        msg.style.opacity = "0";
        msg.style.transform = "translateY(-20px)";


        setTimeout(()=>{

            msg.remove();

        },500);

    }


},4000);


</script>


<?php unset($_SESSION['success']); ?>


<?php endif; ?>



<?php


require '../config/database.php';



$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;



$stmt = $pdo->prepare("
SELECT *
FROM products
WHERE id = ?
AND status='Active'
");


$stmt->execute([$id]);


$product = $stmt->fetch();



if(!$product){

    echo "

    <div class='py-40 text-center'>

    <h1 class='text-3xl font-bold text-primary'>
    Product Not Found
    </h1>


    <a href='product.php'
    class='inline-block mt-6 bg-primary text-white px-6 py-3 rounded-xl'>
    Back Products
    </a>


    </div>

    ";


    include '../includes/footer.php';

    exit;

}




/*
|--------------------------------------------------------------------------
| Approved Reviews
|--------------------------------------------------------------------------
*/


$reviewStmt = $pdo->prepare("

SELECT *

FROM reviews

WHERE product_id = ?

AND status='Approved'

ORDER BY created_at DESC

");


$reviewStmt->execute([

    $product['id']

]);


$reviews = $reviewStmt->fetchAll();



?>




<!-- Hero -->

<section class="relative pt-32 pb-20 overflow-hidden">


<div class="absolute inset-0 bg-primary/10"></div>


<div class="relative max-w-container-max mx-auto px-6">


<a href="product.php"
class="inline-flex items-center gap-2 text-primary font-bold mb-8 hover:gap-3 transition-all">


<span class="material-symbols-outlined">
arrow_back
</span>

Back to Products

</a>



</div>

</section>







<!-- Product Detail -->


<section class="pb-section-gap px-margin-desktop max-w-container-max mx-auto">


<div class="grid lg:grid-cols-2 gap-14 items-center">



<!-- Image -->


<div class="reveal active">


<div class="rounded-[32px] overflow-hidden shadow-premium">


<?php if($product['image_path']): ?>


<img

src="../uploads/products/<?= htmlspecialchars($product['image_path']) ?>"

class="
w-full 
h-[550px]
object-cover
hover:scale-105
transition duration-700
">


<?php else: ?>


<div class="h-[550px] bg-surface-container flex items-center justify-center">


<span class="material-symbols-outlined text-7xl">
image
</span>


</div>


<?php endif; ?>


</div>


</div>








<!-- Content -->


<div class="reveal active delay-200">



<span class="text-primary font-bold uppercase tracking-widest text-sm">


<?= htmlspecialchars($product['brand']) ?>


</span>




<h1 class="text-5xl font-bold text-primary mt-4 mb-6">


<?= htmlspecialchars($product['name']) ?>


</h1>





<p class="text-on-surface-variant leading-relaxed text-lg mb-8">


<?= nl2br(htmlspecialchars($product['description'])) ?>


</p>







<div class="bg-primary-fixed rounded-2xl p-6 mb-8">


<p class="text-sm text-on-surface-variant">

Price

</p>


<h2 class="text-3xl font-bold text-primary">


₦<?= number_format($product['price'],2) ?>


</h2>


</div>







<div class="flex flex-wrap gap-4">


<a href="contact.php"

class="
bg-primary
text-white
px-8
py-4
rounded-xl
font-bold
hover:scale-105
transition
">


Contact Us

</a>





<button onclick="shareProduct()"

class="
border
border-primary
text-primary
px-8
py-4
rounded-xl
font-bold
hover:bg-primary
hover:text-white
transition
">


Share

</button>


</div>



</div>



</div>



</section>

<section class="mt-20 reveal active">


<div class="bg-white rounded-[32px] shadow-premium p-8">


<h2 class="text-3xl font-bold text-primary mb-6">
Leave a Review
</h2>

<form action="submit-review.php" method="POST">


<input 
type="hidden"
name="product_id"
value="<?= $product['id'] ?>">


<input 
name="customer_name"
placeholder="Your Name"
required
class="w-full border rounded-xl p-3">


<input 
name="email"
required
type="email"
placeholder="Email"
class="w-full border my-2 rounded-xl p-3">


<select name="rating" class="w-full border rounded-xl p-3">

<option value="5">⭐⭐⭐⭐⭐ Excellent</option>

<option value="4">⭐⭐⭐⭐ Very Good</option>

<option value="3">⭐⭐⭐ Average</option>

<option value="2">⭐⭐ Poor</option>

<option value="1">⭐ Bad</option>

</select>


<textarea
name="review_text"
class="w-full border mt-2 rounded-xl p-3"
required
placeholder="Your review">
</textarea>


<button class="bg-primary text-white px-6 py-3 rounded-xl">
Submit Review
</button>


</form>


</div>


</section>



<script>


function shareProduct(){


if(navigator.share){


navigator.share({

title:"<?= htmlspecialchars($product['name']) ?>",

text:"Check out this product",

url:window.location.href


});


}else{


navigator.clipboard.writeText(window.location.href);


alert("Product link copied");


}


}



</script>





<?php include '../includes/footer.php'; ?>