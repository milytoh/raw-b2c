<?php

include 'includes/protect.php';
require '../config/database.php';

$id = (int)$_POST['id'];

$stmt = $pdo->prepare("
SELECT cv_file_path
FROM workers
WHERE id = ?
");

$stmt->execute([$id]);

$worker = $stmt->fetch();

if(!$worker){

    $_SESSION['error'] = "Worker not found.";

    header("Location: workers.php");
    exit;
}

$filePath = $worker['cv_file_path'];


// Upload New CV

if(
isset($_FILES['cv_file']) &&
$_FILES['cv_file']['error'] === 0
){

    $uploadDir = "../uploads/cv/";

    if(!is_dir($uploadDir)){

        mkdir($uploadDir,0777,true);

    }

    $fileName =
        time().'_'.
        basename($_FILES['cv_file']['name']);

    $target = $uploadDir.$fileName;

    move_uploaded_file(
        $_FILES['cv_file']['tmp_name'],
        $target
    );

    $filePath = "uploads/cv/".$fileName;
}


$stmt = $pdo->prepare("
UPDATE workers SET

first_name=?,
last_name=?,
email=?,
phone=?,
state=?,
local_government=?,
skill_area=?,
experience_years=?,
skills_details=?,
cv_file_path=?

WHERE id=?
");

$stmt->execute([

$_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['state'],
$_POST['local_government'],
$_POST['skill_area'],
$_POST['experience_years'],
$_POST['skills_details'],
$filePath,
$id

]);

$_SESSION['success'] =
"Worker updated successfully.";

header("Location: workers.php");
exit;