<?php
include('config.php');
include('session.php');
$userDetails=$userClass->userDetails($session_uid);
?>
<h1>Welcome <?php echo $userDetails->username; ?></h1>

<h4><a href="logout.php">Logout</a></h4>
?>