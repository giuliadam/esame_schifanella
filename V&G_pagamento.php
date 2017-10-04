<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>V&G SHOES | Pagamento</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<!-- jQuery -->
    <script src="js/jquery-3.2.1.js"></script>
	
	
<?php
			
		   session_start();

			if (isset($_REQUEST["id"])) {
			  $id_prodotto=$_REQUEST["id"];
			}
			
			if (isset($_REQUEST["cat"])) {
			  $categoria=$_REQUEST["cat"];
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



	?>
	

	

</head>
<body>
	
	
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
                        <a href="login.php">Accedi</a>
                    </li>
                    <li>
                        <a href="V&G_carrello.php">Il mio carrello</a>
                    </li>
                    
                </ul>
				
				
				<form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
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
				  
			<div class="col-sm-6 col-lg-6 col-md-6">
						
						
						
						<form action="">
							<fieldset>
								<legend><h2>Selezionare la modalità di pagamento:</h2></legend>
								<input type="radio" name="pagamento" value="carta di credito"> Carta di credito
								<br>
								<br>
								<input type="radio" name="linguaggio" value="bancomat"> Bancomat
								<br>
								<br>
								<input type="radio" name="linguaggio" value="paypal"> Paypal
								<br>
							</fieldset>
							<br>
							<br>
							<br>
							<button type="submit">Vai al pagamento</button>
						</form>
						
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
	
</body>
</html>
