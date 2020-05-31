<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Услуги и цены</title>
    <link rel="stylesheet" href="../assets/css/services-and-prices.min.css">
    <link rel="stylesheet" href="../assets/css/header.min.css"/>
    <link rel="stylesheet" href="../assets/css/signin.min.css"/>
  <script type="text/javascript" src="../assets/js/modules/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="../assets/js/list.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="contact">
        <div class="top">
          <p><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
          <span class="location-img"></span>
          <a class="location" href="#">Адреса медицинских центров</a>
          <span class="phone-img"></span>
          <a class="phone" href="#"> +7 846 247 55 33</a>
          <span class="results-img"></span>
          <a class="results" href="#">Получить результаты</a>
          <span class="sign-in-img"></span>
          <?php if ($_SESSION['user']): ?>
            <p><?=$_SESSION['user']['name']?></p>
            <a href="../assets/php/logout.php">Выйти</a>
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
          <p></p>
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
            <input type="password" placeholder="Ваш Пароль" name="password" required>
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
                <a href="#">Врачи</a>
                <a href="#">Контакты</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    <div class="container">
      <h2 class="prices">Цены на наши услуги</h2>
      <div class="object">
                 <h4 class="objectTitle">
                                         <a class="objectTitleTxt" href="#"  >Консультации врачей</a>
                                 </h4>
                 <div class="contentBlock">
      <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация эндокринолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Сахар крови</td>
          <td width="10"></td>
          <td class="td-p td-price">150 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация гастроэнтеролог / гепатолог</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация кардиолога/ревматолога (к.м.н.) / повторная</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация офтальмолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация гинеколога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация уролога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация маммолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация травматолога - ортопеда / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация дерматовенеролога / повторная </td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация невролога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация терапевта / повторная</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб. / 600мруб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация физиотерапевта / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Консультация проктолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация оториноларинголога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >УЗИ диагностика</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p"></td>
          <td width="10"></td>
          <td class="td-p td-price td-pink">2D</td>
          <td class="td-p td-price td-pink">3D</td></tr>
        <tr>
          <td class="td-p">УЗИ абдоминальное, почки</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ абдоминальное, почки, мочевой пузырь</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">850 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ почек, мочевого пузыря</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ желудка</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">900 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ гинекологическое (с вагинальным датчиком)</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price">1300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ гинекологическое,&nbsp; почки + мочевой пузырь</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td>
          <td class="td-p td-pink td-price">1300 руб.</td></tr>
        <tr>
          <td class="td-p">УЗИ молочных желез и лимфоузлов</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ щитовидной железы и лимфоузлов</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ щитовидной железы и лимфоузлов с кровотоком</td>
          <td width="10"></td>
          <td class="td-p td-price">750 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ урологическое (простата, почки, мочевой пузырь, V остаточной мочи, мошонка)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">950 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ суставов (плечевые, локтевые, коленные, тазобедренные, голеностопные, лучезапястные)</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ шейного отдела позвоночника</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ поясничного отдела позвоночника</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ мягких тканей</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ придаточных пазух</td>
          <td width="10"></td>
          <td class="td-p td-price">750 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ&nbsp;по группам лимфоузлов</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">Нейросонография с кровотоком</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ при беременности (5-10 недель)</td>
      <td></td>
          <td class="td-p td-pink td-price">800 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗГД при беременности (10-20 недель)</td>
      <td></td>
          <td class="td-p td-price">1100 руб.</td>
          <td class="td-p td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗГД при беременности (более 20 недель)</td>
      <td></td>
          <td class="td-p td-pink td-price">1200 руб.</td>
          <td class="td-p td-pink td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-p">УЗГД при беременности с записью на диск</td>
      <td></td>
          <td class="td-p td-price"></td>
          <td class="td-p td-price">2000 руб. + 200 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Эходопплеркардиография (цветной доплер)</td>
      <td></td>
          <td class="td-p td-pink td-price">1200 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">ЭКГ (электрокардиография)</td>
      <td></td>
          <td class="td-p td-price">400 руб.</td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Холтер ЭКГ/Холтер АД (суточное мониторирование)</td>
      <td></td>
          <td class="td-p td-pink td-price">1200 руб.</td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">УЗИ гинекологическое с исследованием кровотока в артериях матки</td>
      <td></td>
          <td class="td-p td-price"></td>
          <td class="td-p td-price">1300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗДГ при беременности (двойня, более 20 недель)</td>
          <td bgColor="#ffffff"></td>
          <td class="td-p td-pink td-price">1900 руб.</td>
          <td class="td-p td-pink td-price">3000 руб.</td></tr>
        <tr>
          <td class="td-p">УЗИ орбит глаз</td>
          <td bgColor="#ffffff"></td>
          <td class="td-p td-price">800 руб.</td>
          <td class="td-p td-price"></td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Дуплексное сканирование</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Экстракраниальных артерий</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-p">Экстракраниальных артерий и ТКД (2 исследования)</td>
          <td width="10"></td>
          <td class="td-p td-price">1700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Магистральных вен нижних конечностей</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-p">Магистральных вен верхних конечностей</td>
          <td width="10"></td>
          <td class="td-p td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Магистральных артерий нижних конечностей</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-p">Магистральных артерий верхних конечностей</td>
          <td width="10"></td>
          <td class="td-p td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Брюшного отдела аорты, её парных и непарных ветвей (аневризмы)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-p">Почечных артерий</td>
          <td width="10"></td>
          <td class="td-p td-price">1100 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Дуплексное сканирование вен + артерий нижних конечностей</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1700 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>
                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Эндоскопия</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">ЭГДС диагностическая (с HP тестом)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1800 руб.</td></tr>
        <tr>
          <td class="td-p">Щипцовая биопсия</td>
          <td width="10"></td>
          <td class="td-p td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Браш-биопсия (2 стекла)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">250 руб.</td></tr>
        <tr>
          <td class="td-p">Колоноскопия</td>
          <td width="10"></td>
          <td class="td-p td-price">3000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Биопсия</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1500 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Физиотерапия</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-p td-pink">Физиолечение:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- гальванический воротник по Щербаку</td>
          <td width="10"></td>
          <td class="td-p td-price">590 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- магнитотерапия препаратом «Алмаг»-02 (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">- светолечение препаратом «Биоптрон» (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Магнитолазерная терапия аппаратом «Матрикс»:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- накожная методика (1 область, 1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- внутриполостная методика (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">- надвенная лазеротерапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- вибромагнитолазерная терапия – ВМЛТ (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">900 руб.</td></tr>
        <tr>
          <td class="td-p">- внутривенная лазеротерапия - ВЛОК (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- лазерный душ (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">- ультрофиолетовое излучение УФОК (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Электрофорез аппаратом «Эльфор»:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- электрофорез воротниковой зоны с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">590 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- электрофорез внутриполостной зоны с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">590 руб.</td></tr>
        <tr>
          <td class="td-p">- с препаратом клиники (1 процедура, 1 зона)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- с грязевым аппликатором «Пелоид» (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">- с полиминеральными салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- с органо-минеральными салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">- с бишофитовыми салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- с хондропротектором «Карипаин» (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение аппаратом УЗТ-101 «Ф»:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- фонофорез с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">- ультразвуковая терапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Электросон</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Транскраниальная электростимуляция / транскраниальная микрополяризация</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Мезодиэнцефальная модуляция</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Внутритканевая стимуляция на аппарате ВТЭС-ПРБ</td>
          <td width="10"></td>
          <td class="td-p td-price">890 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Лечение аппаратом «Амплипульс-5»: СМТ – терапия (1 процедура, 1 поле/2 поля)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 / 600&nbsp;руб.</td></tr>
        <tr>
          <td class="td-p">СМТ – форез (1 процедура, 1 поле/2 поля)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 / 700&nbsp;руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Лазерофорез</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">Небулайзерная терапия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Массаж</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация физиотерапевта</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж головы (лобно-височной и затылочно-теменной областей)</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж лица (лобной, окологлазничной, верхне- и нижнечелюстной областей)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Бюст классический</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж шейно-воротниковой зоны (задней поверхности шеи, спины до уровня IV грудного позвонка, передней поверхности грудной клетки до II ребра)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж верхней конечности</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж верхней конечности, надплечья и области лопатки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж плечевого сустава (верхней трети плеча, области плечевого сустава, и надплечья одноименной стороны)</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж локтевого сустава (верхней трети предплечья, области локтевого сустава и нижней трети плеча)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж лучезапястного сустава (проксимального отдела кисти, области лучезапястного сустава и предплечья)</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж кисти и предплечья</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж области грудной клетки (области передней поверхности грудной клетки от поверхности передних границ надплечий до реберных дуг и области спины от VII шейного до поясничного позвонка)</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж спины (от VII шейного до I поясничного позвонка и от левой до правой средней аксиллярной линии; у детей - включая пояснично-крестцовую область)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж мышц передней брюшной стенки</td>
          <td width="10"></td>
          <td class="td-p td-price">900 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж пояснично-крестцовой области (от I поясничного позвонка до нижних ягодичных складок)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж пояснично-крестцовой области</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж спины и поясницы (от VII шейного позвонка до крестца и от левой до правой средней аксиллярной линии)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж шейно-грудного отдела позвоночника&nbsp; в области задней поверхности шеи и области спины до I поясничного позвонка от левой до правой задней аксиллярной линии)</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж шейно-грудного отдела позвоночника&nbsp; </td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж области позвоночника (в области задней поверхности шеи, спины и пояснично-крестцовой области от левой до правой задней аксиллярной линии)</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж нижних конечностей и поясницы (для детей до 12 лет)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">750 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж нижней конечности и поясницы (области стопы, голени, бедра, ягодичной пояснично-крестцовой области)</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж тазобедренного сустава (верхней трети бедра, области тазобедренного сустава) и ягодичной области одноименной стороны</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж коленного сустава (верхней трети голени, области коленного сустава и нижней трети бедра)</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Массаж голеностопного сустава (проксимального отдела стопы, области голеностопного сустава и нижней трети голени)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Общий массаж (взрослые)</td>
          <td width="10"></td>
          <td class="td-p td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Общий массаж (у детей грудного и младшего (дошкольного) возраста)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Дневной стационар</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Внутримышечная инъекция (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">190 руб.</td></tr>
        <tr>
          <td class="td-p">Подкожная инъекция (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">190 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Внутривенная инъекция (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">240 руб.</td></tr>
        <tr>
          <td class="td-p">Аутогемотерапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Внутривенное капельное вливание</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">390 руб.</td></tr>
        <tr>
          <td class="td-p">Внутривенное капельное вливание:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- в/в капельное вливание с кордароном (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">790 руб.</td></tr>
        <tr>
          <td class="td-p">- в/в капельное вливание с ремаксолом</td>
          <td width="10"></td>
          <td class="td-p td-price">990 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- в/в капельное вливание с реамберином</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">790 руб.</td></tr>
        <tr>
          <td class="td-p">- в/в капельное вливание раствора Метрогил</td>
          <td width="10"></td>
          <td class="td-p td-price">590 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- в/в капельное вливание раствора Рингера</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">690 руб.</td></tr>
        <tr>
          <td class="td-p">- в/в капельное вливание с дексаметазоном</td>
          <td width="10"></td>
          <td class="td-p td-price">790 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- в/в капельное вливание глюкозы с аскорбиновой кислотой</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">690 руб.</td></tr>
        <tr>
          <td class="td-p">- в/в капельное вливание КМА 250 мл</td>
          <td width="10"></td>
          <td class="td-p td-price">690 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Блокады:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- с препаратами пациента</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- с препаратами клиники: дипроспан/флостерон</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">900 / 650 руб.</td></tr>
        <tr>
          <td class="td-p">Физиолечение:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- Гальванический воротник по Щербаку</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">590 руб.</td></tr>
        <tr>
          <td class="td-p">- магнитотерапия аппаратом Алмаг-02 (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- светолечение аппаратом Биоптрон (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Магнитолазерная терапия аппаратом Матрикс:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- накожная методика (1 область, 1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">- внутриполостная методика (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- надвенная лазеротерапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">ВМЛТ вибромагнитолазерная терапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">770 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Лазерный душ (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">ВЛОК внутривенная лазеротерапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Электрофорез аппаратом Эльфор:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">с препоратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">с грязевым аппликатором Пелоид (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">с полиминеральными салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">с органо-минеральными салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">с бишофитовыми салфетками (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">с хондропротектором Карипаин (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p">Электрофорез воротниковой зоны с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">590 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Электрофорез внутриполостной с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">590 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение препаратом УЗТ-101 "Ф":</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">фонофорез с препаратом клиники (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">ультразвуковая терапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Транскраниальная электростимуляция</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Мезодиэнцефальная модуляция</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Лечение аппаратом "Амплипульс-5":</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">СМТ-терапия (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">СМТ-форез (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">Небулайзерная терапия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Лазерофорез</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">Озонотерапия:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Консультация озонотерапевта</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Внутривенное капельное введение озонированного физиологического раствора</td>
          <td width="10"></td>
          <td class="td-p td-price">790 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Подкожное введение озона (одно поле)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Малая аутогемотерапия</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Влагалищные тампоны с озонированным маслом</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">350 руб.</td></tr>
        <tr>
          <td class="td-p">Влагалищное орошение озонированным физ. раствором</td>
          <td width="10"></td>
          <td class="td-p td-price">300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Ректальная инсуффляция озона</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">350 руб.</td></tr>
        <tr>
          <td class="td-p">Прием озонированной дистиллированной воды</td>
          <td width="10"></td>
          <td class="td-p td-price">100 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Аппликация озонированного масла</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Урология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация уролога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Взятие мазка у мужчин</td>
          <td width="10"></td>
          <td class="td-p td-price">100 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Взятие соскоба у мужчин на ПЦР/РИФ</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">100 / 100&nbsp;руб.</td></tr>
        <tr>
          <td class="td-p">Массаж простаты (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">650 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Инстилляция мочевого пузыря лекарственным веществом</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Замена надлобкового мочепузырного дренажа (катетер Фолея) / с выездом на дом</td>
          <td width="10"></td>
          <td class="td-p td-price">1100 / 2000 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Гинекология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация гинеколога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Обследование:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- мазок на степень чистоты</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">- ИППП хламидиоз, уреаплазмоз, микоплазмоз, ВПГ, ВПЧ, ЦМВ-РИФ, ПЦР (1 инфекция)</td>
          <td width="10"></td>
          <td class="td-p td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-pink td-p">- общий анализ крови</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-p">- общий анализ мочи</td>
          <td width="10"></td>
          <td class="td-p td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-pink td-p">- МРСКА</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-p">- ИФА на сифилис</td>
          <td width="10"></td>
          <td class="td-p td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-pink td-p">- ИФА на ВИЧ</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-p">- биохимический анализ крови</td>
          <td width="10"></td>
          <td class="td-p td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-pink td-p">- кольпоскопия расширенная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">- онко-цитология</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- бактериальный посев на гонорею</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">- бактериальный посев на м/ф</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- гормоны ФС Г,Л Г, П Р, Э</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">по лабораторному прайсу</td></tr>
        <tr>
          <td class="td-p">- гистология</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- забор крови</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">100 руб.</td></tr>
        <tr>
          <td class="td-p">- нативный мазок</td>
          <td width="10"></td>
          <td class="td-p td-price">300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ гинекологическое</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Фолликутометрия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Лечение:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- ванночки с лекарственными препаратами</td>
          <td width="10"></td>
          <td class="td-p td-price">200 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- НУЗ с лекарственными препаратами</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">- аппликация с лекарственным препаратом пациента + НУЗ</td>
          <td width="10"></td>
          <td class="td-p td-price">550 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- тампоны с лекарственными препаратами</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p">- обработка шейки матки после ДЭЭ</td>
          <td width="10"></td>
          <td class="td-p td-price">200 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- магнитотерапия «Алмаг»</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">- светолечение «Биоптрон»</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- магнитолазер «Узор» (в зависимости от методики)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450&nbsp;руб.</td></tr>
        <tr>
          <td class="td-p">- электрофорез с лекарственными препаратами</td>
          <td width="10"></td>
          <td class="td-p td-price">450&nbsp;руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- внутривенное струйное введение лекарственных препаратов</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">240 руб.</td></tr>
        <tr>
          <td class="td-p">- внутривенное капельное введение лекарственных препаратов</td>
          <td width="10"></td>
          <td class="td-p td-price">390 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- внутривенное введение лекарственных препаратов</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">190 руб.</td></tr>
        <tr>
          <td class="td-p">- аутогемотерапия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">-&nbsp;ВЛОК (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p">- инстилляция уретры (с лекарством пациента)</td>
          <td width="10"></td>
          <td class="td-p td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Хирургическое лечение:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- биопсия шейки матки</td>
          <td width="10"></td>
          <td class="td-p td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- соскоб цервикального канала</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">- полипэктомия</td>
          <td width="10"></td>
          <td class="td-p td-price">3000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- аспирационная биопсия полости матки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1200 руб.</td></tr>
        <tr>
          <td class="td-p">- пайпель система</td>
          <td width="10"></td>
          <td class="td-p td-price">900 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- иммуногистохимический анализ (маркер Р16 INK 4а)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">3800 руб.</td></tr>
        <tr>
          <td class="td-p">- ДЭЭ шейки матки (Сургитрон) + обезболивание</td>
          <td width="10"></td>
          <td class="td-p td-price">3700&nbsp;+ 300 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Удаление кондилом:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">- химическая деструкция</td>
          <td width="10"></td>
          <td class="td-p td-price">100&nbsp;- 500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- радиохирургия</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 - 2500&nbsp;руб.</td></tr>
        <tr>
          <td class="td-p">ВМК:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- введение</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1600 руб.</td></tr>
        <tr>
          <td class="td-p">- удаление</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- инструментальное удаление</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-p">Анестезия:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- аппликационная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">50 руб.</td></tr>
        <tr>
          <td class="td-p">- проводниковая, инфильтрационная</td>
          <td width="10"></td>
          <td class="td-p td-price">300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- медикаментозный аборт с обследованием</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">9000 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Дерматология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация дерматолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление контагиозного моллюска:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">до 5 штук</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">от 6 до 10 штук</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">с анестезией мазь до 5 штук</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">с анестезией мазь от 6 до 10 штук</td>
          <td width="10"></td>
          <td class="td-p td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Удаление образований с помощью сургитрона / с анестезией аппликационной инфильтративной</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 - 1500 / 460 - 2500 руб.</td></tr>
        <tr>
          <td class="td-p">Забор биоматериала и исследование на флору, чувствительность к антибиотикам</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Забор биоматериала исследование на грибы (микроскопия)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p">Осмотр дерматолога при приеме на работу (при наличии анализа на сифилис)</td>
          <td width="10"></td>
          <td class="td-p td-price">600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Консультация на дому (взрослые, дети) с предоставлением транспорта</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Оториноларингология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация оториноларинголога</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение заболеваний уха:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Удаление серной пробки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">480 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление инородного тела наружного уха</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Влажный туалет уха</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">450 руб.</td></tr>
        <tr>
          <td class="td-p">Местное лечение наружного и среднего уха</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Продувание слуховой трубы по Политцеру</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p">Продувание слуховой трубы через катетер с введением лекарственных препаратов</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Промывание аттика через канюлю</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">350 руб.</td></tr>
        <tr>
          <td class="td-p">Вскрытие фурункула наружного уха</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Вскрытие гематомы ушной раковины</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 руб.</td></tr>
        <tr>
          <td class="td-p">Вскрытие нагноившейся атеромы ушной раковины</td>
          <td width="10"></td>
          <td class="td-p td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Парацентез барабанной перепонки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение заболеваний носа:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Удаление инородного тела носа</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение носа и ППН по методу Пройтца</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Передняя тампонада носа</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Прижигание слизистой носа лекарственными препаратами</td>
          <td width="10"></td>
          <td class="td-p td-price">300 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Склерозирующая терапия носовых пазух</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Пункция верхнечелюстной пазухи</td>
          <td width="10"></td>
          <td class="td-p td-price">1600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Вскрытие гематомы носовой перегородки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-p">Вскрытие фурункула носа</td>
          <td width="10"></td>
          <td class="td-p td-price">800 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Местное лечение носа</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение заболеваний глотки:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Местное лечение глотки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">300 руб.</td></tr>
        <tr>
          <td class="td-p">Промывание лакун миндалин через канюлю</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Удаление инородного тела глотки</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">650 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление доброкачественных опухолей глотки</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Вскрытие кисты миндалины</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Вскрытие гнойных кист миндалин</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Вскрытие паратонзиллярного абсцесса</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">2000 руб.</td></tr>
        <tr>
          <td class="td-p">Повторное вскрытие паратонзиллярного абсцесса с промыванием полости антисептическим раствором</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Фонофорез глотки лек. веществами</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение заболеваний гортани:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">Шейные блокады</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление инородного тела гортаноглотки</td>
          <td width="10"></td>
          <td class="td-p td-price">700 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Внутри гортанное вливание лекарственных препаратов</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">300 руб.</td></tr>
        <tr>
          <td class="td-p">Мазки из носа, глотки, уха на бактериологическое исследование</td>
          <td width="10"></td>
          <td class="td-p td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Риноцитограмма</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">400 руб.</td></tr>
        <tr>
          <td class="td-p">Лечение на аппарате «ТОНЗИЛОР» (1 процедура)</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Офтальмология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация офтальмолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 руб.</td></tr>
        <tr>
          <td class="td-p">Профилактический осмотр (0-86-у, справка на оружие)</td>
          <td width="10"></td>
          <td class="td-p td-price">450 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Авторефрактометрия с подбором очков</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">300 руб.</td></tr>
        <tr>
          <td class="td-p">Компьютерная периметрия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Бесконтактная тонометрия (измерение внутриглазного давления)</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p">Тонометрия по Маклакову (измерение внутриглазного давления)</td>
          <td width="10"></td>
          <td class="td-p td-price">200 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Гониоскопия</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">300 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление инородного тела</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Зондирование и промывание слезных путей</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Массаж век (1 сеанс)</td>
          <td width="10"></td>
          <td class="td-p td-price">250 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Забор мазка с конъюнктивы</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">200 руб.</td></tr>
        <tr>
          <td class="td-p">Исследование на демодекс</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Забор мазка с конъюнктивы для исследования методом ПЦР на инфекции:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">ВПГ</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УМВ</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Хламидиоз</td>
          <td width="10"></td>
          <td class="td-p td-price">500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">УЗИ орбиты глаза</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">500 руб.</td></tr>
        <tr>
          <td class="td-p">Динамическая магнитно-лазерная стимуляция на аппарате "АМО-АТОС-ИКЛ" (1 сеанс)</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Проктология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация проктолога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">800 руб.</td></tr>
        <tr>
          <td class="td-p">Аноскопия</td>
          <td width="10"></td>
          <td class="td-p td-price">400 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Ректороманоскопия</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1000 руб.</td></tr>
        <tr>
          <td class="td-p">Ректосигмоскопия</td>
          <td width="10"></td>
          <td class="td-p td-price">1500 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Склеротерапия</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">2500 руб.</td></tr>
        <tr>
          <td class="td-p">Латексное легирование геморроидального узла (1 узел)</td>
          <td width="10"></td>
          <td class="td-p td-price">1400 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Операции:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">Удаление одиночных геморроидальных узлов аппаратом «Сургитрон» под местной анестезией</td>
          <td width="10"></td>
          <td class="td-p td-price">4000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Иссечение анальной трещины аппаратом «Сургитрон» под местной анестезией</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">6500 руб.</td></tr>
        <tr>
          <td class="td-p">Иссечение интрасфинктерных параректальных свищей&nbsp; аппаратом «Сургитрон» под местной анестезией </td>
          <td width="10"></td>
          <td class="td-p td-price">6600 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Удаление остроконечных перианальных кондилом аппаратом «Сургитрон» под местной анестезией </td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">5000 руб.</td></tr>
        <tr>
          <td class="td-p">Удаление анальных палипов, гипертрофированных анальных сосочков&nbsp; аппаратом «Сургитрон» под местной анестезией&nbsp;&nbsp; </td>
          <td width="10"></td>
          <td class="td-p td-price">4000 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">Перианальная блокада при острой анальной трещине, сопровождающейся сильным болевым синдромом</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">1600 руб.</td></tr>
        <tr>
          <td class="td-p">Наружный острый тромбоз. Иссечение наружного тромбированного узла</td>
          <td width="10"></td>
          <td class="td-p td-price">3500 руб.</td></tr></tbody></table></div>
                                          </div>
              </div>

                      <div class="object">
                  <h4 class="objectTitle">
                                          <a class="objectTitleTxt" href="#"  >Вертебрология</a>
                                  </h4>
                  <div class="contentBlock">
                                              <div class="objectNote"><table borderColor="#ffffff" cellSpacing="0" cellPadding="0" width="100%" border="0">
      <tbody>
        <tr>
          <td class="td-pink td-p">Консультация вертебролога / повторная</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">600 / 450 руб.</td></tr>
        <tr>
          <td class="td-p">Блокады:</td>
          <td width="10"></td>
          <td class="td-p td-price"></td></tr>
        <tr>
          <td class="td-pink td-p">- паравертебральная блокада односторонняя / двусторонняя</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 / 900 руб.</td></tr>
        <tr>
          <td class="td-p">- межреберная паравертебральная блокада односторонняя / двусторонняя</td>
          <td width="10"></td>
          <td class="td-p td-price">700 / 900 руб.</td></tr>
        <tr>
          <td class="td-pink td-p">- блокада в области большого вертела односторонняя / двусторонняя</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price">700 / 900 руб.</td></tr>
        <tr>
          <td class="td-p">- блокада при эпикондилитах односторонняя / двусторонняя</td>
          <td width="10"></td>
          <td class="td-p td-price">700 / 900 руб.</td></tr>
        <tr>
          <td class="td-p td-pink">Мануальная терапия:</td>
          <td width="10"></td>
          <td class="td-p td-pink td-price"></td></tr>
        <tr>
          <td class="td-p">При болях в шейном отделе позвоночника, при болях в спине (в грудном и поясничном отделе позвоночника), головных болях, при мышечной боли, нарушениях осанки, при ограждении движений в суставах туловища</td>
          <td width="10"></td>
          <td class="td-p td-price">700 / 900 руб.</td></tr></tbody></table></div>
        </div>
  </body>
</html>
