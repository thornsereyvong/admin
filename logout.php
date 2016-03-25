<?php
include_once 'app.php';
ob_start ();
ini_set ('session.cookie_httponly', true);
session_start ();
if(isset($_SESSION['ZOBENZ_USER']) && isset($_SESSION['ZOBENZ_USERID']) && isset($_SESSION['ZOBENZ_USER_ROLE'])){
	session_unset();
	session_destroy();
}
header('Location:'.$server."login-account");
exit();
