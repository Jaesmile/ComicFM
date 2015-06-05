<?php
	session_start(); 
	//重定向浏览器, header之前不能有任何输出

    $username = $_POST["username"];
	$password = $_POST["password"];

    require_once 'DataHandler.class.php';
    $handler = new DataHandler();
	$row = $handler->userLogin($username,$password);
    $user = $row[0];
        
    if(!empty($row)){
        $_SESSION["username"]=$user->nickname;
        $_SESSION["user_id"]=$user->user_id;
    }
	header("Location: ../index.php");
?>