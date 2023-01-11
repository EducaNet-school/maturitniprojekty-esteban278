<?php
function selectS($pole){
    $n=count($pole);
    $nextSwap=null;
    $temp=null;
    for($i=0; $i<$n-1; $i++) {
        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++){
            if( $pole[$j]<$pole[$nextSwap] ){
                $nextSwap=$j;
            }
        }
        $temp=$pole[$i];
        $pole[$i]=$pole[$nextSwap];
        $pole[$nextSwap]=$temp;
    }

    return $pole;
}

echo implode(",",array(43,23,4,11,2,88,76,46)); //pred selection sortem
echo "<br>";
echo "<br>";
echo "<br>";
echo implode(",",selectS(array(43,23,4,11,2,88,76,46))); //po selection sortu