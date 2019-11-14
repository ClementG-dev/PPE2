<?php

session_start();    

//Connection a la base de donnees

// Recuperation du form
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$infos = array($email, $mdp);

// detection d'erreurs
for ($i=0; $i < 1; $i++) { 

    if ($infos[$i]){
        // aucune action necessaire
    }else{
        // Renvoyer une erreur a la page inscription avec le nom de l'erreur
        header('location: login.php?erreur='.$i);   
    }
}

// recuperation des infos de l'utilisateur en fonction de l'email

// verification du mot de passe 

// acces au site


?>