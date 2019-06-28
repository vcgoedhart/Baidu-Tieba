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
	$conn=openDatabaseConnection();
	$user = $_POST["username"];
	$email = $_POST["email"];
	$check="SELECT COUNT(*) FROM users WHERE email = '$_POST[email]'";
		$check->execute();
		if($data[0] > 1) {
		    echo "User Already in Exists<br/>";
		}else{


	$password = $_POST["pass"];	
	$hash = password_hash($password . $email, PASSWORD_DEFAULT);
	createAccount($_POST["username"], $_POST["email"], $hash, $_POST["name"], $_POST["phone"]);
	//header('location: '.URL.'home/index.php');
}
}

function login(){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$check =loginUser($email,$pass);
	var_dump($check);
		if($check == true) {
			echo "login";
		}else{
			echo "fout";
		}
}