<?php

include 'includes/protect.php';
require '../config/database.php';


$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;


if($id){

    // get cv first
    $stmt = $pdo->prepare("
        SELECT cv_file_path 
        FROM workers
        WHERE id=?
    ");

    $stmt->execute([$id]);

    $worker = $stmt->fetch();



    if($worker && $worker['cv_file_path']){

        $file = "../".$worker['cv_file_path'];

        if(file_exists($file)){
            unlink($file);
        }

    }



    $delete = $pdo->prepare("
        DELETE FROM workers
        WHERE id=?
    ");

    $delete->execute([$id]);


}


$_SESSION['success']="Worker deleted successfully";


header("Location: workers.php");
exit;

?>