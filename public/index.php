<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="dreamteam"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>IntroMed</title>
    <link rel="stylesheet" href="../assets/css/header.min.css"/>
    <link rel="stylesheet" href="../assets/css/common.min.css"/>
    <!--script(src="https://kit.fontawesome.com/b276d03c30.js" crossorigin="anonymous")-->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="shortcut icon" href="/assets/static/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="contact">
          <div class="top">
            <span class="location-img"></span>
            <a class="location" href="#">Адреса медицинских центров</a>
            <span class="phone-img"></span>
            <a class="phone" href="#"> +7 846 247 55 33</a>
            <span class="results-img"></span>
            <a class="results" href="#">Получить результаты</a>
            <span class="sign-in-img"></span>
            <a class="sign-in" href="#">Войти</a>
            <line class="hr"></line>
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
        <section1>
          <div class="conteiner">
            <div class="doctors-img">
              <div class="gradient">
                <div class="search-form">
                  <form class="search" action="index.html" method="post">
                    <div class="search-service">
                      <h2 class="search-h">Простой поиск услуги</h2>
                      <input
                      class="search-input"
                      type="search"
                      placeholder="Введите специализацию, врача или услугу"
                      id=""
                      >
                      <span class="search-img"></span>
                      <p class="search-prompt">Например, <a class="search-prompt-a" href="#">вызов врача на дом</a></p>
                    </div>
                    </form>
                    <a class="btn-white white-img1" href="#">Записаться на прием</a>
                    <a class="btn-white white-img2" href="#">Диагностика</a>
                    <a class="btn-white white-img3" href="#">Реабилитация</a>
                </div>
              </div>
                <div class="about">
                  <p class="p-description">Клиника IntroMed  объединяет профессионализм, достижения научной медецины<br>
                    и передовые технологии, используя многолетний опыт для создания идеальных<br>
                    условий организации мер по восстановлению и охране здоровья населения.
                  </p>
                  <span class="wine-img"></span>
                </div>
            </div>
          </div>
        </section1>
      </div>
        <section2>
          <div class="wrapper">
            <div class="services">
              <p class="services-p">Популярные виды услуг</p>
              <a class="services-btn">Все услуги</a>
            </div>
            <div class="grid">
              <div class="item1"><span class="img-1 span-right"></span>Консультация специалистов</div>
              <div class="item1"><span class="img-4 span-left"></span>Лечение</div>
              <div class="item"><span class="img-2 span-right"></span>Медосмотр</div>
              <div class="item"><span class="img-5 span-left"></span>Хирургия</div>
              <div class="item1"><span class="img-3 span-right"></span>Диагностика</div>
              <div class="item1"><span class="img-6 span-left"></span>Реабилитация</div>
            </div>
            <div class="slide">
              <input type="radio" name="slider2" id="slider2_1" checked="checked">
              <label for="slider2_1"></label>
              <div>
                <img src="./assets/img/foto1.png">
              </div>
                <label for="slider2_2"></label>
                <input type="radio" name="slider2" id="slider2_2">
                <label for="slider2_2"></label>
              <div>
                <img src="./assets/img/foto2.jpg">
              </div>
                <label for="slider2_3"></label>
                <input type="radio" name="slider2" id="slider2_3">
                <label for="slider2_3"></label>
              <div>
                <img src="./assets/img/foto3.jpg">
              </div>
                <label for="slider2_4"></label>
            </div>
          </div>
        </section2>
        <section3>
          <div class="form-back">
            <form class="making-an-appointment" action="index.html" method="post">
              <h2>Записаться на прием</h2>
                <div>
                  <label>Имя</label>
                  <input type="text" name="" placeholder="Имя для обращения">
                </div>
                <div>
                  <label>Телефон</label>
                  <input type="text" name="" placeholder="Номер для связи">
                </div>
                <div>
                  <label>Филиал</label>
                  <input type="text" name="" placeholder="Выберите из списка">
                </div>
              <input type="checkbox" name="">
              <label for="">Согласие на обработку персональных данных</label>
              <button type="submit" name="send">Отправить</button>
            </form>
          </div>
        </section3>
    </main>
    <footer>
<div class="wrapper">
<span class="footer"></span>
</div>
    </footer>
  </body>
</html>