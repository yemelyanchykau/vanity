<?php

//print "-----------------";
unset($t_mas);
$d = __DIR__;
$d .= "/tarif/";
//print $d."\n";
$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;

//print "$f<br>";
    $tf = $d.$f;
    $t = pathinfo($tf);
    if($t[extension] != "php")continue;
    $t_mas[] = $tf;
}


asort($t_mas);
foreach($t_mas as $f)
{
    include $f;
}

$dd = __DIR__;
$dd = dirname($dd);
include "$dd/inc/12_blk.php";
//include "$dd/inc/13_blk_test.php";

?>