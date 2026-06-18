<?php

include 'includes/protect.php';
require '../config/database.php';


if($_SERVER['REQUEST_METHOD']=="POST"){


    $category = $_POST['category'];
    $title = $_POST['title'];


    $imageName = null;
    $fileSize = null;



    if(!empty($_FILES['image']['name'])){


        $folder = "../uploads/gallery/";



        if(!is_dir($folder)){
            mkdir($folder,0777,true);
        }



        $ext = pathinfo(
            $_FILES['image']['name'],
            PATHINFO_EXTENSION
        );



        $imageName = time().'_'.uniqid().'.'.$ext;



        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $folder.$imageName
        );



        // size

        $fileSize = round(
            $_FILES['image']['size'] / 1024,
            2
        )." KB";

    }




    $stmt = $pdo->prepare("
        INSERT INTO gallery
        (
            category,
            title,
            image_path,
            file_size
        )
        VALUES(?,?,?,?)
    ");



    $stmt->execute([
        $category,
        $title,
        $imageName,
        $fileSize
    ]);



    header("Location: gallery.php");
    exit;

}





$page_title="Upload Media | Admin";

include 'includes/header.php';
include 'includes/sidebar.php';

?>



<div class="flex-1 flex flex-col h-screen overflow-y-auto bg-surface">


<?php include 'includes/navbar.php'; ?>

<main class="p-6 md:p-10">


<div class="max-w-4xl mx-auto">



<h1 class="text-3xl font-bold text-primary mb-8">
Upload Media
</h1>




<div class="bg-white rounded-[24px] shadow p-8">



<form 
method="POST"
enctype="multipart/form-data"
class="space-y-6">





<div>

<label class="block text-sm font-bold text-primary mb-2">
Title
</label>

<input
name="title"
required
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
placeholder="Image title">

</div>







<div>

<label class="block text-sm font-bold text-primary mb-2">
Category
</label>

<select
name="category"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option>
Projects
</option>

<option>
Workers
</option>

<option>
Products
</option>

<option>
Community
</option>

</select>

</div>







<div>


<label class="font-bold">
Image
<label class="block text-sm font-bold text-primary mb-2">
Image
</label>

<input
type="file"
name="image"
accept="image/*"
required
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">






<div class="flex justify-end gap-3 pt-6">

<a href="gallery.php"
class="px-6 py-3 rounded-xl border border-outline-variant/30 text-primary font-bold hover:bg-surface-container-low transition-all">

Cancel

</a>

<button
type="submit"
class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">

<span class="material-symbols-outlined text-sm">
upload
</span>

Upload

</button>



</form>


</div>


</div>


</main>


</div>



<?php include 'includes/footer.php'; ?>