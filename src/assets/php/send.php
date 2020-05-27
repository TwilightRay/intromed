<?php

session_start();

$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";

$link = mysqli_connect($host, $user, $password, $database);

if ($_POST['checkbox'] == "") {
  $_SESSION['message'] = 'Подтвердите обработку персональных данных';
  header('Location: /');
} else {
  $name = filter_var(trim($_REQUEST['name']),FILTER_SANITIZE_STRING);
  $phone = filter_var(trim($_REQUEST['phone']),FILTER_SANITIZE_STRING);
  $branch = filter_var(trim($_REQUEST['branch']),FILTER_SANITIZE_STRING);

  $query = 'INSERT INTO `reception` (`id`, `name`, `phone`, `branch`)
            VALUES(NULL, "'.$name.'", "'.$phone.'", "'.$branch.'")';
  mysqli_query($link, $query);

  $_SESSION['message'] = 'Запись на приём прошла успешно!';
  header('Location: /');
}

?>
