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
	
	<!-- jQuery -->
    <script src="js/jquery-3.2.1.js"></script>
	<script src="js/jquery.lazyload.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    

	<script type="text/javascript" language="javascript">
		function visualizza(filtra){
		  if (document.getElementById){
			if(document.getElementById(filtra).style.display == 'none'){
			  document.getElementById(filtra).style.display = 'block';
			}else{
			  document.getElementById(filtra).style.display = 'none';
			}
		  }
		}
	</script>
    
	
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
					$("img").lazyload({
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

				// dati di connessione al mio database MySQL
							$db_host = "localhost";
							$db_user = "root";
							$db_pass = "matec";
							$db_name = "shoes_shop";



							$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

							// verifica errori di connessione
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								exit();
							
							} 



							$query_prodotti = "SELECT cod_prodotto, nome, categoria, descrizione, prezzo, immagine FROM shoes_shop.prodotti limit 9";

						if (!($risultato = $conn->query($query_prodotti)))
						  die("Query sui prodotti fallita!");
					  

					  
					  

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
                <p class="lead">Le nostre calzature</p>
				<div><a href="#" class="list-group-item" onclick="visualizza('categorie'); return false" class="visible-xs-block">CATEGORIE</a></div>
                <div class="list-group" id="categorie">
				
				<?php
				
				

						if (!($risultato = $conn->query($query_prodotti)))
						  die("Query sui prodotti fallita!");
					  
				
					
                    echo"<a href='V&G_prodotto.php?cat=sneakers' class=\"list-group-item\">Sneakers<a>";
					echo"<a href='V&G_prodotto.php?cat=sandali' class=\"list-group-item\">Sandali</a>";
					echo"<a href='V&G_prodotto.php?cat=Stivali' class=\"list-group-item\">Stivaletti/Stivali</a>";
					echo"<a href='V&G_prodotto.php?cat=decollete' class=\"list-group-item\">Decolleté</a>";
					echo"<a href='V&G_prodotto.php?cat=ballerine' class=\"list-group-item\">Ballerine</a>";
					echo"<a href='V&G_prodotto.php?cat=scarpe basse' class=\"list-group-item\">Scarpe basse</a>";
					
					
				
				?>
				 </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel hidden-xs" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slide1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>  
		</div>
           

                <div class="container">
					<div class="row">
						<div class="col-md-3">
						</div>
						
						<div class="col-md-8">
                    
						<?php
						
						$i=1;
						while ($riga = $risultato->fetch_assoc()) {
						  $id=$riga["cod_prodotto"];
						  $nome = $riga["nome"];
						  $categoria=$riga["categoria"];
						  $descrizione=substr($riga["descrizione"],0,100)."...";
						  $prezzo=$riga["prezzo"];
						  $immagine=$riga["immagine"];
					  
					  
												
						  echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">";
						  echo "<div class=\"thumbnail\">";
						  echo "<a href='V&G_dettaglioprodotto.php?id=$id' ><img class=\"img-responsive\" src=\"$immagine\"></a>";
						  echo "<div class=\"caption\">";
						  echo "<h4><a href=\"V&G_dettaglioprodotto.php?id=$id\">$nome</a></h4>";
						  echo "<h4>€ $prezzo</h4>";
						  echo "</div>";
						  echo "</div>";
						  echo "</div>";
						  
						 
						}
						
						 
						
						?>
							
						</div>
					</div>
				</div>
    
	
	
	</div>    
        
    <!-- /.container -->

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
