<?php
   include_once("./modele/modele.inc.php");
   if (!isset($connection) || $connection != null) {
       $connexion = connecter();
   }
   $login=$_SESSION['login'];

   $nom= $_POST["nom"];
   $prenom= $_POST["prenom"];
   $tel= $_POST["tel"];
   $email= $_POST["email"];


   if (!empty($nom)&&!empty($prenom)&&!empty($email)&&!empty($tel)) {
       majCoordonneesUtilisateur($nom,$prenom,$tel,$email); 
   }





   $res=coordonneesUtilisateur();
   $nomCoor= $res['nom'];
   $prenomCoor= $res['prenom'];
   $telCoor= $res['tel'];
   $addCoor= $res['mail'];

    if($_SESSION['role']=="professeur"){
            $entete= "./vue/vueMenuProf.inc.php";
        }elseif($_SESSION['role']=="admin"){
            $entete= "./vue/vueMenuAdmin.inc.php";
        }elseif($_SESSION['role']=="secretaire"){
            $entete= "./vue/vueMenuSecretaire.inc.php";
        }else{
            $entete= "./vue/vueMenu.inc.php";
        }
    $centre= "./vue/vueCoordonnees.inc.php";
    include("./vue/template.inc.php");
?>