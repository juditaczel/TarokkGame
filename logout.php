<?php
include_once "session.php";
include_once "dbconfig.php";

	$user_logout = new superuser();
	
	if($user_logout->enter()!="")
	{
		$user_logout->redirect('index.php');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->exitt();
		$user_logout->redirect('index.php');
	}
