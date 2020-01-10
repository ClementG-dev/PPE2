<?php

session_start();

if ( $_SESSION['email'] == "" )
{
  header('location: login.php'); // pas de session alors on login
}
else
{
  header('location: main.php'); // si il y a une session on go sur la main page
}

?>