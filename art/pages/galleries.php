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
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
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
                    <div id="curdiv"><a id="current" href="galleries.php">Галереи мира</a><a href="galleries.php">Галереи мира</a></div>
                    <div><a href="painting.php">Живопись</a><a href="painting.php">Живопись</a></div>
                    <div><a href="graphics.php">Графика</a><a href="graphics.php">Графика</a></div>
                    <div><a href="about.php">Об авторе</a><a href="about.php">Об авторе</a></div>
                    <div id="info">
                        Email: belevtsov_sergey@mail.ru
                    </div>
                </div>    
            <div id="body">
                <div id="title-row">
                    <div><img id="img" src="..\img\gallery.jpg" alt="Галерея"></div>
                    <div id="name">Картинные галереи мира</div>
                </div>
                <div id="content">
                    <p>Лувр (Париж, Франция) — бывший королевский дворец, памятник архитектуры и музей в историческом центре 
Парижа. С 1791 года преобразован в музей, где хранится богатейшая в Европе коллекция 
экспонатов: от античных и древнеримских до поздних западноевропейских произведений искусства. 
Картинная галерея Лувра особенно богата редчайшими экспонатами, которые постоянно 
пополнялись коллекциями монастырей, частных лиц, а также многочисленными трофеями наполеоновских походов.</p>
                    <p class="center"><img class="img" src="..\img\luvr.jpg" alt="Лувр"></p>
                    <p>Лондонская Национальная галерея (Великобритания) — одно из лучших мировых 
собраний западноевропейской и английской живописи. Здесь находятся шедевры Рембранта, 
Микеланджело, Боттичелли, Леонардо да Винчи. Выставляя в экспозицию королевские портреты 
картинная галерея представляет работы только самых знаменитых мастеров XII — XIX в.</p>
                    <p class="center"><img class="img" src="..\img\london.jpg" alt="Лондонская галерея"></p>
                    <p>Дрезденская картинная галерея (Германия) — один из древнейших музеев Европы, расположенный в Германии. 
По всему миру галерея славится своим собранием полотен итальянских и нидерландских мастеров. 
Была открыта в 1855 году, на то время коллекция составляла две тысячи двести полотен. 
Со временем собрание пополнялось как современниками, так и классиками изобразительного искусства. 
По мере приобретения новинок музей разрастался настолько, что в 1931 год живопись пришлось 
разделить, и в Дрезденской галерее остались только работы тринадцатого-восемнадцатого века.</p>
                    <p class="center"><img class="img" src="..\img\cvinger.jpg" alt="Цвингер"></p>
                    <p>Государственная Третьяковская (Москва, Россия) галерея была названа в честь Павла Михайловича Третьякова, 
который отличался страстью к собирательству, появившейся у него в середине 50ых годов 
восемнадцатого века. Именно в это время Павел Михайлович купил первый экспонаты, положившие 
начало будущему музею. В то время Третьяков со своей семьей переехал в Лаврушинский 
переулок, где и была основана Третьяковская Галерея.</p>
                    <p class="center"><img class="img" src="..\img\tretjakovskaja.jpg" alt="Третьяковская галерея"></p>
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
