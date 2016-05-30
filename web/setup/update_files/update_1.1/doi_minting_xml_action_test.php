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

 <? include_once ($inc_path.check_includes_file_exist('get_user_privileges').".php");?>
 
<?  

$pcode=valid_data($_POST['pcode']);
$uid=valid_data($_POST['rtitle1']);

$result = @pg_query("select * from server where project_code='$pcode'");
$row = @pg_fetch_array($result);
$ip=$row['ip_address'];



    $db_host = $ip;
    $db_user = "geonetwork";
    $db_name = "geonetwork";
    $connection1=@pg_connect ("host=$db_host dbname=$db_name user=$db_user")  ;

?>
  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
    
	

 
		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
 <h1>DOI Minting</h1>		
  
 
</center>
<br>
<?
if ($_SESSION['captcha']['code'] != valid_data($_POST['capcode'])) {
?>
<br>
<font color=#800000 size=2> Code Error!</font>   &nbsp;&nbsp;&nbsp;Please reenter the code .....

<br><br><br>
<image src="../images/back.png" onclick="window.history.back()">

<?} else {
?>


<?


$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
$date_post=$d;
 
$path2=$upload_path;
$filename=valid_data($_POST['filename']);
  $file_url=$path2.$filename;


$contents = file_get_contents($file_url); 

$strxml=rtrim($contents);




//Settings for production account
$app_id = "510dfd141530c468643c3a296686f4aea383153f"; //Your ANDS APP_ID string
$shared_secret = "95ccca7dfd"; // Your shared secret
// Get POST variables
$url = valid_data_bslash($_POST['doi_lpage']);
$xml = 'xml='.urlencode($strxml);
if ( !isset($url) ) {
print "Variable 'url' not found.\n";
} else if ( !isset($xml) ) {
print "Variable 'xml' not found.\n";
} else {
// define the call to the service
$requestURI = "https://services.ands.org.au/doi/1.1/mint.xml/?app_id=".$app_id."&url=".urlencode($url);
// Execute call
//print "Executing CURL call...\n";
// use curl to connect and run the service and receive the response
$context  = array('Content-Type: application/xml;charset=UTF-8','Authorization: Basic '.base64_encode($app_id.":".$shared_secret));
$newch = curl_init();
curl_setopt($newch, CURLOPT_URL, $requestURI);
curl_setopt($newch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($newch, CURLOPT_POST, 1);
curl_setopt($newch, CURLOPT_POSTFIELDS,$xml);    
curl_setopt($newch, CURLOPT_HTTPHEADER,$context);
$result = curl_exec($newch);
$curlinfo = curl_getinfo($newch);
//print_r($curlinfo);
curl_close($newch);
if( $result ) {
       $resultXML = $result;
}

//print_r ($result);

$pieces = explode(" ",$resultXML);

echo "<br>";

if (strpos($pieces[4],'success') !== false) {  

echo "DOI &nbsp;&nbsp;&nbsp;<b><font color=red>".$pieces[5]."</font>&nbsp;&nbsp;&nbsp;</b> successfully minted ....";
echo "<br><br>";
?>
<table class='tborder' border=0 width="50%"    >
<thead>

<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;DOI : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo $pieces[5]?></font></td>
</tr>

<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Creator First Name : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo $doi_cfname?></font></td>
</tr>

<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Creator Last Name : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo $doi_clname?></font></td>
</tr>
<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Publisher : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo $doi_publisher?></font></td>
</tr>
<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Publication Year : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo $doi_pyear?></font></td>
</tr>
</table>


<?
} else {

echo "DOI not minted properly ....."; }

$doi=$pieces[5];


}


 



/*
$res3=@MYSQL_QUERY("select dm_id,datacollection_title1 from  nci_data_collection_level.data_collection_level where file_identifier='$rtitle'");
     $row3=@MYSQL_fetch_array($res3);
     $dm_id = $row3["dm_id"];
     $dm_title = $row3["datacollection_title1"];


     $res1=@MYSQL_QUERY("select max(minting_id) as cc  from nci_doi_main.nci_doi") ;
     $row=@MYSQL_fetch_array($res1);
     $max_id = $row["cc"];
     $max_id=$max_id+1;

$aa=1;
$query=" Insert into nci_doi_main.nci_doi (`minting_id`,`user_id`, `date_post`, `title`, `title_name`, `landing_page`, `creator_lname`, `creator_fname`, `publisher`, `publication_year`, `xml_data`, `doi`, `record_type`, `record_title`, `version_id`, `subject_scheme`, `subject`, `contributor_type`, `contributor_name`, `nameidentifier_scheme`, `nameidentifier`, `date`, `date_type`, `language`, `resourcetype_general`, `resource_type`, `altidentifier_type`, `altidentifer`, `related_identifier`, `relatedidentifier_type`, `relation_type`, `sizes`, `format`, `version`, `rightlist`, `description`, `description_type`,`title_name1`,`title_name2`,`creator_lname1`,`creator_fname1`,`creator_lname2`,`creator_fname2`,`subject_scheme_uri`,`nameidentifier_uri`,`rightlist_uri`,`type`) values ($max_id, '$user_id','$date_post','$doi_ttype','$doi_name','$url','$doi_clname','$doi_cfname','$doi_publisher','$doi_pyear','$strxml','$doi','$type','$dm_title','$aa','$doi_subject_scheme','$doi_subject','$doi_contributor_type','$contributor_name','$name_scheme','$name_identifier','$dt_date','$dt_datetype','$dt_language','$rt_general','$r_type','$a_identifier','$a_identifiertype','$r_identifier','$r_identifiertype','$relation_type','$fd_size','$fd_format','$fd_version','$fd_rights','$fd_description','$descp_type','$doi_name1','$doi_name2','$doi_clname1','$doi_cfname1','$doi_clname2','$doi_cfname2','$doi_subject_scheme_uri','$name_identifier_uri','$fd_rights_uri','test')";


$result=MYSQL_QUERY($query) ;

*/





/*print_r ($pieces);*/


/*
$dat_chk=$_POST['rtitle'];

if ($dat_chk!='') {

// **************************************************************************
// doi update  catalogue level
// **************************************************************************

$descp=$doi_clname." ".$doi_cfname.",  ".$doi_pyear.",  ".$dm_title.",   ".$doi_publisher.",  doi: ".$doi;

$query2="update nci_data_collection_level.data_collection_level set doi1='$descp' where file_identifier='$rtitle'";
$result2=MYSQL_QUERY($query2) ;

$query4="update nci_data_management.data_management set doi='$descp' where dm_id='$dm_id'";
$result4=MYSQL_QUERY($query4) ;

} else {

// **************************************************************************
// doi update dataset level
// **************************************************************************

$result2 = @pg_query($connection1,"select data as dd from metadata where uuid='$uid'");
$row2 = @pg_fetch_array($result2);
$row_data=$row2['dd'];

$bits = explode( PHP_EOL, $row_data);
array_pop($bits);
array_push($bits,"  <gmd:dataSetURI>");
array_push($bits,"    <gco:CharacterString>".$doi."</gco:CharacterString>");
array_push($bits,"  </gmd:dataSetURI>");
array_push($bits,"</gmd:MD_Metadata>");
$bits=implode(PHP_EOL,$bits);
$result1 = @pg_query($connection1,"update metadata set data='$bits' where uuid='$uid'");


}


$user_id=@$_SESSION["uid_".session_id()] ;
$d=@date("Y-m-d H:i:s");
$txt=" DOI  ".$doi. "    for Title : ".$dm_title."   has been saved....";
log_save4($user_id,$txt);


*/



$sub="DOI - Addition(Manual)";
$msg=" DOI  ".$doi. "    for Title : ".$dm_title."   has been saved....";
$event=7;

//email_send($msg,$sub,$event);


?>


<br><br><br>
<a href="../php/doi_minting_xml_test.php" ><image src="../images/back.png"></a>

<?
$doi_type_main='test';
@include_once ('extract_doi_xml.php');
?>


<br><br>
<br><br>
<br><br><br><br><br><br><br>

<br><br><br><br><br>

<?}?>

<div class="printfooter">
</div>
	</div>	
</div>

<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 
<?$dm_id=$dm_id;
 include_once('data_management_auto_save.php');?>
</body></html>

