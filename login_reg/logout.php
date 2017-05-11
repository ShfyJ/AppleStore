<?php
include('config.php');
session_destroy();
unset($_SESSION['uid']); // will delete just the name data

if(empty($session_uid) && empty($_SESSION['uid']))
{
header('Location:../index.php');
//echo "<script>window.location='$url'	</script>";
}
?>