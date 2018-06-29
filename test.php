<?php 


$web_data=file_get_contents('https://www.91mobiles.com/samsung-galaxy-j7-prime-price-in-india');
$data_ar=explode("prc_listPanel onlineStoreRow hide_themes1 aam",$web_data);

//forloop
$data=explode("alt=\"",$data_ar[5]);
$data=explode("\"",$data[1]);
echo $company= $data[0];
$name=explode("Buy ",$data[2]);
echo $name[1];
$price=explode("data-price=",$data[1]);
$price=explode(">",$price[1]);
echo $price= $price[0];






