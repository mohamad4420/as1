<?php 
require './php/inscription.php';
require './php/description.php';
$key = '15423';

$s= 'attack postponed intil two am';


$inc1=inc_Transposition($s,$key);
echo $inc1.'<br>';
$inc2=inc_Transposition($inc1,$key);
echo $inc2.'<br>';


$dec1=inc_description($inc2,$key);
echo $dec1.'<br>';


$dec2=inc_description($inc1,$key);
echo $dec2.'<br>';

?>