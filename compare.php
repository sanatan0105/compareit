<?php 
include('php/connect.php');
include('php/image.php');
include('php/mrp.php');
include('php/seller.php');
$device_id=base64_decode($_GET['compare']);
$sql=mysqli_query($con,"SELECT * FROM `device_name` WHERE `device_id`=$device_id");
$row=mysqli_fetch_assoc($sql);
$id=$row['device_id'];
$device_name=$row['device_name'];
$mobile_99_link=$row['device_link_91mobile'];
$na=explode("-",$device_name);
$device_name='';
for($i=0;$i<sizeof($na); $i++)
{
	$device_name=$device_name.$na[$i];
	$device_name=$device_name." ";
}
$device_name_short=ucfirst(substr($device_name,0,14));


$mrp=mrp($mobile_99_link);


$seller=seller($mobile_99_link);

$image=get_product_image($mobile_99_link);

$sel1=$seller[0];
$sel2=$seller[1];
$sel3=$seller[2];

$mrp1=$mrp[0];
$mrp2=$mrp[1];
$mrp3=$mrp[2];



function abcdef($data)
 {
	$dat= explode("<",end(explode("spec_des\">",$data)));
 	return $dat=$dat[0]; 
 }
 
//specifications
$web_data=file_get_contents($mobile_99_link);
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


 
 

$width=abcdef($tr[1]);
$thichness=abcdef($tr[4]);
$weight=abcdef($tr[12]);
$colors=abcdef($tr[19]);



//display

$tr=explode("</tr>",$data_ar[3]);
 
 $screen_size= explode("<",end(explode("spec_des\">",$tr[7])));
 $screen_size=$screen_size[0];
  $screen_reso= explode("<",end(explode("spec_des\">",$tr[7])));
 $screen_reso=$screen_reso[0];
  $pixel= explode("<",end(explode("spec_des\">",$tr[7])));
 $pixel=$pixel[0];
 
$screen_size=abcdef($tr[7]);
$screen_reso=abcdef($tr[8]);
$pixel=abcdef($tr[9]);

 

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


 
 
 
//battery
$tr=explode("</tr>",$data_ar[7]);

$capacity=abcdef($tr[7]);
$type=abcdef($tr[8]);







include('include/head.php');
?>

	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<h4 class="header center orange-text"><?php echo ucfirst($device_name); ?></h4>
			<div class="row center">
				<div class="col s4">
					<div class="card white hoverable z-depth-1 darken-1">
						<div class="card-content grey-text">
							<center><img src="<?php echo $image; ?>" class="materialboxed " width="240" ></center>
						</div>
					</div>
				</div>
				<div class="col s8">
					<div class="card white hoverable z-depth-1 darken-1">
						<div class="card-content grey-text">
							<ul class="collapsible popout" data-collapsible="accordion ">
								<li>
									<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Mrp Comparison </div>
									<div class="collapsible-body">
										<span>
											<table>
												<tbody>
													<tr>
														<td><?php echo $sel1;?></td>
														<td>Rs.<?php echo $mrp1;?></td>
													</tr>
													<tr>
														<td><?php echo $sel2;?></td>
														<td>Rs.<?php echo $mrp2;?></td>
													</tr>
													<tr>
														<td><?php echo $sel3;?></td>
														<td>Rs.<?php echo $mrp3;?></td>
													</tr>
												</tbody>
											</table>
										
										
										</span>
									</div>
								</li>
								<li>
									<div class="collapsible-header"><i class="material-icons">place</i>Specifications</div>
									<div class="collapsible-body">
										<span>
											<h4>General</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Brand</td>
															<td><?php echo $brand;?></td>
														</tr>
														<tr>
															<td>Model</td>
															<td><?php echo $model;?></td>
														</tr>
														<tr>
															<td>Operating system</td>
															<td><?php echo $os;?></td>
														</tr>
														<tr>
															<td>Sim Slot</td>
															<td><?php echo $sim_slot;?></td>
														</tr>
														<tr>
															<td>Network</td>
															<td><?php echo $network;?></td>
														</tr>
													</tbody>
												</table>
											<h4>Design</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Width</td>
															<td><?php echo $width;?></td>
														</tr>
														<tr>
															<td>Thickness</td>
															<td><?php echo $thichness;?></td>
														</tr>
														<tr>
															<td>Weight</td>
															<td><?php echo $weight;?></td>
														</tr>
														<tr>
															<td>Colors</td>
															<td><?php echo $colors;?></td>
														</tr>
													</tbody>
												</table>
											<h4>Display</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Screen Size</td>
															<td><?php echo $screen_size;?></td>
														</tr>
														<tr>
															<td>Screen resolution</td>
															<td><?php echo $screen_reso;?></td>
														</tr>
														<tr>
															<td>Pixel Density</td>
															<td>Rs.<?php echo $pixel;?></td>
														</tr>
														
													</tbody>
												</table>
											<h4>Performance</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Chipset</td>
															<td><?php echo $chipset;?></td>
														</tr>
														
														
													</tbody>
												</table>
											<h4>Storage</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Internal memory</td>
															<td><?php echo $internal_memory;?></td>
														</tr>
														
														
													</tbody>
												</table>
											<h4>Camera</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Primary Camers</td>
															<td><?php echo $primary_camera;?></td>
														</tr>
														<tr>
															<td>Image sensor</td>
															<td><?php echo $sensor_coms_image_sensor;?></td>
														</tr>
														<tr>
															<td>Aperture</td>
															<td><?php echo $aperture;?></td>
														</tr>
														<tr>
															<td>Image resolution</td>
															<td><?php echo $image_reso;?></td>
														</tr>
														<tr>
															<td>Front camera resolution</td>
															<td><?php echo $front_camera_reso;?></td>
														</tr>
													</tbody>
												</table>
											<h4>Battery</h4>
											<hr/>
												<table>
													<tbody>
														<tr>
															<td>Capacity</td>
															<td><?php echo $capacity;?></td>
														</tr>
														<tr>
															<td>Type</td>
															<td><?php echo $type;?></td>
														</tr>
													</tbody>
												</table>
										</span>
									</div>
								</li>
								
							</ul>
						</div>
						
					</div>
				
				</div>
				
				
				<div class="col s3"></div>
				<div class="col s6">
				
					
				
				</div>
				<div class="col s3"></div>
				
			</div>
			<br><br>
		</div>
	</div>




  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
     </a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
  
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>

  </body>
</html>
