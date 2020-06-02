<!DOCTYPE html>
<html>
<head>
	<title>default argument in a function</title>
</head>
<body>
<h1>find the percentage of marks obtained</h1>
 <?php 

 		function percentage($p,$c,$m, $total=300)
 		{
 			echo "physics = $p<br>";
 			echo "chemistry = $c<br>";
 			echo "maths = $m<br>";

 			$marks_per= ($p+$c+$m)*100/$total;

 			echo "percentage marks = $marks_per";

 		}

 		percentage(100,100,100);
 		percentage(50,49,11);
 		percentage(11,22,30,90,200);


?>
</body>
</html>