<?php

session_start();

if ($_SESSION['user']) {
  $users = $_SESSION['user'];
} elseif ($_SESSION['admin']) {
  $users = $_SESSION['admin'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IntroMed</title>
  <link rel="stylesheet" href="../assets/css/header.min.css"/>
  <link rel="stylesheet" href="../assets/css/common.min.css"/>
  <link rel="stylesheet" href="../assets/css/text.min.css"/>
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
                      <a href="\pages\services-and-prices.php">Услуги и цены</a>
                      <a href="#">Расписание</a>
                      <a href="#">Клиники</a>
                      <a href="\pages\doctors.php">Врачи</a>
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
      <div class="container-text">
        <h3 class="container-text">Диагностика</h3>
        <p class="container-text1">
          Диагностику заболеваний в клинико-диагностическом центре «IntroMed»
        проводят высококвалифицированные врачи, использующие для этого весь
        необходимый арсенал современного диагностического оборудования:
        УЗИ аппараты экспертного класса, мультиспиральный компьютерный
        томограф (МСКТ), цифровой рентгенаппарат, маммограф,
        эндоскопическое оборудование и т. д.
      </p>
      <p class="container-text1">
        Врачи клиники владеют уникальными малотравматичными методиками
        пункционной биопсии, позволяющими поставить точный (гистологический)
        диагноз при заболеваниях щитовидной железы, почек, печени, яичников,
        лимфоузлов и т. д.
        </p>
        <p class="container-text1">
        У нас создан уникальный центр диагностики и лечения нарушений сна у
        взрослых и других пароксизмальных состояний. Также центр оказывает
        консультативно-диагностическую помощь пациентам с эпилепсией.
        </p>
        <p class="container-text1">
        Лаборатория, оснащенная современным оборудованием, позволяет делать
        весь спектр исследований как крови, так и других биологических
         жидкостей. При этом возможно проведение исследований по cito (быстро).
         </p>
         <p class="container-text1">
        Современное эндоскопическое оборудование позволяет провести полное
        обследование желудочно-кишечного тракта.
        </p>
        <p class="container-text1">
        Широкий спектр функциональных исследований позволяет поставить диагноз
        при сердечно-сосудистых, неврологических заболеваниях.
        </p>
        <p class="container-text1">
        Врачи узких специальностей — дерматологи, урологи, гинекологи,
        оториноларингологи и т. д. — применяют специфические специализированные
        методы диагностики.
        </p>
      </div>
    </div>
  </main>
</body>
</html>
