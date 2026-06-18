<?php

include 'includes/protect.php';
require '../config/database.php';


if(!isset($_GET['id'])){

    header("Location: gallery.php");
    exit;

}


$id = (int)$_GET['id'];



// FETCH GALLERY ITEM

$stmt = $pdo->prepare("
    SELECT *
    FROM gallery
    WHERE id = ?
");

$stmt->execute([$id]);


$galleryItem = $stmt->fetch(PDO::FETCH_ASSOC);



if(!$galleryItem){

    header("Location: gallery.php");
    exit;

}






// UPDATE

if($_SERVER['REQUEST_METHOD'] === "POST"){


    $title = trim($_POST['title']);
    $category = trim($_POST['category']);



    $imagePath = $galleryItem['image_path'];
    $fileSize  = $galleryItem['file_size'];






    // New image uploaded

    if(!empty($_FILES['image']['name'])){


        $folder = "../uploads/gallery/";



        if(!is_dir($folder)){

            mkdir($folder,0777,true);

        }




        $ext = pathinfo(
            $_FILES['image']['name'],
            PATHINFO_EXTENSION
        );



        $newImage = time().'_'.uniqid().'.'.$ext;



        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $folder.$newImage
        );





        // delete old image

        if(!empty($galleryItem['image_path'])){


            $oldImage = $folder.$galleryItem['image_path'];


            if(file_exists($oldImage)){

                unlink($oldImage);

            }

        }




        $imagePath = $newImage;


        $fileSize = round(
            $_FILES['image']['size']/1024,
            2
        )." KB";


    }







    $update = $pdo->prepare("
        UPDATE gallery SET

        title = ?,
        category = ?,
        image_path = ?,
        file_size = ?

        WHERE id = ?

    ");



    $update->execute([

        $title,
        $category,
        $imagePath,
        $fileSize,
        $id

    ]);




    header("Location: gallery.php?success=updated");

    exit;

}






$page_title = "Edit Gallery | Admin | RAW B2C LTD";


include 'includes/header.php';
include 'includes/sidebar.php';

?>



<div class="flex-1 flex flex-col h-screen overflow-y-auto bg-surface">


<?php include 'includes/navbar.php'; ?>

<main class="flex-1 p-6 md:p-10">


<div class="max-w-4xl mx-auto">






<div class="mb-8">


<h1 class="text-3xl font-bold text-primary">

Edit Gallery

</h1>


<p class="text-on-surface-variant">

Update gallery media details

</p>


</div>








<div class="bg-white rounded-[24px] shadow-premium p-8">



<form

method="POST"

enctype="multipart/form-data"

class="space-y-6">







<!-- TITLE -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Title
</label>

<input
type="text"
name="title"
value="<?= htmlspecialchars($galleryItem['title'] ?? '') ?>"
required
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
placeholder="Media title">

</div>









<!-- CATEGORY -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Category
</label>

<select
name="category"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option value="Projects"
<?= ($galleryItem['category'] ?? '')=="Projects" ? "selected" : "" ?>>
Projects
</option>

<option value="Workers"
<?= ($galleryItem['category'] ?? '')=="Workers" ? "selected" : "" ?>>
Workers
</option>

<option value="Products"
<?= ($galleryItem['category'] ?? '')=="Products" ? "selected" : "" ?>>
Products
</option>

<option value="Community"
<?= ($galleryItem['category'] ?? '')=="Community" ? "selected" : "" ?>>
Community
</option>

</select>

</div>









<!-- CURRENT IMAGE -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Current Image
</label>

<?php if(!empty($galleryItem['image_path'])): ?>

<img
src="../uploads/gallery/<?= htmlspecialchars($galleryItem['image_path']) ?>"
class="w-48 h-36 object-cover rounded-lg border mb-4">

<?php endif; ?>

</div>









<!-- CHANGE IMAGE -->


<div>


<label class="block text-sm font-bold text-primary mb-2">
Replace Image
</label>

<input
type="file"
name="image"
accept="image/*"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">



</div>









<div class="flex justify-end gap-3 pt-6">



<a

href="gallery.php"

class="px-6 py-3 rounded-xl border border-outline-variant/30 text-primary font-bold hover:bg-surface-container-low transition-all">


Cancel


</a>






<button
type="submit"
class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">

<span class="material-symbols-outlined text-sm">
save
</span>

Update Media

</button>





</div>






</form>





</div>






</div>


</main>



</div>




<?php include 'includes/footer.php'; ?>