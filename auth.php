<?
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sign.css">
  <title>Регистрация</title>
</head>

<body>

  <?
  include("components/header.php");
  ?>

  <div class="main">
    <p class="regg">Регистрация</p>
    <div class="form_reg">
      <form method="POST">

        <input type="email" name="login" placeholder="Email"><br><br>
        <input type="text" name="name" placeholder="Имя"><br><br>
        <input type="text" name="surname" placeholder="Фамилия"><br><br>
        <input type="password" name="pswd" placeholder="Пароль"><br><br>
        <input type="password" name="pswd2" placeholder=" Повторите пароль"><br><br>
        <input type="radio" class="gender" name="gender" value="m">Мужской<br><br>
        <input type="radio" class="gender" name="gender" value="f">Женский <br><br>
        <br><input class="registr" type="submit" name="reg" value="Зарегестрироваться"><br>
        <p class="yes-acc">
          Есть аккаунт?
          <a class="auth-a" href="art.php">
            Войти
          </a>
        </p>
        <?
        $login = $_POST['login'];
        $pswd = $_POST['pswd'];
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $reg = $_POST['reg'];

        $str_add_user = "INSERT INTO `users` (`id`, `login`, `pswd`, `surname`, `name`, `gender`, `role`) VALUES (NULL, '$login', '$pswd', '$surname', '$name', '$gender', '0')";

        if ($_POST['reg']) {
          if ($login && $pswd && $surname && $name && $gender) {
            $run_add_user = mysqli_query($connect, $str_add_user);
            if ($run_add_user) {
              $str_auth_user = "SELECT * FROM `users` WHERE `login` = '$login' AND `pswd` = '$pswd' ";
              $run_auth_user = mysqli_query($connect, $str_auth_user);
              $count_user = mysqli_num_rows($run_auth_user);
              if ($count_user == 1) {
                $out_user = mysqli_fetch_array($run_auth_user);
                $_SESSION['user'] = ["name" => $out_user['name'], "login" => $out_user['login'], "surname" => $out_user['surname'], "id" => $out_user['id'], "role" => $out_user['role']];
                header('location: profile.php');
              }
            } else {
              echo "<div class='red'>Ошибка при регистрации</div>";
            }
          } else {
            echo "<div class='red'>Заполните все поля!</div>";
          }
        }

        ?>
      </form>
    </div>
  </div>

  </div>
  <footer>
    <div class="footer-block">
      <div class="footer-item">
        <nav class="footer-list">
          <ul>
            <li><a href="other.php"><span class="name-footer"><b>О компании</b></span></a></li>
            <li><a href="other.php">О нас</a></li>
            <li><a href="slide1.php">Новости</a></li>
          </ul>
        </nav>
      </div>
      <div class="footer-item">
        <nav class="footer-list">
          <ul>
            <li><a href=""><span class="name-footer"><b>Помощь</b></span></a></li>
            <li><a href="dostavka.php">Оплата и доставка </a></li>
            <li><a href="vozvrat.php">Обмен и возврат</a></li>
          </ul>
        </nav>
      </div>
      <div class="footer-item">
        <nav class="footer-list">
          <ul>
            <li><a href=""><span class="name-footer"><b>Контакты</b></span></a></li>
            <li><a href="tel:89991557431"> <span class="footer-number">8 999 155 74 31</span></a></li>
            <li>
              <div class="social">
                <a href="https://www.instagram.com" target=»_blank» >
                  <img src="img/inst.png" alt="">
                </a>
                <a href="https://ru-ru.facebook.com" target=»_blank» >
                  <img src="img/fb.png" alt="">
                </a>
                <a href="https://vk.com" target=»_blank» >
                  <img src="img/vk.png" alt="">
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <p class="corpyright">
      © 2004-2022 ООО «BESTFIT»
    </p>
  </footer>

</body>

</html>