<?php

include 'includes/protect.php';
require '../config/database.php';


$id=$_GET['id'];



$stmt=$pdo->prepare("
SELECT image_path FROM blog_posts WHERE id=?
");

$stmt->execute([$id]);

$post=$stmt->fetch();



if($post){


if($post['image_path']){


$file="../uploads/blog/".$post['image_path'];


if(file_exists($file)){
unlink($file);
}


}



$del=$pdo->prepare("
DELETE FROM blog_posts WHERE id=?
");


$del->execute([$id]);


}



header("Location: blog.php");

?>