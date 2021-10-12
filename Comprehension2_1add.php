<?php

session_start();
include('RDconnect.php');


$comp2 = $_POST['comp2'];


$_SESSION['comp2']= $comp2;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA





// END OF MYSQL CONNECTION //
if($_SESSION['comp2'] == "Yes"){
	setcookie('progress', 'S2_WTRL_q1.php', time() + 365*24*3600);
}
else{
	setcookie('progress', 'Thankyou_end.php', time() + 365*24*3600);
}
header('Location: questions.php');





