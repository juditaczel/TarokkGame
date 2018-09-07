<?php

include_once "dbconfig.php";

session_start();

$_SESSION["alma"] = "piros alma";



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
<?php

$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

?>
<header class="header">
    <div class="container">

            <div class="col-md-4 ">
                <div class="navbar-header">

                    <a class="navbar-brand logo" href="http://royaltarokk.hu/">Tarokkozz</a>
                </div>
            </div>
            <div class="col-md-8">

                    <ul class="nav navbar-nav navbar-right menu">
                        <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Kijelentkezés</a></li>
                    </ul>

            </div>
        </div>
    </div>
</header>

<div class="container-fluid" style="margin:0px; padding-top: 60px; background: #434F5B">


    <hr />
    <h4>
        <a href="jatek.php.php" style="color: #b2dba1"><span class="glyphicon glyphicon-play-circle"style="color: #b2dba1 "></span> Játék </a>
    </h4>

    <hr />
    <div style="position:relative; width: 400px; padding-left: 40px;">
        <div style="float: left; text-align: justify; width:500px; ">
            <p><h1><font color= #FFD700">XX-as hívásos tarokk </font></h1></p>
            &nbsp;
            &nbsp;
            <p><h4><font color="#DAA520">Üdvözöllek az oldalamon. Ha megengeded, akkor Jókai Mór szavával élnék: „A  tarokk nem kártyajáték. A tarokk magasabb művészet… a tarokk jellempróba… a tarokk világnyelv!” Az oldalon a XX-as hívásos tarokkal tudsz játszani!
                A játékban részvétel feltétele, hogy mindig jó legyen a hangulatod! Ha szeretnéd, akkor a jobb felső sarkokban a tarokkozz! feliratra kattintasz, akkor betekintést kaphatsz a Magyar Royal Tarokk Egyesület oldalára! Ha azonban szereted a régi könyveket, akkor megtaláltam egy 1940-es kiadású Tarokk Őr című könyvet. Olvasd el. A játékhoz sok szerencsét és jó szórakozást kívánok! A Játék gombra kittintva kezdhetitek a játékot.
            </font></h4> </p>
            <hr />
            <p><a href="http://www.tarokk.hu/T_dokumentumok/TAROKK_or.pdf" style="color: #b2dba1">
                    <span class="glyphicon glyphicon-save-file"></span> Tarokk-Őr
                </a>
            </p>

        </div>
    </div>

    <div class="animation">
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">K</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">Z</div>
        <div class="item"style="font-style: oblique">N</div>
        <div class="item"style="font-style: oblique">I</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
        <div class="item"style="font-style: oblique">J</div>
        <div class="item"style="font-style: oblique">Ó</div>
        <div class="item"style="font-style: oblique">T</div>
        <div class="item"style="font-style: oblique">A</div>
        <div class="item"style="font-style: oblique">R</div>
        <div class="item"style="font-style: oblique">O</div>
    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
