<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <?php

    $titre_infos = array("nom", "prénom", "email", "mot de passe", "confirmation de mot de passe", "sexe", "adresse postale", "ville", "code postal", "date de naissance", "numero de Télephone");
  
    if(isset($_GET["erreur"])){

      echo"<p style='color: red' >VOUS N'AVEZ PAS RENTRER VOTRE".$titre_infos[$_GET['erreur']]."</p>";

    }
  ?>
    <div class="container">
      <form action="traitement.php" method="post">
        <p>Nom</p>
        <input  type="text"      name="nom"     placeholder="nom" ></input>

        <p>Prénom</p>
        <input  type="text"      name="prenom"  placeholder="prenom" ></input>

        <p>E_mail</p>
        <input  type="text"      name="email"   placeholder="email" ></input>

        <p>Mot de passe</p>
        <input  type="password"  name="mdp" ></input>

        <p>Confimez votre mot de passe</p>
        <input  type="password"  name="confirm_mdp" ></input>

        <p>Sexe</p>
        <label  for="sexeH">H</label>
        <input  type="radio"     name="sexe" id="H" name="H" value="H" checked>
        <label  for="sexeF">F</label>
        <input  type="radio"     name="sexe" id="F" name="F" value="F">

        <p>Adresse</p>
        <input  type="text"      name="adresse"   placeholder="adresse" ></input>

        <p>Ville</p>
        <input  type="text"      name="ville"     placeholder="ville"></input>

        <p>Code Postal</p>
        <input  type="text"      name="code_pos"  placeholder="code postale" ></input>

        <p>Date de naissance</p>
        <input  type="text"      name="date_naiss"  placeholder="07/05/1999" ></input>

        <p>Numero de telephone</p>
        <input  type="text"      name="num_tel"  placeholder="exe : 0785612479" ></input>

        <br/>
        <button type="submit" >Confirmer</button>
      </form>
    </div>
  </body>
</html>
