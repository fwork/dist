<?

 $db = MYSQL_connect("mdb1.anu.edu.au", "datamgt_admin", "dT48@!_Pub");
 MYSQL_select_db($prefix."_".$projname."_main");



  $db_host = "10.0.0.24";
    $db_user = "geonetwork";
    $db_name = "geonetwork";
      $connection=@pg_connect ("host=$db_host dbname=$db_name user=$db_user")  ;

$rest1=@MYSQL_QUERY("select file_identifier,datacollection_title  from nci_data_management.data_mgmt") ;
while ($rowt=@MYSQL_fetch_array($rest1)) {
$fid=$rowt['file_identifier'];
$tit=$rowt['datacollection_title'];
$dm_array[]=$fid;
}

$rest12=pg_QUERY("select uuid  from metadata") ;
while ($rowt2=pg_fetch_array($rest12)) {
$main_fid=$rowt2['uuid'];
$geo_array[]=$main_fid;
}

echo "<u><b>Records in DMP but not in Geonetwork</b></u>"."<br>";

foreach ($dm_array as &$value) {
if (in_array($value, $geo_array)) {

} else { 
$rest1a=@MYSQL_QUERY("select datacollection_title  from nci_data_management.data_mgmt where file_identifier='$value'") ;
$rowta=@MYSQL_fetch_array($rest1a);
$tit=$rowta['datacollection_title'];
echo $value."  --  ".$tit."<br>"; }

}

echo "<br><br><br>";
echo "<u><b>Records in Geonetwork but not in DMP</b></u>"."<br>";

foreach ($geo_array as &$value) {
if (in_array($value, $dm_array)) {
} else { echo $value."<br>"; }

}

$ROOT_PATH = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$datasetxmls_path=$ROOT_PATH."dataset_xmls/";
$files1 = array_diff(scandir($datasetxmls_path), array('..', '.'));
foreach ($files1 as &$value) {
$file_names[]=rtrim($value,".xml"); }


echo "<br><br><br>";
echo "<u><b>XML file exist but not in Geonetwork</u></b>"."<br>";
foreach ($file_names as &$value) {
if (in_array($value, $geo_array)) {
} else { echo $value."<br>"; }


}






?>
