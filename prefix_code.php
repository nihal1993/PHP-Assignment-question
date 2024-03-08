<?php
 $prefixArray = ["smkr","smksd","s","s","smkr","smksd","s","s","smkr","smksd","s","s","smkr","smksd","s","s","smkr","smksd","s","s","smkr","smksd","s","s"];
 echo searchCommon($prefixArray);
 
 function searchCommon($array){
     if(!$array || !is_array($array))
      return "please provide proper value";    
     
     if(count(array_filter($array,'is_string')) != count($array)){
         return "please provide proper array of string";
     }
     
     $p = 1;
     $prev = array();
     $start = $array[0][0];
     $length = strlen($array[0]);
     $arrayLength = count($array);
     if($arrayLength>$length){
         $length = $arrayLength; 
     }
     while($p<=$length){
         foreach($array as $key => $pre){
            $pos = Strpos($pre,$start);
            if(!($pos !== false)){
                return end($prev);
            }else{
                if(count($array)-1 == $key){
                    if (!in_array($start, $prev)) {
                        $prev[] = $start;
                    }
                }
            }
        }
        if($p>0 && isset($array[0][$p])){
                $start = $start.$array[0][$p];    
        }
        $p++;
     }
     return end($prev);
 }
?>
