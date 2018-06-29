<?php
function mrp($url)
{
	$web_data=file_get_contents($url);
	$mrp=array();
	$abc=explode("spec_rvw_pnl das_bdr prcListbox",$web_data);
	for($i=1;$i<4;$i++)
	{
		$list1=$abc[$i];
		$price=explode("data-price",$list1);
		$list2=explode("Rs. ",$price[1]);

		preg_match_all('!\d+!', $list2[0], $matches);
		$var = implode(' ', $matches[0]); 
		array_push($mrp,$var);
	}
	return $mrp; 
}


?>

