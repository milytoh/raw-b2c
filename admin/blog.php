<?php
include 'includes/protect.php';
require '../config/database.php';

$page_title = 'Manage Blog | Admin | RAW B2C LTD';


// PAGINATION SETTINGS

$limit = 6;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;


if($page < 1){
    $page = 1;
}


$offset = ($page - 1) * $limit;



// COUNT POSTS

$count = $pdo->query("
    SELECT COUNT(*) 
    FROM blog_posts
");


$totalPosts = $count->fetchColumn();


$totalPages = ceil($totalPosts / $limit);




// FETCH POSTS

$stmt = $pdo->prepare("
    SELECT *
    FROM blog_posts
    ORDER BY created_at DESC
    LIMIT :limit OFFSET :offset
");


$stmt->bindValue(
    ':limit',
    $limit,
    PDO::PARAM_INT
);


$stmt->bindValue(
    ':offset',
    $offset,
    PDO::PARAM_INT
);


$stmt->execute();


$posts = $stmt->fetchAll();



include 'includes/header.php';
include 'includes/sidebar.php';

?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">

<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-7xl mx-auto">



<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">


<div>

<h1 class="font-headline-md text-3xl font-bold text-primary mb-2">
Manage Blog
</h1>


<p class="text-on-surface-variant">
Create and edit news, company updates, and success stories.
</p>


</div>




<a href="add-blog.php"

class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">


<span class="material-symbols-outlined">
edit_document
</span>


New Post


</a>


</div>






<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">





<?php if(count($posts)>0): ?>



<?php foreach($posts as $post): ?>



<div class="bg-white rounded-2xl shadow-premium border border-outline-variant/10 overflow-hidden flex flex-col">



<div class="h-48 overflow-hidden relative">



<?php if($post['image_path']): ?>


<img

src="../uploads/blog/<?= $post['image_path'] ?>"

class="w-full h-full object-cover">


<?php else: ?>


<div class="w-full h-full flex items-center justify-center bg-surface-container">


<span class="material-symbols-outlined">
image
</span>


</div>


<?php endif; ?>




<span class="absolute top-3 left-3

<?= 
$post['status']=="Published"
?
'bg-white text-primary'
:
'bg-surface-container-high text-on-surface'
?>

text-xs font-bold px-2 py-1 rounded">


<?= $post['status'] ?>


</span>



</div>







<div class="p-5 flex-1 flex flex-col">



<span class="text-xs font-bold text-primary uppercase">


<?= htmlspecialchars($post['category']) ?>


</span>





<h3 class="text-xl font-bold text-primary my-2">


<?= htmlspecialchars($post['title']) ?>


</h3>





<p class="text-sm text-on-surface-variant line-clamp-2 flex-1">


<?= substr(strip_tags($post['content']),0,120) ?>


</p>







<div class="flex justify-between border-t pt-4 mt-4">



<span class="text-xs">


<?= date("M d, Y",strtotime($post['created_at'])) ?>


</span>





<div class="flex gap-2">



<a href="edit-blog.php?id=<?= $post['id'] ?>"
class="text-primary">


<span class="material-symbols-outlined text-sm">
edit
</span>


</a>






<a href="delete-blog.php?id=<?= $post['id'] ?>"

onclick="return confirm('Delete this post?')"

class="text-error">


<span class="material-symbols-outlined text-sm">
delete
</span>


</a>



</div>



</div>



</div>


</div>




<?php endforeach; ?>



<?php else: ?>



<div class="col-span-3 text-center py-10">

No blog posts found.

</div>



<?php endif; ?>





</div>






<!-- PAGINATION -->


<?php if($totalPages > 1): ?>


<div class="flex justify-center gap-2 mt-10">


<?php for($i=1; $i <= $totalPages; $i++): ?>


<a

href="blog.php?page=<?= $i ?>"

class="px-4 py-2 rounded-xl font-bold

<?= 
$page == $i
?
'bg-primary text-on-primary'
:
'bg-white text-primary border'
?>

">


<?= $i ?>


</a>



<?php endfor; ?>



</div>



<?php endif; ?>






</div>


</main>


</div>



<?php include 'includes/footer.php'; ?>