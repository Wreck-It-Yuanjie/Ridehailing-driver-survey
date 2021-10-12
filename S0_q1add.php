<?php
// RESULT SELECTED IN QUESTION //

$s0q1_Uber = $_POST['s0q1_Uber'];
$s0q1_Lyft = $_POST['s0q1_Lyft'];
$s0q1_Wingz = $_POST['s0q1_Wingz'];
$s0q1_Another = $_POST['s0q1_Another'];
$s0q1_Anotherspecify = $_POST['s0q1_Anotherspecify'];

if( empty($s0q1_Uber)){
	$s0q1_Uber = "";
}

if( empty($s0q1_Lyft)){
	$s0q1_Lyft = "";
}

if( empty($s0q1_Wingz)){
	$s0q1_Wingz = "";
}

if( empty($s0q1_Another)){
	$s0q1_Another = "";
}

if( empty($s0q1_Anotherspecify)){
	$s0q1_Anotherspecify = "";
}

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

session_start();

$_SESSION['s0q1_Uber'] = $s0q1_Uber;
$_SESSION['s0q1_Lyft'] = $s0q1_Lyft;
$_SESSION['s0q1_Wingz'] = $s0q1_Wingz;
$_SESSION['s0q1_Another'] = $s0q1_Another;
$_SESSION['s0q1_Anotherspecify'] = $s0q1_Anotherspecify;

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S0_q1 (s0q1_Uber,s0q1_Lyft, s0q1_Wingz, s0q1_Another, s0q1_Anotherspecify, user,date) values(:s0q1_Uber,:s0q1_Lyft, :s0q1_Wingz, :s0q1_Another,:s0q1_Anotherspecify,:user,CURRENT_TIMESTAMP)');

$user = $_COOKIE['user'];

$reponse->execute(array(
	's0q1_Uber' => $s0q1_Uber,
	's0q1_Lyft' => $s0q1_Lyft,
	's0q1_Wingz' => $s0q1_Wingz,
	's0q1_Another' => $s0q1_Another,
	's0q1_Anotherspecify' => $s0q1_Anotherspecify,
	'user' =>$user,
	));

// END OF MYSQL CONNECTION //
setcookie('progress', 'S0_q2.php', time() + 365*24*3600);
header('Location: questions.php');




