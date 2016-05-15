<?php
/*$a="a";
$b=0;
$res = ($a==true && $b==false && $a==$b);
var_dump($res); die;*/
$year = date('Y');
$vis = $year % 400 == 1 || ($year % 100 != 0 && ($year & 3) == 0);

if (isset($_COOKIE['counter'])) {
    $count=$_COOKIE['counter']+1;
} else { $count=0;}
if ($vis){
    setcookie("counter", $count, time()+60*60*24*366);
} else {
    setcookie("counter", $count, time()+60*60*24*365);
}