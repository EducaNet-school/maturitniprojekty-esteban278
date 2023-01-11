<?php
function MinimumCoins($coins)
{
    $nums = array(1000, 500, 200, 100, 50, 20, 10, 5, 2, 1);
    foreach ($nums as $num) {
        while ($coins >= $num) {
            $vysledek = floor($coins / $num);
            $zbytek = $coins % $num;
            echo "$num<br>$vysledek x<br><br>";
            $coins = $zbytek;
        }
    }
}
$x = 1254;

MinimumCoins($x);