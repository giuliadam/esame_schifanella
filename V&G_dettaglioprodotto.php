<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>V&G SHOES | Sneakers</title>

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
	
	<script type="text/javascript" language="javascript">
		function carrello(){
		<!--se sei già loggato ti porta al carrello, altrimenti ti porta alla pagina accedi-->
		
		if{
		
		}
		else{
		
		}
		
		
		}
	
	
	</script>
	

	
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
					<li>
                        <a href="V&G_HOME" class="hidden">Log out</a>
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
                
				  
				  <!--pannello filtri compare solo alla pressione del tab filtra su mobile-->
				  <div id="filter-panel">
					<div id="filter-list">
						<div id="category-title">
						<a href="#" class="list-group-item">CATEGORIE</a>
						</div>
						<div id="category-items">
							<a href="V&G_sneakers.html" class="list-group-item">Sneakers</a>
							<a href="V&G_sandali.html" class="list-group-item">Sandali</a>
							<a href="V&G_stivali.html" class="list-group-item">Stivaletti/Stivali</a>
							<a href="V&G_decolletè.html" class="list-group-item">Decolleté</a>
							<a href="V&G_ballerine.html" class="list-group-item">Ballerine</a>
							<a href="V&G_scarpebasse.html" class="list-group-item">Scarpe basse</a>
						</div>
							
						
						
						
						
						<button id="tastofiltra" class="visible-xs-block"><a href="#" onclick="visualizza('filtra'); return false">FILTRA</a></button>
					
					<div id="filtra">
					<div id="shoe-size">
						<hr>
						<a href="#" class="list-group-item">TAGLIA</a>
						
						<div id="all-size" >	
							
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-34" data-f="34" />
								<label for="SIZE-34">34</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-35" data-f="35" />
								<label for="SIZE-35">35</label></li>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-36" data-f="36" />
								<label for="SIZE-36">36</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-37" data-f="37" />
								<label for="SIZE-37">37</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-38" data-f="38" />
								<label for="SIZE-38">38</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-39" data-f="39" />
								<label for="SIZE-39">39</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="SIZE-40" data-f="40" />
								<label for="SIZE-40">40</label></a>
								
						</div>
					
					<hr>
					</div>
					
					<div id="shoe-color">
						<a href="#" class="list-group-item">COLORE</a>
						
						<div id="all-colors">	
							
								<a href="#" class="list-group-item"><input type="checkbox" id="color-beige" data-f="beige" />
								<label for="color-beige">beige</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="color-blue" data-f="blue" />
								<label for="color-blue">blue</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="color-grey" data-f="grey" />
								<label for="color-grey">grey</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="color-black" data-f="black" />
								<label for="color-black">black</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="color-gold" data-f="gold" />
								<label for="color-gold">gold</label></a>
								<a href="#" class="list-group-item"><input type="checkbox" id="color-white" data-f="white" />
								<label for="color-white">white</label></a>
								
						</div>
					</div>
					</div>
				  </div>
				  </div>
            </div>
			
					
			 <?php
						
						
							// dati di connessione al mio database MySQL
							$db_host = "localhost";
							$db_user = "vagiu";
							$db_pass = "matec";
							$db_name = "shoes_shop";


							$conn = new mysqli(localhost, vagiu, matec, shoes_shop);

							// verifica errori di connessione
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								exit();
							//}
							} 

		   
							$query_prodotto = "SELECT * FROM prodotti where id=$cod_prodotto";

				
							  if (!($risultato = $connessione->query($query_prodotto)))
								die("Query su dettaglio prodotto fallita!");

							  if ($riga = $risultato->fetch_array()) {
									$id=$riga["id"];
									$nome = $riga["nome"];
									$descrizione=$riga["descrizione"];
									$prezzo=$riga["prezzo"];
									$immagine=$riga["immagine"];
									$numero=$riga["numero"];
									$colore=$riga["colore"];

								echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail img-responsive dettaglio_prodotto' src='images/prodotti/$immagine' alt=''/></a>";
								
								           
								echo "<h1 style="padding:20px 70px 20px 0;  text-align:center;">"$nome"</h1>";
								echo "<div id="prodotto" class=\"col-md-6\">";
								echo "<img src='\"$immagine.\"'></img>";
								echo "<div id=\"descrizioneprodotto\" class=\"col-md-3\">";
								echo "<h4>Descrizione del prodotto: \"$descrizione\"</h4>";
								echo "<br>";
								echo "<br>";
								echo"<h4>Prezzo:\"$prezzo\"</h4>";
								echo "<br>";
								echo "<br>";
								echo "<h4>Colore: \"$colore\"</h4>";
								echo "<br>";
								echo "<br>";
								echo "<h4>Numero:\"$numero\"</h4>";
								echo "<br>";
								echo "<br>";
								echo "<button onclick=\"carrello();\">AGGIUNGI AL CARRELLO</button>";
								echo "</div>";
								
								 }

							
								?> 
			
			</div>
			
			<h1 style="padding:20px 70px 20px 0;  text-align:center;">NOME PRODOTTO</h1>
           
            <div id="prodotto"  class="col-md-6">
			<img src="http://placehold.it/320x150" alt=""></img>
			
			<div id="descrizioneprodotto" class="col-md-3">
			<h4>Questa è la descrizione del prodotto molto bello e che sicuramente comprerete, ne sono certa</h4>
			<br>
			<br>
			<h4>$64.99</h4>
			<br>
			<br>
			<h4>Colore: Blu</h4>
			<br>
			<br>
			<h4>Numero: N </h4>
			<br>
			<br>
				
			
			<button onclick="carrello();">AGGIUNGI AL CARRELLO</button>
			
			</div>
			
               

        </div>
		<!-- /.row -->

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
