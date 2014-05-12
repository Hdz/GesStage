<?php
include_once("./modele/modele.inc.php");
if (!isset($connection) || $connection != null) {
    $connexion = connecter();
}
$login=$_SESSION['login'];
$res=coordonneesOrganisation();



$entete= "./vue/vueMenu.inc.php"; 
$centre= "./vue/vueEntreprises.inc.php";
include("./vue/template.inc.php");
?>