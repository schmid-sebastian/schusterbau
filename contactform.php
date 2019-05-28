<?php 

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
    
    mail($mailTo, $headers, $txt);
    header("Location: kontakt.html?mailsent");
}



?>