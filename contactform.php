<?php 

function checkFields($values){
	$injection = false;
	for ($n=0;$n<count($values);$n++){
		if (preg_match("/%0A/",$values[$n]) || preg_match("/%0D/",$values[$n]) || preg_match("/\\r/",$values[$n]) || preg_match("/\\n/",$values[$n])){
			$injection = true;
		}
	}
	return $injection;
}

if(isset($_POST['submit'])) {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $heute = date("d.m.Y \\u\\m H:i \\U\\h\\r"); 
    $mailTo = "fettbas@gmx.de";
    $headers = "Ihre Nachricht von ".$mailFrom." am ".$heute;
    $txt = "Sie haben eine Nachricht erhalten. Die Daten des Absenders lauten wie folgt:\n\nVorname: ".$vorname."\nNachname: ".$nachname."\nE-Mail Adresse: ".$mailFrom."\nTelefonnummer: ".$phone."\nDatum: ".$heute."\n\nNachricht:\n".$message;
    
    $result = checkFields(Array($vorname,$nachname,$mailFrom,$phone,$message));
    if ($result==true){
	   die("Header injection detected!");
    }
    
    mail($mailTo, $headers, $txt);
    header("Location: kontakt.html?mailsent");
}



?>