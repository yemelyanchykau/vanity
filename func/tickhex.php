<?php
function tickhex($tick)
{
    if($tick < 0)
    {
        $t = $tick;
        $t = abs($t);
        $t = "0x".dechex($t);
        $t2 = "0xffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff";
        $t3 = gmp_sub($t2,$t);
        $t3 = gmp_add($t3,1);
        $t3 = gmp_strval($t3);
	$t3 = gmp_dechex($t3);
    }
    else
    $t3 = dechex($tick);
    return $t3;
}
?>