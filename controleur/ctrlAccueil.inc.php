<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }       
    
    $entete= "./vue/vueMenu.inc.php";
    $centre= "./vue/vueAccueil.inc.php";
    include("./vue/template.inc.php");
?>
