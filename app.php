<?php
/*
 * *****************************************************************************
 * file: app.php
 * @autor: Thorn sereyvong
 * @date: 24-03-2016
 * ZOBENZ TEAM
 * *****************************************************************************
 */

	ob_start ();
	ini_set ('session.cookie_httponly', true);
	session_start ();
	if (isset ( $_SESSION ['last_ip'] ) === false) {
		$_SESSION ['last_ip'] = $_SERVER ['REMOTE_ADDR'];
		session_regenerate_id (true);
	}
	if ($_SESSION ['last_ip'] !== $_SERVER ['REMOTE_ADDR']) {
		session_unset();
		session_destroy ();
	}
	
	
	define("SQL_DSN", 'mysql:dbname=zobenz_db;host=localhost');
	define("SQL_USERNAME", 'root');
	define("SQL_PASSWORD", '');
	
	
	include_once 'Untility/DBConnection.php';
	include_once 'Untility/Component.php';
	
	$server = "http://localhost/ZOBENZ-ADMIN/";
	
?>