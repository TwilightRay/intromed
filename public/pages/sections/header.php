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