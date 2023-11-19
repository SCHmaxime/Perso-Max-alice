<body>
    <header>
        <div class="header-top">
        <a href="index.php" title="Acceuil"> <img src="">
        </div>
        <div class="header-bot">
            <div class="container">
                <nav class="nav1">      
                    <ul>
                        <li>
                            <a href="index.php" title="Retour accueil"> Accueil 
                            </a>
                        <li> 
                            <a href="connexion.php" title="Page connexion"> Connexion 
                            </a> 
                        </li>
                        <li> 
                            <a href="Meteo.php" title="meteo"> Météo 
                            </a> 
                        </li>
                        <li> 
                            <a href="calendrier.php" title="calendrier perso"> Calendier                               
                            </a>
                        </li>
                        <li> 
                            <a href="courbeBebe.php" title="suivi de bebe"> Croissance de bébé                                 
                            </a>
                        </li>
                        <li> 
                            <a href="geolocalisation.php" title="gelocalisation"> Localisation                                
                            </a>
                        </li>
                        <li> 
                            <a href="chrono.php" title="fonction chrono"> Chrono                                
                            </a> 
                        </li>
                        <li> 
                            <a href="galerie.php" title="Vos photos"> Galerie 
                            </a>
                        </li>
                        <li> <?php if (isset($_COOKIE['utilisateur'])) {
                                        $infos=$_COOKIE['utilisateur'] ;
                                        $arrInfos=explode("," , $infos) ;
                                        echo "Bienvenue $arrInfos[0]" ; 
                                    } elseif (!isset($_COOKIE['utilisateur'])){
                                        echo "Vous êtes deconnecté" ;
                                    }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="file-arianne">
                        Fil d'arianne
            </div>
        </div>
    </header>