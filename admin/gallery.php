<?php

include 'includes/protect.php';
require '../config/database.php';


$page_title = 'Manage Gallery | Admin | RAW B2C LTD';

$limit = 6;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if($page < 1){
    $page = 1;
}


$offset = ($page - 1) * $limit;


$category = $_GET['category'] ?? 'All';





// ALL MEDIA

if($category == "All"){


    $count = $pdo->query("
        SELECT COUNT(*) FROM gallery
    ");


    $totalItems = $count->fetchColumn();



    $stmt = $pdo->prepare("
        SELECT *
        FROM gallery
        ORDER BY uploaded_at DESC
        LIMIT $limit OFFSET $offset
    ");




}





// FILTERED CATEGORY

else{


    $count = $pdo->prepare("
        SELECT COUNT(*)
        FROM gallery
        WHERE category = ?
    ");


    $count->execute([$category]);


    $totalItems = $count->fetchColumn();





    $stmt = $pdo->prepare("
        SELECT *
        FROM gallery
        WHERE category = ?
        ORDER BY uploaded_at DESC
        LIMIT $limit OFFSET $offset
    ");



    $stmt->execute([$category]);

    $gallery = $stmt->fetchAll();

}



$totalPages = ceil($totalItems / $limit);





// ALL QUERY EXECUTE

if($category == "All"){


    $stmt->execute();


    $gallery = $stmt->fetchAll();


}



include 'includes/header.php';
include 'includes/sidebar.php';

?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Gallery</h1>
                    <p class="text-on-surface-variant">Upload and manage media for Projects, Workers, Products, and Community.</p>
                </div>
               <a href="add-gallery.php"

                    class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">


                    <span class="material-symbols-outlined">
                    add_photo_alternate
                    </span>

                    Upload Media

                    </a>
            </div>

           <div class="flex gap-4 mb-8 overflow-x-auto pb-2">


<a href="gallery.php?category=All"

class="px-4 py-2 rounded-lg font-bold text-sm whitespace-nowrap
<?= $category=='All'
?'bg-primary text-white'
:'bg-white text-on-surface-variant border'
?>">

All Media

</a>




<a href="gallery.php?category=Projects"

class="px-4 py-2 rounded-lg font-bold text-sm whitespace-nowrap
<?= $category=='Projects'
?'bg-primary text-white'
:'bg-white text-on-surface-variant border'
?>">

Projects

</a>





<a href="gallery.php?category=Workers"

class="px-4 py-2 rounded-lg font-bold text-sm whitespace-nowrap
<?= $category=='Workers'
?'bg-primary text-white'
:'bg-white text-on-surface-variant border'
?>">

Workers

</a>





<a href="gallery.php?category=Products"

class="px-4 py-2 rounded-lg font-bold text-sm whitespace-nowrap
<?= $category=='Products'
?'bg-primary text-white'
:'bg-white text-on-surface-variant border'
?>">

Products

</a>





<a href="gallery.php?category=Community"

class="px-4 py-2 rounded-lg font-bold text-sm whitespace-nowrap
<?= $category=='Community'
?'bg-primary text-white'
:'bg-white text-on-surface-variant border'
?>">

Community

</a>



</div>

            <!-- Gallery Grid -->
           <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">


<?php if(count($gallery)>0): ?>


<?php foreach($gallery as $item): ?>


<div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-outline-variant/10 group relative">



<div class="h-40 overflow-hidden">


<img

src="../uploads/gallery/<?= $item['image_path'] ?>"

class="w-full h-full object-cover">


</div>





<div class="p-3">


<p class="text-sm font-bold text-primary truncate">

<?= htmlspecialchars($item['title']) ?>

</p>



<p class="text-xs text-on-surface-variant">


<?= htmlspecialchars($item['category']) ?>

•
<?= $item['file_size'] ?>


</p>



</div>






<div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition">


<a href="edit-gallery.php?id=<?= $item['id'] ?>"

class="bg-white text-primary p-1 rounded shadow">


<span class="material-symbols-outlined text-sm">
edit
</span>


</a>






<a href="delete-gallery.php?id=<?= $item['id'] ?>"

onclick="return confirm('Delete this image?')"

class="bg-error text-white p-1 rounded shadow">


<span class="material-symbols-outlined text-sm">
delete
</span>


</a>



</div>



</div>



<?php endforeach; ?>



<?php else: ?>


<p class="col-span-4 text-center">

No media uploaded.

</p>


<?php endif; ?>



</div>



        </div>

        <?php if($totalPages > 1): ?>


<div class="flex justify-center gap-2 mt-10">


<?php for($i=1;$i<=$totalPages;$i++): ?>


<a

href="gallery.php?page=<?=$i?>"

class="px-4 py-2 rounded-xl font-bold

<?= 
$page==$i
?
'bg-primary text-on-primary'
:
'bg-white text-primary border'
?>

">


<?=$i?>


</a>


<?php endfor; ?>


</div>


<?php endif; ?>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
