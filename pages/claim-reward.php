<?php

$base_path = '../';

$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$reward_link = 'claim-reward.php';
$contact_link = 'contact.php';


$page_title = "Claim Reward | RAW B2C LTD";


include "../includes/header.php";
include "../includes/navbar.php";


require "../config/database.php";


$message = "";
$messageType = "";

$reward = null;
$whatsapp = "";



if($_SERVER['REQUEST_METHOD']=="POST"){


    $code  = trim($_POST['reward_code']);
    $name  = trim($_POST['customer_name']);
    $phone = trim($_POST['customer_phone']);



    if(empty($code) || empty($name) || empty($phone)){


        $message = "Please fill all fields.";
        $messageType="error";


    }else{


        $stmt = $pdo->prepare("
        SELECT *
        FROM rewards
        WHERE reward_code = ?
        ");


        $stmt->execute([$code]);


        $reward = $stmt->fetch();



        if(!$reward){


            $message = "Invalid reward code.";
            $messageType="error";



        }elseif($reward['status']=="Completed"){


            $message = "This reward has already been claimed.";
            $messageType="error";



        }else{



            $update = $pdo->prepare("

            UPDATE rewards

            SET

            customer_name=?,
            customer_phone=?,
            status='Completed',
            claimed_at=NOW()

            WHERE reward_code=?

            ");



            $update->execute([

                $name,
                $phone,
                $code

            ]);



            $reward['customer_name']=$name;
            $reward['customer_phone']=$phone;



            $message =
            "Congratulations 🎉 Your reward has been claimed successfully!";


            $messageType="success";



            $text = urlencode(

            "Hello RAW B2C LTD,

I have claimed my reward.

Name: ".$name."

Reward: ".$reward['reward_type']."

Value: ".$reward['points_value']."

Reward Code: ".$reward['reward_code']

            );



            // CHANGE NUMBER HERE

            $whatsapp =
            "https://wa.me/2348163118975?text=".$text;



        }


    }


}


?>



<section class="min-h-screen bg-surface py-32 px-6">


<div class="max-w-xl mx-auto">


<div class="bg-white rounded-[35px] shadow-premium p-8">



<div class="text-center mb-8">


<div class="mx-auto w-24 h-24 rounded-full bg-primary-fixed flex items-center justify-center">


<span class="material-symbols-outlined text-primary text-5xl">
redeem
</span>


</div>


<h1 class="text-3xl font-bold text-primary mt-5">

Claim Your Reward

</h1>


<p class="text-gray-500 mt-2">

Enter your reward code

</p>


</div>





<?php if($message): ?>


<div id="flash"

class="mb-6 p-5 rounded-2xl font-bold

<?= $messageType=="success"

? 'bg-green-100 text-green-700'

: 'bg-red-100 text-red-700'

?>">


<?= htmlspecialchars($message) ?>


</div>


<?php endif; ?>







<form method="POST" class="space-y-5">



<div>

<label class="font-bold text-primary">
Reward Code
</label>

<input

required

name="reward_code"

placeholder="RAW-B2C-XXXXXX"

class="w-full mt-2 px-4 py-3 rounded-xl border"

>

</div>




<div>

<label class="font-bold text-primary">
Full Name
</label>


<input

required

name="customer_name"

placeholder="John Doe"

class="w-full mt-2 px-4 py-3 rounded-xl border"

>

</div>





<div>

<label class="font-bold text-primary">
Phone Number
</label>


<input

required

name="customer_phone"

placeholder="08000000000"

class="w-full mt-2 px-4 py-3 rounded-xl border"

>

</div>





<button

class="w-full bg-primary text-white py-4 rounded-xl font-bold">


Claim Reward


</button>



</form>







<?php if($messageType=="success"): ?>


<div class="mt-8 bg-secondary-container rounded-2xl p-6">


<h3 class="font-bold text-primary text-xl">

Your Reward 🎁

</h3>



<p class="mt-3">

<?= htmlspecialchars($reward['reward_type']) ?>

</p>


<p class="font-bold">

<?= htmlspecialchars($reward['points_value']) ?>

</p>





<a

href="<?= $whatsapp ?>"

target="_blank"

class="mt-5 block text-center bg-green-600 text-white py-4 rounded-xl font-bold"

>


Continue on WhatsApp


</a>




</div>


<?php endif; ?>





</div>


</div>


</section>





<script>

setTimeout(()=>{

let flash=document.getElementById("flash");

if(flash){

flash.style.display="none";

}

},5000);


</script>



<?php include "../includes/footer.php"; ?>