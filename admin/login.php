<?php






include('../connect.php');





$login = $_POST['login'];
$password = $_POST['password'];



 $reponse = $bdd->prepare('SELECT * FROM admin where user=:login and password=:password'); 


$reponse->execute(array('login' => $login,'password'=>$password));





        

$rows = $reponse->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: acces.php");
session_start();
$_SESSION['login'] = $login;
$_SESSION['password'] = $password;

}
else{
session_destroy();
header("location: index.php");

}


