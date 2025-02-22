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
  <link rel="stylesheet" href="../assets/css/signin.min.css">
  <link rel="stylesheet" href="../assets/css/text.min.css">
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
        <h3 class="container-text">Хирургия</h3>
        <p class="container-text1">
          В клинико-диагностическом центре «IntroMed» оказывается
          хирургическое лечение пациентов с различными заболеваниями.
          Операции проводят квалифицированные хирурги с применением
          малотравматичных, эндоскопических технологий, что, например,
          позволяет провести операцию при внематочной беременности с
          сохранением труб. Также успешно выполняются микрохирургические
          операции на суставах, удаление желчного пузыря эндоскопическим
          методом. Такие операции проходят в щадящем режиме и требуют
          гораздо меньше обезболивающих средств. Немаловажными факторами
          являются отсутствие косметического дефекта и короткий период
          восстановления.
        </p>
        <h4 class="container-text">
          Уникальное предложение по хирургическим операциям:
        </h4>
        <div class="list">
          <p class="list">
            - максимальный результат (индивидуальные
            комфортабельные палаты, короткий период восстановления после
            хирургического вмешательства, прекрасный косметический эффект,
            реальные цены);</p>
          <p class="list">
            - минимальные разрезы (передовые малоинвазивные и эндоскопические
            технологии, новейшие эндохирургические комплексы с высокоразрешающей
            оптической способностью);</p>
          <p class="list">
            - минимальные расходы (требуется гораздо меньше обезболивающих средств);
          </p>
          <p class="list">
            - минимальные сроки временной нетрудоспособности;
          </p>
          <p class="list">
            - минимальные потери крови;
          </p>
          <p class="list">
            - минимальные сроки восстановления после операции;
          </p>
          <p class="list">
            - минимальные размеры рубца;
          </p>
          <p class="list">
            - минимальные риски и ошибки (операции проводятся врачами высшей
            категории на основании лучшей диагностики);
          </p>
          <p class="list">
            - минимальные потери времени (никаких очередей).
          </p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
