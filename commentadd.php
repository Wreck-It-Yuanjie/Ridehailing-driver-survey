<?php
// RESULT SELECTED IN QUESTION //

$comments= $_POST['comment'];

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

session_start();

$_SESSION['comments'] = $comments;


include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into comments (comments,user,date) values(:comments,:user,CURRENT_TIMESTAMP)');


$user = $_COOKIE['user'];





$reponse->execute(array(
	'comments' => $comments,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //


setcookie('progress', 'Source.php', time() + 365*24*3600); 
header('Location: questions.php');





