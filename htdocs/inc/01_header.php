<?php

print "
<!DOCTYPE html>
<html lang=\"en\">

<head>

	<meta charset=\"utf-8\">
	<title>AIRDROP HUNTER</title>
	<meta name=\"viewport\" content=\"width=device-width\">

	<link rel=\"icon\" href=\"/favicon/favicon3.ico\">
	
    <link rel=\"stylesheet\" href=\"/css/fonts.css\">
	<link rel=\"stylesheet\" href=\"/css/bootstrap.min.css?2\">
";

$d = __DIR__;
$d = dirname($d);
$f = $d."/css/style.css";
$t = filemtime($f);
print "<link rel=\"stylesheet\" href=\"/css/style.css?$t\">";
print "
    <link rel=\"preload\" href=\"/fonts/Inter-Regular.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" href=\"/fonts/Inter-SemiBold.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
    <script src=\"/js/jquery.3.5.1.min.js\"></script>
    <script src=\"/js/bootstrap.4.5.2.min.js\"></script>
    <script src=\"/js/popper.1.16.0.min.js\"></script>
    <script src=\"/js/html2canvas.min.js\"></script>
    <script src=\"/js/hotkeys.min.js\"></script>

</head>

";
include __DIR__."/inc/y_metrika.php";
?>