<?php

include 'includes/protect.php';

require '../config/database.php';

$page_title = 'Manage Rewards | Admin | RAW B2C LTD';

include 'includes/header.php';
include 'includes/sidebar.php';



// get rewards

$stmt = $pdo->query("

SELECT *

FROM rewards

ORDER BY created_at DESC

");

$rewards = $stmt->fetchAll();



// stats

$totalStmt = $pdo->query("
SELECT COUNT(*) FROM rewards
");

$totalRewards = $totalStmt->fetchColumn();



$pendingStmt = $pdo->query("
SELECT COUNT(*) FROM rewards
WHERE status='Pending'
");

$pendingRewards = $pendingStmt->fetchColumn();



$completedStmt = $pdo->query("
SELECT COUNT(*) FROM rewards
WHERE status='Completed'
");

$completedRewards = $completedStmt->fetchColumn();



?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-7xl mx-auto">



<?php if(isset($_SESSION['success'])): ?>

<div class="mb-6 bg-green-100 text-green-700 p-4 rounded-xl font-bold">

<?= $_SESSION['success']; ?>

</div>

<?php unset($_SESSION['success']); endif; ?>





<?php if(isset($_SESSION['error'])): ?>

<div class="mb-6 bg-red-100 text-red-700 p-4 rounded-xl font-bold">

<?= $_SESSION['error']; ?>

</div>

<?php unset($_SESSION['error']); endif; ?>






<div class="flex justify-between items-center mb-10">


<div>

<h1 class="text-3xl font-bold text-primary">
Customer Rewards
</h1>

<p class="text-on-surface-variant">
Create and manage customer reward codes
</p>

</div>



<a href="create-reward.php"

class="bg-primary text-white px-6 py-3 rounded-xl font-bold flex gap-2 items-center">


<span class="material-symbols-outlined">
add
</span>

Generate Reward


</a>


</div>






<div class="grid md:grid-cols-3 gap-6 mb-10">


<div class="bg-white rounded-[24px] p-6 shadow">

<p>Total Rewards</p>

<h2 class="text-4xl font-bold text-primary">

<?= $totalRewards ?>

</h2>

</div>



<div class="bg-white rounded-[24px] p-6 shadow">


<p>Pending</p>

<h2 class="text-4xl font-bold text-orange-500">

<?= $pendingRewards ?>

</h2>

</div>




<div class="bg-white rounded-[24px] p-6 shadow">


<p>Completed</p>

<h2 class="text-4xl font-bold text-green-600">

<?= $completedRewards ?>

</h2>

</div>



</div>








<div class="bg-white rounded-[24px] shadow overflow-hidden">


<div class="overflow-x-auto">


<table class="w-full text-left">


<thead>

<tr class="bg-gray-50">


<th class="p-5">
Code
</th>


<th class="p-5">
Customer
</th>


<th class="p-5">
Reward
</th>


<th class="p-5">
Value
</th>


<th class="p-5">
Status
</th>


<th class="p-5">
Date
</th>


</tr>


</thead>






<tbody>


<?php foreach($rewards as $reward): ?>


<tr class="border-t">


<td class="p-5 font-mono font-bold text-primary">

<?= htmlspecialchars($reward['reward_code']) ?>

</td>



<td class="p-5">


<?= htmlspecialchars($reward['customer_name']) ?>


<br>

<span class="text-xs text-gray-500">

<?= htmlspecialchars($reward['customer_phone']) ?>

</span>


</td>





<td class="p-5">

<?= htmlspecialchars($reward['reward_type']) ?>

</td>




<td class="p-5 font-bold">

<?= htmlspecialchars($reward['points_value']) ?>

</td>





<td class="p-5">


<?php if($reward['status']=="Completed"): ?>


<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">

Completed

</span>


<?php else: ?>


<span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">

Pending

</span>


<?php endif; ?>


</td>





<td class="p-5 text-sm">


<?= date("d M Y",strtotime($reward['created_at'])) ?>


</td>



</tr>



<?php endforeach; ?>



</tbody>


</table>


</div>


</div>



</div>


</main>


</div>



<?php include 'includes/footer.php'; ?>