<?php

session_start();
require_once 'config.php';


if (isset($_POST['register'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if($checkEmail->num_rows >0) {
        $_SESSION['register_error'] = 'Email is already in use.';
        $_SESSION['active_form'] = 'register';
    } else {
        $conn->query("INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')");
    }

    header("Location: account.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['email'] = $user['email'];
        exit();
    }
}

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: account.php");
    exit();

?>