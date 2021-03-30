<?php
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

?>