<?php

include 'includes/protect.php';
require '../config/database.php';


$id = (int)$_GET['id'];


$stmt=$pdo->prepare("
SELECT *
FROM workers
WHERE id=?
");


$stmt->execute([$id]);


$worker=$stmt->fetch();


if(!$worker){
    header("Location: workers.php");
    exit;
}



$page_title="Worker Details";

include 'includes/header.php';
include 'includes/sidebar.php';

?>



<div class="p-10">


<div class="bg-white rounded-[28px] shadow-premium p-8">


<h1 class="text-3xl font-bold text-primary mb-6">

<?= $worker['first_name'].' '.$worker['last_name'] ?>

</h1>



<div class="grid md:grid-cols-2 gap-6">



<p>
<b>Email:</b>
<?= $worker['email'] ?>
</p>


<p>
<b>Phone:</b>
<?= $worker['phone'] ?>
</p>


<p>
<b>State:</b>
<?= $worker['state'] ?>
</p>


<p>
<b>LGA:</b>
<?= $worker['local_government'] ?>
</p>



<p>
<b>Skill:</b>
<?= $worker['skill_area'] ?>
</p>



<p>
<b>Experience:</b>
<?= $worker['experience_years'] ?> Years
</p>



</div>



<hr class="my-6">


<h3 class="font-bold text-primary">
Skills Details
</h3>


<p class="mt-3">

<?= nl2br($worker['skills_details']) ?>

</p>



<?php if($worker['cv_file_path']): ?>


<a href="../<?= $worker['cv_file_path'] ?>"
target="_blank"

class="inline-block mt-6 bg-primary text-white px-6 py-3 rounded-xl">

View CV

</a>


<?php endif; ?>



</div>


</div>



<?php include 'includes/footer.php'; ?>