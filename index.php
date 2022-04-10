<?
include("db.php");

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>BESTFIT</title>
   <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
 </head>
 <body>
 <?
    include("components/header.php");
    ?>


<div class="content">   
   <div class="container">
      <div class="heading">

          <nav class="nav1">
          <ul class="section">
        <li>
            <a href="catalog.php">Фитнес</a>
       </li>
       <li>
         <a href="catalog.php">Велоспорт</a>
       </li>
       <li>
         <a href="catalog.php">Туризм и активный отдых</a>
       </li>
       <li>
         <a href="catalog.php">Бег</a>
       </li>
       <li>
         <a href="catalog.php">Плавание</a>
       </li>
          </ul>
        </nav>  
      </div>
    </div> 
</div>


    <div class="select">
          <img src="img/cross.png" class="cros" alt="">
      <div class="web">
  <div class="web-text">
      <p class="text-magaz">
        <b>Сайт <span class="best">Bestfit</span>
        представляет обширный каталог товаров, включая линейки для мужчин, женщин и детей, а также известные коллаборации марки</b>
      </p>
      <p class="text-magaz2"><b>
        Твое преимущество время и качество. Здесь ты найдешь свой идеальный спортивный костюм и свои самый удобные кроссовки. Спортивная мода шагает по улицам города - выбирай кеды по душе и только вперед!<br>Беги марафон и полумарафон в ярких легинсках - пусть тебя запомнят!<br><br>Тебя ждет море якрих модных вечеринок, в том числе экслюзивно представленных в интернет магазине.<br>Беговые кроссовки, бутсы и шповки для футбола, слипоны, балетки, сланцы, спортивные штаны, топы, олимпийки, толстовки и худи - от лучших дизайнеров и звезд. Отличный выбор! Никто не устоит перед таким разнообразием.</b>
      </p>
      </div>
    </div>
</div>

<div class="all">
    <input checked type="radio" name="respond" id="desktop">
      <article id="slider">
          <input checked type="radio" name="slider" id="switch1">
          <input type="radio" name="slider" id="switch2">
          <input type="radio" name="slider" id="switch3">
          <input type="radio" name="slider" id="switch4">
          <input type="radio" name="slider" id="switch5">
        <div id="slides">
          <div id="overflow">
            <div class="image">
              <a href="slide1.php"><article><img src="img/photo3.jpg"></article></a>
              <article><img src="img/photo4.jpg"></article>
              <article><img src="img/photo2.jpg"></article>
              <article><img src="img/photo1.jpg"></article>
              <article><img src="img/photo5.jpg"></article>
            </div>
          </div>
        </div>
        <div id="controls">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>
        <div id="active">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>
      </article>
  </div>

  

 <div class="body">
  <div class="wrap">
    <div class="informBlock">
      <img src="img/time.png" alt="">
      <i class="fas fa-clipboard-list"></i>
      <h5 class="mainText">Быстрая доставка</h5>
      <div class="underlineBlock"></div>
      <p class="secondText">Доставляем товары по России в течении 2-3 дней</p>
    </div>

    <div class="informBlock">
      <img src="img/vozvrat.png" alt="">
      <i class="fas fa-rocket"></i>
      <h5 class="mainText">Быстрый и удобный возврат</h5>
      <div class="underlineBlock"></div>
      <p class="secondText">Также Вы можете осуществить возврат товара в течении 14 дней с момента получения</p>
    </div>

    <div class="informBlock">
      <img src="img/garand.png" alt="">
      <i class="fas fa-chart-pie"></i>
      <h5 class="mainText">Гарантия качества</h5>
      <div class="underlineBlock"></div>
      <p class="secondText">Соответствуем требованиям и стандартам качества</p>
    </div>

    <div class="informBlock">
      <img src="img/pay.png" alt="">
      <i class="fas fa-chart-pie"></i>
      <h5 class="mainText">Оплата</h5>
      <div class="underlineBlock"></div>
      <p class="secondText">Оплата производится наличными, картой, безналичным расчетом</p>
    </div>
  </div>
</div>



    <div class="catalog-background">
      <h3 class="catalog-name">Популярные товары</h3>
  <div class="catalog">
<a class="catalog-a" href="">
  <article class="card">
    <img src="img/kepka.png" class="tovar" alt="">
    <h2 class="card-name"> Кепка Беговая</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a  class="catalog-a" href="catalog.php">
  <article class="card">
    <img src="img/noski.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
<a  class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a class="catalog-a"  href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  </div> 
   <div class="catalog">
<a class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a  class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
<a  class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a class="catalog-a"  href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  </div>   
   <div class="catalog">
<a class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a  class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
<a  class="catalog-a" href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  <a class="catalog-a"  href="">
  <article class="card">
    <img src="img/crosovki.png" class="tovar" alt="">
    <h2 class="card-name"> Кроссовки Nike</h2>
    <p class="card-price">15 790 <span class="card-curency">руб.</span></p>
    <button class="card-btn">В корзину</button>
  </article>
</a>
  </div> 
  <a  class="catalog-btn-a" href="catalog.php">
     <div class="catalog-btn">
       Посмотреть все товары
     </div>
  </a>  
</div>

<div class="brand">
  <h3>Наши бренды</h3>
  <div class="brand-block">

    <div class="brand-item">
      <img src="img/nike.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/adidas.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/puma.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/fila.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/demix.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/salomon.svg" alt="">
    </div>
  </div>
  <div class="brand-block">

    <div class="brand-item">
      <img src="img/craft.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/madshus.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/merrell.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/tnf.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/columbia.svg" alt="">
    </div>
    <div class="brand-item">
      <img src="img/Fischer.svg" alt="">
    </div>
  </div>
</div>

<div class="bestfit">
  <div class="bestfit-block">
    <div class="bestfit-item">
      <p><span>150</span><br>Видов спорта</p>
    </div>
    <div class="bestfit-item">
      <p><span>1500</span><br>Компаний партнеров</p>
    </div>
    <div class="bestfit-item">
      <p><span>25</span><br>Филлиалов по РФ</p>
    </div>
    <div class="bestfit-item">
      <p><span>100 +</span><br>Видов брендов</p>
    </div>
  </div>
</div>
  <div class="maps">
    <div class="maps-block">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac5085ad4a8431555bb0b2bfeadf4c4e5b0b9a81c309ff9a1c913f6daabb7598c&amp;width=1280&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
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
          <li><a href="dostavka.php">Оплата и доставка</a></li>
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
              <a href="https://www.instagram.com" class="social" target=»_blank» >
                <img src="img/inst.png" alt="">
              </a>
               <a href="https://ru-ru.facebook.com" class="social" target=»_blank» >
                <img src="img/fb.png" alt="">
              </a>
               <a href="https://vk.com"  class="social" target=»_blank» >
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