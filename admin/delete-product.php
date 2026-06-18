<?php

include 'includes/protect.php';
require '../config/database.php';


if (!isset($_GET['id'])) {
    header("Location: products.php");
    exit;
}


$id = $_GET['id'];


// get image first
$stmt = $pdo->prepare("
    SELECT image_path 
    FROM products 
    WHERE id = ?
");

$stmt->execute([$id]);

$product = $stmt->fetch();



if ($product) {


    // delete image
    if (!empty($product['image_path'])) {

        $image = "../uploads/products/".$product['image_path'];

        if (file_exists($image)) {
            unlink($image);
        }

    }



    // delete product
    $delete = $pdo->prepare("
        DELETE FROM products 
        WHERE id = ?
    ");

    $delete->execute([$id]);

}



header("Location: products.php?success=Product deleted");
exit;

?>