<?php
	function connexion()
	{
		$con = mysqli_connect("localhost","root","","filelec");
		return $con;
	}

	function deconnexion($con)
	{
		mysqli_close($con);
	}

			//Accueil
		
		//Les 5 produits les plus achetés
		//Les 5 derniers produits ajoutés

			//Achats
		//1 requête pour tous les types

			//Connexion
	
		//Profil
		//Messagerie
		//Suivie de commande
		//Deconnexion

			//Inscription
	function InscriptionProfessionnel($tab)
	{
		$con = connexion();
		$requete =  "insert into client (idC, NomSoc, MailC, mdpC, AdrC, Ville, CP, Pays, TypeC) value (null, '".$tab['NomSoc']."', '".$tab['MailC']."', '".$tab['mdpC']."', '".$tab['AdrC']."', '".$tab['Ville']."', '".$tab['CP']."', '".$tab['Pays']."', 'Professionnel' );"; 
		$resultats = mysqli_query($con,$requete);
		deconnexion($con);
		return $resultats;
	}

	function InscriptionParticulier($tab)
	{
		$con = connexion();
		$requete =  "insert into client (idC, PrenomC, NomC, MailC, mdpC, AdrC, Ville, CP, Pays, TypeC) value (null, '".$tab['PrenomC']."', '".$tab['NomC']."', '".$tab['MailC']."', '".$tab['mdpC']."','".$tab['AdrC']."', '".$tab['Ville']."', '".$tab['CP']."', '".$tab['Pays']."', 'Particulier' );";
		$resultats = mysqli_query($con,$requete);
		deconnexion($con);
		return $resultats;
	}

			//Panier

		//Vue du panier
		//Paiement

			//FAQ
?>
