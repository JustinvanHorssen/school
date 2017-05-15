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
		
		$thamara->printgegevens(); 

		$demirel->printgegevens(); 



		$user1 = new User("Shireen",22,"vrouw","shireen@gmail.com", "Uh65tg", true);
		echo "<br> Naam van user1 is:" . $user1->getNaam();

		$user1->printgegevens();
	?>
</body>
</html>