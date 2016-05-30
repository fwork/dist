 <?php
@include_once("autoload.php");
$site_class->init();
$sec_class->check_login();
$sec_class->single_session();
$sec_class->session_secret_handler();

//$sec_class->captcha_init();
//$sec_class->get_nonce();
?>


<?$sec_class->session_expire_div();?>
<?$sec_class->session_expire_handler();?>


 <body class="page-Main_Page ">



<?include_once ($inc_path.check_includes_file_exist('initialize_variables').".php");  
?>
<?
$user_id= $_SESSION["uid_".session_id()];

$d=date("Y-m-d H:i:s");
$path=$project_path;


$inputFile  = fopen($filenamea, 'rt');
$headers = @fgetcsv($inputFile);
$a=0;




 
 while (($row = @fgetcsv($inputFile)) !== FALSE)
{
$a=$a+1;
    foreach ($headers as $i => $header)
 {

   include ($inc_path.check_includes_file_exist('field_check_variables').".php");
 }


if ($fileidentifier=='') {
$a1=generateRandomString();
$a2=generateRandomString();
$a3=generateRandomString();
$a4=generateRandomString();
$fileidentifier='f'.$a1.'_'.$a2.'_'.$a3.'_'.$a4;
}


$outputFilename   = $project_path.$site.'/dataset_xml/'.$fileidentifier.'.xml';


$dom  = new DomDocument('1.0', 'utf-8');
$dom->formatOutput   = true;

$main_page = $dom->createElementNS('http://www.isotc211.org/2005/gmd','MD_Metadata');
$dom->appendChild($main_page);
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gco', 'http://www.isotc211.org/2005/gco');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gml', 'http://www.opengis.net/gml');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gsr', 'http://www.isotc211.org/2005/gsr');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gss', 'http://www.isotc211.org/2005/gss');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gts', 'http://www.isotc211.org/2005/gts');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:xlink', 'http://www.w3.org/1999/xlink');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:geonet', 'http://www.fao.org/geonetwork');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gmd', 'http://www.isotc211.org/2005/gmd');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:srv', 'http://www.isotc211.org/2005/srv');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:schemalocation', 'http://www.isotc211.org/2005/gmd http://www.isotc211.org/2005/gmd/gmd.xsd http://www.isotc211.org/2005/srv');
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:gmx', 'http://www.isotc211.org/2005/gmx');
  
   $ur_id=@$_SESSION["uid_".session_id()] ;
$d=@date("Y-m-d H:i:s");

$txt=$d." : Creating Metadata General section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_general').".php");

$txt=$d." : Creating Metadata Reference section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_reference').".php");


$txt=$d." : Creating Metadata Identification section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_identification').".php");



$txt=$d." : Creating Metadata Content section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_content').".php");


$txt=$d." : Creating Metadata Spatial section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_spatial').".php");


$txt=$d." : Creating Metadata Dsitribution section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_distribution').".php");



$txt=$d." : Creating Metadata DataQuality section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_dataquality').".php");


$txt=$d." : Creating Metadata Extension section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_extension').".php");


$txt=$d." : Creating Metadata Constraints section ... ";
log_save1($ur_id,$txt);
   include_once ($inc_path.check_includes_file_exist('create_xml_mconstraints').".php");


$strxml=$dom->saveXML();
$handle = fopen($outputFilename, "w");
fwrite($handle, $strxml);
fclose($handle);





                          $res1=pg_QUERY("select max(id) as cc  from harvest_history") ;
                          $row=pg_fetch_array($res1);
                          $max_id = $row["cc"];
 			  $max_id=$max_id+1;

$query2=" Insert into harvest_history ( id,harvest_result,harvest_date,routine_name,file_name,proj_code,user_id) values ($max_id, 'Success','$d','$rname','$filenamea','$site','$user_id')";
$result2=@pg_QUERY($query2) ;



   include_once ($inc_path.check_includes_file_exist('save_records').".php");

?>

<font size=2 color=blue>XML file : </font><font size=2><b> <?=$outputFilename?></b> &nbsp;&nbsp;&nbsp;   has been saved ....</font><br>  

<?

 }



?>
