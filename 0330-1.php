
<html>
<head><head>
<body>
<center>
	<?php include ("header.php");?>

	<h2>BMI線上計算服務</h2>
<form action="0330-1.php" method="post">
<label for="height">身高:</label>
<input type="text" id="height" name="height">公尺<br>
<label for="weight">體重:</label>
<input type="text" id="weight" name="weight">公斤<br>
<input type="submit">
</form>

<span>
	
	<?php

	if ($_POST) {

		$h = $_POST["height"];
		$w = $_POST["weight"];
		$bmi = $w / $h**2;
		echo "您的身高是 $h<br>";
		echo "<br>您的體重是 $w<br>";
		echo "<br>您的BMI是 $bmi<br>";
		if ($bmi<18.5) {
			echo "<br>太輕<br>";
		} else if ($bmi>24) {
			echo "<br>過重<br>";
		} else {
			echo "<br>正常<br>";
		}
	
	}

?>

</span>
</center>
</body>
</html>
