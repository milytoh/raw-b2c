<?php
session_start();

require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

if (empty($email) || empty($password)) {
    $_SESSION['error'] = "All fields are required";
    header('Location: login.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
$stmt->execute([$email]);

$admin = $stmt->fetch();

if (!$admin) {
    $_SESSION['error'] = "Invalid email or password";
    header('Location: login.php');
    exit;
}

if (!password_verify($password, $admin['password_hash'])) {
    $_SESSION['error'] = "Invalid email or password";
    header('Location: login.php');
    exit;
}

$_SESSION['admin_id'] = $admin['id'];
$_SESSION['admin_email'] = $admin['email'];

header('Location: index.php');
exit;