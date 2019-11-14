<?php

//Connection a la base de donnees

// RECUPERATION DES INFO DU FORM 
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$mdp = $_POST['mdp'];
$confirm_mdp = $_POST['confirm_mdp'];
$sexe = $_POST['sexe'];
$adresse = htmlspecialchars($_POST['adresse']);
$vill = htmlspecialchars($_POST['ville']);
$code_pos = $_POST['code_pos'];
$date_naissance= $_POST['date_naiss'];
$num_tel = $_POST['num_tel'];

$infos = array($nom, $prenom, $email, $mdp, $confirm_mdp, $sexe, $adresse, $ville, $code_pos, $date_naissance, $num_tel);

// detection d'erreurs
for ($i=0; $i < 10; $i++) { 

    if ($infos[$i]){
        // aucune action necessaire
    }else{
        // Renvoyer une erreur a la page inscription avec le nom de l'erreur
        header('location: index.php?erreur='.$i);   
    }
}

// inscription dans la bdd


?>