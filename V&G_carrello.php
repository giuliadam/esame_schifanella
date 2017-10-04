<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>V&G SHOES | Carrello</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
	<!-- jQuery -->
    <script src="js/jquery-3.2.1.js"></script>
	<script src="js/jquery.lazyload.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   <script>
  $(document).ready(function(e) {

    $("#svuotacarrello").click(function(event) {
      console.log("svuoto il carrello");
      window.location.href="svuotacarrello.php";
    });

  });

  </script>

</head>

<body>

<?php

  session_start();

 

  if (!isset($_SESSION["carrello"])) {
    $_SESSION["carrello"]="";
  }


  if ($_SESSION["carrello"]=="") {
    $carrello=array();
  } else {
    $carrello=explode(" ",trim($_SESSION["carrello"]));
    $carrello=array_unique($carrello);
  }

  if (isset($_REQUEST["cat"])) {
			  $categoria=$_REQUEST["cat"];
			}
  
  
  $connessione = new mysqli("localhost","root","matec","shoes_shop");


  $totale=0;
  if (count($carrello)>0) {
    $carrello_string=implode(",", $carrello);
    $query_carrello="select * from shoes_shop.prodotti where cod_prodotto in ($carrello_string)";
  }

  
  ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="V&G_HOME.php">V&G SHOES</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="V&G_carrello.php">Il mio carrello</a>
                    </li>
					   <li>
                        <p style="text-align: right;">Non sei <?php echo $_SESSION["nome"]; ?>?<a href="logout.php"> esci</a></p>
                    </li>
                    
                </ul>
            							
				<form action="ricerca_scarpe.php" class="search-form" role="search" method="post">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="Cerca">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
				</form>
				
			</div>
        </div>
           
        
        
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
               
                <div class="list-group">
				
				<?php
				

                    echo"<a href='V&G_prodotto.php?cat=sneakers' class=\"list-group-item\">Sneakers<a>";
					echo"<a href='V&G_prodotto.php?cat=sandali' class=\"list-group-item\">Sandali</a>";
					echo"<a href='V&G_prodotto.php?cat=Stivali' class=\"list-group-item\">Stivaletti/Stivali</a>";
					echo"<a href='V&G_prodotto.php?cat=decollete' class=\"list-group-item\">Decolleté</a>";
					echo"<a href='V&G_prodotto.php?cat=ballerine' class=\"list-group-item\">Ballerine</a>";
					echo"<a href='V&G_prodotto.php?cat=scarpe basse' class=\"list-group-item\">Scarpe basse</a>";
					
					?>
					
				</div>
			</div>
			
			<?php
            if (count($carrello)>0) {

              $totale=0;
              if (!($risultato = $connessione->query($query_carrello)))
                die("Query su carrello fallita!");
			
			echo "<div class=\"col-md-6\">";
			
			  echo "<h2>Carrello</h2>";
              echo '<table class="table table-striped">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>N° ordine</th>';
              echo '<th>Prodotto</th>';
              echo '<th>Prezzo</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              $i=1;
              while ($riga = $risultato->fetch_array()) {
                $id = $riga["id"];
                $nome = $riga["nome"];
                $prezzo=$riga["prezzo"];

                $totale=$totale+$prezzo;

                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td><a href='V&G_dettaglioprodotto.php?id=$id'>$nome</a></td>";
                echo "<td>$prezzo</td>";
                echo "</tr>";

                $i++;
              }
              echo "</tbody>";
              echo "</table>";
              echo "<p style=\"float:right\">Totale: $totale EUR</p>";
              echo "<form action='V&G_pagamento.php' method='post'>";
              echo "<input type='hidden' name='totale' value='\".$totale.\"'/>";
			  echo "<br>";
			  echo "<br>";
			  echo "<br>";
			  echo "<button type='button' id='svuotacarrello'>Svuota il carrello</button>";
			  echo "<button href=\"V&G_pagamento.php\" style=\"float:right\" type='submit'>Acquista ora!</button>";
              
              echo "</form>";
			  
			  echo"</div>";
              

            } else {
              echo "<p>Il tuo carrello &egrave; vuoto!</p>";
            }
            ?>
	
	
	
		</div>

    </div>
	


   <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                
				<div class="col-sm-4 col-xs-12">
                    <p><strong>CONTATTI</strong></p>
                    <p>Telefono: 1002563258<br>
                    Mail: vg_shoes@gmail.com</p>
					<hr>
                </div>
				<div class="col-sm-4 col-xs-12">
                    <p><strong>ORARI</strong></p>
					<p>Lunedì - chiuso <br>
                    Martedì - Domenica 10.00 - 19.00</p>
					<hr>
					<p><strong>SEDI</strong></p>
                    <p>Via delle Rosine 5</p>
                    <p>Corso Rosselli 43</p>
                    <p>Via Cernaia 52</p>
                    <hr>
                </div>
				<div class="col-sm-4 col-xs-12">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
			
        </footer>

    </div>
    <!-- /.container -->

    

</body>

</html>
