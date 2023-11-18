<?php require_once('head.php') ;
require_once("header.php") ;

if (isset($_COOKIE['utilisateur'])) { ?>
  <body>
    <div class="container">
        <h1> Votre Galerie Pohoto </h1>
        <form action="galerie.php" method="get">
            <label for="date" > Date photo/vidéo : </label>
            <input type="date" id="date" name="datePhoto">
            <br>
            <label for="saisietext" > Commentaires : </label> 
            <br>
            <textarea placeholder="Commentaires" id="saisietext" name="commentaires"></textarea>
            <br>
            <label> Photo/Vidéo à envoyer : </label> 
            <br>
            <input type="file" name="photovideo">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
<?php } else {
  echo "Vous devez etre connecté pour acceder a cette page" ;
  echo "<a href='connexion.php' title='Vous connecter'> Vous pouvez vous connecter ici </a>" ;
}

require_once ("footer.php") ?>

