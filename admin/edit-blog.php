<?php

include 'includes/protect.php';
require '../config/database.php';


if (!isset($_GET['id'])) {
    header("Location: blog.php");
    exit;
}


$id = $_GET['id'];



// Get post

$stmt = $pdo->prepare("
    SELECT *
    FROM blog_posts
    WHERE id = ?
");

$stmt->execute([$id]);

$post = $stmt->fetch();



if (!$post) {
    header("Location: blog.php");
    exit;
}





if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $title = trim($_POST['title']);
    $category = trim($_POST['category']);
    $content = trim($_POST['content']);
    $status = $_POST['status'];



    $imageName = $post['image_path'];





    // New image uploaded

    if (!empty($_FILES['image']['name'])) {


        $folder = "../uploads/blog/";



        if (!is_dir($folder)) {
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

        if (!empty($post['image_path'])) {


            $oldImage = $folder.$post['image_path'];


            if(file_exists($oldImage)){
                unlink($oldImage);
            }

        }



        $imageName = $newImage;

    }







    $update = $pdo->prepare("
        UPDATE blog_posts SET

        title = ?,
        category = ?,
        content = ?,
        image_path = ?,
        status = ?

        WHERE id = ?

    ");



    $update->execute([

        $title,
        $category,
        $content,
        $imageName,
        $status,
        $id

    ]);



    header("Location: blog.php?success=Post Updated");
    exit;

}





$page_title = "Edit Blog | Admin | RAW B2C LTD";


include 'includes/header.php';
include 'includes/sidebar.php';


?>



<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>



<main class="flex-1 overflow-y-auto p-6 md:p-10">



<div class="max-w-5xl mx-auto">



<h1 class="text-3xl font-bold text-primary mb-8">
Edit Blog Post
</h1>





<div class="bg-white rounded-[24px] shadow-premium p-8">





<form
method="POST"
enctype="multipart/form-data"
class="space-y-6">





<!-- Title -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Title
</label>

<input
type="text"
name="title"
value="<?= htmlspecialchars($post['title']) ?>"
required
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
placeholder="Blog title">

</div>








<!-- Category -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Category
</label>

<select
name="category"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option <?= $post['category']=="Business"?'selected':'' ?>>
Business
</option>

<option <?= $post['category']=="Technology"?'selected':'' ?>>
Technology
</option>

<option <?= $post['category']=="Sustainability"?'selected':'' ?>>
Sustainability
</option>

<option <?= $post['category']=="News"?'selected':'' ?>>
News
</option>

</select>

</div>










<!-- Content -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Content
</label>

<textarea
name="content"
rows="10"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none"
required
placeholder="Write your article..."><?= htmlspecialchars($post['content']) ?></textarea>

</div>









<!-- Current Image -->

<?php if($post['image_path']): ?>

<div>

<label class="block text-sm font-bold text-primary mb-2">
Current Image
</label>

<img
src="../uploads/blog/<?= $post['image_path'] ?>"
class="w-40 h-32 rounded-lg object-cover mb-4">

</div>

<?php endif; ?>









<!-- New Image -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Change Image
</label>

<input
type="file"
name="image"
accept="image/*"
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

<option value="Draft"
<?= $post['status']=="Draft"?'selected':'' ?>>
Draft
</option>

<option value="Published"
<?= $post['status']=="Published"?'selected':'' ?>>
Published
</option>

</select>

</div>









<div class="flex justify-end gap-3 pt-6">

<a href="blog.php"
class="px-6 py-3 rounded-xl border border-outline-variant/30 text-primary font-bold hover:bg-surface-container-low transition-all">

Cancel

</a>

<button
type="submit"
class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">

<span class="material-symbols-outlined text-sm">
save
</span>

Update Post

</button>

</div>







</form>



</div>



</div>



</main>


</div>




<?php include 'includes/footer.php'; ?>