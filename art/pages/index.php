<?php
require_once '../modules/visit.php';
require_once '../data/news.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Art</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/log1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../js/jquery-2.1.4.min.js"></script>
        
    </head>
    <body>
        <div  id="container">
            <div  id="header">
                <a href="index.php">
                   <div id="logo">
                        <img id="circle" src="../img/log1.png" alt="Логотип">
                        <img src="../img/art1.png" alt="Логотип">
                   </div>
                </a>
            <!--<span id="search">
                <input type="search" name="q" placeholder="Поиск по сайту"> 
                        <input type="submit" value="Найти">  
            </span>-->
            </div>
                <div id="menu" class="menu">
                    <div><a href="galleries.php">Галереи мира</a><a href="galleries.php">Галереи мира</a></div>
                    <div><a href="painting.php">Живопись</a><a href="painting.php">Живопись</a></div>
                    <div><a href="graphics.php">Графика</a><a href="graphics.php">Графика</a></div>
                    <div><a href="about.php">Об авторе</a><a href="about.php">Об авторе</a></div>
                    <div id="info">
                        Email: belevtsov_sergey@mail.ru
                    </div>
                </div>    
            <div id="body">
                <div id="title-row">
                    <div><img id="img" src="..\img\Mona_Lisa.jpg" alt="Мона Лиза"></div>
                    <div id="name">Изобразительное искусство</div>
                </div>
                <div id="content">
                    <p>Изобразительное искусство объединяет близкие друг другу живопись, графику, скульптуру, художественную фотографию.
        Оно едва ли не наиболее древнее среди других видов искусства и, по существу, сопутствует человеку с доисторических времен.
        Еще в эпоху палеолита первобытные люди создали множество пещерных изображений, росписей и произведений прикладного искусства,
        воспроизводивших конкретные факты и явления повседневной жизни.
        Отличительная черта этих первых проявлений художественного дара человека – своеобразный наивный реализм, зоркость наблюдений,
        неосознанное еще, но неодолимое стремление к освоению и познанию жизни в образной форме.</p>
                    <div id="partners">
                        <a href="http://www.adme.ru/"><img class="logos" src="../img/adme.png" alt="AdMe"></a>
                        <a href="http://inspired.com.ua/"><img class="logos" src="../img/inspired.png" alt="Inspired"></a>
                    </div>
                </div>
            </div>
            <div id="left">
                 <div id="block_01">
                  <div class="title" onclick="collaps(this);"><a href="#">Реклама</a></div>
                      <div id="test1" class="test">
                       <ul>
                           <li><a href="http://gallerix.ru/news/full/amerikanskaya-xudozhnica-vossozdala-monu-lizu-tak-kak-ona-vyglyadela-v-xvi-veke/">
                            Американская художница воссоздала «Мону Лизу» так,
                            как она выглядела в XVI веке</a></li>
                            <li><a href="http://gallerix.ru/news/world/201509/poteryannaya-kartina-molodogo-rembrandta-obnaruzhena-v-nyu-dzhersi/">
                            Потерянная картина молодого Рембрандта обнаружена в Нью-Джерси</a></li>
                            <!--<li><a href="http://gallerix.ru/news/world/201510/pravitelstvo-gollandii-pomozhet-nacionalnomu-muzeyu-kupit-dve-redkix-kartiny-rembrandta/">
                            Правительство Голландии поможет национальному музею
                            купить две редких картины Рембрандта</a></li>-->
                        </ul>
                        </div>
                      </div>

                <div id="block_02">         
                   <div id="news" class="title" onclick="collaps(this);"><a href="#">Новости</a></div>
                    <div id="test2" class="test">
                       <ul>
                           <?php foreach ($news as $link => $new){ ?>
                               <li><a href="<?= $link ?>"><?= $new ?></a></li>
                           <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> 
            <div  id="footer">
                <div id="horizontal-menu">
                    <a href="galleries.php">Галереи мира</a>
                    <a href="painting.php">Живопись</a>
                    <a href="graphics.php">Графика</a>
                    <a href="about.php">Об авторе</a>
                </div>
                <div id="copy">
                   <label id="copyright">Посещаемость: <?=$_COOKIE['counter'] ?></label>
                </div>                
            </div>
        </div> 
    </body>
    <script src="../js/bootstrap.js"></script>
       <script src="js/jquery.datetimepicker.js"></script>
        <!--<script src="../js/lr6.js"></script>-->
        <script src="../js/DateFormat.js"></script>
</html>
