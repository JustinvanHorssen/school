<!DOCTYPE html>
<html>
<head>
	<?php include 'klassen.php';  ?>
	<title>00 PHP</title>
</head>
<body>
	<?php  
		$umut = new Persoon("Umut", 18, "man");
		$demirel = new Persoon("Demirel", 23, "man");
		$Justin = new Persoon("Justin", 20, "man");
		$thamara = new Persoon("Thamara", 18, "vrouw");

		unset($umut);

		$demirel->setLeeftijd(24); 
		echo "<br> De leeftijd van Demiel is: " . $demirel->getLeeftijd(); 


		$thamara->setNaam(54564);
		$thamara->setLeeftijd(19); 
		echo "<br> De leeftijd van Thamara is: " . $thamara->getLeeftijd(); 
	?>
</body>
</html>