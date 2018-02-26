<?php
$a = array("a"=>[3,4,5], "b"=>[2,10,8], "c"=>[5,6,5], [5,5,5]);
//var_dump($a);
foreach ($a as $trikampis) {

    if($trikampis[0] + $trikampis[1] > $trikampis[2] && ($trikampis[2] + $trikampis[1] > $trikampis[0] && ($trikampis[0]
                + $trikampis[2] > $trikampis[1]))) {
        echo '$trikampis';
    }
    else {
        echo 'netrikampis';
    }
    //var_dump($trikampis);
}
?>
