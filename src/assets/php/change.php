<?php

session_start();

if ($_SESSION['user']) {
$users = $_SESSION['user'];
} elseif ($_SESSION['admin']) {
$users = $_SESSION['admin'];
}

include 'db.php';

$old = filter_var(trim($_REQUEST['old']),FILTER_SANITIZE_STRING);
$newpass = filter_var(trim($_REQUEST['newpass']),FILTER_SANITIZE_STRING);
$twonewpass = filter_var(trim($_REQUEST['twonewpass']),FILTER_SANITIZE_STRING);

if ($saltedPasswordUser != $passwordUser) {
echo "Старый пароль не верный";
} elseif ($newpass != $twonewpass) {
echo "Пароли не совпадают";
} else {
$saltedPasswordUser = md5(md5($old));
$passwordUser = $users['password'];
$saltedPassword = md5(md5($twonewpass)); //соленый пароль

// Формируем и отсылаем SQL запрос на вставку:
$query = 'UPDATE `users` SET `password` = "'.$saltedPassword.'", `salt` = "'.$salt.'" WHERE `users`.`id` = "'.$users['id'].'"';
mysqli_query($link, $query);

//ВЫБРАТЬ ИЗ таблицы_users
$data = mysqli_query($link, 'SELECT * FROM `users` WHERE id="'.$users['id'].'"');
//ответ базы запишем в переменную $result и Преобразуем ответ из БД в нормальный массив PHP
$user = mysqli_fetch_assoc($data);

$_SESSION['user'] = [
"id" => $user['id'],
"name" => $user['name'],
"email" => $user['email'],
"password" => $user['password'],
"login" => $user['login'],
"pictures" => $user['pictures']
];

$link->close();
}

?>
