<?php 

require_once("head.php") ; 
require_once ("header.php")  ;

?>

<div class="container">

    <?php

    if (isset($_COOKIE['utilisateur'])) {
        echo "Vous etes deja connecté " ;
        echo "<a href='decocoockie.php' title='se deconnecter'> Se deconnecter 
        </a>" ;
    } else {
    ?>

</div>

    <body>
        <div class="container">
        <h1>Connectez vous :</h1>
        <h3> Pas de compte ? </h3>
        <p>
            <a href="ajoutUtilisateur.php" title="Creer compte"> Cliquez ici pour créer un compte
            </a>
        </p>
            <div class="formulaire">
                <p>Champs Obligatoires *</p> <br>
                <form class="form-connexion" action="connexion.php"  method="get"> 
                    <label for="user" >Nom d'utilisateur (*)</label> <br>
                    <input type="text" id="user" name="user" placeholder="Nom d'utilisateur" value="<?php 
                                                                                                        if (isset($_GET['user'])) {    
                                                                                                            echo $_GET['user'] ; 
                                                                                                        } 
                                                                                                        ?>"> <br>
                    <?php 
                    
                    if (isset($_GET['user'])) {
                        if (empty($_GET['user'])) {
                            echo "<span class='msg-erreur'> Merci de renseigner un nom d'utilisateur </span> <br>" ;
                        }
                    }

        ?>
                    
                    <label for="mdp" > Mot de passe (*)</label> <br>
                    <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" > <br>
                    <?php 
                    
                    if (isset($_GET['mdp'])) {
                        if (empty($_GET['mdp'])) {
                            echo "<span class='msg-erreur'> Merci de renseigner un mot de passe </span> <br>" ;
                        }
                    }

        ?>
                    <input class="bouton-envoyer" type="submit" value="Connexion" >
                </form>
            </div>
        </div>



<div class='container'>

    <?php  

    if ((!empty($_GET['user']))&&(!empty($_GET['mdp']))) {
    $prenom=$_GET["user"] ;
    $mdp=$_GET["mdp"] ;
    $infos=[$prenom , $mdp] ;
    $strInfos=implode("," , $infos) ;
    $expire=time()+60 ;

    setcookie("utilisateur" , $strInfos , $expire ) ; 

    echo "<span class='msg-bienvenue'> Bienvenue $prenom </span>" ;
    header("Refresh:3 ; url=index.php") ;
    exit ; 
    } 
        
    } 

    ?>

</div>

<?php 

require_once ("footer.php") 

?>



