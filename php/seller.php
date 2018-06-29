<?php 
function seller($url)
{
	$web_data=file_get_contents($url);
	$seller_array=array();
	$data1=explode("Buy @ ",$web_data);
	for($i=1;$i<6;$i+=2)
	{
		
		$data_ar=explode("\"",$data1[$i]);
		array_push($seller_array,$data_ar[0]);
		
	}
	return $seller_array; 
}
?>