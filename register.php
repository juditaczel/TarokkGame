<?php

include_once "dbconfig.php";

session_start();
$user = new superuser();

if($user->enter()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['submit']))
{
	/* $snev; $smail; $spassw
	mysql_real_escape_string -> nem jó függvény bakker! http://stackoverflow.com*/
	$snev = strip_tags($_POST['snev']);
	$smail = strip_tags($_POST['smail']);
	$spassw = strip_tags($_POST['spassw']);

	
	if($snev=="")	{
		$error[] = "hibás felhasználónév !";	
	}
	else if($smail=="")	{
		$error[] = "hibás e-mail!";	
	}
	else if(!filter_var($smail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Adjon meg egy érvényes e-mail címet !';
	}
	else if($spassw=="")	{
		$error[] = "Hibás jelszót adtál meg!";
	}
	else if(strlen($spassw) < 6){
		$error[] = "A jelszónak 6 karakternek kell lennie";
	}
	else
	{
		try
		{
			$dbh = $user->running("SELECT name, email FROM user WHERE name=:snev OR email=:smail");
			$dbh->execute(array(':snev'=>$snev, ':smail'=>$smail));
			$row=$dbh->fetch(PDO::FETCH_ASSOC);
				
			if($row['name']==$snev) {
				$error[] = "Sajnálom a felhasználónév foglalt!";
			}
			else if($row['email']==$smail) {
				$error[] = "Sajnálom az e-mail már foglalt!";
			}
			else
			{

				if($user->registri($snev,$smail,$spassw)){
					$user->redirect('register.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regisztráció</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<link rel="stylesheet" href="css/csske.css" type="text/css"  />
</head>
<body>

<div class="signin">

<div class="container">
    	
        <form method="post">
            <h2 class="heading">Regisztráció</h2><hr width="0px"/>
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alertinfo">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres regisztráció <a href='login.php'>login</a> here
                 </div>
                 <?php
			}
			?>
            <div class="form-group">
            <input type="text" class="abc" name="snev" placeholder="Felhasználónév" value="<?php if(isset($error)){echo $snev;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="abc" name="smail" placeholder="E-Mail" value="<?php if(isset($error)){echo $smail;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="abc" name="spassw" placeholder="Jelszó" />
            </div>
            <hr width="0px"/>
            <div class="form-group">
            	<button type="submit" name="submit">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;Regisztráció
                </button>
            </div>
            <br />
            <!--<label> Van már fiókod? Lépj be itt! -><a href="index.php">Bejelentkezés</a></label>-->
        </form>
       </div>
</div>

</div>

</body>
</html>