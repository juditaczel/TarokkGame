<?php
include_once "dbconfig.php";
include_once "kavaras.php";
session_start();
$cards = kavaras();
$login = new superuser();



//$post = $_POST['post'];



/*$return = array() ;
$return['finish'] = true;
$return['post']= $_POST;
echo json_encode($return);*/

$player1 = array_slice($cards,0,9);
$player2 = array_slice($cards,9,9);
$player3 = array_slice($cards,18,9);
$player4 = array_slice($cards,27,9);

//mentés ide

$p1cards = '';

foreach ($player1 as $p1)
{
    if($p1cards != '')
    {
        $p1cards = $p1cards . ';' ;
	}

    $p1cards = $p1cards .  $p1->code;


}

$p2cards = '';

foreach ($player2 as $p2)
{
    if($p2cards != '')
    {
        $p2cards = $p2cards . ';' ;
    }
    $p2cards = $p2cards .  $p2->code;
}

$p3cards = '';

foreach ($player3 as $p3)
{
    if($p3cards != '')
    {
        $p3cards = $p3cards . ';' ;
    }
    $p3cards = $p3cards .  $p3->code;
}

$p4cards = '';

foreach ($player4 as $p4)
{
    if($p4cards != '')
    {
        $p4cards = $p4cards . ';' ;
    }
    $p4cards = $p4cards .  $p4->code;
}


$login = new superuser();
$valami = $login->getotherusers();

shuffle($valami);

$p1 = array_slice($valami,0,1);
$p2 = array_slice($valami,1,2);
$p3 = array_slice($valami,2,3);


$login->insertorupdategame();
$login->setgamer(array_values($p1)[0]['id'],$p1cards);
$login->setgamer(array_values($p2)[0]['id'],$p2cards);
$login->setgamer(array_values($p3)[0]['id'],$p3cards);
$login->setgamer($_SESSION['userid'],$p4cards);


$return = array() ;
$return['finish'] = true;
$return['post']= $player4;
$return['player1'] = array_values($p1)[0]['name'];
$return['player2'] = array_values($p2)[0]['name'];
$return['player3'] = array_values($p3)[0]['name'];
$return['player4'] = $_SESSION['username'];
echo json_encode($return);


?>