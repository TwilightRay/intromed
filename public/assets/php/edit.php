<?php
session_start();
if ($_SESSION['user']) {
  $users = $_SESSION['user'];
} elseif ($_SESSION['admin']) {
  $users = $_SESSION['admin'];
}
$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";
$link = mysqli_connect($host, $user, $password, $database);
$name = filter_var(trim($_REQUEST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_REQUEST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_REQUEST['password']),FILTER_SANITIZE_STRING);
$query = 'UPDATE `users` SET `name` = "'.$name.'", `email` = "'.$email.'", `password` = "'.$password.'" WHERE `users`.`id` = "'.$users['id'].'"';
mysqli_query($link, $query);
$data = mysqli_query($link, 'SELECT * FROM `users` WHERE id="'.$users['id'].'"');
$user = mysqli_fetch_assoc($data);
$_SESSION['user'] = [
  "id" => $user['id'],
  "name" => $user['name'],
  "email" => $user['email'],
  "password" => $user['password'],
  "login" => $user['login'],
  "pictures" => $user['pictures']
];
header('Location: ../../pages/profile.php');
?>
