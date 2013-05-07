<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    //recuperation des variables
    if(isset($_POST['login']) && isset($_POST['mdp'])){
        $login=$_POST['login'];
        $mdp=$_POST['mdp'];
        $connexionClient = connexion($connexion, $login, $mdp);
        $role = typeUtilisateur($connexion, $login);
    }
    $entete= "./vue/vueMenuConnexion.inc.php";
    $centre= "./vue/vueConnexion.inc.php";
    include("./vue/template.inc.php");    
?>
