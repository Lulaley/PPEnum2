<?php
	include ("Modele/modele.class.php");

	class Controlleur
	{
		private $unModele;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			//Instanciation de la classe Modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
		}

		public function VerifierConnexion($email, $mdp)
		{
			if($email == "" || $mdp == "")
			{
				return null;
			}
			else
			{
				return $this->unModele->VerifierConnexion($email, $mdp);
			}
		}
	}
?>