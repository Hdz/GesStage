<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    
    
    
    deconnexion($connexion);
    header('Location: index.php');
    
  
    $entete= "./vue/vueMenuConnexion.inc.php";
    $centre= "./vue/vueAccueil.inc.php";
    include("./vue/template.inc.php");
?>
