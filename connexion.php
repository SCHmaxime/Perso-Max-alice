<?php 

require_once("head.php") ; 
require_once ("header.php")  ;

if (isset($_COOKIE['utilisateur'])) {
    echo "Vous etes deja connecté" ;
    echo "<a href='decocoockie.php' title='se deconnecter'> Se deconnecter 
    </a>" ;
} else {
?>

    <body>  
        <h1>Compte utilisateur</h1> 
        <p>Champs Obligatoires *</p> <br>
        <form action="coockie.php" method="get">
            <p><label for="user" >Nom d'utilisateur (*)</label> <br>
            <input type="text" id="user" name="user" placeholder="Nom d'utilisateur" ></p> 
            <p><label for="mdp" > Mot de passe (*)</label> <br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" ></p> <br>
            <input type="submit" value="Connexion" >
        </form>
    </body>
   
<?php }

require_once ("footer.php") ?>



