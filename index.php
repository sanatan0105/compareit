<?php 
include('php/connect.php');
include('php/image.php');
include('include/head.php');
?>

  <div class="section no-pad-bot" id="index.php-banner">
    <div class="container">
      <br><br>
      <h3 class="header center orange-text">Price Comparision Services For E-Commerce</h3>
	  <?php 
	  if($_GET)
	  {
		  ?>
		  <div class="row center">
				<h5 class="header col s12 light">Select a phone to compare...</h5>
			</div>
		  <?php 
	  }
	  else
	  {
		  ?>
		  <div class="row center">
				<h5 class="header col s12 light">Choose a brand to compare the different prices of mobiles on different sites. </h5>
			</div>
		  <?php 
	  }
	  ?>
      
      <div class="row center">
        <?php 
		if($_GET)
		{
			
			$brand=$_GET['brand'];
			if($brand =='Motorola' OR $brand =='Apple' OR $brand =='Xiaomi' OR $brand =='Sony' OR $brand =='Vivo' OR $brand =='Samsung')
			{
				include('include/device.php');
			}
			else
			{
				?>
				<div class="card-panel">
					<span class="blue-text text-darken-2">Sorry <?php echo $_GET['brand']; ?> is not avaliable on our site. We will add that soon. </span>
				</div>
				<?php 
			}
		}
		else
		{
			
			include('include/logo.php');
			
		}
		?>
		
		
		
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

  </body>
</html>
