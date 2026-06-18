<?php
include 'includes/protect.php';
require '../config/database.php';

$page_title = 'Add Product | Admin | RAW B2C LTD';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $name = trim($_POST['name']);
    $brand = trim($_POST['brand']);
    $description = trim($_POST['description']);
    $price = $_POST['price'];
    $status = $_POST['status'];


    $imageName = null;


    // Image Upload
    if (!empty($_FILES['image']['name'])) {


        $uploadDir = "../uploads/products/";


        if (!is_dir($uploadDir)) {
            mkdir($uploadDir,0777,true);
        }


        $ext = pathinfo(
            $_FILES['image']['name'],
            PATHINFO_EXTENSION
        );


        $imageName = time().'_'.uniqid().'.'.$ext;


        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $uploadDir.$imageName
        );

    }




    $stmt = $pdo->prepare("
        INSERT INTO products
        (
            name,
            brand,
            description,
            price,
            image_path,
            status
        )
        VALUES
        (
            :name,
            :brand,
            :description,
            :price,
            :image_path,
            :status
        )
    ");



    $stmt->execute([

        ':name'=>$name,
        ':brand'=>$brand,
        ':description'=>$description,
        ':price'=>$price,
        ':image_path'=>$imageName,
        ':status'=>$status

    ]);



    header("Location: products.php?success=Product Added");
    exit;

}




include 'includes/header.php';
include 'includes/sidebar.php';

?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-4xl mx-auto">


<div class="mb-10">

<h1 class="text-3xl font-bold text-primary">
Add Product
</h1>

<p class="text-on-surface-variant">
Create a new product for RAW B2C LTD
</p>

</div>




<div class="bg-white rounded-[24px] shadow-premium p-8">


<form 
method="POST"
enctype="multipart/form-data"
class="space-y-6">





<!-- Name -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Product Name
</label>

<input
type="text"
name="name"
required
placeholder="Product name"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

</div>







<!-- Brand -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Brand
</label>

<select
name="brand"
required
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option value="">
Select brand
</option>

<option>
Mi Boo
</option>

<option>
Mi Look
</option>

<option>
RAW B2C
</option>

</select>

</div>







<!-- Description -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Description
</label>

<textarea
name="description"
rows="5"
placeholder="Product description..."
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none"></textarea>

</div>








<!-- Price -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Price
</label>

<input
type="number"
step="0.01"
name="price"
required
placeholder="0.00"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

</div>








<!-- Status -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Status
</label>

<select
name="status"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option value="Draft">
Draft
</option>

<option value="Active">
Active
</option>

</select>

</div>





<!-- Image -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Product Image
</label>

<input
type="file"
name="image"
accept="image/*"
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
save
</span>

Save Product

</button>

</div>



</div>




</form>


</div>


</div>


</main>


</div>



<?php include 'includes/footer.php'; ?>