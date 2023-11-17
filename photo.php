<?php require_once('head.php') ?>


<body>
    <div class="container">
        <a href="index.php" > Acceuil </a>
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

<?php require_once ("footer.php") ?>

