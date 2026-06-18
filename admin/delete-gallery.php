<?php

include 'includes/protect.php';
require '../config/database.php';



if(!isset($_GET['id'])){

    header("Location: gallery.php");
    exit;

}



$id = (int)$_GET['id'];




// get image first

$stmt = $pdo->prepare("
    SELECT image_path
    FROM gallery
    WHERE id = ?
");


$stmt->execute([$id]);


$image = $stmt->fetch(PDO::FETCH_ASSOC);




if($image){


    // delete file

    if(!empty($image['image_path'])){


        $file = "../uploads/gallery/".$image['image_path'];


        if(file_exists($file)){

            unlink($file);

        }

    }






    // delete database row

    $delete = $pdo->prepare("
        DELETE FROM gallery
        WHERE id = ?
    ");


    $delete->execute([$id]);


}





header("Location: gallery.php?success=deleted");

exit;

?>