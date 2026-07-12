<?php
//logout.php
session start();
$_SESSION = array();
session_destroy();
header("Location: login.php");
exit();
?>