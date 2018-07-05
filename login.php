<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css"> 
 	<link rel="stylesheet" type="text/css" href="../mdi/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
 	<style type="text/css">
 		body{
 			margin: 0 auto;
 			background-color: #272822;
 		}
 		.card{
 			width: 700px;
 			height:400px;
 			margin-top: 100px;
 			margin-left: 250px;
 		}
 		.card-panel{
 			height: 150px;
 		}
 		.card-panel .card-tabs{
 			background-color: gray;
 		}
 	</style>
</head>
<body>


<div class="row">

<!--<div class="col m2"></div>-->

<div class="col m8">

	<div class="card col m10" style="background-color: #F5F5F5;">
		
			<div class="card-tabs">
				<ul class="tabs tabs-fixed-width">
					<li class="tab" style="background-color: #F5F5F5;"><a href="#pharmacist">Pharmacist</a></li>
					<li class="tab" style="background-color: #F5F5F5;"><a class="active" href="#manager">Manager</a></li>
				</ul>
			</div>

			<div class="card-content grey lighten-4 col s6">
			    <div id="pharmacist">
			      <div class="row">
					<form class="col s12" action="#" method="get">
						<div class="row">
							<div class="input-field col s12">
								<input placeholder="Email" id="email" type="email" name="email" class="validate">
								<label class="active" for="email"><span class="mdi mdi-email"></span>Email</label>
							</div>
					<!-- <div class="card-image waves-effect waves-block waves-light cols6"> -->
     				 <!-- <img class="activator" src="../images/pharm.jpg" style="width: 300px; height:200px;"> -->
     				 <!-- </div> -->
						</div>
						<div class="row">
		       				 <div class="input-field col s12">
		          				<input placeholder="password" id="password" type="password" name="password" class="validate">
		          				<label class="active" for="password"><span class="mdi mdi-pencil-lock"></span>Password</label>
		        			</div>
		        		</div>
		        			<button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
					</form>
				</div>
				</div>


			      <div id="manager">
			      	<div class="row">
			<form class="col s12" action="manager.php" method="get">
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Email" id="email" type="email" classs="validate">
						<label class="active" for="email"><span class="mdi mdi-email"></span>Email</label>
					</div>
				</div>
						<div class="row">
		       				 <div class="input-field col s12">
		          				<input placeholder="password" id="password" type="password" class="validate">
		          				<label class="active" for="password"><span class="mdi mdi-pencil-lock"></span>Password</label>
		        			</div>
		        		</div>
		        			<button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
		        
					</form>
				</div>
			      </div>


			     <!-- <div id="salesperson">
			      	<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Email" id="email" type="email" classs="validate">
						<label class="active" for="email"><span class="mdi mdi-email"></span>Email</label>
					</div>
				</div>
						<div class="row">
		       				 <div class="input-field col s12">
		          				<input placeholder="password" id="password" type="password" class="validate">
		          				<label class="active" for="password"><span class="mdi mdi-pencil-lock"></span>Password</label>
		        			</div>
		        		</div>
		        			<button class="btn waves-effect waves-light" type="submit" name="action">Sign In</button>
		        
					</form>
				</div>
			      </div>-->
		    </div>
		    <div class="m6">
		    	<img src="../images/pharm.jpg" width="300px" height="300px" style="margin-left: 20px; margin-top: 10px">
		    </div>
		   
		
	</div>


</div>
<div class="col m2"></div>
</div>

	<?php
require('dbcon.php');
session_start();
#if submit get values from db
if (isset($_POST['action'])){

	#remove backslashes and special characters
	$email = mysqli_real_escape_string($con, stripslashes($_REQUEST['email']));
	$password = mysqli_real_escape_string($con, stripslashes($_REQUEST['password']));

	
	#check if user exists in db
	$query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'";
	$res = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($res);
		if ($rows==1) {
			$_SESSION['email'] = $email;
			#redirect to home.php
			header("Location: home.php");
		}
		else{
			echo "<div class= 'form'>
			<h3>incorrect username or password</h3>
			<br/>click <a href= 'index.php'>here</a> to login</div>";
		}
}
?>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</body>
</html>