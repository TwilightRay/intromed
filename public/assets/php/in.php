<?php

session_start();

$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";

$link = mysqli_connect($host, $user, $password, $database);

$email = filter_var(trim($_REQUEST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_REQUEST['password']),FILTER_SANITIZE_STRING);

$query = mysqli_query($link, 'SELECT * FROM `users` WHERE email="'.$email.'" LIMIT 1');
$user = mysqli_fetch_assoc($query);

$md5Password = md5(md5($password));

if ($user['email'] === $email && $user['password'] === $md5Password) {

  $_SESSION['user'] = [
    "id" => $user['id'],
    "name" => $user['name'],
    "email" => $user['email'],
    "password" => $user['password'],
  ];
  $_SESSION['message'] = 'Здравствуйте, '. $user['name'];
  header('Location: /');
} else {
  $_SESSION['message'] = 'Неверный Email или пароль';
  header('Location: /');
}

?>