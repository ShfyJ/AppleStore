<?php
if(!empty($_SESSION['uid']))
{
$session_uid=$_SESSION['uid'];
include('userClass.php');
$userClass = new userClass();
}

if(empty($session_uid))
{ 

header('Location: login.php');
}

?>