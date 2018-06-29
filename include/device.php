<?php 
$brand = $_GET['brand'];
$sql=mysqli_query($con,"SELECT * FROM `device_name` WHERE `device_brand`='$brand'");
while($row=mysqli_fetch_assoc($sql))
{
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
	$image=get_product_image($mobile_99_link);
	
	
	?>
	<div class="col s4">
	   
	  <div class="card white hoverable z-depth-3 darken-1">
		<div class="card-content grey-text">
		  <span class="card-title tooltipped"  data-position="right" data-delay="50" data-tooltip="<?php echo ucfirst($device_name);?>"><?php echo $device_name_short; ?>...</span>
			<a href="index.php?brand=apple"><img src="<?php echo $image; ?>" class="hoverable materialboxed " width="250" ></a>
		</div>
		<div class="card-action" >
		  <a href="compare.php?compare=<?php echo base64_encode($id); ?>">Click here to compare price</a>
		</div>
	  </div>
			
	</div>
	<?php
}

?>