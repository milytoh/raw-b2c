<?php

require '../config/database.php';


// PHPMailer manual include
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);



    try {


        // SAVE MESSAGE TO DATABASE

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




        // ======================
        // HOSTINGER EMAIL
        // ======================


        $mail = new PHPMailer(true);



        $mail->isSMTP();


        // Hostinger SMTP
        $mail->Host = "smtp.hostinger.com";


        $mail->SMTPAuth = true;


        // Your Hostinger mailbox
        $mail->Username = "info@rawb2c.com";


        // Your Hostinger email password
        $mail->Password = "@Rawb2c.com";



        // Port 465 SSL
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->Port = 465;




        // FROM

        $mail->setFrom(
            "info@rawb2c.com",
            "RAW B2C LTD"
        );



        // RECEIVE EMAIL

        $mail->addAddress(
            "info@rawb2c.com"
        );



        // Reply to customer

        $mail->addReplyTo(
            $email,
            $name
        );




        $mail->isHTML(true);



        $mail->Subject =
        "RAW B2C Contact Form - " . $subject;



        $mail->Body = "

        <div style='font-family:Arial'>


        <h2>RAW B2C LTD Contact Message</h2>


        <p><strong>Name:</strong> {$name}</p>


        <p><strong>Email:</strong> {$email}</p>


        <p><strong>Phone:</strong> {$phone}</p>


        <p><strong>Subject:</strong> {$subject}</p>


        <hr>


        <h3>Message</h3>

        <p>{$message}</p>


        </div>

        ";



        $mail->send();



        header("Location: contact.php?success=1");
        exit;



    } catch (Exception $e) {


        die("Email Error: " . $mail->ErrorInfo);


    }


}

?>