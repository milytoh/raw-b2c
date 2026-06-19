<?php

ob_start();

include 'includes/protect.php';

require '../config/database.php';



if($_SERVER['REQUEST_METHOD'] !== 'POST'){

    header("Location: add-worker.php");
    exit;

}




$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');

$state = trim($_POST['state'] ?? '');

$local_government = trim($_POST['local_government'] ?? '');

$skill_area = trim($_POST['skill_area'] ?? '');

$experience_years = (int)($_POST['experience_years'] ?? 0);

$skills_details = trim($_POST['skills_details'] ?? '');






// validation

if(
empty($first_name) ||
empty($last_name) ||
empty($email) ||
empty($phone) ||
empty($state) ||
empty($local_government) ||
empty($skill_area)

){

    $_SESSION['error'] = "Please fill all required fields.";

    header("Location: add-worker.php");
    exit;

}





// CV upload

$filePath = null;



if(
isset($_FILES['cv_file']) &&
$_FILES['cv_file']['error'] === 0
){


    $uploadDir = "../uploads/cv/";


    if(!is_dir($uploadDir)){

        mkdir($uploadDir,0777,true);

    }



    $original = basename($_FILES['cv_file']['name']);


    $ext = strtolower(
        pathinfo($original,PATHINFO_EXTENSION)
    );



    $allowed = [
        'pdf',
        'doc',
        'docx'
    ];



    if(in_array($ext,$allowed)){


        $fileName = time().'_'.$original;


        $target = $uploadDir.$fileName;



        move_uploaded_file(
            $_FILES['cv_file']['tmp_name'],
            $target
        );



        $filePath = "uploads/cv/".$fileName;


    }


}







// insert worker

$stmt = $pdo->prepare("

INSERT INTO workers

(
first_name,
last_name,
email,
phone,
state,
local_government,
skill_area,
experience_years,
skills_details,
cv_file_path

)

VALUES (?,?,?,?,?,?,?,?,?,?)

");




$stmt->execute([

$first_name,
$last_name,
$email,
$phone,
$state,
$local_government,
$skill_area,
$experience_years,
$skills_details,
$filePath

]);






$_SESSION['success'] = "Worker registered successfully!";



header("Location: workers.php");

exit;


ob_end_flush();

?>