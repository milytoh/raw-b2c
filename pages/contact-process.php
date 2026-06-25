<?php

require '../config/database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);


    try {


        // SAVE TO DATABASE (PDO)
        $stmt = $pdo->prepare("
            INSERT INTO contact_messages
            (name, email, phone, subject, message)
            VALUES (?, ?, ?, ?, ?)
        ");


        $stmt->execute([
            $name,
            $email,
            $phone,
            $subject,
            $message
        ]);



        // COMPANY EMAIL
        $companyEmail = "milytohgold@gmail.com";


        $emailBody = "
RAW B2C LTD - New Contact Message

Name:
$name

Email:
$email

Phone:
$phone

Subject:
$subject

Message:
$message
";


        $headers = "From: RAW B2C LTD <info@rawb2c.com>\r\n";
        $headers .= "Reply-To: $email\r\n";


        mail(
            $companyEmail,
            "RAW B2C Contact Form Submission",
            $emailBody,
            $headers
        );



        header("Location: contact.php?success=1");
        exit;



    } catch (Exception $e) {

        die("Error: " . $e->getMessage());

    }

}

?>