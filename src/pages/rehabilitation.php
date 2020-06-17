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
        <h3 class="container-text">Реабилитация</h3>
        <p class="container-text1">
          Реабилитация, или восстановительное лечение, — это процесс и
          система медицинских, психологических, педагогических,
          социально-экономических мероприятий, направленных на устранение
          или возможно более полную компенсацию ограничений жизнедеятельности,
          вызванных нарушением здоровья со стойким расстройством функций
          организма. Восстановительное лечение необходимо, когда у больного
          значительно снижены функциональные способности, способности к
          обучению, нарушены трудовая деятельность, социальные отношения и т. д.
        </p>
        <p class="container-text1">
          Восстановительное лечение является частью ежедневного ухода за больным.
          При восстановительном уходе наша главная цель состоит в том, чтобы
          помочь больному стать функционально полноценным и независимым от
          посторонней помощи.
        </p>
        <h4 class="container-text">
          Специалисты, занимающиеся реабилитацией:
        </h4>
        <div class="list">
          <p class="list">
            - врачи-специалисты (невропатологи, ортопеды, терапевты и др.)
            помогают диагностировать и лечить заболевания, которые ограничивают
            жизнедеятельность пациентов, решают проблемы медицинской реабилитации;
          </p>
          <p class="list">
            - cпециалист по физиотерапии;
          </p>
          <p class="list">
            - специалист по лечебной физкультуре и кинезитерапии;
          </p>
          <p class="list">
            - специалисты по нарушению речи (логопед);
          </p>
          <p class="list">
            - психотерапевт.
          </p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
