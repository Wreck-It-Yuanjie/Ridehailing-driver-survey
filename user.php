<?php
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomString6($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$ruser=generateRandomString();
$mturkuser=generateRandomString6();

session_start();



// MYSQL CONNECTION //

include('RDconnect.php');

$reponse = $bdd->query('select * FROM users');

$store=Array();

while ($donnees2 = $reponse->fetch()){

$store[] =  $donnees2['userid'];

}

while (in_array($ruser, $store))
  {
  $ruser=generateRandomString();

  }

  $reponse2 = $bdd->prepare('insert into users (userid, mturkid, date) values (:user,:mturk,CURRENT_TIMESTAMP)');

$reponse2->execute(array(
	'user' => $ruser,
	'mturk' =>$mturkuser,
	));


setcookie('user',$ruser, time() + 365*24*3600); //expire the cookie//

?>