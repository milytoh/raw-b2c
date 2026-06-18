<?php

include 'includes/protect.php';
require '../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $title = trim($_POST['title']);
    $category = trim($_POST['category']);
    $content = trim($_POST['content']);
    $status = $_POST['status'];


    $imageName = null;



    if (!empty($_FILES['image']['name'])) {


        $folder = "../uploads/blog/";


        if (!is_dir($folder)) {
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

    }




    $stmt = $pdo->prepare("
        INSERT INTO blog_posts
        (
            title,
            category,
            content,
            image_path,
            status
        )
        VALUES
        (?,?,?,?,?)
    ");


    $stmt->execute([
        $title,
        $category,
        $content,
        $imageName,
        $status
    ]);



    header("Location: blog.php?success=Post Created");
    exit;

}



$page_title = "Add Blog Post | Admin | RAW B2C LTD";


include 'includes/header.php';
include 'includes/sidebar.php';

?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-5xl mx-auto">



<div class="mb-10">

<h1 class="text-3xl font-bold text-primary">
Create Blog Post
</h1>

<p class="text-on-surface-variant">
Publish company news and updates
</p>

</div>




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
required
placeholder="Blog title"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

</div>







<!-- Category -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Category
</label>

<select
name="category"
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">

<option value="">
Select category
</option>

<option>
Business
</option>

<option>
Technology
</option>

<option>
Sustainability
</option>

<option>
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
required
placeholder="Write your article..."
class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none"></textarea>

</div>

<!-- Image -->

<div>

<label class="block text-sm font-bold text-primary mb-2">
Featured Image
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

<option value="Draft">
Draft
</option>

<option value="Published">
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

Save Post

</button>

</div>



</form>



</div>


</div>


</main>


</div>


<?php include 'includes/footer.php'; ?>