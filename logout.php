<?php
session_start();
$_SESSION['loggedIn'] = false;
header("Location: out.php");
session_destroy();
?>