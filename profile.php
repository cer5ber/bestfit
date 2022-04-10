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
    <p class="regg">Личный кабинет</p>
    <?
    $str_out_profile = "SELECT * FROM `users`";
    $run_out_profile =  mysqli_query($connect, $str_out_profile);
    $out_profile = mysqli_fetch_array($run_out_profile);
    ?>

    <div class="profile_login"><? echo  $_SESSION['user']['login']; ?><br></div>
    <div class="fio">
    <div class="profile_name"><? echo  $_SESSION['user']['name']; ?><br></div>
    <div class="profile_fam"><? echo  $_SESSION['user']['surname']; ?><br></div>
    </div>
    <? if ($_SESSION['user']['role'] == 2) {
    ?><a href="admin.php" class="admin-pnl">Перейти в админ панель</a><?
    } ?>

  </div>


  <footer>
    <div class="footer-block">
      <div class="footer-item">
        <nav class="footer-list">
          <ul>
            <li><a href="other.php"><span class="name-footer"><b>О компании</b></span></a></li>
            <li><a href="other.php">О нас</a></li>
            <li><a href="">Новости</a></li>
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
                <a href="">
                  <img src="img/inst.png" alt="">
                </a>
                <a href="">
                  <img src="img/fb.png" alt="">
                </a>
                <a href="">
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