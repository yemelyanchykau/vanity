<?php
function redirect($url,$text='',$sec=5000,$no_header = 0)
{
//        $debuger = check_debugger(__FUNCTION__);

//print "$text<hr>";


$url = strip_tags($url);
$url = addslashes($url);
//  if(!headers_sent() && 0)
  if(!headers_sent() && !$no_header)
  {
        $header = "Location: $url";
//die($header);
    header($header);
    die();
    exit;
  }else {

$out .= "<script language=\"JavaScript\">
function redir()
{
document.location.href='$url';
}
setTimeout('redir(\'\')', $sec);
</script>";

  }
$out .= "$text";

return $out;
}

//======================================================================
?>
