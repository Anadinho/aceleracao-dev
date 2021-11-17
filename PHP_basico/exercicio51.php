<?php

setcookie('COOKIE_1', hash('sha256', 'COOKIE_1')
         , time() + 3600);
setcookie('COOKIE_2', hash('sha256', 'COOKIE_2')
, time() + 3600);
setcookie('COOKIE_3', hash('sha256', 'COOKIE_3')
, time() + 7200);
setcookie('COOKIE_4', hash('sha256', 'COOKIE_5')
, time() + 7200);

$cookie_array = array();

$cookie1 = $_COOKIE['COOKIE_1'];
$cookie2 = $_COOKIE['COOKIE_2'];
$cookie3 = $_COOKIE['COOKIE_3'];
$cookie4 = $_COOKIE['COOKIE_4'];
array_push($cookie_array, $cookie1);
array_push($cookie_array, $cookie2);
array_push($cookie_array, $cookie3);
array_push($cookie_array, $cookie4);

$cookies_json= json_encode($cookie_array, true);
$arquivo =fopen('cookies.txt','w');

fwrite($arquivo, $cookies_json);

echo "<br><br>";

foreach($cookie_array  as $k => $v){    
    echo  "COOKIE_{$k}"." -> ".$v."<br>";
}
?>