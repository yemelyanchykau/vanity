    <script src="/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="/js-web3/web3.js"></script>
    <script type="text/javascript" src="/js-web3/web3modal.js"></script>
    <script type="text/javascript" src="/js-web3/evm-chains.js"></script>

    <script type="text/javascript" src="/js-web3/wallet-connect.js"></script>
    <script type="text/javascript" src="/js-web3/ethers-5.0.umd.min.js"></script>
    <script type="text/javascript" src="/js-web3/bignumber.min.js"></script>


<?php
//print "<button class=\"btn btn-primary\" onclick=\"screenshots();\">Screenshot</button>";
print "<script>";
print "
var glob = new Array();
glob[\"site_version\"] = '$site_version';
glob[\"title\"] = 'AIRDROP HUNTER';
glob[\"domen\"] = '$site';
glob[\"item\"] = '$item';
glob[\"need_white_list\"] = '$need_white_list';
";
$f = "/update_time";
$t = @filemtime($f);
print "glob[\"update_time\"] = '".date("Y-m-d H:i:s",$t)."';";
print "
glob[\"contracts\"] = new Array();
//glob[\"contracts\"][\"ref_register\"] = '".$contract_mas[matic][ref_register]."';
";
reset($contract_mas);
foreach($contract_mas as $k2=>$v2)
{
    foreach($v2 as $k=>$v2)
    {
	print "glob[\"contracts\"][\"".$k2."_".$k."\"] = \"$v2\";\n";
    }
}
print "</script>";
$f = "script.js";
$t = $www_dir;
$t .= "js/";
$t .= $f;
$a = filemtime($t);
print "<script src=\"/js/script.js?$a\"></script>";
//print "<script src=/js2/abi/".($js_debug?"?".time():"")."></script>";
print "<script src=/js2/".($js_debug?"?".time():"")."></script>";
print "<script src=/js2/03_log.js".($js_debug?"?".time():"")."></script>";
print "<script src=/js2/77_test.js".($js_debug?"?".time():"")."></script>";

?>


</body>
</html>