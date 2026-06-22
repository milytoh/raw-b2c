<?php

session_start();

require '../config/database.php';


if($_SERVER['REQUEST_METHOD'] !== 'POST'){

    header("Location: rewards.php");
    exit;

}



$code = "RAW-B2C-" . strtoupper(substr(md5(time().rand()),0,6));



$customer_name = trim($_POST['customer_name']);
$customer_phone = trim($_POST['customer_phone']);
$reward_type = trim($_POST['reward_type']);
$points_value = trim($_POST['points_value']);



if(
empty($customer_name) ||
empty($customer_phone) ||
empty($reward_type) ||
empty($points_value)

){

    $_SESSION['error'] = "Please fill all fields.";

    header("Location: create-reward.php");
    exit;

}




$stmt=$pdo->prepare("

INSERT INTO rewards
(
reward_code,
customer_name,
customer_phone,
reward_type,
points_value
)

VALUES (?,?,?,?,?)

");



$stmt->execute([

$code,

$customer_name,

$customer_phone,

$reward_type,

$points_value

]);





$_SESSION['success'] = 
"Reward created successfully. Code: ".$code;



header("Location: rewards.php");

exit;

?>