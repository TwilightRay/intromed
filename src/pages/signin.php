<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="dreamteam"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign Ip</title>
    <link rel="stylesheet" href="../assets/styles/common.min.css"/>
    <!--script(src="https://kit.fontawesome.com/b276d03c30.js" crossorigin="anonymous")-->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  </head>
  <body>
    <main>
      <div class="wrapper-in">
        <div class="authorisation">
          <form class="form-in" action="../assets/php/in.php" method="post">
            <a href="/">На главную</a>
            <label for="">Email</label>
            <input type="email" name="Email" placeholder="Введите Email" value="<?php echo @$Email; ?>"/>
            <label for="">Пароль</label>
            <input type="password" name="Password" placeholder="Введите пароль"/>
            <button type="submit" name="signin">Войти</button>
            <p>нет аккаунта -&nbsp;<a href="signup.php" style="margin-bottom: 0px">зарестрируйтеcь</a></p>
            <?php
             if ($_SESSION['errors']) {
               echo '<p class="errors">'.$_SESSION['errors'].'</p>';
             } unset($_SESSION['errors']);
             if ($_SESSION['success']) {
               echo '<p class="success">'.$_SESSION['success'].'</p>';
             } unset($_SESSION['success']);
            ?>
          </form>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
