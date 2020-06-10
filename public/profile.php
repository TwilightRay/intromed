<?php session_start(); if (!$_SESSION['admin'] && !$_SESSION['user']) { header('Location: /'); }

if ($_SESSION['user']) {
  $users = $_SESSION['user'];
} elseif ($_SESSION['admin']) {
  $users = $_SESSION['admin'];
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
                  <div class="">
                    <span class="location-img"></span>
                    <a class="location" href="#">Адреса медицинских центров</a>
                  </div>
                  <div class="">
                    <span class="phone-img"></span>
                    <a class="phone" href="#"> +7 846 247 55 33</a>
                  </div>
                  <?php if ($users): ?>
                    <div class="">
                      <span class="sign-in-img"></span>
                      <a class="profile" href="pages/profile.php"><?=$users['name']?></a>
                      <a class="logout" href="../assets/php/logout.php">Выйти</a>
                    </div>
                  <?php else: ?>
                    <a class="sign-in" href="#" onclick="openFormSignIn()">Войти</a>
                  <?php endif; ?>
                  <line class="hr"></line>
                </div>
                <div class="form-popup" id="signIn">
                  <form action="../assets/php/in.php" method="post" class="form-container">
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
                        <a href="services-and-prices.php">Услуги и цены</a>
                        <a href="#">Расписание</a>
                        <a href="#">Клиники</a>
                        <a href="doctors.php">Врачи</a>
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
                  <a class="data" href="profile.php" style="color: #fe6782;">Личные данные</a>
                </div>
                <div class="">
                  <a class="teams" href="сoupons.php">Мои талоны</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="user">
            <h2 class="title-profil">Личные данные</h2>
            <p style="text-align: center;">Основная информация, которую вы используете на этом сайте.</p>
            <form action="../assets/php/edit.php" method="post">
              <div class="email">
                <label for="">Email</label>
                <input type="email" name="email" value="<?=$users['email']?>">
              </div>
              <div class="name">
                <label for="">Имя</label>
                <input type="text" name="name" value="<?=$users['name']?>">
              </div>
              <div class="password">
                <label for="">Пароль</label>
                <input type="password" name="password" value="<?=$users['password']?>" placeholder="Введите новый пароль">
              </div>
              <div class="response">
                <p class="message"><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
                <button class='save' type='submit' name='save'>Сохранить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <script src="../assets/js/main.js"></script>
  </body>
</html>