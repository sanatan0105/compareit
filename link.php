<?php 
include('php/connect.php');

$web_data=file_get_contents('https://www.91mobiles.com/vivo-mobile-price-list-in-india');
$data_ar=explode("tbody",$web_data);

$data=explode("red",$data_ar[5]);
$data=explode("<td>",$data[9]);
//$data[2];
$link=explode(" ",$data[2]);
$link = implode("-",$link);
$link_name=$link;
$link= strtolower($link);
$link=explode("</td>",$link);
$link='https://www.91mobiles.com/'.$link[0].'-price-in-india';

$name=explode("</td>",$link_name);
 $name= strtolower($name[0]);
$brand='Vivo';



$sql=mysqli_query($con,"INSERT INTO `device_name` VALUES (NULL,'$name','$brand','$link')");
if($sql)
	echo 1;
?>
