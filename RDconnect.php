<?php




/* Please Put here your hosting and databse information inside the PDO statement */

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=RHdriver;charset=utf8', 'root', '3875',$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',));


}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}







?>