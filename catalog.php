<?
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/catalog.css">
  <title>Каталог</title>
  <script>
        window.onbeforeunload = function() {
            var scrollPos;
            if (typeof window.pageYOffset != 'undefined') {
                scrollPos = window.pageYOffset;
            } else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
                scrollPos = document.documentElement.scrollTop;
            } else if (typeof document.body != 'undefined') {
                scrollPos = document.body.scrollTop;
            }
            document.cookie = "scrollTop=" + scrollPos;
        }
        window.onload = function() {
            if (document.cookie.match(/scrollTop=([^;]+)(;|$)/) != null) {
                var arr = document.cookie.match(/scrollTop=([^;]+)(;|$)/);
                document.documentElement.scrollTop = parseInt(arr[1]);
                document.body.scrollTop = parseInt(arr[1]);
            }
        }
    </script>
</head>

<body>
  <div class="prst">
<?
    include("components/header.php");
    ?>
    </div>
    <div class="content">   
   <div class="container">
      <div class="heading">

          <nav class="nav1">
          <ul class="section">
        <li>
            <a href="#fitness">Фитнес</a>
       </li>
       <li>
         <a href="#vel">Велоспорт</a>
       </li>
       <li>
         <a href="#tur">Туризм и активный отдых</a>
       </li>
       <li>
         <a href="#run">Бег</a>
       </li>
       <li>
         <a href="#swim">Плавание</a>
       </li>
          </ul>
        </nav>  
      </div>
    </div> 
</div>

  <div class="catalog-main">
    <div class="catalog-block">

      <h3 class="catalog-name">Каталог товаров</h3>
      <div class="fitnes_block" id="fitness">
        <h4 class="catalog-title">Фитнес</h4>
        <?

        $add_to_cart = $_GET['cart_id'];
        if ($add_to_cart) {
          if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
          }
          array_push($_SESSION['cart'], $add_to_cart);
        }

        $str_out_good = "SELECT * FROM `products` WHERE `category` = 1";
        $run_out_good =  mysqli_query($connect, $str_out_good);
        while ($out_good = mysqli_fetch_array($run_out_good)) {
        ?>
          <a class="catalog-href" href="good_page.php?cart_id=<? echo $out_good['id'] ?>"  > 
            <article class="card">

              <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
              <div class="card-name"><? echo  $out_good['title']; ?><div class="brand-name"><? echo  $out_good['brand']; ?></div>
              </div>
              <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
              </div>
              <?
              if ($_SESSION['cart']) {
                if (in_array($out_good['id'], $_SESSION['cart'])) {
              ?>
                  <a href="cart.php"><button class="card-btn">Уже в корзине</button></a>
                <?
                } else {
                ?>
                  <a href="?cart_id=<? echo $out_good['id'] ?>">
                    <button class="card-btn">В корзину</button>
                  </a>
                <?
                }
              } else {
                ?>
                <a href="?cart_id=<? echo $out_good['id'] ?>">
                  <button class="card-btn">В корзину</button>
                </a>
              <?
              }
              ?>

            </article>

          </a><?
            }

              ?>




      </div>
      <div class="fitnes_block">
        <h4 class="catalog-name" id="vel">Велоспорт</h4>
        <?

        $add_to_cart = $_GET['cart_id'];
        if ($add_to_cart) {
          if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
          }
          array_push($_SESSION['cart'], $add_to_cart);
        }

        $str_out_good = "SELECT * FROM `products` WHERE `category` = 2";
        $run_out_good =  mysqli_query($connect, $str_out_good);
        while ($out_good = mysqli_fetch_array($run_out_good)) {
        ?>
          <a class="catalog-href" href="good_page.php?cart_id=<? echo $out_good['id'] ?>">
            <article class="card">

              <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
              <div class="card-name"><? echo  $out_good['title']; ?><div class="brand-name"><? echo  $out_good['brand']; ?></div>
              </div>
              <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
              </div>
              <?
              if ($_SESSION['cart']) {
                if (in_array($out_good['id'], $_SESSION['cart'])) {
              ?>
                  <a href="cart.php"><button class="card-btn">Уже в корзине</button></a>
                <?
                } else {
                ?>
                  <a href="?cart_id=<? echo $out_good['id'] ?>">
                    <button class="card-btn">В корзину</button>
                  </a>
                <?
                }
              } else {
                ?>
                <a href="?cart_id=<? echo $out_good['id'] ?>">
                  <button class="card-btn">В корзину</button>
                </a>
              <?
              }
              ?>

            </article>
          </a><?
            }

              ?>
      </div>
      <div class="fitnes_block">
        <h4 class="catalog-name" id="tur">Туризм</h4>
        <?

        $add_to_cart = $_GET['cart_id'];
        if ($add_to_cart) {
          if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
          }
          array_push($_SESSION['cart'], $add_to_cart);
        }

        $str_out_good = "SELECT * FROM `products` WHERE `category` = 3";
        $run_out_good =  mysqli_query($connect, $str_out_good);
        while ($out_good = mysqli_fetch_array($run_out_good)) {
        ?>
          <a class="catalog-href" href="good_page.php?cart_id=<? echo $out_good['id'] ?>">
            <article class="card">

              <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
              <div class="card-name"><? echo  $out_good['title']; ?><div class="brand-name"><? echo  $out_good['brand']; ?></div>
              </div>
              <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
              </div>
              <?
              if ($_SESSION['cart']) {
                if (in_array($out_good['id'], $_SESSION['cart'])) {
              ?>
                  <a href="cart.php"><button class="card-btn">Уже в корзине</button></a>
                <?
                } else {
                ?>
                  <a href="?cart_id=<? echo $out_good['id'] ?>">
                    <button class="card-btn">В корзину</button>
                  </a>
                <?
                }
              } else {
                ?>
                <a href="?cart_id=<? echo $out_good['id'] ?>">
                  <button class="card-btn">В корзину</button>
                </a>
              <?
              }
              ?>

            </article>
          </a><?
            }

              ?>
      </div>
      <div class="fitnes_block">
        <h4 class="catalog-name" id="swim">Плавание</h4>
        <?

        $add_to_cart = $_GET['cart_id'];
        if ($add_to_cart) {
          if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
          }
          array_push($_SESSION['cart'], $add_to_cart);
        }

        $str_out_good = "SELECT * FROM `products` WHERE `category` = 4";
        $run_out_good =  mysqli_query($connect, $str_out_good);
        while ($out_good = mysqli_fetch_array($run_out_good)) {
        ?>
          <a  class="catalog-href" href="good_page.php?cart_id=<? echo $out_good['id'] ?>">
            <article class="card">

              <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
              <div class="card-name"><? echo  $out_good['title']; ?><div class="brand-name"><? echo  $out_good['brand']; ?></div>
              </div>
              <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
              </div>
              <?
              if ($_SESSION['cart']) {
                if (in_array($out_good['id'], $_SESSION['cart'])) {
              ?>
                  <a href="cart.php"><button class="card-btn">Уже в корзине</button></a>
                <?
                } else {
                ?>
                  <a href="?cart_id=<? echo $out_good['id'] ?>">
                    <button class="card-btn">В корзину</button>
                  </a>
                <?
                }
              } else {
                ?>
                <a href="?cart_id=<? echo $out_good['id'] ?>">
                  <button class="card-btn">В корзину</button>
                </a>
              <?
              }
              ?>

            </article>
          </a><?
            }

              ?>
      </div>
      <div class="fitnes_block">
        <h4 class="catalog-name" id="run">Бег</h4>
        <?

        $add_to_cart = $_GET['cart_id'];
        if ($add_to_cart) {
          if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
          }
          array_push($_SESSION['cart'], $add_to_cart);
        }

        $str_out_good = "SELECT * FROM `products` WHERE `category` = 5";
        $run_out_good =  mysqli_query($connect, $str_out_good);
        while ($out_good = mysqli_fetch_array($run_out_good)) {
        ?>
          <a class="catalog-href" href="good_page.php?cart_id=<? echo $out_good['id'] ?>">
            <article class="card">

              <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
              <div class="card-name"><? echo  $out_good['title']; ?><div class="brand-name"><? echo  $out_good['brand']; ?></div>
              </div>
              <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
              </div>
              <?
              if ($_SESSION['cart']) {
                if (in_array($out_good['id'], $_SESSION['cart'])) {
              ?>
                  <a href="cart.php"><button class="card-btn">Уже в корзине</button></a>
                <?
                } else {
                ?>
                  <a href="?cart_id=<? echo $out_good['id'] ?>">
                    <button class="card-btn">В корзину</button>
                  </a>
                <?
                }
              } else {
                ?>
                <a href="?cart_id=<? echo $out_good['id'] ?>">
                  <button class="card-btn">В корзину</button>
                </a>
              <?
              }
              ?>

            </article>
          </a><?
            }

              ?>
      </div>

    </div>
<footer>
  <div class="footer-block">
    <div class="footer-item">
      <nav class="footer-list">
        <ul>
          <li><a href="other.php"><span class="name-footer"><b>О компании</b></span></a></li>
          <li><a href="other.html">О нас</a></li>
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