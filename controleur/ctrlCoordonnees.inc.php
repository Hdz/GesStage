<?php
include_once("./modele/modele.inc.php");
if (!isset($connection) || $connection != null) {
    $connexion = connecter();
}
$login=$_SESSION['login'];
$res=coordonneesUtilisateur();

$entete= "./vue/vueMenu.inc.php"; 
$centre= "./vue/vueCoordonnees.inc.php";
include("./vue/template.inc.php");
?>