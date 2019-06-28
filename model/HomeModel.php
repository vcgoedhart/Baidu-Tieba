<?php

function createAccount($username, $email, $password, $name, $phone){
	try{
		$conn=openDatabaseConnection();

		$stmt = $conn->prepare('INSERT INTO users (username, email, password, name, phone) VALUES (:username, :email, :password, :name, :phone)');

		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":password", $password);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":phone", $phone);
		$stmt->execute();

    } catch(PDOException $e){
        echo "Failed to Add horse: " . $e->getMessage();
    }
}

function getUserData(){
	try {
       $conn=openDatabaseConnection();
   
       $stmt = $conn->prepare("SELECT * FROM users");

       $stmt->execute();

       $result = $stmt->fetchAll();

   } catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;

   return $result;
}

function loginUser($email, $pass){
	$conn=openDatabaseConnection();

	try{

	$stmt = $conn->prepare('SELECT * FROM users WHERE email = :email AND password = :pass');
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":pass", $pass);
	$stmt->execute();
	echo count($stmt);
	$number =$stmt->rowCount();
	if ($number=== 1) {
		return true;
	}else{
		return false;
	}

	}catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;
}