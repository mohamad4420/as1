<?php 
function inc_Transposition($s , $key){
    $a = '';
    $string= str_replace(' ','',$s);
$array[0][0]=' ';
$lingthkey= strlen ($key);
$lingthstring=strlen($string);

for($i=0;$i<$lingthkey;$i++){
    $array [0][$i]=$key[$i];
}

if($lingthstring%$lingthkey>0){
$row = (int) ($lingthstring/$lingthkey)+1;
}else{
    $row = (int) ($lingthstring/$lingthkey);  
}

$o=0;

for($i=1;$i<$row+1;$i++){
   
    for($y=0;$y<$lingthkey;$y++,$o++){
        if ($o>=$lingthstring){
            $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 1);
            $array[$i][$y]=$randomletter;
        }else{
                 $array[$i][$y]=$string[$o];
        }
       
    }
    
}


for($i=1,$b=0;$i<$lingthkey+1;$i++){
   
$index=0;

for($u=0;(string)$i!=$array[0][$u];$u++,$index++);
  
    for($y=1;$y<$row+1;$y++){
     
        $a[$b]=$array[$y][$index];
       
 $b++;
 
    }
  
}


return $a;

}


?>