<?php

unset($o);
$o = array();
//print "Api $item2 ";
$d = __DIR__."/$item/";
$f = $d.$item2.".php";
//print $f;
if(file_exists($f))
{
    include $f;
}

$t = json_encode($o,192);
print $t;