<?php

function average ($arr){
    $sum = array_sum($arr);
    $average = $sum / count($arr);
    return round($average,1);
}

?>