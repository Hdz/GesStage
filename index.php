<?php 
    if (isset($_GET['action']) && $_GET['action'] != null) {
        $action = $_GET['action'];
        switch ($action) {
        case 'connexion' :
            $page = 'ctrlConnexion.inc.php';
            break;
        case 'accueil' :
            $page = 'ctrlAccueil.inc.php';
            break;
        case 'coordonnees' :
            $page = 'ctrlCoordonnees.inc.php';
            break;
        case 'entreprise' :
            $page = 'ctrlEntreprise.inc.php';
            break;
        case 'stages':
            $page = 'ctrlStages.inc.php';
            break;
        case 'visites':
            $page = 'ctrlVisites.inc.php';
            break;
        case 'deconnexion' :
            $page = 'ctrlDeconnexion.inc.php';
            break;
        case 'erreur' :
            $page = 'ctrlErreur.inc.php';
            break;
        case 'utilisateurs' :
            $page = 'ctrlUtilisateur.inc.php';
            break;
                    
        } 
    } else {
        $page = 'ctrlConnexion.inc.php';
    }
    if (isset($_SESSION['login'])) {
        $page = 'ctrlAccueil.inc.php';
    }
    include("./controleur/" . $page);
?>