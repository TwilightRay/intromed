<?php
session_start();

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['user']); header('Location: /');
}

if (!$_SESSION['user']) {
  header('Location: /');
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['user']);
  header('Location: /');
}

$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";

$link = mysqli_connect($host, $user, $password, $database);

$query = 'SELECT * FROM `reception` WHERE users="'.$_SESSION['user']['id'].'"';
$data = $link->query($query);

if (isset($_GET["delete"])) {
  $query = "DELETE FROM `reception` WHERE `id` = {$_GET['delete']}";
  mysqli_query($link, $query);
  header("Location: сoupons.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="dreamteam"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>IntroMed</title>
    <link rel="stylesheet" href="../assets/css/header.min.css"/>
    <link rel="stylesheet" href="../assets/css/common.min.css"/>
    <link rel="stylesheet" href="../assets/css/signin.min.css">
    <link rel="shortcut icon" href="/assets/static/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
            <div class="wrapper">
              <div class="contacts">
                <div class="top">
                  <span class="location-img"></span>
                  <a class="location" href="#">Адреса медицинских центров</a>
                  <span class="phone-img"></span>
                  <a class="phone" href="#"> +7 846 247 55 33</a>
                  <span class="results-img"></span>
                  <a class="results" href="#">Получить результаты</a>
                  <span class="sign-in-img"></span>
                  <?php if ($_SESSION['user']): ?>
                    <a class="profile" href="pages/profile.php"><?=$_SESSION['user']['name']?></a>
                    <a class="logout" href="../assets/php/logout.php">Выйти</a>
                  <?php else: ?>
                    <a class="sign-in" href="#" onclick="openFormSignIn()">Войти</a>
                  <?php endif; ?>
                  <line class="hr"></line>
                </div>
                <div class="form-popup" id="signIn">
                  <form action="assets/php/in.php" method="post" class="form-container">
                    <h2>Авторизация</h2>
                  <label for="email"><b>Е-мейл</b></label>
                    <input type="email" placeholder="Ваш е-мейл" name="email" required>
                  <label for="password"><b>Пароль</b></label>
                    <input type="password" placeholder="Ваш Пароль" name="password" required>
                      <div class="signup-btn">
                        <p class="signup-btn">Ещё нет аккаунта?</p>
                        <a href="#" onclick="openFormSignUp()">Зарегистрироваться</a>
                      </div>
                  <p><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
                    <button type="submit" class="btn">Войти</button>
                    <button type="button" class="btn cancel" onclick="closeFormSignIn()">Закрыть</button>
                  </form>
                </div>
                <div class="form-popup" id="signUp">
                  <form action="assets/php/up.php" method="post" class="form-container">
                    <h2>Регистрация</h2>
                    <label for="name"><b>Имя</b></label>
                    <input type="text" placeholder="Ваше имя" name="name" required>
                  <label for="email"><b>Е-мейл</b></label>
                    <input type="email" placeholder="Ваш е-мейл" name="email" required>
                  <label for="password"><b>Пароль</b></label>
                    <input type="password" placeholder="Ваш Пароль" name="password" required
                  <p><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
                  <button type="submit" class="btn">Зарегистрироваться</button>
                  <button type="button" class="btn cancel" onclick="closeFormSignUp()">Закрыть</button>
                  </form>
                </div>
                <div class="wrapper-nav">
                  <nav class="nav">
                    <div class="home">
                      <a class="logo-img" href="/"></a>
                      <a class="logo-title" href="/">IntroMed</a>
                    </div>
                    <ul>
                      <li>
                        <a href="#">О центре</a>
                        <a href="#">Услуги и цены</a>
                        <a href="#">Расписание</a>
                        <a href="#">Клиники</a>
                        <a href="#">Врачи</a>
                        <a href="#">Контакты</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
    </header>
    <main>
      <div class="wrapper">
        <div class="conteiner-user">
          <div class="sidebar-user">
            <ul class="nav-user">
              <li>
                <div class="">
                  <a class="data" href="profile.php">Личные данные</a>
                </div>
                <div class="">
                  <a class="teams" href="сoupons.php" style="color: #fe6782;">Мои талоны</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="user-teams">
            <h2 class="title-teams">Мои талоны</h2>
            <p style="text-align: center">Список ваших талонов.</p>
            <div class="box-myteams">
              <?php while($reception = mysqli_fetch_assoc($data)): ?>
                <div class="<?=$reception['name']?>">
                  <div class="box">
                    <p class="name-teams"><?=$reception['name']?></p>
                    <p class="about-teams"><?=$reception['phone']?></p>
                    <p class="about-teams"><?=$reception['branch']?></p>
                    <a class="delete" href="?delete=<?=$reception['id']?>">Удалить</a>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
