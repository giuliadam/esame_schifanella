
<?php
// Recupero i valori inseriti nel form

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$indirizzo = $_POST['indirizzo'];
$password=$_POST['pwd'];
$check_pwd=$_POST['confermapwd'];

/*

// verifico che tutti i campi siano stati compilati
if (!$username || !$nome || !$cognome || !$email || !$password || !$check_pwd) {
  echo 'Tutti i campi del modulo sono obbligatori!';    
}
// verifico che il nome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Za-z \'-]+$/i',$nome)) {
  echo 'Il nome contiene caratteri non ammessi';    
}
// verifico che il cognome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Za-z \'-]+$/i',$cognome)) {
  echo 'Il cognome contiene caratteri non ammessi';    
}
// verifico se un indirizzo email è valido
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'Indirizzo email non corretto';
}

 // controllo sul formato della password deve essere alfanumerica e non deve superare i dieci caratteri di lunghezza
  elseif((!isset($_POST['password'])) ||  ($_POST['password'] == "") || (!preg_match("/^[a-z0-9]+$/i", $_POST['password'])) || (strlen(trim($_POST['password']) > 10)))
  {
    echo "La password deve essere alfanumerica e non più lunga di 10 caratteri.";
  }
  
  elseif($password!=$check_pwd){
	  echo "Le password non corrispondono";
  }
  
else{
 
*/

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
//}
} 



// definisco la query di inserimento dati
$sql = "INSERT INTO shoes_shop.utenti (nome, cognome, password, indirizzo, email) VALUES ('$nome','$cognome','$password','$indirizzo','$email');";



// esecuzione della query

 

if (!$conn->query($sql)) {
  die ("non riesco a eseguire la query:$sql");
}

// chiusura della connessione
$conn->close();


header('location:V&G_HOME.php?nome='.$nome');
exit();


=======
<?php
// Recupero i valori inseriti nel form

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$indirizzo = $_POST['indirizzo'];
$password=$_POST['pwd'];
$check_pwd=$_POST['confermapwd'];

/*

// verifico che tutti i campi siano stati compilati
if (!$username || !$nome || !$cognome || !$email || !$password || !$check_pwd) {
  echo 'Tutti i campi del modulo sono obbligatori!';    
}
// verifico che il nome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Za-z \'-]+$/i',$nome)) {
  echo 'Il nome contiene caratteri non ammessi';    
}
// verifico che il cognome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Za-z \'-]+$/i',$cognome)) {
  echo 'Il cognome contiene caratteri non ammessi';    
}
// verifico se un indirizzo email è valido
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'Indirizzo email non corretto';
}

 // controllo sul formato della password deve essere alfanumerica e non deve superare i dieci caratteri di lunghezza
  elseif((!isset($_POST['password'])) ||  ($_POST['password'] == "") || (!preg_match("/^[a-z0-9]+$/i", $_POST['password'])) || (strlen(trim($_POST['password']) > 10)))
  {
    echo "La password deve essere alfanumerica e non più lunga di 10 caratteri.";
  }
  
  elseif($password!=$check_pwd){
	  echo "Le password non corrispondono";
  }
  
else{
 
*/

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
//}
} 



// definisco la query di inserimento dati
$sql = "INSERT INTO shoes_shop.utenti (nome, cognome, password, indirizzo, email) VALUES ('$nome','$cognome','$password','$indirizzo','$email');";



// esecuzione della query

 

if (!$conn->query($sql)) {
  die ("non riesco a eseguire la query:$sql");
}

// chiusura della connessione
$conn->close();


header('location:V&G_HOME.php?nome='.$nome);
exit();



?>