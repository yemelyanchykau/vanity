<?php
function prepare_coins_str($str)
{
$t = explode("_",$str);
//print_r($t);

$flag = 0;
foreach($t as $n=>$coin)
{
    if($coin == "usdc")
    {
        $flag = 1;
    }
    if($flag)
    {
        $c[] = $coin;
        unset($t[$n]);
    }
}
//reset($t);
if(!$flag)
$c[] = "usdc";

foreach($t as $n=>$coin)
{
    $c[] = $coin;
}
$c[] = "usdc";
//print_r($c);

foreach($c as $n=>$coin)
{
    if($c[$n+1]==$coin)continue;
    $c2[] = $coin;
}
//print_r($c2);
return $c2;
}
?>