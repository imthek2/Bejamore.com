<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ADD CLASS</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	

	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h1 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h1><br><hr><br>
				<div class="content1">
					
						<h3 > Add Class Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into class(CNAME,CSEC) values('{$_POST["cname"]}','{$_POST["sec"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>CLASS YEAR</label><br>
				<select name="cname"  required class="input2">
						<option value="">Select</option>
						<option value="1ST YEAR">1ST YEAR</option>
						<option value="2ND YEAR">2ND YEAR</option>
						<option value="3RD YEAR">3RD YEAR</option>
						<option value="4TH YEAR">4TH YEAR</option>
						
					</select><br><br>
					<label>COURSE </label><br>
					<select name="sec"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="ACS">ACS</option>
						<option value="ACT">ACT</option>
						<option value="BSIT">BSIT</option>
						<option value="BSOA">BSOA</option>
						<option value="BSBA">BSBA</option>
						<option value="BSE">BSE</option>
					
					</select>
					<br>
					<button type="submit" class="btn" name="submit">Add Class Details</button>
				</form>
				
				
				</div>
				
				
				<div class="tbox">
					<h3 style="margin-top:30px;"> Class Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>CLASS YEAR</th>
							<th>COURSE</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from class";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["CNAME"]}</td>
											<td>{$r["CSEC"]}</td>
											<td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
			</div>
	</body>
</html>