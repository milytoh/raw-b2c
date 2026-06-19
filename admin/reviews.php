<?php

include 'includes/protect.php';

require '../config/database.php';


// Approve Review

if(isset($_GET['approve'])){

    $id = (int)$_GET['approve'];

    $stmt = $pdo->prepare("
        UPDATE reviews 
        SET status='Approved'
        WHERE id=?
    ");

    $stmt->execute([$id]);

    header("Location: reviews.php");
    exit;
}



// Delete Review

if(isset($_GET['delete'])){

    $id = (int)$_GET['delete'];

    $stmt = $pdo->prepare("
        DELETE FROM reviews
        WHERE id=?
    ");

    $stmt->execute([$id]);

    header("Location: reviews.php");
    exit;

}



// Page includes AFTER redirect logic

$page_title = 'Manage Reviews | Admin | RAW B2C LTD';

include 'includes/header.php';
include 'includes/sidebar.php';




// Pending Reviews

$pendingStmt = $pdo->query("
SELECT 
reviews.*,
products.name AS product_name

FROM reviews

LEFT JOIN products 
ON reviews.product_id = products.id

WHERE reviews.status='Pending'

ORDER BY reviews.created_at DESC
");


$pendingReviews = $pendingStmt->fetchAll();




// Approved Reviews (Latest 10)

$approvedStmt = $pdo->query("
SELECT 
reviews.*,
products.name AS product_name

FROM reviews

LEFT JOIN products 
ON reviews.product_id = products.id

WHERE reviews.status='Approved'

ORDER BY reviews.created_at DESC

LIMIT 10
");


$approvedReviews = $approvedStmt->fetchAll();


?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-7xl mx-auto">



<h1 class="font-headline-md text-3xl font-bold text-primary mb-2">
Manage Reviews
</h1>

<p class="text-on-surface-variant mb-10">
Approve, reject, or delete customer feedback.
</p>





<!-- ================= Pending ================= -->


<h3 class="font-bold text-lg text-primary mb-4">

Pending Approval (<?= count($pendingReviews) ?>)

</h3>



<div class="space-y-5 mb-12">



<?php if(count($pendingReviews)): ?>


<?php foreach($pendingReviews as $review): ?>


<div class="bg-white rounded-[24px] shadow-sm border p-6 flex flex-col md:flex-row gap-6">


<div class="md:w-1/4">


<h4 class="font-bold text-primary">

<?= htmlspecialchars($review['customer_name']) ?>

</h4>


<p class="text-xs text-gray-500">

<?= htmlspecialchars($review['email']) ?>

</p>



<div class="flex text-secondary mt-2">

<?php for($i=1;$i<=5;$i++): ?>

<span class="material-symbols-outlined text-sm">

<?= $i <= $review['rating'] ? 'star' : 'star_border' ?>

</span>

<?php endfor; ?>


</div>


</div>




<div class="md:w-1/2">


<p class="font-bold text-primary mb-2">

<?= htmlspecialchars($review['product_name']) ?>

</p>


<p class="text-sm text-gray-600 italic">

"<?= htmlspecialchars($review['review_text']) ?>"

</p>


</div>




<div class="md:w-1/4 flex flex-col gap-3">


<a href="?approve=<?= $review['id'] ?>"
class="text-center bg-primary text-white px-4 py-2 rounded-xl font-bold text-sm">

Approve

</a>



<a href="?delete=<?= $review['id'] ?>"
onclick="return confirm('Delete review?')"
class="text-center bg-red-100 text-red-600 px-4 py-2 rounded-xl font-bold text-sm">

Delete

</a>


</div>


</div>


<?php endforeach; ?>


<?php else: ?>


<div class="bg-white p-10 rounded-3xl text-center">

No pending reviews

</div>


<?php endif; ?>


</div>





<!-- ================= Approved ================= -->


<h3 class="font-bold text-lg text-primary mb-4">

Recently Approved

</h3>




<div class="bg-white rounded-[24px] shadow-premium overflow-hidden">

    <!-- Mobile scroll -->
    <div class="overflow-x-auto">

        <table class="w-full text-left min-w-[800px]">


        <thead>

        <tr class="bg-gray-50 text-sm">

        <th class="p-5">Reviewer</th>

        <th class="p-5">Product</th>

        <th class="p-5">Rating</th>

        <th class="p-5">Review</th>

        <th class="p-5">Actions</th>

        </tr>

        </thead>


        <tbody>


        <?php foreach($approvedReviews as $review): ?>


        <tr class="border-t hover:bg-gray-50 transition">


        <td class="p-5 font-bold text-primary">

        <?= htmlspecialchars($review['customer_name']) ?>

        <p class="text-xs text-gray-400">
        <?= htmlspecialchars($review['email']) ?>
        </p>

        </td>



        <td class="p-5">

        <?= htmlspecialchars($review['product_name']) ?>

        </td>



        <td class="p-5 text-secondary font-bold">

        <?= $review['rating'] ?> ⭐

        </td>



        <td class="p-5 text-sm text-gray-600">

        <?= htmlspecialchars(substr($review['review_text'],0,60)) ?>...

        </td>



        <td class="p-5">

        <div class="flex gap-3">


        <!-- VIEW BUTTON -->

        <button
        onclick="openReview(
        `<?= htmlspecialchars($review['customer_name']) ?>`,
        `<?= htmlspecialchars($review['review_text']) ?>`,
        `<?= $review['rating'] ?>`,
        `<?= htmlspecialchars($review['product_name']) ?>`
        )"

        class="bg-primary text-white px-4 py-2 rounded-xl text-sm hover:scale-105 transition">

        View

        </button>



        <!-- DELETE -->

        <a href="?delete=<?= $review['id'] ?>"
        onclick="return confirm('Delete review?')"
        class="bg-red-100 text-red-600 px-3 py-2 rounded-xl">

        <span class="material-symbols-outlined text-sm">
        delete
        </span>

        </a>


        </div>

        </td>


        </tr>


        <?php endforeach; ?>


        </tbody>


        </table>


    </div>

</div>





<!-- REVIEW MODAL -->

<div id="reviewModal"

class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">


<div class="bg-white rounded-3xl p-8 max-w-lg w-[90%] shadow-xl animate-fade">


<button 
onclick="closeReview()"
class="float-right text-gray-400">

✕


</button>


<h2 class="text-2xl font-bold text-primary mb-4">

Review Details

</h2>


<h3 id="modalName"
class="font-bold text-lg">
</h3>


<p id="modalProduct"
class="text-sm text-gray-500 mb-4">
</p>


<div id="modalStars"
class="text-secondary mb-4">
</div>


<p id="modalText"
class="text-gray-700 leading-relaxed">

</p>


</div>

</div>





<script>


function openReview(name,text,rating,product){


let modal=document.getElementById("reviewModal");


document.getElementById("modalName").innerHTML=name;

document.getElementById("modalProduct").innerHTML=
"Product: "+product;


document.getElementById("modalStars").innerHTML=
"⭐".repeat(rating);


document.getElementById("modalText").innerHTML=text;


modal.classList.remove("hidden");

modal.classList.add("flex");


}



function closeReview(){


let modal=document.getElementById("reviewModal");


modal.classList.add("hidden");

modal.classList.remove("flex");


}


</script>



</div>

</main>


</div>



<?php include 'includes/footer.php'; ?>