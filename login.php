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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
    

</head>

<body>
<?php

        session_start();
		
  ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                
                <a class="navbar-brand" href="V&G_HOME.html">V&G SHOES</a>
            </div>
            
            
            
        </div>
        
    </nav>


    <!-- Page Content -->
    <div class="container">

        <h3 class="lead">REGISTRATI O EFFETTUA IL LOGIN PER ENTRARE!</h3> <br>
				<div class="row">
					<div id="panel_log" class="col-md-5 col-md-offset-1">
					<h4 class="lead">ACCEDI</h4> <br>
						<form method="post" name="login_form" action="V&G_accedi.php" onsubmit="return controllo_login();">
							
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
							</div>
							
							<button type="submit" class="btn btn-primary">ACCEDI</button>
						
						</form>
						<div class="row">
							
								<div class="visible-xs-block">
								<button value="registrati" id="registrati" class="btn btn-primary btn-block">Registrati</button>
								</div>
					
					<script>
					$(document).ready(function(){
						$("#registrati").on("click", function(event){
							$(this).hide();
							$("#panel_reg").removeClass("hidden-xs").addClass("visible-xs-block");
							$("#panel_log").addClass("hidden-xs");
						});
						})
					</script>
						</div>

					</div> <!--chiude il pannello accedi>-->
					
					
					
					
					<div id="panel_reg" class="hidden-xs col-md-5 col-md-offset-1">
					
					<h4 class="lead">REGISTRATI SU V&GSHOES.IT </h4> <br>			
						<form method="post" name="form_registrati" action="registrati.php" onsubmit="return check_registrati();">
							
								
							<div class="form-group">
								<label for="inputNome">Nome</label>
								<input type="text" class="form-control" id="inputNome" name="nome" required placeholder="Nome">
							</div>
							<div class="form-group">
								<label for="inputCognome">Cognome</label>
								<input type="text" class="form-control" id="inputCognome" name="cognome" required placeholder="Cognome">
							</div>
							
							<div class="form-group">
								<label for="inputIndirizzo">Indirizzo</label>
								<input type="text" class="form-control" id="inputIndirizzo" name="indirizzo" placeholder="Indirizzo">
							</div>
							
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" name="email" required placeholder="Email">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" class="form-control" id="inputPassword" name="pwd" required placeholder="Password">
							</div>
							
							<div class="form-group">
								<label for="checkPassword">Conferma password</label>
								<input type="password" class="form-control" id="checkPassword" name="confermapwd" required placeholder="Password">
							</div>
							
							<div class="form-group">
							<button type="submit" class="btn btn-primary">REGISTRATI</button>
							</div>
						 </form>
					

						
				
					
					</div>
				

            </div>

        

    </div>


    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    

</body>

</html>
