<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Home</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h1 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h1><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/front.jpg" class="imgs">
					<p class="para">
						HISTORY of BINANGONAN CATHOLIC COLLEGE

The town's sole catholic secondary school, the
Binangonan Catholic High School (BCHS) commenced
operation on July 1, 1947. It was the realization of a dream of
Rey. Fr. Martin Strong of the Missionary Society of St.
Columban, parish priest of Binangonan after World War L.
who observed that the parishioners schooling ended in the
elementary level as there was no high school in the town.

With the money he received from his parents,
relatives and friends in New Zealand, Fr. Strong started the
BCHS, with the 300-year old church convent serving as the
first school building. St. Ursula, the parish patron saint
became the school's patron saint too. Students numbered
two hundred, more or less, and were offered only first and
and second year level courses. The third and fourth year
subjects were added to the curriculum the following school year.

Government recognition effective July 1, 1949 was
granted to Binangonan Catholic High School. The Certificate
was given on October 24, 1949, the same year the school held
its first commencement exercises turning out 6 graduates.
The school experienced notable progress under the
Columban priests, Rev. Fr. Kieran White, Rev. Fr. Victor
Gaboury and Miss Herminia C. Mañez who served as school
principal for 45 years. Diocesan priests took over in 1973. Rev.
Msgr. Arsenio Bautista was the first Filipino priest to become 
school director.
					</p>
					
					<p class="para">
						In 1984, under the school director Rev. Msgr. Mariano
T. Balbago, Jr., Sta. Ursula Parish School, an elementanry
school, commenced operation. He saw that Catholic
education should start at the early age hence its conception.
The Catholic Women's League (CWL) of Binangonan and Miss
Luz B. Flora helped him put up the school. Miss Flora
consequently became its first principal.

In 1998, aware of the rapid changes, with the
students' intellectual and personal growth in mind and in
preparation for the future ahead, through the initiative of the
school director Rev. Fr. Rosalio C. Olaybal and the principal,
Mrs. Imelda A. Miguel, BCHS decided to offer college courses,
The Commission on Higher Education (CHED) granted
approval for the school to operate as a college in 1999.
Binangonan Catholic High School was renamed Binangonan
Catholic College.

Courses initially offered were One-Year Diploma
Program in Computer Applications, Associate in
Computer Applications and Associate in Computer
Technology.

Binangonan Catholic College took on Sta. Ursula
Parísh
School in 2006 becoming officially the
institution's elementary department.
					</p>
				</div>
				
			</div>
	</body>
</html>