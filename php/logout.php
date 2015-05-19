<?php 
    session_start();
	unset($_SESSION['username']);
    unset($_SESSION['user_id']);
	session_destroy();
	header("Location: $_SERVER[HTTP_REFERER]");
?>