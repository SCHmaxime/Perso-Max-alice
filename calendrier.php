<?php 

require_once ("head.php") ;
require_once("header.php") ;

if (isset($_COOKIE['utilisateur'])) { 
    
?>
    
     <body>
        <h1>Calendrier </h1>
        </body>
    </html>
    
    <?php
    
} else {
    echo "Vous devez etre connecté pour acceder a cette page" ;
    echo "<a href='connexion.php' title='Vous connecter'> Vous pouvez vous connecter ici </a>" ;
}

    require_once ("footer.php") ;
    
    ?>


