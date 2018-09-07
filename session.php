<?php

include_once "dbconfig.php";

session_start();

	$session = new superuser();
	
	
	if(!$session->enter())
	{
		
		$session->redirect('index.php');
	}