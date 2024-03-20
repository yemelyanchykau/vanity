<?php

//session_start();
include "../conf.php";

//$f = "version.txt";
//$site_version = file_get_contents($f);

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$glob[ip] = $ip;
//$only_version = 1;
$f = __DIR__."/inc/items/changelog.inc.php";
include $f;
$site_version = $version;

$t = $_SERVER['REQUEST_URI'];
$t = basename($t);
$t = pathinfo($t);
if($t[extension]=="map")
{
    print "[]";
    die;
}

$a = $_SERVER['REQUEST_URI'];
$t = explode("/",$a);
//$ver = $t[1];
$item = $t[1];
$item2 = $t[2];
$item3 = $t[3];
unset($t[0]);
$item_mas = $t;

if(!$item)
$item = "tarif";



$item_dir = __DIR__."/inc/items/";
$item_file = $item_dir.basename($item).".php";
if(!file_exists($item_file))
$item_file = $item_dir."main.php";
//$item_file = $item_dir."tarif.php";

switch($item)
{
    case "item1":
//print $item_file;
    break;
//    case "tx_polygonzk_list":
    case "tx_retry":

    case "rpcs":
    case "ref":
    case "r":
    case "api":
    case "circles":
	$skip_html = 1;
        $need_white_list = 0;
    break;
//    case "gov":
    case "changelog":
//	$skip_html = 1;
        $need_white_list = 0;
    break;
    case "wl":
	$skip_html = 1;
    break;
    case "support_list":
        $need_white_list = 0;
    break;
    case "support_image":
//        $need_white_list = 0;
	$skip_html = 1;
        $need_white_list = 0;

    break;
    default:
    $need_white_list = 1;
}


if($skip_html)
{
include $item_file;
}
else
{
$d = __DIR__;
$d2 = "$d/inc/";
$e = "ls $d2 | grep php";
exec($e,$reg);
asort($reg);

ob_start();
foreach($reg as $f)
{
    $t = $d2.$f;
    $t2 = pathinfo($t);
    if($t2[extension] != "php")continue;

//    print $t."\n<br>";
    include $t;
}
}
$page = ob_get_contents();
ob_end_clean();

unset($reg);
    $preg = "/([\s]{1}\/\/.*?\n)/sim";
    $preg2 = "/(\<\!\-\-.*?\-\-\>)/sim";
//preg_match_all($preg,$page,$reg);
//print $page;
//print_r($reg);die;
if(1)
{
    $page = str_replace("\n//","\n\n//",$page);
    $page = preg_replace($preg,"\n\n",$page);
    $page = preg_replace($preg2,"\n",$page);

//    if(0)
    if($domen != "app-test.airdrop-hunter.site")
    {
    $page = str_replace("\n"," ",$page);
    $preg = "/[\s]{2,100}/sim";
    $page = preg_replace($preg," ",$page);
    }
}
//print $domen;die;
    print $page;

?>