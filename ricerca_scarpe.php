<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>V&G SHOES | HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
	
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
	<script>
				$(function() {
		// OPACITY OF BUTTON SET TO 0%
		$(".thumbnail").css("opacity","1");
		 
		// ON MOUSE OVER
		$(".thumbnail").hover(function () {
		 
		// SET OPACITY TO 70%
		$(this).stop().animate({
		opacity: .7
		}, "slow");
		},
		 
		// ON MOUSE OUT
		function () {
		 
		
		$(this).stop().animate({
		opacity: 1
		}, "slow");
		});
		});
			
	
	</script>
	
	<script>
			$(document).ready( function(){
					$("img.lazy").lazyload({
						 effect : "fadeIn",
						 effect_speed:1000
					});
				});
	</script>
	
	
	

</head>

<body> 

   <?php
    

    session_start();


    if (!isset($_SESSION["nome"])) {
      header('Location: login.php');
      exit;
    }
	
	if (!isset($_SESSION["carrello"])) {
          $_SESSION["carrello"]="";
        }

       

        if ($_SESSION["carrello"]=="") {
          $carrello=array();
        } else {
          $carrello=explode(" ",trim($_SESSION["carrello"]));
          $carrello=array_unique($carrello);
        }
			
			$db_host = "localhost";
			$db_user = "root";
			$db_pass = "matec";
			$db_name = "shoes_shop";

		$connex = new mysqli($db_host, $db_user, $db_pass, $db_name);

									// verifica errori di connessione
									if ($connex->connect_error) {
										die("Connection failed: " . $connex->connect_error);
										exit();
									
									} 
																
																							
														?>
							  

							  
							  
   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            
				
				
				<form action="ricerca_scarpe.php" class="search-form" id="search" role="search" method="post">
					<div class="form-group has-feedback">
						<label for="search" class="sr-only">Search</label>
						<input type="text" class="form-control" name="search" id="search" placeholder="Cerca">
						<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</form>
			
        </div>
            </div>
            
       
        
    </nav>
	
	<div class="container">
	  <div class="row">
          <div id="colonna1" class="col-xs-12 col-sm-9 colonna">
				<div class="row">
				  <div class="col-xs-12 colonna">
						<div class="page-header">
						  <h3>Risultati della ricerca</h3>
						</div>
					</div>
				</div>
            
			<?php
				$testo = isset($_POST["search"]) ? htmlspecialchars($_POST["search"]) : '';
				
				$query_ricerca = "SELECT * FROM shoes_shop.prodotti WHERE categoria='$testo' OR colore='$testo' limit 9";
																																		
																
				if (!($risult = $connex->query($query_ricerca)))
				die("Query sui prodotti fallita!");

														 
				
			     $i=0;
				 while ($riga = $risult->fetch_assoc()) {
					 
					$id=$riga["cod_prodotto"];
					$nome = $riga["nome"];
					$categoria=$riga["categoria"];
					$descrizione=substr($riga["descrizione"],0,100)."...";
					$prezzo=$riga["prezzo"];
					$immagine=$riga["immagine"];
																  
						
					echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">";
					echo "<div class=\"thumbnail\">";
					echo "<a href='V&G_dettaglioprodotto.php?id=$id'><img class=\"img-responsive\" src=\"$immagine\"></a>";
				    echo "<div class=\"caption\">";
					echo "<h4 class=\"pull-right\">$prezzo</h4>";
					echo "<h4><a href=\"V&G_dettaglioprodotto.php?id=$id\">$nome</a></h4>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					$i++;
					}
					
					echo("<br>");
					echo("<br>");
					echo("<br>");
					echo("<br>");
					echo("Risultati trovati: $i");
			?>	
															
															
															
			</div>
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