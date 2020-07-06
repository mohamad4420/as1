<?php 
function inc_description($incc,$key){



    $a = '';



    $lingthkey= strlen ($key);
    $lingthstring=strlen($incc);
    
    
    
            $row = (int) ($lingthstring/$lingthkey);  
       
    for($i=1,$c=0;$i<$lingthkey+1;$i++){
    
        for($index=0;$i!=$key[$index];$index++);
    
    for($y=0;$y<$row;$y++){
    
        $array[$y][$index]=$incc[$c];
        $c++;
    }
    
    
    
    }
    
    for($y=0,$b=0;$y<$row;$y++){
    
        for($i=0;$i<$lingthkey;$i++){
            $a[$b]=$array[$y][$i];
           
     $b++;
        }
        
    }
    return $a;
    



}
?>