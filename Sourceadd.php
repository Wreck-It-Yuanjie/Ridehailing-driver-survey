<?php
session_start();
// RESULT SELECTED IN QUESTION //

$qsource = $_POST['qsource'];

$_SESSION['qsource'] = $qsource;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into Source (source,user,date) values(:source,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	'source' => $qsource,
	'user' => $user,
	));





// END OF MYSQL CONNECTION //




#setcookie('progress', 'q3.php', time() + 365*24*3600);
#header('Location: questions.php');

setcookie('progress', 'contact.php', time() + 365*24*3600);
header('Location: questions.php');



