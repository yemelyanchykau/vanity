<?php
$item_dir = __DIR__."/items/";
$item_file = $item_dir.basename($item).".php";
if(!file_exists($item_file))
$item_file = $item_dir."main.php";

$need_white_list = 0;
/*
switch($item)
{
    case "item1":
//print $item_file;
    break;
    default:
    $need_white_list = 1;
}
*/

include "inc/beta.php";
include "inc/header.php";


print "
<div class=\"".($need_white_list?"d-none":"")."\" id=whitelist_on>
		 <div class=\"container\">
			 <div class=\"row d-flex justify-content-center\">
				<div class=\"col-12\">
<center>
					<div class=\"top-tabs justify-content-center\">
";
unset($link);
$i=0;
$link[$i][url] = "/";
$link[$i][name] = "Airdrops";
$link[$i][item] = "tarif";

$i++;
$link[$i][url] = "/stats";
$link[$i][name] = "Stats";
$link[$i][item] = "stats";


$i++;
$link[$i][url] = "/test";
$link[$i][name] = "Test";
$link[$i][item] = "test";

$i++;
$link[$i][url] = "/test2";
$link[$i][name] = "Test 2";
$link[$i][item] = "test2";

$i++;
$link[$i][url] = "/hello";
$link[$i][name] = "Hello";
$link[$i][item] = "hello";


$i++;
$link[$i][url] = "https://claim.airdrop-hunter.site/";
$link[$i][name] = "Referrals";

$l = count($link);
for($i=0;$i<$l;$i++)
{
    $clas = "";
    if($item == $link[$i][item])$clas = "active";
    print "<a href=\"".$link[$i][url]."\" class=\"top-tabs__tab tab-1 $clas\">".$link[$i][name]."</a>";
}

//						<a href=\"/\" class=\"top-tabs__tab tab-1 active\">Airdrops</a>
//						<a href=\"https://claim.airdrop-hunter.site/\" class=\"top-tabs__tab tab-2 \">Referrals</a>
//						<a href=\"/airdrops\" class=\"top-tabs__tab tab-3 \">Latest Airdrops</a>
print "
					</div>
</center>
				</div>
			 </div>
		 </div>
		 
		 



	<section class=\"page\">
		<div class=\"container\">
			<div class=\"title-bl\"></div>
			<div class=\"top-line row\">
				<div class=\"col-xs-12 col-lg-8\">
					<div class=\"row\">
						<div class=\"col-xs-12 col-lg-7\">

						
						</div>
					</div>
				</div>
<!--
				<div class=\"col-xs-12 col-lg-4 d-flex justify-content-end\">
					<div class=\"add-position\">
						<a href=\"#\" class=\"add-position__btn\" id=\"addPosition\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
							+ New Position
						</a>
						<div class=\"add-position__block dropdown-menu dropdown-menu-end\" aria-labelledby=\"addPosition\">
							<a href=\"#\" class=\"add-position__link\">Coming soon</a>
						</div>
					</div>
				</div>
-->
			</div>

			<div class=\"wrapper page_$item\">
				<div class=\"row items-wrap grid-wrap justify-content-center\">

";




include $item_file;


print "
					
				</div>
			</div>

		</div>
	</section>
</div>
";

if($need_white_list)
{
print "
<div class=\"\" id=whitelist_off>
	<section class=\"page\">
		<div class=\"container\">
			<div class=\"wrapper\">
				<div class=\"row items-wrap grid-wrap justify-content-center\">

";
include "inc/10_whitelist_off.php";
print "
				</div>
			</div>
		</div>
	</section>
</div>
";
}
?>