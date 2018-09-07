<?php

include_once "dbconfig.php";

session_start();

$login = new superuser();



if($login->enter()!="")
{
	$login->redirect('home2.php');
}

if(isset($_POST['submit']))//button name
{
    /** @var TYPE_NAME $_POST
     */

    $snev = strip_tags($_POST['smail']);//name from
	$smail = strip_tags($_POST['smail']);
	$spassw = strip_tags($_POST['spassw']);
		
	if($login->login($snev,$smail,$spassw))
	{

        $login->redirect('home2.php');
	}
	else
	{
		$error = "Rosszul adtad meg az adataidat!";
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Szakdolgozat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<link rel="stylesheet" href="css/csske.css" type="text/css"/>
<link rel="stylesheet" href="css/animation.css" type="text/css"  />


</head>
<body>

<div class="signin">

	<div class="container" >
        <form  method="post" >
      
        <h2 class="heading">Bejelentkezés</h2><hr width="0px"/>
        
        <div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
        </div>
        
        <div class="form-group">
        <input type="text" class="abc" name="smail" placeholder="Felhasználónév"  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="abc" name="spassw" placeholder="Jelszó" />
        </div>
       
     	<hr width="0px"/>
        
        <div>
            <button type="submit" name="submit">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; Bejelentkezés
            </button>
        </div>  
      	<br />
            <label>Itt regisztrálj!&nbsp;&nbsp;&nbsp;<a href="register.php">Regisztráció</a></label>
      </form>

    </div>

    
</div>

</body>
</html>