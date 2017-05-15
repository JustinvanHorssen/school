<?php 
	class Persoon{
		public $naam;
		private $leeftijd;
		protected $geslacht;
		function __construct($persoonsnaam, $leeftijd, $geslacht){
			$this->naam = $persoonsnaam;
			$this->leeftijd = $leeftijd;
			$this->geslacht = $geslacht;
			echo "<br> Nieuw persoon object $persoonsnaam aangemaakt";
		}

		function __destruct(){
			// voer de bonidgde acties uit;
			echo "<br> Persoon object $this->naam wordt verwijderd";
		}

		function setGeslacht($geslacht){
			$this->geslacht = $geslacht;
		}

		function getGeslacht(){
			return $this->geslacht;
		}

		function setLeeftijd($leeftijd){
			$this->leeftijd = $leeftijd;
			echo "<br> Leeftijd van $this->naam omgezet in: $this->leeftijd";
		}

		function getLeeftijd($leeftijd){
			return $this->leeftijd;
		}
		function setNaam($persoonsnaam)
		{
			if (is_string($persoonsnaam)) 
				{
					$this->naam = $persoonsnaam;
				}
			else{
				echo "<br>Datatype error in setNaam() methode.";
			}
		}

		function getNaam($naam)
		{
			return $this->naam;
		}


		public function printgegevens(){
			$gegevens = 
			"
			<br>
			<br>De gegevens van $this->naam zijn:
			<br>Leeftijd: $this->leeftijd
			<br>geslacht: $this->geslacht";
			echo "$gegevens";
		}

	}//einde Persoon Class


	class User extends Persoon{
		private 	$email;
		private 	$wachtwoord;
		public 		$admin;
		function __construct(
			$persoonsnaam,
			$leeftijd,
			$geslacht,
			$email,
			$wachtwoord,
			$admin){
				parent::__construct(
					$persoonsnaam,
					$leeftijd,
					$geslacht);
					$this->email=$email;
					$this->wachtwoord=$wachtwoord;
					$this->admin = $admin;
					echo "<br>Nieuw User $persoonsnaam extends Persoon";


		}
		function __destruct(){
			// voer de benodigde acties uit
			echo "<br>User object $this->naam wordt verwijderd";
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setWachtwoord($wachtwoord){
			$this->wachtwoord = $wachtwoord;
		}
		
		public function setAdmin($Admin){
			$this->admin = $admin;
		}
		
		public function getEmail(){
			return $this->email;
		}

		public function getWachtwoord(){
			return $this->wachtwoord;
		}

		public function getAdmin(){
			return $this->admin;
		}

		public function printgegevens(){
			$gegevens = parent::printgegevens();
				$gegevens .="<br> Email: $this->mail";
				$gegevens .="<br> Wachtwoord: $this->wachtwoord";
				$gegevens .="<br> Admin: $this->admin";
				echo $gegevens;
		}
	}// einde User class



?>