<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <?php

    $titre_infos = array("email", "mot de passe");
    
    if(isset($_GET["erreur"])){

      echo"<p style='color: red' >vous n'avez pas rentrez votre".$titre_infos[$_GET['erreur']]."</p>";

    }
  ?>
    <div class="container">
      <form action="traitement_login.php" method="post">
        <p>E_mail</p>
        <input  type="text"      name="email"   placeholder="email" ></input>

        <p>Mot de passe</p>
        <input  type="password"  name="mdp" placeholder="******"></input>

        <br/>
        <button type="submit" >Confirmer</button>
      </form>
    </div>
  </body>
</html>
