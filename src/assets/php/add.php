<?php
session_start();
$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";
$link = mysqli_connect($host, $user, $password, $database);
$name = filter_var(trim($_REQUEST['name']),FILTER_SANITIZE_STRING);
$specialty = filter_var(trim($_REQUEST['specialty']),FILTER_SANITIZE_STRING);
$education = filter_var(trim($_REQUEST['education']),FILTER_SANITIZE_STRING);
$saltImg = time();
$tmp_name = $_FILES['pictures']['tmp_name'];
$path = '../assets/upload/'.$saltImg.basename(filter_var(trim($_FILES['pictures']['name']),FILTER_SANITIZE_STRING));
move_uploaded_file($tmp_name, "../upload/".$saltImg.basename(filter_var(trim($_FILES['pictures']['name']),FILTER_SANITIZE_STRING)));
$query = 'INSERT INTO `doctors` (`id`, `name`, `specialty`, `education`, `pictures`)
          VALUES(NULL, "'.$name.'", "'.$specialty.'", "'.$education.'", "'.$path.'")';
mysqli_query($link, $query);
header("Location: ../../pages/doctors.php");
exit();
?>
