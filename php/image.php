<?php
function get_product_image($url)
{
	
	$web_data=file_get_contents($url);

$abc=explode("\"",$web_data);
$first_place=$abc[143];
$second_place=$abc[179];
if($first_place==$second_place)
{
	return $first_place;
}
else
{
	$correct_image = '.91-img.com';

	if (strpos($first_place, $correct_image) ==true) 
	{
	   return $first_place;
	}
	elseif(strpos($second_place, $correct_image) ==true) 
	{
		return $second_place;
	}
	else
	{
		return false;
	}
}
}




?>

