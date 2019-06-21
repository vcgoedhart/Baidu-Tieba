<?php
require(ROOT . "model/HomeModel.php");

function index() {
	render("home/index");	
}

function register() {
	$users = getUserData();

	render("home/register", array('users' => $users));	
}
function create(){
	$user = $_POST["username"];
	$email = $_POST["email"];

	$password = $_POST["pass"];	
	$hash = password_hash($password . $email, PASSWORD_DEFAULT);
	createAccount($_POST["username"], $_POST["email"], $hash, $_POST["name"], $_POST["phone"]);
	//header('location: '.URL.'home/index.php');
}