<?php

include 'includes/protect.php';
require '../config/database.php';


if (!isset($_GET['id'])) {
    header("Location: products.php");
    exit;
}


$id = $_GET['id'];



// Fetch product

$stmt = $pdo->prepare("
SELECT *
FROM products
WHERE id = ?
");

$stmt->execute([$id]);

$product = $stmt->fetch();



if (!$product) {
    header("Location: products.php");
    exit;
}





if ($_SERVER['REQUEST_METHOD']=="POST"){


$name = trim($_POST['name']);
$brand = trim($_POST['brand']);
$description = trim($_POST['description']);
$price = $_POST['price'];
$status = $_POST['status'];



$imageName = $product['image_path'];



// New image uploaded

if (!empty($_FILES['image']['name'])) {



    $folder = "../uploads/products/";



    $ext = pathinfo(
        $_FILES['image']['name'],
        PATHINFO_EXTENSION
    );


    $imageName = time().'_'.uniqid().'.'.$ext;



    move_uploaded_file(
        $_FILES['image']['tmp_name'],
        $folder.$imageName
    );



    // remove old image

    if (!empty($product['image_path'])) {


        $old = $folder.$product['image_path'];


        if(file_exists($old)){
            unlink($old);
        }

    }


}




$update = $pdo->prepare("
UPDATE products SET

name=?,
brand=?,
description=?,
price=?,
image_path=?,
status=?

WHERE id=?

");



$update->execute([

$name,
$brand,
$description,
$price,
$imageName,
$status,
$id

]);



header("Location: products.php?success=Updated");
exit;


}




include 'includes/header.php';
include 'includes/sidebar.php';

?>



<div class="flex-1 bg-surface h-screen overflow-y-auto">


<?php include 'includes/navbar.php'; ?>


<main class="p-8">



<div class="max-w-4xl mx-auto">


<h1 class="text-3xl font-bold text-primary mb-8">
Edit Product
</h1>



<div class="bg-white rounded-[24px] p-8 shadow">


<form 
method="POST"
enctype="multipart/form-data"
class="space-y-5">





<div>
<label class="block text-sm font-bold text-primary mb-2">
Product Name
</label>
<input
name="name"
value="<?= htmlspecialchars($product['name']) ?>"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
placeholder="Product name">
</div>





<div>
<label class="block text-sm font-bold text-primary mb-2">
Brand
</label>
<select
name="brand"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option <?= $product['brand']=="Mi Boo"?'selected':'' ?>>
Mi Boo
</option>

<option <?= $product['brand']=="Mi Look"?'selected':'' ?>>
Mi Look
</option>

<option <?= $product['brand']=="RAW B2C"?'selected':'' ?>>
RAW B2C
</option>

</select>
</div>





<div>
<label class="block text-sm font-bold text-primary mb-2">
Description
</label>
<textarea
name="description"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none"
rows="5"
placeholder="Product description..."><?= htmlspecialchars($product['description']) ?></textarea>
</div>

<div>
<label class="block text-sm font-bold text-primary mb-2">
Price
</label>
<input
type="number"
step="0.01"
name="price"
value="<?= $product['price'] ?>"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
placeholder="0.00">
</div>

<div>
<label class="block text-sm font-bold text-primary mb-2">
Status
</label>
<select
name="status"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option value="Draft"
<?= $product['status']=="Draft"?'selected':'' ?>>
Draft
</option>

<option value="Active"
<?= $product['status']=="Active"?'selected':'' ?>>
Active
</option>

</select>
</div>

<div>
<label class="block text-sm font-bold text-primary mb-2">
Current Image
</label>
<img 
src="../uploads/products/<?= $product['image_path'] ?>"
class="w-24 h-24 object-cover rounded-lg mb-4">

<label class="block text-sm font-bold text-primary mb-2">
Product Image
</label>
<input
type="file"
name="image"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">
</div>

<div class="flex justify-end gap-3 pt-6">

<a href="products.php"
class="px-6 py-3 rounded-xl border border-outline-variant/30 text-primary font-bold hover:bg-surface-container-low transition-all">

Cancel

</a>

<button
type="submit"
class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">

<span class="material-symbols-outlined text-sm">
edit
</span>

Update Product

</button>

</div>



</form>


</div>



</div>


</main>


</div>


<?php include 'includes/footer.php'; ?>