<?php
$d = __DIR__;
$d = dirname($d);
$d = dirname($d);
$d .= "/images/";



$f = __DIR__."/summary.json";
$all_time = filemtime($f);
$all_time = date("Y-m-d H:i:s",$all_time)." UTC";
$a = file_get_contents($f);
$mas = json_decode($a,1);

$txt = "";
$all_scripts = count($mas);
foreach($mas as $k=>$v3)
{
    $max = 0;
    $txs = 0;
    foreach($v3 as $k2=>$v2)
    {
	if($v2[wallets] > $max)$max = $v2[wallets];
	$txs += $v2[txs];
	$all_txs += $v2[txs];
    }
    $n = strtolower($k);
    $all_wals += $max;

    switch($n)
    {
	case "polygonzkevm":
	    $img = "polygon-zkevm-logo.png";
	break;
	case "starknet":
	    $img = "starknet-logo.png";
	break;
	case "layerzero":
	case "scroll":
    	    $img = "$n.png";
	break;
	case "zksync":
    	    $img = "zksync_arrow2.png";
	break;
	default:
        $img = "$n.svg";
    }



    $f = $d.$img;
//print "f: $f<br>";
    $img2 = "";
    if(file_exists($f))
    {
	$img2 = "/images/$img";
    }
$txt .= "
    		    <div class=\"col-12 col-sm-6 col-lg-4\">
			<div class=\"box-wrapper\">
                            <div class=\"box-item\">
                                <div class=\"box-top\">
                                    <div class=\"box-title\">
";
if($img2)
$txt .= "<img src=\"$img2\">";
$txt .= "
<!--                                        <img src=\"images/stats/icon-1.jpg\" alt=\"\" />-->
                                        <span>$k</span>
                                    </div>
                                </div>
                                <div class=\"box-bottom\">
                                    <div class=\"box-line d-flex\">
                                        <div class=\"box-label\">Total Transactions</div>
                                        <div class=\"box-value\">$txs</div>
                                    </div>
                                    <div class=\"box-line d-flex\">
                                        <div class=\"box-label\">Total Wallets</div>
                                        <div class=\"box-value\">$max</div>
                                    </div>
<!--
                                    <div class=\"box-line d-flex\">
                                        <div class=\"box-label\">Total percentage of completion</div>
                                        <div class=\"box-value\">90%</div>
                                    </div>
-->
                                </div>
                            </div>
			</div>
		    </div>
";
}

?>
				<div class="total row items-wrap grid-wrap justify-content-center">
					<div class="col-12 col-md-6 blk">
						<div class="box-wrapper">
                            <div class="box-item">
                                <div class="box-top">
                                    <div class="box-title"><b>Total stats</b></div>
                                </div>
                                <div class="box-bottom">
                                    <div class="box-line d-flex">
                                        <div class="box-label">Update time</div>
                                        <div class="box-value"><?php print $all_time;?></div>
                                    </div>
                                    <div class="box-line d-flex">
                                        <div class="box-label">Total Transactions</div>
                                        <div class="box-value"><?php print $all_txs;?></div>
                                    </div>
                                    <div class="box-line d-flex">
                                        <div class="box-label">Total Wallets</div>
                                        <div class="box-value"><?php print $all_wals;?></div>
                                    </div>
                                    <div class="box-line d-flex">
                                        <div class="box-label">Total Clients</div>
                                        <div class="box-value"><?php print $all_clients;?></div>
                                    </div>
                                    <div class="box-line d-flex">
                                        <div class="box-label">Total working scripts</div>
                                        <div class="box-value"><?php print $all_scripts;?></div>
                                    </div>
                                    <div class="box-line d-flex">
                                        <div class="box-label">Scripts coming soon</div>
                                        <div class="box-value">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
					
				</div>

                <div class="row items-wrap grid-wrap justify-content-center">

<?php
print $txt;
?>
                        </div>
					</div>
					
				</div>
