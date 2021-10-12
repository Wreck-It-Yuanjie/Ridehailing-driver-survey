<?php
// RESULT SELECTED IN QUESTION //

$Email = $_POST['contact'];

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

session_start();

$_SESSION['Email'] = $Email;


include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into contact (Email,user,date) values(:Email,:user,CURRENT_TIMESTAMP)');


$user = $_COOKIE['user'];





$reponse->execute(array(
	'Email' => $Email,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //


setcookie('progress', 'Thankyou_end.php', time() + 365*24*3600); 
header('Location: questions.php');





