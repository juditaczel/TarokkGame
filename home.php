<?php


include_once "session.php";
include_once "dbconfig.php";
	$auth_user = new superuser();
	
	
	$id = $_SESSION['user_session'];
	
	$dbh = $auth_user->running("SELECT * FROM user WHERE id=:id");
	$dbh->execute(array(":id"=>$id));
	
	$userRow=$dbh->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<link rel="stylesheet" href="css/animation.css" type="text/css" />
<title>Tarokozz!</title>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <!--<span class="sr-only">Tarokkoz!</span>-->
          </button>
          <p align="right"><a class="navbar-brand" href="http://royaltarokk.hu/">Tarokkoz!</a></p>
		</div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; Szia <?php echo $userRow['name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Kijelentkezés</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
</nav>

<div class="container-fluid" style="margin-top:80px;">


        <hr />
        <h4>
            <a href="jatek.php"><span class="glyphicon glyphicon-play-circle"></span> Játék </a>
        </h4>
       	<hr />

    <div style="position:relative; width: 400px; padding-left: 40px">
        <div style="float: left; text-align: justify; width:500px;">
            <p><h1>XX-as hívásos tarokk </h1></p>
            &nbsp;
            &nbsp;
        <p><h4>Üdvözöllek az oldalamon. Ha megengeded, akkor Jókai Mór szavával élnék: „A  tarokk nem kártyajáték. A tarokk magasabb művészet… a tarokk jellempróba… a tarokk világnyelv!” Az oldalon a XX-as hívásos tarokkal tudsz játszani!
                A játékban részvétel feltétele, hogy mindig jó legyen a hangulatod! Ha szeretnéd, akkor a jobb felső sarkokban a tarokkozz! feliratra kattintasz, akkor betekintést kaphatsz a Magyar Royal Tarokk Egyesület oldalára! Ha azonban szereted a régi könyveket, akkor megtaláltam egy 1940-es kiadású Tarokk Őr című könyvet. Olvasd el. A játékhoz sok szerencsét és jó szórakozást kívánok! A Játék gombra kittintva kezdhetitek a játékot.
            </h4> </p>
            <hr />
            <p><a href="http://www.tarokk.hu/T_dokumentumok/TAROKK_or.pdf">
                    <span class="glyphicon glyphicon-save-file"></span> Tarokk-Őr
                </a>
            </p>

        </div>
    </div>

    <div class="animation">
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">K</div>
        <div class="item">K</div>
        <div class="item">O</div>
        <div class="item">Z</div>
        <div class="item">N</div>
        <div class="item">I</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
        <div class="item">J</div>
        <div class="item">Ó</div>
        <div class="item">T</div>
        <div class="item">A</div>
        <div class="item">R</div>
        <div class="item">O</div>
    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>