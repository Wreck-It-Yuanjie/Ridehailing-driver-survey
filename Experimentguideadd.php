<?php

session_start();
include('RDconnect.php');






// END OF MYSQL CONNECTION //

setcookie('progress', 'Experimentguide1.php', time() + 365*24*3600);
header('Location: questions.php');





