<?php
session_start();

$valid_email = 'Kelompok9@gmail.com';
$valid_password = 'Kelompok9.';

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (isValidEmail($email) && isValidPassword($password)) {
    $_SESSION['email'] = $email;

    if(isset($_POST['remember']) && $_POST['remember'] == 'true') {
      setcookie("remember_email", $email, time() + (86400 * 30), "/");
    }else{
      setcookie("remember_email", "", time() - 3600, "/");
    }

    if ($email === $valid_email && $password === $valid_password) {
    echo 'success';
    } else {
    echo 'error';
    }
  }
} 

function isValidEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidPassword($password) {
  return (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/', $password) === 1);
}
