<?php 

require_once ("head.php") ;
require_once("header.php") ;

if (isset($_COOKIE['utilisateur'])) {

?>

<body>
      <h1>Galerie photos/vidéos </h1>
      <a href="photo.php" title="ajouter nouvelles photos/videos"> Ajouter de nouvelles Photos/Vidéos 

      </a>
    </body>
<?php

} else {
  echo "Vous devez etre connecté pour acceder a cette page" ;
  echo "<a href='connexion.php' title='Vous connecter'> Vous pouvez vous connecter ici </a>" ;
}

?>

    <?php
    
    require_once("footer.php") ;

    ?>
