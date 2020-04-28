<!--
this is header file which is visible in registration and login page.
-->
<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<?php
if(!isset($_SESSION['id'])) {
		 echo '<nav class="navbar navbar-default">
		 	<div class="container-fluid">
		 		<a href="index.php" class="logo">
		 			<span class="symbol"><img src="images/logo.png" alt="" /></span><span class="title">Armath</span>
		 		</a>

				<div class="navbar-right">
		 		   <ul class="nav navbar-nav">
					   <li><a href="about.php" class="log">Մեր մասին</a></li>
					   <li><a href="login.php" class="log">Ներբեռնել</a></li>
		     		   <li><a href="registration.php" class="log">Գրանցվել</a></li>
		     		   <li><a href="login.php" class="log">Մուտք</a></li>
		     	   </ul>
		 	   </div>
		 	</div>
		 </nav>';
	 } else {
		 echo '<nav class="navbar navbar-default">
				<div class="container-fluid">
					<a href="index.php" class="logo">
						<span class="symbol"><img src="images/logo.png" alt="" /></span><span class="title">Armath</span>
					</a>
					<div class="dropdown navbar-right" id="right">
						<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">' . $email . '
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<div class="navbar-right">
			 		   <ul class="nav navbar-nav">
						   <li><a href="about.php" class="log">Մեր մասին</a></li>
						   <li><a href="upload.php" class="log">Ներբեռնել</a></li>
			     	   </ul>
			 	   </div>
				</div>
			 </nav>';
	 }
 ?>
