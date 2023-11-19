<?php /*

if ((!empty($_GET['user']))&&(!empty($_GET['mdp']))) {
$prenom=$_GET["user"] ;
$mdp=$_GET["mdp"] ;
$infos=[$prenom , $mdp] ;
$strInfos=implode("," , $infos) ;
$expire=time()+60 ;

setcookie("utilisateur" , $strInfos , $expire ) ; 

echo "Bienvenue $prenom" ;
header("Refresh:3 ; url=index.php") ;
exit ;

} else {
    echo "Mdp et/ou User absent" ;
    header("Refresh:5 ; url=connexion.php") ;
    exit ;
} */

?>
