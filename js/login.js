/* funzione per il controllo del form accedi*/

function controllo_login(){
	console.log('sei entrato nella funzione');
	
		
	if (document.login_form.email.value=="" || document.login_form.email.value=="Inserisci la tua mail"){
		alert("inserire indirizzo email!");
		document.login_form.email.value="";
		
	} 

		
	if (document.login_form.password.value=="" || document.login_form.password.value=="Inserisci la tua password"){
		alert("inserire password!");
	}
	
	else{return true;}
		
		
	
	return false;}

	

/* funzione per il controllo del form registrati*/

function check_registrati(){
	console.log('sei entrato nella funzione');
	
	if (document.form_registrati.nome.value=="" || document.form_registrati.nome.value=="Nome"){
		alert("attenzione compilare tutti i campi!");
		
	}
		
	
	if  (document.form_registrati.cognome.value=="" || document.form_registrati.cognome.value=="Cognome"){
		alert("attenzione compilare tutti i campi!");
				
	}
		
		
	if (document.form_registrati.email.value=="" || document.form_registrati.email.value=="Inserisci la tua mail"){
		
		alert("attenzione compilare tutti i campi!");
		document.form_registrati.email.value="";
		
		return false;		
	}
		

		
	if (document.form_registrati.pwd.value=="" || document.form_registrati.pwd.value=="Inserisci una password"){
		
		alert("attenzione compilare tutti i campi!");
			}
		
		
		
	if (document.form_registrati.confermapwd.value=="" || document.form_registrati.confermapwd.value=="Ripeti la password"){
		
		alert("attenzione compilare tutti i campi!");
		
	}
			
	if(document.form_registrati.pwd.value!="" && document.form_registrati.confermapwd.value!=""){
		return controlla_password();
		
	}
	
	else{return true;}
		
	return false;
	
	}
	
	
	function controlla_password(){
	
	var ps1=document.form_registrati.pwd.value;
	var ps2=document.form_registrati.confermapwd.value;
	
		
	//password uguali
	if(ps2!=ps1){
	
	alert("Attenzione! Le password non coincidono!");}
	else{return true;}
	
	return false;
	}
	