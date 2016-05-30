 <?php
@include_once("autoload.php");

function email_send_short_1($msg,$sub) {
$d=@date("d/m/y h:i:s");
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: datacollections@nci.org.au";
$to_email='kashif.gohar@anu.edu.au';
mail($to_email,$sub,$msg,$headers);
$to_email='jingbo.wang@anu.edu.au';
mail($to_email,$sub,$msg,$headers);
}


function sockAccess($server,$page)
{
   $errno="";
   $errstr="";
   $fp=0;
   $fp=fsockopen($server,80,$errno,$errstr,30);

   if($fp===0)
   {
      die("Error $errstr ($errno)");
   }
   $out="GET /$page HTTP/1.1\r\n";
   $out.="Host: $server\r\n";
   $out.="Connection: Close\r\n\r\n";

   fwrite($fp,$out);
   $content=fgets($fp);
   $code=trim(substr($content,9,4));
   fclose($fp);
   if(intval($code)===200) { $cod=1; } else { $cod=0; }
   return intval($cod);
}

$status_server_datamgt=sockAccess("datamgt.nci.org.au","php/index.php");
$status_server_doi=sockAccess("doi.nci.org.au","php/index.php");
$status_server_genome=sockAccess("genome-catalogue.nci.org.au","php/index.php");

$status_geo_fx2 = sockAccess("geonetworkfx2.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_rr2 = sockAccess("geonetworkrr2.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_rr9 = sockAccess("geonetworkrr9.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_rs0 = sockAccess("geonetworkrs0.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_fj7 = sockAccess("geonetworkfj7.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_p12 = sockAccess("geonetworkp12.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_rr1 = sockAccess("geonetworkrr1.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_u39 = sockAccess("geonetworku39.nci.org.au","geonetwork/srv/eng/catalog.search#/home");
$status_geo_main = sockAccess("geonetwork.nci.org.au","geonetwork/srv/eng/catalog.search#/home");

if ($status_geo_fx2!='1') { $sub="Alert!... fx2  geonetwork catalogue down....";$msg="http://geonetworkfx2.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_rr2!='1') { $sub="Alert!... rr2  geonetwork catalogue down....";$msg="http://geonetworkrr2.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_rr9!='1') { $sub="Alert!... rr9  geonetwork catalogue down....";$msg="http://geonetworkrr9.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_rs0!='1') { $sub="Alert!... rs0  geonetwork catalogue down....";$msg="http://geonetworkrs0.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_fj7!='1') { $sub="Alert!... fj7  geonetwork catalogue down....";$msg="http://geonetworkfj7.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_p12!='1') { $sub="Alert!... p12 geonetwork catalogue down.... ";$msg="http://geonetworkp12.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_rr1!='1') { $sub="Alert!... rr1  geonetwork catalogue down....";$msg="http://geonetworkrr1.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_u39!='1') { $sub="Alert!... u39  geonetwork catalogue down....";$msg="http://geonetworku39.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }
if ($status_geo_main!='1') { $sub="Alert!... Geonetwork catalogue down....";$msg="http://geonetwork.nci.org.au is currently not responding<br><br> Please check the server....";email_send_short_1($msg,$sub); }

?>
