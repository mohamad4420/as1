<?php 
session_start();
require './inscription.php';
require './description.php';
$starttime = microtime(true);
$key=$_POST['key'];

$myfile = fopen("../text/sifurText.txt", "r") or die("Unable to open file!");
$s= fgets($myfile);
fclose($myfile);



$inc1=inc_Transposition($s,$key);
$inc2=inc_Transposition($inc1,$key);// this is text done incription



$myfile = fopen("../text/encription.txt", "w") or die("Unable to open file!");
fwrite($myfile, $inc2);
fclose($myfile);







$myfile = fopen("../text/encription.txt", "r") or die("Unable to open file!");
$u= fgets($myfile);
fclose($myfile);

$dec1=inc_description($u,$key);
$dec2=inc_description($dec1,$key);// this is done text dicription


$myfile = fopen("../text/dicription.txt", "w") or die("Unable to open file!");
fwrite($myfile, $dec2);
fclose($myfile);

$endtime = microtime(true); // Bottom of page
$_SESSION["time"] = $endtime - $starttime;
$_SESSION["done"] = "1";
header("location:../index.php");

?>