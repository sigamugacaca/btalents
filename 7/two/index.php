<?php
$test = array(
    array(52,2,13,99,43),

);
foreach($test as $arr){
    $count = count($arr);
    sort($arr);
    $mid = floor(($count-1)/2);
    $median = ($arr)?($arr[$mid]+$arr[$mid+1-$count%2])/2:0;
    echo 'median: '.$median."<br>";
}
?>