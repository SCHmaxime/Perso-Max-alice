<?php require_once("head.php") ; ?>


    <body>
    <a href="index.php" > Acceuil </a>
    
    <h1>Compte utilisateur</h1>

    
    <form action="connexion.php" method="get">
        <p><label for="user" >Nom d'utilisateur</label>
        <input type="text" id="user" name="user" value="<?php if (isset($_GET["user"])) { echo $_GET["user"] ; } ?>" placeholder="Nom d'utilisateur" ></p>
        <p><label for="mdp" > Mot de passe </labler>
        <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" ></p>
        <input type="submit" value="Connexion" >
    </form>
   
<?php

if (isset($_GET["user"])) {
    if ($_GET["user"]==="") {
        echo "Merci de renseigner votre user <br>" ;
    } else {
        $user=$_GET["user"] ;
    }
}

if (isset($_GET["mdp"])) {
    if ($_GET["mdp"]==="") {
        echo "Veuillez saisir votre mot de passe " ;
    } else {
        $mdp=$_GET["mdp"] ;
    }
}

if (isset($user, $mdp)) {
    echo "Merci $user vous être connecté " ;
}

?>

</body>
</html>