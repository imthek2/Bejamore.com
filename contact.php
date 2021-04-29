<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System </title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<center><img src="img/front.jpg" width="300" height ="300" ></center>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					Binangonan Catholic College<BR>
					ADDRESS<BR>
					Binangonan , Rizal<BR>
					Need Information<BR>
					BinangonanCatholicCollege@gmail.com<br>Phone - 90430-17689
				</form>
			</div>
		</div>
		
		<?php include"footer1.php";?>
		
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>