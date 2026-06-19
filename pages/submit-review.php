<?php

require '../config/database.php';

session_start();



if($_SERVER['REQUEST_METHOD'] === 'POST'){


$product_id = $_POST['product_id'];
$name = trim($_POST['customer_name']);
$email = trim($_POST['email']);
$rating = $_POST['rating'];
$text = trim($_POST['review_text']);



$stmt = $pdo->prepare("

INSERT INTO reviews
(
product_id,
customer_name,
email,
rating,
review_text
)

VALUES
(?,?,?,?,?)

");



$stmt->execute([

$product_id,
$name,
$email,
$rating,
$text

]);



$_SESSION['success'] = 
"Thank you for your review! It has been submitted and is waiting for approval.";



header(
"Location: product-details.php?id=".$product_id
);

exit;


}