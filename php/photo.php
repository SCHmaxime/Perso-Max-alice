<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <a href="../html/index.html" > Acceuil </a>

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



    </body>

</html>