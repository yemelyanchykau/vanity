<?php
//print "<body class=dark-theme>";
$t = $_COOKIE['theme'];
if($t == "dark")
$clas = "dark-theme";
else
$clas = "";

print "<body id=body class=\"$clas\">";

?>