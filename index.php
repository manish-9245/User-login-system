<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>
<title>Main Page</title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container" style="background-color: rgb(255, 96, 96); height: 25em; width: 80em; border-style: double;">
	<h2 style=" color: rgb(255, 255, 255); text-align: center;min-height:max-content;align-content: center;">Login And Signup System</h2><hr>	
		<!-- <div class="collapse navbar-collapse" id="navbar1"> -->
			<ul class="nav navbar-nav navbar-left">
				<?php if (isset($_SESSION['user_id'])) { ?>
				<p style="font-size: large;padding: 20px;" ><strong>Login Successful !</strong></p>
				<strong style="font-size: large;padding: 20px 0px 20px 20px;">Welcome! You're signed in as</strong> <strong style="font-size: large; color: aliceblue;"><?php echo $_SESSION['user_name']; ?></strong></p><br><br>
				<a href="http://manishtiwari.host20.uk/personal%20portfolio/" style="color: black;font: bold;padding: 30px;">Checkout my Personal Portfolio Here</a><br><br>
				<a href="logout.php" style="padding: 30px; font:bold; color:black">Log Out</a>
				<?php } else { ?>
					<br>
				<div class="container" style="text-align: center;font-size: x-large;flex-flow: column;">
				<a href="login.php" style="color: azure;">Login</a><br><br>
				<a href="register.php" style="color: azure;" >Sign Up</a>
			</div>	
				<?php } ?>
			</ul>
		<!-- </div> -->
</div>	
<?php include('footer.php');?> 