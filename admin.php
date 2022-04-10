<?
include("db.php");
?>
<? if ($_SESSION['user']['role'] == 2) {
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Админка</title>
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
    <?
    include("components/header.php");
    ?>


    <div class="main">
        <p class="regg">Админ панель</p>
        
            <div class="add_title">Добавление товара</div>
            <?php
            $image_name = $_FILES['image']['name'];
            $image_type = $_FILES['image']['type'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_path = "img/upload/$image_name";
            ?>
            <form action="" method="POST" enctype="multipart/form-data" class="form_add_good">
                <br>
                <div class="img_tovar">Изображение товара:<br><br></div>
                <input type="file" name="image"><br><br>
                 <div class="img_tovar">Название товара:<br><br></div>
                <input type="text" name="title" placeholder="Название товара"><br><br>
                 <div class="img_tovar">Бренд:<br><br></div>
                <select name="brand" class="element"><br>
                    <option value="0">⠀⠀⠀⠀⠀</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Puma">Puma</option>
                    <option value="Reebok">Reebok</option>
                    <option value="Fisher">Fisher</option>
                    <option value="Fila">Fila</option>
                    <option value="Demix">Demix</option>
                    <option value="TNF">TNF</option>
                    <option value="Salomon">Salomon</option>
                </select><br><br>
                 <div class="img_tovar">Цена:<br><br></div>
                <input type="number" min="1" name="price" placeholder="Цена"><br><br>
                <div class="img_tovar">Категория:<br><br></div>
                <select name="category" class="element"><br>
                    <option value="1">Фитнес</option>
                    <option value="2">Велоспорт</option>
                    <option value="3">Туризм</option>
                    <option value="4">Плаванье</option>
                    <option value="5">Бег</option>
                </select><br><br>
                <input type="submit" name="submit_product" value="Добавить" class="submit_product">
            </form>

            <?php
            if ($_POST['submit_product']) {
                if ($_POST['title'] && $_POST['price'] && $_POST['brand']  && $_POST['category']) {
                    $str_add_product = "INSERT INTO `products` (`id`, `image`, `title`, `price`, `brand`,  `category`) VALUES (NULL, '$image_name', '$_POST[title]', '$_POST[price]', '$_POST[brand]',  '$_POST[category]')";
                    $run_add_product = mysqli_query($connect, $str_add_product);
                    if ($run_add_product) {
                        echo "<font color=green>Товар добавлен!</font>";
                        move_uploaded_file($image_tmp_name, $image_path);
                        header("location: admin.php");
                    } else {
                        echo "<font color=red>Ошибка добавления!</font>";
                    }
                } else {
                    echo "<font color=red>Заполните все поля!</font>";
                }
            }


            ?>
            

            <div class="delete_tit">Удаление товара</div><br>
            <div class="delete_block_out">
                <div class="delete_title">Фитнес</div><br>
                <?
                $delete_good = $_GET['delete_good'];
                $str_delete_good = "DELETE FROM `products` WHERE id = $delete_good";
                $run_delete_good = mysqli_query($connect, $str_delete_good);

                $str_out_good = "SELECT * FROM `products` WHERE `category` = 1";
                $run_out_good =  mysqli_query($connect, $str_out_good);
                while ($out_good = mysqli_fetch_array($run_out_good)) {
                ?>
                    <article class="card">
                       

                        <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="good_img">
                        <div class="card-name"><? echo  $out_good['title']; ?></div>
                        <div class="brand-name"><? echo  $out_good['brand']; ?></div>
                        <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
                        </div>
                         <a class="delete-btn-href" href="?delete_good=<? echo $out_good['id'] ?>">
                            <div class="delete_btn" name="delete_good">Удалить</div>
                        </a>

                    </article><?
                            }
                                ?>
                <div class="delete_title">Велоспорт</div><br>

                <?
                $str_out_good = "SELECT * FROM `products` WHERE `category` = 2";
                $run_out_good =  mysqli_query($connect, $str_out_good);
                while ($out_good = mysqli_fetch_array($run_out_good)) {
                ?>
                    <article class="card">
                       

                        <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="good_img">
                        <div class="card-name"><? echo  $out_good['title']; ?></div>
                        <div class="brand-name"><? echo  $out_good['brand']; ?></div>
                        <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
                        </div>
                         <a class="delete-btn-href" href="?delete_good=<? echo $out_good['id'] ?>">
                            <div class="delete_btn" name="delete_good">Удалить</div>
                        </a>

                    </article><?
                            }
                                ?>
                <div class="delete_title">Туризм</div><br>

                <?
                $str_out_good = "SELECT * FROM `products` WHERE `category` = 3";
                $run_out_good =  mysqli_query($connect, $str_out_good);
                while ($out_good = mysqli_fetch_array($run_out_good)) {
                ?>
                    <article class="card">
                       

                        <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="good_img">
                        <div class="card-name"><? echo  $out_good['title']; ?></div>
                        <div class="brand-name"><? echo  $out_good['brand']; ?></div>
                        <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
                        </div>
                         <a class="delete-btn-href" href="?delete_good=<? echo $out_good['id'] ?>">
                            <div class="delete_btn" name="delete_good">Удалить</div>
                        </a>

                    </article><?
                            }
                                ?>
                <div class="delete_title">Плавание</div><br>

                <?
                $str_out_good = "SELECT * FROM `products` WHERE `category` = 4";
                $run_out_good =  mysqli_query($connect, $str_out_good);
                while ($out_good = mysqli_fetch_array($run_out_good)) {
                ?>
                    <article class="card">
                    
                        <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="good_img">
                        <div class="card-name"><? echo  $out_good['title']; ?></div>
                        <div class="brand-name"><? echo  $out_good['brand']; ?></div>
                        <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
                        </div>
                             <a class="delete-btn-href" href="?delete_good=<? echo $out_good['id'] ?>">
                            <div class="delete_btn" name="delete_good">Удалить</div>
                        </a>

                    </article><?
                            }
                                ?>
                <div class="delete_title">Бег</div><br>

                <?
                $str_out_good = "SELECT * FROM `products` WHERE `category` = 5";
                $run_out_good =  mysqli_query($connect, $str_out_good);
                while ($out_good = mysqli_fetch_array($run_out_good)) {
                ?>
                    <article class="card">
                      

                        <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="good_img">
                        <div class="card-name"><? echo  $out_good['title']; ?></div>
                        <div class="brand-name"><? echo  $out_good['brand']; ?></div>
                        <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
                        </div>
                          <a class="delete-btn-href" href="?delete_good=<? echo $out_good['id'] ?>">
                            <div class="delete_btn" name="delete_good">Удалить</div>
                        </a>

                    </article><?
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
<?
        } ?>