<?php
  session_start();
  if ($_SESSION['user']) {
    unset($_SESSION['user']);
    header('Location: /');
  } else {
    unset($_SESSION['admin']);
    header('Location: /');
  }
?>
