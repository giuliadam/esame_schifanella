<?php
        //error_reporting(E_ALL);
        //ini_set( 'display_errors','1');

        session_start();
		

        if (isset($_SESSION["svuotacarrello"])) {
          $_SESSION["svuotacarrello"]="";
        }

        header('Location: V&G_carrello.php');
		echo "<p>Il tuo carrello &egrave; vuoto!</p>";
        exit; 
  ?>
