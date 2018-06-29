<?php 
include('php/connect.php');
include('include/head.php');
?>

  <div class="section no-pad-bot" id="index.php-banner">
    <div class="container">
      <br><br>
      <h3 class="header center orange-text">Price Comparision Services For E-Commerce</h3>
	  
      
      <div class="row center">
	  
	  <?php 
	  if($_POST)
	  {
		  $name=$_POST['name'];
		  $email=$_POST['email'];
		  $pass=md5($_POST['pass']);
		  $sql_insert=mysqli_query($con,"INSERT INTO `user` VALUES (NULL,'$name','$email','$pass')");
		  if($sql_insert)
		  {
			  ?>
			    <div class="card-panel">
					<span class="blue-text text-darken-2">Successfully logged in. We will keep you updated with the the new device we will add. <br/>
					<center><a href="index.php"> <button class="btn waves-effect waves-light" type="submit" name="action">Go Back
			<i class="material-icons right">send</i>
		  </button></a></center>
					</span>
				</div>
			  
			  <?php 
		  }
		  else
		  {
			  echo mysqli_error($con);
		  }
	  }
	  else
	  {
		  ?>
		  <div class="col s3"></div>
		<div class="col s6">
		
			<div class="row center">
			
			<form class="col s12" method="post" action="">
		  <div class="row">
			<div class="input-field col s12">
			  <input  id="first_name" type="text" name="name" class="validate">
			  <label for="first_name">Full Name</label>
			</div>
			<div class="row">
			<div class="input-field col s12">
			  <input id="email" type="email" name="email" class="validate">
			  <label for="email">Email</label>
			</div>
		  </div>
			
		  
		  <div class="row">
			<div class="input-field col s12">
			  <input id="password" type="password" name="pass" class="validate">
			  <label for="password">Password</label>
			</div>
		  </div>
		   <center> <button class="btn waves-effect waves-light" type="submit" name="action">Submit
			<i class="material-icons right">send</i>
		  </button></center>
		 
		</form>
			
			
			</div>
		
		</div>
		
	</div>
		  
		  <?php 
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
