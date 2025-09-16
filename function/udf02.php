<!DOCTYPE html>
<html>
<body>

<?php

global $hasil;

function sum($x, $y) {
  $z = $x + $y;
  $hasil = $z;
  return $z;
}

function luasst($a, $t){
    $luas = 0.5 * $a * $t;
    return $luas;
}


function multi($p, $q){
  $r = $p * $q;
  return $r;
}

?>

</body>
</html>