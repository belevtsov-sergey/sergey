<?php
require_once '../modules/visit.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Art</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/log1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css" />
        <script src="lr5.js"></script>
    </head>
    <body>
        <div  id="container">
            <div  id="header">
                <a href="index.php"><img id="logo" src="../img/logo1.png"
                                         alt="Логотип"></a>
            <!--<span id="search">
                <input type="search" name="q" placeholder="Поиск по сайту"> 
                        <input type="submit" value="Найти">  
            </span>-->
            </div>
                <div id="menu" class="menu">
                    <div><a href="galleries.php">Галереи мира</a><a href="galleries.php">Галереи мира</a></div>
                    <div id="curdiv"><a id="current" href="painting.php">Живопись</a><a href="painting.php">Живопись</a></div>
                    <div><a href="graphics.php">Графика</a><a href="graphics.php">Графика</a></div>
                    <div><a href="about.php">Об авторе</a><a href="about.php">Об авторе</a></div>
                    <div id="info">
                        Email: belevtsov_sergey@mail.ru
                    </div>
                </div>    
            <div id="body">
                <div id="title-row">
                    <div><img id="img" src="..\img\ajvazovsky.jpg" alt="Айвазовский"></div>
                    <div id="name">Живопись</div>
                </div>
                <div id="content">
                    <p>Живопись, по меткому замечанию художника К. Юона, – «живое письмо или письмо 
        о живом». На первый взгляд это может показаться парадоксальным: ведь живое 
        письмо и письмо о живом не одно и тоже. Но в данном случае парадоксальность 
        этого утверждения только кажущаяся. Словами «письмо о живом» художник раскрывает 
        предмет живописи, а «живое письмо» – ее средства. В живописи передается форма 
        предмета, его цвет, освещающий его свет, фактура материала, пространство, 
        в котором находится изображаемый предмет. Поэтому живопись пользуется такими 
        конкретными изобразительными средствами, как линия, цвет, светотень, воздушная 
        и линейная перспектива и т. д. Эти изобразительные средства позволяют создать 
        на плоскости иллюзию трехмерности, верно передать ощущение объемности предметов 
        окружающего нас мира, сохранить и умножить многокрасочность природы и т. д.</p>
                    <p class="center"><img class="img" src="..\img\levitan.jpg" alt="Левитан, Золотая осень"></p>
                    <div id="partners">
                        <a href="http://www.adme.ru/"><img class="logos" src="../img/adme.png" alt="AdMe"></a>
                        <a href="http://inspired.com.ua/"><img class="logos" src="../img/inspired.png" alt="Inspired"></a>
                    </div>
                </div>
            </div>
            <div id="left">
                 <div id="block_01">
                  <div class="title" onclick="collaps(this);"><a href="#">Реклама</a></div>
                      <div class="test">
                       <ul>
                           <li><a href="http://gallerix.ru/news/full/amerikanskaya-xudozhnica-vossozdala-monu-lizu-tak-kak-ona-vyglyadela-v-xvi-veke/">
                            Американская художница воссоздала «Мону Лизу» так, 
                            как она выглядела в XVI веке</a></li>
                            <li><a href="http://gallerix.ru/news/world/201509/poteryannaya-kartina-molodogo-rembrandta-obnaruzhena-v-nyu-dzhersi/">
                            Потерянная картина молодого Рембрандта обнаружена в Нью-Джерси</a></li>
                            <li><a href="http://gallerix.ru/news/world/201510/pravitelstvo-gollandii-pomozhet-nacionalnomu-muzeyu-kupit-dve-redkix-kartiny-rembrandta/">
                            Правительство Голландии поможет национальному музею 
                            купить две редких картины Рембрандта</a></li>
                        </ul>
                        </div>
                      </div>
                   
                <div id="block_02">         
                   <div class="title"class="title" onclick="collaps(this);"><a href="#">Новости</a></div>
                    <div class="test">
                       <ul>
                            <li><a href="http://art-vip.com.ua/">Art VIP: купить 
                                    картины, репродукции картин на холсте</a></li>
                            <li><a href="http://xn----htbbcmabk3bsacue2r.com.ua/">
                                    Интернет магазин "Территория идей"</a></li>
                            <li><a href="http://shop-kartina.com/">
                                    Интернет-магазин картин в Украине</a></li>
                            <li><a href="http://artstreet.com.ua/">
                                    ARTstreet - магазин товаров для художников, творчества</a></li>
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
                 <div id="copy"><a href="https://vk.com/belevtsov_sergey">Belevtsov</a>&copy;2016</div>
             </div>   
        </div> 
    </body>
</html>
