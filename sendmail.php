<?php

require_once 'vendor/autoload.php' ; 
require_once 'config.php' ; 

// vérification du formulaire 
$formulaireOk = true ; 


// on vérifié les champs 

// Create the Transport 
$transport = (new Swift_SmtpTransport(SERVER_SMTP, PORT_SMTP, CHIFFREMENT_SMTP))
	->setUsername(USER_MAIL)
	->setPassword(PASSWORD_MAIL)
;

// Create the Mailler using your created Transport
$mailer = new Swift_Mailer($transport) ; 

// Create a message
$message = (new Swift_Message('nouvelle demande de devis'))
		->setFrom([MAIL_FROM => NAME_FROM])
		->setTo([MAIL_TO])
		->setBody("<p>Bonjour,</p> <p>une nouvelle demande de devis voici les information suivant : </p> 
		<ul>
		<li>Civilité : " . htmlspecialchars($_POST['civilite']) . "</li>
		<li>NOM :" .  htmlspecialchars($_POST['nom']) . "</li>
		<li>PRENOM :" .  htmlspecialchars($_POST['prenom']) ."</li>
		<li>Adresse mail : " .  htmlspecialchars($_POST['email']) . "</li>
		<li>Societé : " .  htmlspecialchars($_POST['societe']) . "</li>
		<li>nombre de salarié : "  .  htmlspecialchars($_POST['nbworking']) . "</li>
		<li>telephone portable : " .  htmlspecialchars($_POST['phoneGSM']) ." </li>
		<li>telephone fixe : " .  htmlspecialchars($_POST['phoneFixe']) . "</li>
		<li>sa fonction :" .  htmlspecialchars($_POST['yourJob']) . "</li>
		<li>son instance :" .  htmlspecialchars($_POST['instance']) . "</li>
		<li>qui rédige le PV : " .  htmlspecialchars($_POST['writtenPV']) . "</li>
		<li>les problème rencontré : " .  htmlspecialchars($_POST['problemPV']) . "</li>"
		, 'text/html')
;

// Send the message 
if($formulaireOk)
{
	$mailer->send($message);
}


// redirection vers une page du site 

 header('Location: envoieOk.php');	
 
