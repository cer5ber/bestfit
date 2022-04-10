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

<body>

<?
    include("components/header.php");
    ?>

    <div class="main">
        <p class="regg">Корзина</p>

        <div class="cart_block_out">
            <?php



            if ($_SESSION['cart']) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    "$_SESSION[cart][$key] => $value";
                }

                $str_out_cart = "SELECT * FROM `products` WHERE `id` IN (";
                $str_out_price = "SELECT SUM(price) as price FROM `products` WHERE `id` IN (";

                foreach ($_SESSION['cart'] as $key => $value) {
                    $str_out_cart .= $value . ",";
                    $str_out_price .= $value . ",";
                }

                $str_out_price = substr($str_out_price, 0, -1) . ")";
                $run_out_price = mysqli_query($connect, $str_out_price);
                $out_price = mysqli_fetch_array($run_out_price);

                if ($_GET['delete']) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        if ($value == $_GET['delete']) {
                            unset($_SESSION['cart'][$key]);
                            header("Location: cart.php");
                        }
                    }
                }

                $str_out_cart = substr($str_out_cart, 0, -1) . ")";
                $run_out_cart = mysqli_query($connect, $str_out_cart);
                $count_product = mysqli_num_rows($run_out_cart);

                

            ?>

               <div class="cart_count"> 
                <div>
                    <div class="order__product">Товары
                        (<?
                            if ($count_product > 0) {
                                echo $count_product;
                            } else {
                                echo "0";
                            }
                            ?>)
                    </div>
                    <div class="order__price">
                        <? if ($out_price['price'] > 0) {
                            echo $out_price['price'] . " ₽";
                        } else {
                            echo "0 ₽";
                        } ?>
                    </div>
                </div>
                <div class="order__row">
                    <div class="order__total">Итого:</div>
                    <div class="order__total-price">
                        <? if ($out_price['price'] > 0) {
                            echo $out_price['price'] . " ₽";
                        } else {
                            echo "0 ₽";
                        } ?>
                    </div>
                </div>
               
        </div>
    

    <?
                while ($out_cart = mysqli_fetch_array($run_out_cart)) {
    ?>
        <a class="catalog-href" href="good_page.php?cart_id=<? echo $out_cart['id'] ?>">
            <article class="card">

                <img src="img/upload/<? echo $out_cart['image']; ?>" alt="" class="tovar">
                <div class="card-name"><? echo  $out_cart['title']; ?><div class="brand-name"><? echo  $out_cart['brand']; ?></div>
                </div>
                <div class="card-price"><? echo  $out_cart['price']; ?><div class="rub">руб.</div>
                </div>
                <a href="?delete=<? echo $out_cart['id']; ?>"><button class="delete_btn">Удалить</button></a>

            </article>
        </a>

    <?php
                }
            } else  {
                echo    "Корзина пуста!";
            } ?>

</div>
        <div class="order__button button">
            <a href="">Оформить заказ</a>
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