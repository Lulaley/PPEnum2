<center>
	<br/>
	<br/>
	<br/>
	<p> Veuillez remplir tous les champs qui contient les * </p>
	<form method ="post" action ="">
	<table border = 0>
		<tr><td><a title="Les caractères spéciaux autorisés (é è à ù ê â ë ä ü ï & ç)">*</a>Nom de Société : </td><td><input type="text" name="NomSoc" value="<?php if (isset($resultat)) echo $resultat['NomSoc']; ?>" style="width:250px" maxlength="25"></td><br/></tr>
		<tr><td><a title="Les caractères spéciaux autorisés (é è à ù ê â ë ä ü ï & ç)">*</a>Adresse : </td><td><input type="text" name="AdrC" value="<?php if (isset($resultat)) echo $resultat['AdrC']; ?>" style="width:250px" maxlength="25"></td><br/></tr>
		<tr><td><a title="Les caractères spéciaux autorisés (é è à ù ê â ë ä ü ï & ç)">*</a>Ville : </td><td><input type="text" name="Ville" value="<?php if (isset($resultat)) echo $resultat['Ville']; ?>" style="width:250px" maxlength="25"></td><br/></tr>
		<tr><td><a title="Il est être composer que 5 chiffres">*</a>Code Postal : </td><td><input type="text" name="CP" value="<?php if (isset($resultat)) echo $resultat['CP']; ?>" style="width:250px" maxlength="5"></td><br/></tr>
		<tr><td><a title="Les caractères spéciaux autorisés (é è à ù ê â ë ä ü ï & ç)">*</a>Pays : </td><td><input type="text" name="Pays" value="<?php if (isset($resultat)) echo $resultat['¨Pays']; ?>" style="width:250px" maxlength="25"></td></tr>
	</table>
	<br/>
	<br/>
	<br/>
	<h2> Compte </h2>
	<table border = 0>
		<tr><td><a title="Insérez un e-mail valide">*</a>Email : </td><td><input type="text" name="MailC" value="<?php if (isset($resultat)) echo $resultat['MailC']; ?>" style="width:250px" maxlength="25"></td><br/></tr>
		<tr><td><a title="Le mot de passe peut être de longueur 12 caractères et peut être composer de caractères spéciaux (é è à ù ê â ë ä ü ï & # ç @)">*</a>Mot de passe : </td><td><input type="password" name="mdpC" value="<?php if (isset($resultat)) echo $resultat['mdpC']; ?>" style="width:250px" maxlength="12"></td><br/></tr>
	</table>

	<tr><td><input type="submit" name="ValiderPro" value="Valider" style="width:250px"></td></tr>
	<tr><td><input type="submit" name="AnnulerPro" value="Annuler" style="width:250px"></td></tr>
</center>