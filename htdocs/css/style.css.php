#!/usr/bin/php
<?php

$f = "style.css.033";
$a = file_get_contents($f);

$a = str_replace("4558BE","23acde",$a);
$a = str_replace("4558be","23acde",$a);
$a = str_replace("FF1066","23acde",$a);
$a = str_replace("../images/","/images/",$a);

$f2 = $f.".parse";
file_put_contents($f2,$a);