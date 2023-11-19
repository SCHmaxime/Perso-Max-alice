<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="C:\Users\Maxime\OneDrive\Bureau\Projet perso ISFAC\html\pousette.png" >
    <link href="style.css" rel="stylesheet">
    <title>Devenir parents - <?php 

                            $title=$_SERVER['REQUEST_URI'] ;
                            $pageActuel=substr($title , 20 ) ;
                            $titleActuel=substr($pageActuel , 0 , -4) ;
                            $titleActuelMaj=ucfirst($titleActuel);
                            echo $titleActuelMaj ;
                          
                            ?>
                            
    </title>

                            
</head>