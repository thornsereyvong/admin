<?php

include_once '../../Untility/DBConnection.php';
include_once '../../Model/user/User.DAO.php';
include_once '../../Model/Cryption.php';
$cryption = new Cryption();
if(isset($_POST ['email']) && isset($_POST ['password'])){
	$user->login($_POST['email'], $_POST ['password']);
}else{
	echo "Error";
}