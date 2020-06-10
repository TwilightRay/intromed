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
  <section>
    <div class="container-text">
    <div class="wrapper">
      <h3>Лечение в дневном стационаре</h3>
      <p>Жизнь в мегаполисе стремительна, времени не хватает ни на что.
        Порой в своём рабочем графике человеку сложно уделить много
        времени своему здоровью. И только когда симптомы недуга
        становятся достаточно тревожными и уже не обойтись без
        обращения в медицинское учреждение, он начинает думать о том,
        в какую клинику и к какому врачу обратиться. Однако далеко не
        у всех есть возможность лечь в стационар. В подобных ситуациях
        отличным решением будет лечение в дневном стационаре. Такая форма
        оптимальна для тех пациентов, кому занятость или домашние заботы
        не позволяют круглосуточно находиться под наблюдением врачей.
      </p>
      <p>Пребывание в дневном стационаре имеет целый ряд преимуществ:</p>
      <ul>
        <li type="circle">- Пребывание в дневном стационаре позволяет пациенту совмещать
          лечение с работой или учёбой, а в вечернее и ночное время находиться дома.
        </li>
        <li>
          - Лечение в дневном стационаре более эффективно по сравнению с
           привычным домашним лечением. Схема лечения разрабатывается
           индивидуально для каждого пациента его лечащим врачом, который
           отслеживает все изменения в состоянии больного и при необходимости
           корректирует терапию.
        </li>
        <li>
          - В плане диагностики дневной стационар — это идеальное решение,
          для тех кому необходимо пройти комплексное обследование.
          Вместо того, чтобы тратить время на поездки в клиники,
          обход разных врачей для получения направлений, ожидание в
          очередях, человек может быстро и в комфортных условиях
          пройти все необходимые процедуры в дневном стационаре.
        </li>
          - Все необходимые исследования пациент проходит в
          лечебно-диагностических отделениях клиники — УЗИ, ХОЛТЕР-ЭКГ, ФГДС и др.
          Также дневной стационар позволяет в удобное для пациента время
          проводить необходимую инфузионную терапию, курсовые
          внутримышечные инъекции, что в условиях обычной поликлиники невозможно.
        <li>
          - Пациент дневного стационара находится под наблюдением опытных врачей,
          обладающих навыками оказания экстренной помощи. Медицинские манипуляции
          проводит квалифицированный медицинский персонал.
          К лечебно-диагностическому процессу привлекаются профильные специалисты.
          Возможно сочетание лечения с проведением необходимых физиотерапевтических
           процедур.
        </li>
      </ul>
      <p>Подобный комплексный подход к лечению возможен только в рамках
        медицинского учреждения, он обеспечивает улучшение самочувствия и
        скорейшее выздоровление пациента. По окончании лечения проводится
        контроль анализов, заключительная консультация с выдачей выписки из
        истории болезни, даются рекомендации по диете, дальнейшему лечению и
        наблюдению.
      </p>
      <p>Лечению в дневном стационаре подлежат следующие заболевания:</p>
      <ul>
        <li>
          - органов пищеварения: язвенная болезнь, хронический холецистит,
          хронический панкреатит, эрозивные гастродуодениты, стеатогепатиты и др.;
        </li>
        <li>
          - костно-мышечной системы: остеопороз, остеохондроз, полиартриты, артрозы и др.;
        </li>
        <li>
          - сердечно-сосудистой системы: гипертоническая болезнь, нарушение ритма
          сердца, ИБС, НЦД облитерирующий атеросклероз;
        </li>
        <li>
          - органов дыхания: острый и хронический бронхит, бронхиальная астма и др.;
        </li>
        <li>
          - эндокринной системы: сахарный диабет, остеопороз и др.;
        </li>
        <li>
          - мочеполовой системы у мужчин и женщин;
        </li>
        <li>
          - ЛОР-органов: ларингит, фарингит, ангина, отит и др;
        </li>
        <li>
          - нервной системы: сосудистые, травматические, инфекционные и др.
        </li>
      </ul>
      <p>
        Дневной стационар доступен пациентам, имеющим полисы обязательного или
        добровольного медицинского страхования (ОМС и ДМС), а также на платной основе.
      </p>
    </div>
  </div>
  </section>
</body>
</html>
