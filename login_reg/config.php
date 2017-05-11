<?php
session_start();
/* DATABASE CONFIGURATION */

function getDB(){
$servername="localhost";
$username="blueskyu";
$password="IPproject1@3";
$dbname="blueskyu_istore";



try{
	$db=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$db->exec("set names utf8");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	//echo "Connected";
    return $db;
}
catch(PDOException $ex){
	echo "Connection failed: " . $ex->getMessage(); 
}
 
}

?>