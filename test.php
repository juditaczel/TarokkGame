<?php
include_once "dbconfig.php";

session_start();

$login = new superuser();
$valami = $login->getotherusers();

shuffle($valami);


$p1 = array_slice($valami,0,1);
print_r(array_values($p1)[0]['id']);

?>
