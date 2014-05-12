<?php
session_start();
define('USER','root');
define('MDP', 'root');
define('DSN', 'mysql:host=localhost;dbname=GestionStage');

function connecter() {
    try {
        $connexion = new PDO(DSN, USER, MDP);
//        $sql ="SET NAMES latin1_german1_ci";
        $sql ="SET NAMES utf8";
        $stmt = $connexion->query($sql);
        //echo "connexion réussie";
    } catch (PDOException $e) {
        echo "Erreur ! : " . $e->getMessage() . "<br />";
        $connexion = null;
    }
    return $connexion;
}

function typeUtilisateur($conn, $login){  
    $role= "SELECT ROLE FROM UTILISATEUR WHERE LOGIN='".$login."'";
    $stmt = $conn->query($role);
    return $role;
    
}

function connexion($conn, $login, $mdp){
    $sql= "SELECT COUNT(*) nbRes FROM UTILISATEUR WHERE LOGIN='".$login."' AND MOT_DE_PASSE='".$mdp."'";
    $stmt = $conn->query($sql);
    $row= $stmt->fetch();
    if ($row['nbRes'] == 1){
        $_SESSION['login']=$login;
        header('Location: index.php?action=accueil');
    }else{
        header('Location: index.php?action=erreur');
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// deconnexion util
function deconnexion($conn){
    session_unset();
    session_destroy();
    header('Location: index.php');    
}

function coordonneesUtilisateur(){

    $connexion = mysql_connect('localhost', 'root', 'root');

    mysql_select_db('GestionStage', $connexion) or die("Impossible d'ouvrir la base");

    $login=$_SESSION['login'];
    $sql= "SELECT NOM, NUM_TEL, ADRESSE_MAIL, PRENOM FROM UTILISATEUR INNER JOIN PERSONNE ON UTILISATEUR.IDPERSONNE = PERSONNE.IDPERSONNE WHERE LOGIN ='$login'";
    $resultat= mysql_query($sql,$connexion);
    while ($ligne=mysql_fetch_assoc($resultat))  {
        $Retour["nom"] = $ligne['NOM'];
        $Retour["prenom"] = $ligne['PRENOM'];
        $Retour["tel"]= $ligne['NUM_TEL'];
        $Retour["mail"]= $ligne['ADRESSE_MAIL'];
    }
    return $Retour;
}
function coordonneesOrganisation(){

    $connexion = mysql_connect('localhost', 'root', 'root');

    mysql_select_db('GestionStage', $connexion) or die("Impossible d'ouvrir la base");

  
    $sql= "SELECT NOM_ORGANISATION, VILLE_ORGANISATION, ADRESSE_ORGANISATION, CP_ORGANISATION, TEL_ORGANISATION, MAIL FROM ORGANISATION";
    $resultat= mysql_query($sql,$connexion);
        while ($ligne=mysql_fetch_assoc($resultat))  {
        $Retour["NOM_ORGANISATION"] = $ligne['NOM_ORGANISATION'];
        $Retour["VILLE_ORGANISATION"] = $ligne['VILLE_ORGANISATION'];
        $Retour["ADRESSE_ORGANISATION"]= $ligne['ADRESSE_ORGANISATION'];
        $Retour["CP_ORGANISATION"]= $ligne['CP_ORGANISATION'];
        $Retour["TEL_ORGANISATION"]= $ligne['TEL_ORGANISATION'];
        $Retour["MAIL"]= $ligne['MAIL'];
    }
        return $Retour;

}
?>