<?php
  include ("Controlleur/controlleur.php");
  include ("Controlleur/controlleur.class.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Filelec : Vente de toutes pièces automobile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/intro.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul>
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> filelec@filelec.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul>
          <li><a href="vueconnexion.php">Connexion</a></li>
          <li><a href="vueinscriptionType.php">Inscription</a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">FILELEC</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Accueil</a></li>
          <li><a href="vueachat.php" class="drop">Achats</a>
            <ul>
              <li><a href="vueachatfreinage">Freinage</a></li>
              <li><a href="vueachatdst">Direction - Suspension - Train</a></li>
              <li><a href="vueachatebv">Embrayage boîte de vitesse</a></li>
              <li><a href="vueachatpmh">Pièces moteur et huile</a></li>
              <li><a href="vueachatfiltration">Filtration</a></li>
              <li><a href="vueachatdc">Démarrage et charge</a></li>
              <li><a href="vueachatcpt">Climatisation et pièces thermiques</a></li>
              <li><a href="vueachatvisibilite">Visibilité</a></li>
              <li><a href="vueachatph">Pièces habitacle</a></li>
              <li><a href="vueachatap">Attelage et portage</a></li>
              <li><a href="vueachatoutillage">Outillage</a></li>
              <li><a href="vueachatae">Accesoires et équipements</a></li>
              <li><a href="vueachaten">Entretien et nettoyage</a></li>
            </ul>
          </li>
          <li><a class="drop" href="vuepanier.php">Panier</a>
            <ul>
              <li><a href="vueliste.php">Liste d'achat</a></li>
              <li><a href="vuepaiement.php">Paiement</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="vueapropos.php">A propos</a></li>
          <li><a href="vuefaq.php">FAQ</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>FILELEC</p>
            <h3 class="heading">Profité de la nouvelle technologie</h3>
            <p>Vente aux profesionnelles et particuliers</p>
            <footer>
              <form class="group" method="post" action="#">
                <fieldset>
                  <legend>Newsletter:</legend>
                  <input type="email" value="" placeholder="Email Here&hellip;">
                  <button class="fa fa-sign-in" type="submit" title="Submit"><em>Submit</em></button>
                </fieldset>
              </form>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p>Vulputate</p>
            <h3 class="heading">Rhoncus nisl non</h3>
            <p>Interdum erat ipsum quis leo viverra magna</p>
            <footer><a class="btn inverse" href="#">Fusce efficitur</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>Maecenas</p>
            <h3 class="heading">Diam feugiat tellus</h3>
            <p>Aliquam ante odio at condimentum mauris</p>
            <footer><a class="btn" href="#">Tincidunt etiam</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h3 class="heading">Attelage et portage</h3>
    </div>
    <center><img src='images/achat/ap.jpg'></center>
	<table border = 0>
		<tr><td> Equipement : </td><td><input type="text" name="NomE" value="<?php if (isset($resultat)) echo $resultat['NomE']; ?>"></td><br/></tr>
		<tr><td> Photo : </td><td><input type="text" name="PhotoE" value="<?php if (isset($resultat)) echo $resultat['PhotoE']; ?>"></td><br/></tr>
		<tr><td> Description : </td><td><input type="text" name="Descr" value="<?php if (isset($resultat)) echo $resultat['Descr']; ?>"></td><br/></tr>
		<tr><td> Prix : </td><td><input type="text" name="Prix" value="<?php if (isset($resultat)) echo $resultat['Prix']; ?>"></td><br/></tr>
		<tr><td> Quantitté en Stock : </td><td><input type="text" name="QteE" value="<?php if (isset($resultat)) echo $resultat['QteE']; ?>"></td><br/></tr>
	</table>

	<form>
		<center>
		<tr><td><input type="submit" name="Valider" value="Acheter" style="width:250px"></td></tr><br/>
		</center>
	</form>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">Faucibus ligula at vehicula justo nullam ligula</h6>
    <footer class="one_quarter"><a class="btn" href="#">Lacus nullam nisi &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Réseau Social</h6>
      <p>Ligula a placerat condimentum orci nulla feugiat odio vel felis lacinia interdum cras auctor purus ut hendrerit.</p>
      <p class="btmspace-15">Malesuada non sem quisque vulputate velit et nisi ullamcorper aliquet tincidunt ut id magna leo mattis in quam dapibus.</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Coodonnées</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          5 Boulevard Malesherbes, 75008 Paris
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> filelec@filelec</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Actualité</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">In neque nam tortor</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Facilisis ex facilisis curabitur euismod egestas mauris et ultricies mauris&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Odio lobortis nec cursus</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Cras consequat sem quis hendrerit interdum nunc diam volutpat&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">FILELEC</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
    
</body>
</html>