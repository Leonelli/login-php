<?php
ob_start();
session_start();

$_SESSION['visible'] = false;
if ($_SESSION['loggedIn'] != true) {
    $_SESSION['visible'] = false;
} else {
    $_SESSION['visible'] = true;
}
//session_abort();
?>