<?
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Доставка и оплата</title>
	<link rel="stylesheet" href="css/dostavka.css">
</head>
<body>
<?
    include("components/header.php");
    ?>
 		<div class="dostavka">
 <div class="container2">
  <div class="href">
    <a href="dostavka.php">Доставка</a>
    <a href="oplata.php">Оплата</a>
  </div>
 	<h1 class="dostavka-tittle">Условия доставки</h1>
 <p class="text1">Для заказа в Интернет-магазине доступны товары, имеющиеся в наличии на складах и магазинах Москвы, Санкт-Петербурга, Екатеринбурга, Казани, Ижевска. <br> <br>Если товар, который Вы заказали, находится в городе отличном от Вашего, то стоимость доставки будет рассчитываться по тарифам транспортных компаний, как доставка в регионы России. </p>
<p class="text2">
	<span><b>1. Экспресс-доставка</b></span>

	<br> <br>Экспресс-доставка осуществляется по г. Москва в пределах МКАД партнером ООО Яндекс.Доставка.
	Оформление заказа на экспресс-доставку доступно с 09.00 до 19.00 по Московскому времени.
	К заказу с экспресс доставкой доступны только товары с остатков магазина Нагорная по 100% предоплате.
	Доставка осуществляется в день заказа в течение 3-х часов с момента оплаты. <br><br>

	Стоимость экспресс-доставки зависит от веса товаров в заказе:<br><br>

	- до 10 кг включительно – 599р<br><br>

	- до 20 кг включительно – 899р<br><br>

	- от 20 кг и выше – 1 299р<br><br>
	Получение заказа Покупателем производится с помощью СМС-кода на номер телефона, указанный в Заказе.
</p>

<p class="text3">
 <span><b>2. Доставка курьером</b></span><br><br>
В городах:<br><br>
ИЖЕВСК<br>
МОСКВА в пределах МКАД,<br>
САНКТ-ПЕТЕРБУРГ в пределах КАД <br>
ЕКАТЕРИНБУРГ в пределах ЕКАД <br>
ЧЕЛЯБИНСК,<br>
КАЗАНЬ.<br><br>

Доставка осуществляется курьерами интернет-магазина BESTFIT<br> 
Если товар доставляется на выбор и ни одна из доставленных единиц товара не подходит клиенту, клиент обязан оплатить доставку в полном объеме.<br><br>
Стоимость доставки по городу:<br><br>
При сумме заказа с учетом скидки более 7000 руб. (кроме подарочных сертификатов) - БЕСПЛАТНО*. <br><br>
При сумме заказа менее 7000 руб.:  300 руб.<br><br> 
Возможно заказать на примерку нескольких размеров одежды и/или обуви. Примерка бесплатная до 2 единиц одежды или обуви, начиная с 3-ей, осуществляется доплата 100 руб. за каждую единицу.
</p>
<p class="text4">
	<span><b>3. Доставка транспортными компаниями</b></span><br><br>
Стоимость доставки рассчитывается в соответствии с тарифами транспортных компаний. <br><br>
Интернет магазин BESTFIT доставляет через транспортные компании:<br><br>
СДЭК(до пункта выдачи и до двери клиента)<br>
Почта России<br><br>
По запросу клиента, можем доставить другими транспортными компаниями.<br><br>
Стоимость доставки через транспортные компании:<br><br>

При сумме заказа более 7000 руб.: БЕСПЛАТНАЯ*
(через Почту России, СДЭК до пункта выдачи, вес каждого товара из заказа не должен превышать 30 кг.)<br><br>

*ВНИМАНИЕ! В отдаленные и труднодоступные регионы России возможны ограничения по бесплатной доставке: Республика Саха (Якутия), Чукотский автономный округ, Магаданская область, Хабаровский край, Амурская область, Камчатский край, Ямало-Ненецкий АО, Приморский край, Еврейская АО, Амурская область, Республика Бурятия, Забайкальский край, Сахалинская область и республика Крым. Подробности у менеджеров Интернет-магазина.<br><br>
Внешний вид и комплектность товара, а также комплектность всего заказа должны быть проверены при получении.<br><br>
При доставке транспортной компанией необходима 100% предоплата заказа.
</p>

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