<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    $login=$_SESSION['login'];
$entreprise= $_POST["entreprise"];
$res=coordonneesOrganisation($entreprise);



    if($_SESSION['role']=="professeur"){
            $entete= "./vue/vueMenuProf.inc.php";
        }elseif($_SESSION['role']=="admin"){
            $entete= "./vue/vueMenuAdmin.inc.php";
        }elseif($_SESSION['role']=="secretaire"){
            $entete= "./vue/vueMenuSecretaire.inc.php";
        }else{
            $entete= "./vue/vueMenu.inc.php";
        }
    $centre= "./vue/vueEntreprises.inc.php";
    include("./vue/template.inc.php");
?>