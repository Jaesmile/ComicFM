<?php
	session_start(); 
	//重定向浏览器, header之前不能有任何输出

    $username = $_POST["username"];
	$password = $_POST["password"];

	//$host_name = "127.0.0.1";
	//$mysql_user_name = "root";
	//$mysql_password = "940318";
	/*$connect = mysql_connect("127.0.0.1","root","940318");
	$database = "db_comicfm";
	
    mysql_select_db($database,$connect);
	mysql_query("SET NAMES 'utf8'",$connect);
	
	
    $sql = "SELECT * FROM user where nickname = '$username' and password = '$password'";*/
    /**/
    require_once 'DataHandler.class.php';
    $handler = new DataHandler();
	$row = $handler->userLogin($username,$password);//mysql_query($sql,$connect);
    $user = $row[0];
        
    if(!empty($row)){
        $_SESSION["username"]=$user->nickname;
        $_SESSION["user_id"]=$user->user_id;
		//echo "OK";
       // var_dump($user);
		//echo $_SESSION["username"];
		//echo $_SESSION["user_id"];
    }
    //http://localhost:8081/mywork/ComicFM/index.php
	header("Location: ../index.php");
?>