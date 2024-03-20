<?php
foreach($mas as $k2=>$v2)
{

/*
print "<pre>";
print_r($v2);
print "</pre>";
*/

print "
					<div class=\"col-12 col-md-6 col-lg-4 blk blk_airdrop\">
						<div class=\"item grid-item $v2[ico3] $v2[type]\">
";

if($v2["3ds"])
{
print "<div class=\"grid-item_ico\">";
$f = __DIR__;
$f = dirname($f);
$f = dirname($f);
$f .= "/images/3ds.svg";
$a = file_get_contents($f);
print $a;
print "</div>";
}
print "
							<div class=\"grid-item__tape\">
								<span>$v2[flag]</span>
							</div>

							<div class=\"grid-item__title2\">
";
if(isset($v2[ico]))
{
    foreach($v2[ico2] as $tk=>$tv)
    {
	print "<img src=\"/images/ico_".$tk.".png\" class=\"grid-ico2\">";
    }
}

print "
<img src=/images/$v2[ico] class=\"grid-ico\">
								<span id=airdrop_name_$k2>$v2[title]</span>
";

print "
							</div>
<div class=\"txt\">
$v2[txt]";
print "
</div>

				<a class=\"grid-item__more grid-item__details_left\" data-bs-toggle=\"modal\" data-bs-target=\"#textModal\">
				    <span>Read more</span>
				</a>
<div class=\"grid-item__mtext\">
$v2[txt2]
</div>

<div class=profit>
<div class=\"n light\">On artificial AI:</div>
<div class=row>
<div class=col-6>
expected airdrop
</div>

<div class=col-6>
probability
</div>

<div class=\"col-6 light\">
<b>
$v2[cost]
</b>
</div>

<div class=\"col-6 light\">
<b>
$v2[prob]
</b>
</div>
</div>

</div>";

if(count($v2[tarif]))
{
print "<div class=\"row th_tarif\">";
print "<div class=\"col-5\">Tariff</div>";
print "<div class=\"col-3 step-question\">Cost, \$";
if(0)
print "        <div>
                Gas fee payable by a client and calculated based on а network congestion for one circle iterations.
	      </div>";

print "</div>";


//print "<div class=\"col-3\">Circle fee, \$";
//print "<div class=\"col-3 step-question\">Circle fee, \$ ";
print "<div class=\"col-3\"> ";
//print "<span class=\"badge badge-success\">?</span></nobr>";
//print "        <img src=\"/images/icon-question.svg\" >";
if(0)
print "        <div>
                Gas fee payable by a client and calculated based on а network congestion for one circle iterations.
	      </div>";

print "</div>";
print "</div>";
}

print "
<div class=\"form-check\">
";
foreach($v2[tarif] as $k3=>$v3)
{
$clas = "nobuyed";
//if($k3 == 1)$clas = "buyed";
$id = "blk_tarif_$k3";
//print "<div class=\"$clas\" id=tarif_".$k2."_".$k3.">";
print "<div class=\"$clas\" id=$id>";
$f = $k2."_".$k3."_radio";
//print "<input class=\"form-check-input\" type=\"radio\" name=\"flexRadioDefault\" id=\"flexRadioDefault2\">";
$id = "i_tarif_$k3";
print "<input class=\"form-check-input\" name=\"radio_$k2\" type=\"radio\" id=\"$id\" class=radio>";
print "  <label class=\"form-check-label\" for=\"$id\">";
print "<div class=\"row td_tarif\">";
print "<div class=col-5 id=tarif_name_$k3>";
print $v3[name];
if($v3[badge_txt])
//print " <span class=\"badge badge-primary\">$v3[badge_txt]</span>";
print " <sup>$v3[badge_txt]</sup>";
print "</div>";
print "<div class=\"col-3 light cost\"><b id=tarif_cost_$k3>$v3[cost]</b>";
if($v3[cost2])print " <s>".$v3[cost2]."</s>";
print "</div>";
print "<div class=\"col-3 light circle\">";
if($v2[need_detail])
print "<button class=\"btn btn-link btn-sm\" onclick=\"modal_open_detail($k3,'$k2','".$v2[aid]."');\">Detail</button>";
//print $v3[circle];
print "</div>";
print "</div>";
//print "    <span>$v3[name]</span> - <span><b class=light>$v3[cost]</b></span>";
print "  </label>
    <br>";
print "<div class=\"payed\">";
//print "adsf";
//print "<button>View Status</button>";
//print "<button  class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#viewModal\">View Status</button>";
print "</div>";

print "</div>";
}

print "</div>";

//print "<div class=info id=info_$k2>Select tarif</div>";
//if($v2[need_buy])
print "<div class=info id=info_$k2>&nbsp;</div>";

print "<div class=\"grid-item__button\">";

if($v2[need_buy])
{
//print "<a href=\"#\" class=\"art-button-2 btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#buyTarifModal\">";
print "<button class=\"art-button-2 btn btn-primary\" onclick=btn_check_buy_tarif('$k2')>";
//print "<a href=\"#\" class=\"art-button-2 btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#buyModal\">";
print "Buy";
print "</button>";
}
else
{
$onclick = "";
$kuda = "#";
if($v2[btn_link]) $kuda = $v2[btn_link];
if($kuda == "#")
$onclick = "onclick=\"return false\";";
print "<a href=\"$kuda\" class=\"art-button-2 btn btn-primary ".$v2[btn_clas]."\" target=_blank $onclick>";
//print "<a href=\"#\" class=\"art-button-2 btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#buyModal\">";
//print "Coming soon";
print $v2[btn];
print "</a>";

}
//print "</a>";
print "</div>";

/*
if($v2[need_buy])
print "<div class=comments>Choose a suitable tarif and click the button</div>";
else
*/
if(!$v2[btn_comments])
$v2[btn_comments] = "&nbsp;";
print "<div class=comments>$v2[btn_comments]</div>";

print "
	
						</div>
					</div>
					
";
}