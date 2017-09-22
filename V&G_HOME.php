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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>    


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
                <a class="navbar-brand" href="V&G_HOME.html">V&G SHOES</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="login.php">Accedi</a>
                    </li>
                    <li>
                        <a href="V&G_carrello.html">Il mio carrello</a>
                    </li>
                    
                </ul>
				
				<!--Aggiustare barra di ricerca su responsive deve essere al 100%. gestire con jQuery? Dentro o fuori il menu?-->
				<form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Le nostre calzature</p>
                <div class="list-group">
                    <a href="V&G_sneakers.html" class="list-group-item">Sneakers</a>
                    <a href="V&G_sandali.html" class="list-group-item">Sandali</a>
                    <a href="V&G_stivali.html" class="list-group-item">Stivaletti/Stivali</a>
					<a href="V&G_decolletè.html" class="list-group-item">Decolleté</a>
                    <a href="V&G_ballerine.html" class="list-group-item">Ballerine</a>
                    <a href="V&G_scarpebasse.html" class="list-group-item">Scarpe basse</a>
					<a href="#" class="list-group-filter visible-xs-block visible-sm-block">FILTRA</a>
					
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
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
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

                
                    
						<?php
												
													// dati di connessione al mio database MySQL
							$db_host = "localhost";
							$db_user = "vagiu";
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

        $i=1;
        while ($riga = $risultato->fetch_assoc()) {
          $id=$riga["cod_prodotto"];
          $nome = $riga["nome"];
          $categoria=$riga["categoria"];
          $descrizione=substr($riga["descrizione"],0,100)."...";
          $prezzo=$riga["prezzo"];
          $immagine=$riga["immagine"];

          if ($i==1) {
            echo "<div class='row'>";
          }

          echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">";
		  echo "<div class=\"thumbnail\">";
		  echo "<img src=\"$immagine\">";
		  echo "<div class=\"caption\">";
		  echo "<h4 class=\"pull-right\">$prezzo</h4>";
		  echo "<h4><a href=\"V&G_dettaglioprodotto.php\">$nome</a></h4>";
		  echo "</div>";
		  echo "</div>";
		  echo "</div>";
                //echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail prodotto' src='images/prodotti/$immagine' alt=''/></a>";
         

          if ($i==3) {
            echo "</div>";
            $i=1;
          } else {
            $i++;
          }

        }
        if ($i!=1) {
          echo "</div>";
        }

        ?>
                        
					
                    

               

        

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
