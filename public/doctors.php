<?php session_start();

if ($_SESSION['user']) {
  $users = $_SESSION['user'];
} elseif ($_SESSION['admin']) {
  $users = $_SESSION['admin'];
}

$host = "localhost";
$user = "mysql";
$password = "mysql";
$database = "intromed";

$link = mysqli_connect($host, $user, $password, $database);

$query = 'SELECT * FROM `doctors`';
$data = $link->query($query);

if (isset($_GET["delete"])) {
  $query = "DELETE FROM `doctors` WHERE `id` = {$_GET['delete']}";
  mysqli_query($link, $query);
  header("Location: doctors.php");
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
          <?php if ($_SESSION['admin']): ?>
          <a class="add" href="#" onclick="openFormAdd()">Добавить</a>
          <?php endif; ?>
          <div class="list-doctors">
            <?php while($doctors = mysqli_fetch_assoc($data)): ?>
              <div class="box-doctors">
                <div class="doctors">
                  <?php echo "<img class='pictures' src='".$doctors['pictures']."'>"?>
                  <span class="name-doctors">ФИО: <?=$doctors['name']?></span>
                  <span class="name-specialty">Специальность: <?=$doctors['specialty']?></span>
                  <span class="name-education">Образование: <?=$doctors['education']?></span>
                  <?php if ($_SESSION['admin']): ?>
                  <div class="btn-dock">
                    <a class="del" href="?delete=<?=$doctors['id']?>">Удалить</a>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="form-popup" id="add">
            <form action="../assets/php/add.php" method="post" class="form-container" enctype="multipart/form-data">
              <h2>Добавить врача</h2>
            <label for="pictures"><b>Изображение</b></label>
              <input type="file" placeholder="Изображение" name="pictures" multiple='true' required>
            <label for="name"><b>ФИО</b></label>
              <input type="text" placeholder="ФИО врача" name="name" required>
            <label for="specialty"><b>Специальность</b></label>
              <input type="text" placeholder="Специальность врача" name="specialty" required>
            <label for="education"><b>Образование</b></label>
              <input type="text" placeholder="Образование врача" name="education" required>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
              <button type="submit" name="add" class="btn">Добавить</button>
              <button type="button" class="btn cancel" onclick="closeFormAdd()">Закрыть</button>
            </form>
          </div>
        </div>
      </main>
      <script src="../assets/js/main.js"></script>
    </body>
  </html>