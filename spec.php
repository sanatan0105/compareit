<?php 


$web_data=file_get_contents('https://www.91mobiles.com/samsung-galaxy-j7-prime-price-in-india');
$data_ar=explode("Launch Date",$web_data);
$data=$data_ar[1];
$data2=explode("<",$data);

 $final_data=explode(">",$data2[4]);
 $final_data[1];


$data_ar=explode("spec_box",$web_data);
//GENERAL
$tr=explode("</tr>",$data_ar[1]);


$brand= explode("<",end(explode("spec_des\">",$tr[1])));

$brand=$brand[0];


$model=explode("<",end(explode("spec_des\">",$tr[2])));
$model=$model[0];
 $os=explode("<",end(explode("spec_des\">",$tr[3])));
 $os=$os[0];
 $sim_slot=explode("<",end(explode("spec_des\">",$tr[4])));
 $sim_slot=$sim_slot[0];
 $network= explode("<",end(explode("spec_des\">",$tr[5])));
 $network=$network[0];



//design
$tr=explode("</tr>",$data_ar[2]);
//var_dump($tr);
$width= explode("<",end(explode("spec_des\">",$tr[1])));
$thichness= explode("<",end(explode("spec_des\">",$tr[4])));
$weight= explode("<",end(explode("spec_des\">",$tr[15])));
 $colors= explode("<",end(explode("spec_des\">",$tr[19])));
 $colors[0];
$tr[12];//weight
$tr[19];//colors

//display

$tr=explode("</tr>",$data_ar[3]);
 
 $screen_size= explode("<",end(explode("spec_des\">",$tr[7])));
 $screen_size=$screen_size[0];
  $screen_reso= explode("<",end(explode("spec_des\">",$tr[7])));
 $screen_reso=$screen_reso[0];
  $pixel= explode("<",end(explode("spec_des\">",$tr[7])));
 $pixel=$pixel[0];
 

 function abcdef($data)
 {
	$dat= explode("<",end(explode("spec_des\">",$data)));
 	return $dat=$dat[0]; 
 }
 

//Performance

$tr=explode("</tr>",$data_ar[4]);
$tr[7];//Chipset

 $chipset=abcdef($tr[7]);
//storage
$tr=explode("</tr>",$data_ar[5]);
$tr[7];//internal memory
 $internal_memory=abcdef($tr[7]);




//camera

$tr=explode("</tr>",$data_ar[6]);


$primary_camera=abcdef($tr[8]);
$sensor_coms_image_sensor=abcdef($tr[16]);
$aperture=abcdef($tr[18]);
$image_reso=abcdef($tr[21]);
$front_camera_reso=abcdef($tr[27]);


 
  $tr[18];//Aperture 1.9 F

  $tr[21];//Image Resolution 4128 x 3096 Pixels
 
  $tr[27];//Resolution 8 MP Front Camera
 
 
 
 
//battery
$tr=explode("</tr>",$data_ar[7]);

$capacity=abcdef($tr[7]);
$type=abcdef($tr[8]);
