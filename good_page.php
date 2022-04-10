<?
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/good_page.css">
    <title>Каталог</title>
</head>

<body>
<?
    include("components/header.php");
    ?>
    <div class="catalog-main">
        <div class="catalog-block">
            <?
            $str_out_good = "SELECT * FROM `products` WHERE `id` = '$_GET[cart_id]'";
            $run_out_good =  mysqli_query($connect, $str_out_good);
            while ($out_good = mysqli_fetch_array($run_out_good)) {
            ?>

            <img src="img/upload/<? echo $out_good['image']; ?>" alt="" class="tovar">
            <div class="card-name"><? echo  $out_good['title']; ?>
             <div class="brand"><? echo  $out_good['brand']; ?></div>
            </div>

            <div class="card-price"><? echo  $out_good['price']; ?><div class="rub">руб.</div>
            </div>
            <div class="card-description"><? echo  $out_good['description']; ?></div>
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
            <a href="#">
                  <button class="card-btn">Купить</button>
                </a>
          <?
                    }

                        ?>




        </div>
    </div>
</body>

</html>