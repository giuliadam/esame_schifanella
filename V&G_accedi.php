<?php

error_reporting(E_ALL);
        ini_set( 'display_errors','1');

        session_start();
		
$email=$_REQUEST["email"];

$password=$_REQUEST["password"];

// dati di connessione al mio database MySQL
$db_host = "localhost";
$db_user = "root";
$db_pass = "matec";
$db_name = "shoes_shop";

$conn= new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conn)
	die("Errore nella connessione al server $db_host");

$sql="SELECT * FROM shoes_shop.utenti WHERE email='$email'";
$result= $conn->query($sql);
if (!$result)
	die ("Errore nell'accesso: $sql");
$numero_tuple=$result->num_rows;
if ($numero_tuple==0){
header('Location: login.php?errore=1');
exit();
}
$sql="SELECT nome, password FROM shoes_shop.utenti where email='$email'";
$result= $conn->query($sql);
if (!$result)
	die ("Errore nell'accesso: $sql");
$tupla= $result->fetch_assoc();
$password_corretta=$tupla["password"];
$nome=$tupla["nome"];

if ($password!=$password_corretta){
	header('Location: login.php?errore=2');
	exit();
}
else{
	$_SESSION["nome"]=$nome;
                       header('Location: V&G_HOME.php?nome='.$nome);
                        exit;
}
// chiusura della connessione
$conn->close();
?>