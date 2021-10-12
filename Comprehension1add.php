<?php

session_start();
include('RDconnect.php');


$comp1 = $_POST['comp1'];


$_SESSION['comp1']= $comp1;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA





// END OF MYSQL CONNECTION //
if($_SESSION['comp1'] == "Yes"){
	setcookie('progress', 'Comprehension2.php', time() + 365*24*3600);
}
else{
	setcookie('progress', 'Comprehension1_1.php', time() + 365*24*3600);
}
header('Location: questions.php');





