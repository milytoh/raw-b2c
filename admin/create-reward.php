<?php

include 'includes/protect.php';

$page_title = 'Create Reward | Admin | RAW B2C LTD';

include 'includes/header.php';
include 'includes/sidebar.php';

require '../config/database.php';



if(isset($_SESSION['success'])){

    $success = $_SESSION['success'];
    unset($_SESSION['success']);

}


if(isset($_SESSION['error'])){

    $error = $_SESSION['error'];
    unset($_SESSION['error']);

}


?>


<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>


<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-4xl mx-auto">



<!-- FLASH MESSAGE -->

<?php if(isset($success)): ?>

<div id="flash"
class="mb-6 bg-green-100 border border-green-300 text-green-700 px-6 py-4 rounded-2xl shadow flex justify-between items-center">


<div class="flex items-center gap-3">

<span class="material-symbols-outlined">
check_circle
</span>

<?= htmlspecialchars($success) ?>

</div>


<button onclick="closeFlash()">
✕
</button>


</div>

<?php endif; ?>





<?php if(isset($error)): ?>

<div id="flash"
class="mb-6 bg-red-100 border border-red-300 text-red-700 px-6 py-4 rounded-2xl shadow flex justify-between items-center">


<div class="flex items-center gap-3">

<span class="material-symbols-outlined">
error
</span>

<?= htmlspecialchars($error) ?>

</div>


<button onclick="closeFlash()">
✕
</button>


</div>

<?php endif; ?>







<!-- HEADER -->


<div class="mb-8">


<h1 class="text-3xl font-bold text-primary">

Create Customer Reward

</h1>


<p class="text-on-surface-variant mt-2">

Add a new reward claim for customers.

</p>


</div>







<form method="POST"
action="save-reward.php"

class="bg-white rounded-[30px] shadow-premium border border-outline-variant/20 p-8 space-y-6">







<div class="grid md:grid-cols-2 gap-6">



<div>

<label class="font-bold text-primary">
Customer Name
</label>


<input

required

name="customer_name"

class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-200 focus:border-primary outline-none"

placeholder="John Doe">


</div>



<div>

<label class="font-bold text-primary">
Customer Phone
</label>


<input

required

name="customer_phone"

class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-200 focus:border-primary outline-none"

placeholder="08000000000">


</div>




<div>

<label class="font-bold text-primary">
Reward Type
</label>


<input

required

name="reward_type"

class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-200 focus:border-primary outline-none"

placeholder="Discount Voucher">


</div>



</div>







<div>


<label class="font-bold text-primary">

Points / Value

</label>


<input

required

name="points_value"

class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-200 focus:border-primary outline-none"

placeholder="1000 points or ₦5000">


</div>







<div>


<label class="font-bold text-primary">

Status

</label>


<select

name="status"

class="w-full mt-2 px-4 py-3 rounded-xl border border-gray-200 outline-none">


<option value="Pending">
Pending
</option>


<option value="Completed">
Completed
</option>


</select>


</div>





<div class="bg-surface-container-low rounded-2xl p-5">


<div class="flex gap-3">


<span class="material-symbols-outlined text-primary">
info
</span>


<p class="text-sm text-on-surface-variant">

A unique reward code will automatically be generated after submission.
The customer can use this code on the website to claim the reward.

</p>


</div>


</div>







<button

class="w-full bg-primary text-white py-4 rounded-xl font-bold hover:-translate-y-1 transition-all shadow-lg flex items-center justify-center gap-2">


<span class="material-symbols-outlined">
auto_awesome
</span>


Generate Reward Code


</button>








</form>






</div>


</main>


</div>





<script>


function closeFlash(){

let flash=document.getElementById('flash');

if(flash){

flash.style.display="none";

}

}



setTimeout(()=>{

let flash=document.getElementById('flash');

if(flash){

flash.style.display="none";

}


},4000);



</script>




<?php include 'includes/footer.php'; ?>





