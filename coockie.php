<?php

if ((!empty($_GET['user']))&&(!empty($_GET['mdp']))) {
$prenom=$_GET["user"] ;
$mdp=$_GET["mdp"] ;
$infos=[$prenom , $mdp] ;
$strInfos=implode("," , $infos) ;
$expire=time()+60 ;

setcookie("utilisateur" , $strInfos , $expire ) ; 
echo $_COOKIE["utilisateur"] ; 

header("Location:index.php") ;
exit ;

} else {
    header("Location:connexion.php") ;
    exit ;
}

?>