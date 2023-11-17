<?php require_once ("head.php") ?>

    <body>
      <h1>Galerie photos/vidéos </h1>
      <br>
      <a href="../html/index.html" > Acceuil </a>

  

    <?php
    
    require_once("footer.php") ;
    $dateenvoie=$_GET["datePhoto"] ; 
    $commentaire=$_GET["commentaires"] ;
    $photoPost=$_GET["photovideo"] ;

    echo "$dateenvoie"."$commentaire".""."$photoPost" ;

    ?>
    
    </body>
</html>