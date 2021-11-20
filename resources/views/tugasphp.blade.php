<?php
function faktorialnyabelva($a){
    $number = 1;
    $factorial = $number;
        while($number <= $a){
            $factorial = $factorial * $number;
            $number++;
        }
        return $factorial;
}
if(isset($_GET['hitung'])){
 $a = $_GET['faktorialnyabelva'];
 echo 'Faktorialnya adalah '.faktorialnyabelva($a);
}
?>
