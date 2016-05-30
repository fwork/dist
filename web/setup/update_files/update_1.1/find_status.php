 <?php
@include_once("autoload.php");

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




$ret = '{"data" :[';

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



$ret .= '{ "status_server_datamgt" : "'.$status_server_datamgt.'","status_server_doi" : "'.$status_server_doi.'","status_server_genome" : "'.$status_server_genome.'","status_geo_fx2" : "'.$status_geo_fx2.'","status_geo_rr2" : "'.$status_geo_rr2.'","status_geo_rr9" : "'.$status_geo_rr9.'","status_geo_rs0" : "'.$status_geo_rs0.'","status_geo_fj7" : "'.$status_geo_fj7.'" ,"status_geo_p12" : "'.$status_geo_p12.'","status_geo_rr1" : "'.$status_geo_rr1.'","status_geo_u39" : "'.$status_geo_u39.'","status_geo_main" : "'.$status_geo_main.'"} ';
$ret = rtrim($ret, ', ').']}';
        echo $ret;

?>
