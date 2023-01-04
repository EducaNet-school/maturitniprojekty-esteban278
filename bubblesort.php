<?php
function bubbleS($pole){
    do {
        $swapped = false;
        for( $i = 0, $n = count( $pole) - 1; $i < $n; $i++ )
        {
            if( $pole[$i] > $pole[$i + 1] )
            {
                list( $pole[$i + 1], $pole[$i] ) =
                    array( $pole[$i], $pole[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
    return $pole;
}

$test = array(44,74,42,23,-10,-74,120);

echo implode(', ',$test);  //pred bubble sortem
echo "<br>";
echo "<br>";
echo "<br>";
echo implode(', ',bubbleS($test));  //po bubble sortu