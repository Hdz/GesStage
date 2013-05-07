<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    
    $entete= "./vue/vueMenuConnexion.inc.php";
    $centre= "./vue/vueErreur.inc.php";
    include("./vue/template.inc.php");
?>
