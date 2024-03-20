<?php
error_reporting(0);
if($need_db)
include "/conf.sql.php";

include "/rpc.php";

//$rpc_mas[matic] = "input rpc node url here";
//$rpc_mas[bsc] 	= "input rpc node url here";

$curl1 = "curl --connect-timeout 1 -H 'content-type: application/json' -X POST --data ";
include "func.php";

include "contracts.php";

$color = "#23acde";

if($_SERVER['HTTP_HOST'])
{
$site  = "https://".$_SERVER['HTTP_HOST']."/";
$domen = $_SERVER['HTTP_HOST'];
}

$e_mas[eth] = "https://etherscan.io/";
$e_mas[bsc] = "https://bscscan.com/";
$e_mas[matic] = "https://polygonscan.com/";
$e_mas[scroll] = "https://blockscout.scroll.io/";
$e_mas[goerli] = "https://goerli.etherscan.io/";
$e_mas[arbitrum] = "https://arbiscan.io/";
$e_mas[optimism] = "https://optimistic.etherscan.io/";
$e_mas[zksync]	= "https://explorer.zksync.io/";
$e_mas[polygonzk] = "https://zkevm.polygonscan.com/";

$chain_mas[1] 		= "eth";
$chain_mas[56] 		= "bsc";
$chain_mas[137] 	= "matic";
$chain_mas[5]		= "goerli";
$chain_mas[534353]	= "scroll";
$chain_mas[42161]	= "arbitrum";
$chain_mas[10]		= "optimism";
$chain_mas[324]		= "zksync";
$chain_mas[1101]	= "polygonzk";
$chain_mas[43114]	= "avax";


$e_mas[1] 	= $e_mas[eth];
$e_mas[56] 	= $e_mas[bsc];
$e_mas[137] 	= $e_mas[matic];
$e_mas[5]	= $e_mas[goerli];
$e_mas[534353]	= $e_mas[scroll];
$e_mas[42161]	= $e_mas[arbitrum];
$e_mas[10]	= $e_mas[optimism];
$e_mas[324]	= $e_mas[zksync];
$e_mas[1101]	= $e_mas[polygonzk];

$e_mas[arb_nova] = "https://nova.arbiscan.io/";
$chain_mas[42170]	= "arb_nova";
$e_mas[42170]	= $e_mas[arb_nova];

foreach($chain_mas as $k=>$v)
{
    $chain_mas2[$v] = $k;
}

?>