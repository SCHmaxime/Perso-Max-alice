<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie de bébé</title>
</head>
    <body>
      <h1>Galerie photos/vidéos </h1>
      <br>
      <a href="../html/index.html" > Acceuil </a>

  

    <?php
    
    $dateenvoie=$_GET["datePhoto"] ; 
    $commentaire=$_GET["commentaires"] ;
    $photoPost=$_GET["photovideo"] ;

    echo "$dateenvoie"."$commentaire".""."$photoPost" ;

    ?>
    
    </body>
</html>