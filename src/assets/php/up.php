<?php

session_start();

$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";

$link = mysqli_connect($host, $user, $password, $database);

$name = filter_var(trim($_REQUEST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_REQUEST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_REQUEST['password']),FILTER_SANITIZE_STRING);

$query = 'SELECT * FROM `users` WHERE email="'.$email.'"';

$isEmailFree = mysqli_fetch_assoc(mysqli_query($link, $query));
if(empty($isEmailFree)){
    $md5Password = md5(md5($password)); //зашифрованный пароль
		$query = 'INSERT INTO `users` (`id`, `name`, `email`, `password`)
              VALUES(NULL, "'.$name.'", "'.$email.'", "'.$md5Password.'")';
		mysqli_query($link, $query);
    $data = mysqli_query($link, 'SELECT * FROM `users` WHERE email="'.$email.'"');
    $user = mysqli_fetch_assoc($data);

    $_SESSION['user'] = [
      "id" => $user['id'],
      "name" => $user['name'],
      "email" => $user['email'],
      "password" => $user['password'],
    ];
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: /');
	} else {
    $_SESSION['message'] = "Email ".$email." уже зарегистрирован!";
    header('Location: /');
}

?>
