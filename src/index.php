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
//= ./pages/sections/header.php
    </header>
    <main>
      <div class="wrapper">
        <section>
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
                      id="search-img"
                      >
                      <span class="search-img"></span>
                      <p class="search-prompt">Например, <a class="search-prompt-a" href="#">вызов врача на дом</a></p>
                    </div>
                    </form>
                    <a class="btn-white" id="btn-white1" href="#">Записаться на прием</a>
                    <a class="btn-white" id="btn-white2" href="#">Диагностика</a>
                    <a class="btn-white" id="btn-white3" href="#">Реабилитация</a>
                </div>
              </div>
              <p class="p-description">Клиника IntroMed  объединяет профессионализм, достижения научной медецины
                и передовые технологии, используя многолетний опыт для создания идеальных
                условий организации мер по восстановлению и охране здоровья населения.</p>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer>

    </footer>
  </body>
</html>
