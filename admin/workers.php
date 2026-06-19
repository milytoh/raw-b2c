<?php

include 'includes/protect.php';

$page_title = 'Manage Workers | Admin | RAW B2C LTD';

include 'includes/header.php';
include 'includes/sidebar.php';

require '../config/database.php';


// Pagination

$limit = 10;

$page = isset($_GET['page'])
? (int)$_GET['page']
: 1;


if($page < 1){
    $page = 1;
}


$offset = ($page - 1) * $limit;



// Search

$search = isset($_GET['search'])
? trim($_GET['search'])
: '';




// Count workers

if($search){

$countStmt = $pdo->prepare("
SELECT COUNT(*)
FROM workers
WHERE 
first_name LIKE ?
OR last_name LIKE ?
OR email LIKE ?
OR skill_area LIKE ?
");


$term="%$search%";

$countStmt->execute([
$term,
$term,
$term,
$term
]);


}else{


$countStmt=$pdo->query("
SELECT COUNT(*) FROM workers
");


}


$totalWorkers=$countStmt->fetchColumn();

$totalPages=ceil($totalWorkers/$limit);




// Fetch workers


if($search){


$stmt=$pdo->prepare("
SELECT *
FROM workers
WHERE 
first_name LIKE ?
OR last_name LIKE ?
OR email LIKE ?
OR skill_area LIKE ?

ORDER BY created_at DESC

LIMIT $limit OFFSET $offset
");


$stmt->execute([
$term,
$term,
$term,
$term
]);



}else{


$stmt=$pdo->query("
SELECT *
FROM workers
ORDER BY created_at DESC

LIMIT $limit OFFSET $offset
");


}



$workers=$stmt->fetchAll();


?>



<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-7xl mx-auto">



<div class="flex flex-col md:flex-row justify-between gap-4 mb-10">


<div>

<h1 class="text-3xl font-bold text-primary">
Manage Workers
</h1>

<p class="text-on-surface-variant">
View and manage registered workers.
</p>

</div>



<a href="add-worker.php"
class="bg-primary text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:-translate-y-1 transition">


<span class="material-symbols-outlined">
person_add
</span>

Add Worker

</a>


</div>





<!-- Search -->


<form method="GET" class="mb-6 flex gap-3">


<input
name="search"
value="<?=htmlspecialchars($search)?>"
placeholder="Search worker..."
class="px-4 py-3 rounded-xl border w-full md:w-96 bg-white">


<button
class="bg-primary text-white px-6 rounded-xl">

Search

</button>


</form>






<div class="bg-white rounded-[24px] shadow-premium overflow-hidden">


<div class="overflow-x-auto">


<table class="w-full text-left">


<thead>

<tr class="bg-surface-container-low border-b">

<th class="p-5">Name</th>
<th class="p-5">Contact</th>
<th class="p-5">Location</th>
<th class="p-5">Skill</th>
<th class="p-5">Experience</th>
<th class="p-5 text-right">
Actions
</th>

</tr>

</thead>



<tbody>


<?php foreach($workers as $worker): ?>


<tr class="border-b hover:bg-surface-container-low transition">


<td class="p-5 font-bold text-primary">

<?=htmlspecialchars(
$worker['first_name'].' '.$worker['last_name']
)?>

</td>



<td class="p-5">

<div>
<?=htmlspecialchars($worker['email'])?>
</div>

<div class="text-xs text-gray-500">

<?=htmlspecialchars($worker['phone'])?>

</div>

</td>



<td class="p-5">

<?=htmlspecialchars($worker['state'])?>

<br>

<span class="text-xs text-gray-500">

<?=htmlspecialchars($worker['local_government'])?>

</span>

</td>




<td class="p-5">

<span class="bg-primary-fixed px-3 py-1 rounded-full text-xs font-bold">

<?=htmlspecialchars($worker['skill_area'])?>

</span>

</td>



<td class="p-5">

<?=$worker['experience_years']?> Years

</td>



<td class="p-5 text-right space-x-2">


<a href="view-worker.php?id=<?= $worker['id'] ?>"
class="text-primary p-1">

<span class="material-symbols-outlined">
visibility
</span>

</a>



<a href="edit-worker.php?id=<?= $worker['id'] ?>"
class="text-secondary p-1">

<span class="material-symbols-outlined">
edit
</span>

</a>




<a 
href="delete-worker.php?id=<?= $worker['id'] ?>"
onclick="return confirm('Delete this worker?')"

class="text-error p-1">


<span class="material-symbols-outlined">
delete
</span>


</a>


</td>



</tr>


<?php endforeach; ?>



<?php if(empty($workers)): ?>

<tr>

<td colspan="6"
class="p-10 text-center">

No workers found

</td>

</tr>

<?php endif; ?>


</tbody>


</table>


</div>




<!-- Pagination -->


<div class="p-6 border-t flex justify-between items-center flex-wrap gap-4">


<p class="text-sm text-gray-500">

Showing <?=$offset+1?> -
<?=min($offset+$limit,$totalWorkers)?>
of <?=$totalWorkers?>

</p>




<div class="flex gap-2">


<?php if($page>1): ?>

<a href="?page=<?=$page-1?>&search=<?=$search?>"
class="px-4 py-2 border rounded-lg">

Prev

</a>

<?php endif; ?>





<?php for($i=1;$i<=$totalPages;$i++): ?>


<a href="?page=<?=$i?>&search=<?=$search?>"

class="px-4 py-2 rounded-lg

<?=$page==$i
?'bg-primary text-white'
:'border'
?>">

<?=$i?>

</a>


<?php endfor; ?>





<?php if($page<$totalPages): ?>

<a href="?page=<?=$page+1?>&search=<?=$search?>"
class="px-4 py-2 border rounded-lg">

Next

</a>

<?php endif; ?>


</div>



</div>




</div>



</div>


</main>

</div>



<?php include 'includes/footer.php'; ?>