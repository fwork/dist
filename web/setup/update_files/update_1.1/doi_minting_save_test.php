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

<?$sec_class->captcha_check();?>


<?


if (isset($_POST['doi_lpage']) and  ($_POST['doi_lpage']!='')) {
$doi_lpage= (mysql_escape_string(valid_data_bslash($_POST['doi_lpage'])));}
else {
$doi_lpage= (mysql_escape_string(valid_data_bslash($_POST['doi_lpage1'])));}



$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
$date_post=$d;

$doi_publisher= (mysql_escape_string(valid_data($_POST['doi_publisher'])));
$doi_pyear= (mysql_escape_string(valid_data($_POST['doi_pyear'])));
$dt_language= (mysql_escape_string(valid_data($_POST['dt_language'])));
$rt_general= (mysql_escape_string(valid_data($_POST['rt_general'])));
$r_type= (mysql_escape_string(valid_data($_POST['r_type'])));
$fd_version= (mysql_escape_string(valid_data($_POST['fd_version'])));




$dom  = new DomDocument('1.0', 'utf-8');
$dom->formatOutput   = true;

$main_page = $dom->createElementNS('http://datacite.org/schema/kernel-3','resource');
$dom->appendChild($main_page);
$main_page->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
$main_page->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'schemaLocation', 'http://datacite.org/schema/kernel-3 http://schema.datacite.org/meta/kernel-3/metadata.xsd');


$item1= $dom->createElement("identifier");
$item1->setAttribute('identifierType','DOI');
$main_page->appendChild($item1);


$item2= $dom->createElement("creators");
$main_page->appendChild($item2);

//$item3= $dom->createElement("creator");
//$item2->appendChild($item3);


foreach ($_POST['doi_cname'] as $k => $v) {
$val1=($_POST['doi_cname'][$k]);
$val2=($_POST['doi_aff'][$k]);
$val3=($_POST['doi_cni'][$k]);
$val4=($_POST['doi_nischeme'][$k]);
$val5=($_POST['doi_suri'][$k]);

if ($val1!='') {
$item3= $dom->createElement("creator");
$item2->appendChild($item3);

$item4= $dom->createElement("creatorName");
$item4->appendChild($dom->createTextNode($val1));
$item3->appendChild($item4);

if ($val3!='') {
$item4a= $dom->createElement("nameIdentifier");
$item4a->setAttribute('nameIdentifierScheme',$val4);
$item4a->setAttribute('schemeURI',$val5);
$item4a->APpendChild($dom->createTextNode($val3));
$item3->appendChild($item4a);
}

if ($val2!='') {
$item4= $dom->createElement("affiliation");
$item4->appendChild($dom->createTextNode($val2));
$item3->appendChild($item4);
}


}
}







$item5= $dom->createElement("titles");
$main_page->appendChild($item5);


 
 foreach ($_POST['doi_name'] as $k => $v) {
$val1=($_POST['doi_name'][$k]);
$val2=($_POST['doi_ttype'][$k]);
if ($val1!='') {
$item6a= $dom->createElement("title");
$item6a->APpendChild($dom->createTextNode($val1));
$item5->appendChild($item6a);
}
}

 

$item7= $dom->createElement("publisher");
$item7->APpendChild($dom->createTextNode($doi_publisher));
$main_page->appendChild($item7);

$item8= $dom->createElement("publicationYear");
$item8->APpendChild($dom->createTextNode($doi_pyear));
$main_page->appendChild($item8);



foreach ($_POST['contributor_name'] as $k => $v) {
$val1=($_POST['contributor_name'][$k]);
$val2=($_POST['doi_contributor_type'][$k]);
$val3=($_POST['name_identifier'][$k]);
$val4=($_POST['name_scheme'][$k]);
$val5=($_POST['name_identifier_uri'][$k]);
if ($val1!='') {
$item12= $dom->createElement("contributors");
$main_page->appendChild($item12);

$item13= $dom->createElement("contributor");
$item13->setAttribute('contributorType',$val2);
$item12->appendChild($item13);

$item14= $dom->createElement("contributorName");
$item14->APpendChild($dom->createTextNode($val1));
$item13->appendChild($item14);

$item14a= $dom->createElement("nameIdentifier");
$item14a->setAttribute('nameIdentifierScheme',$val4);
$item14a->setAttribute('schemeURI',$val5);
$item14a->APpendChild($dom->createTextNode($val5));
$item13->appendChild($item14a);

}
}




foreach ($_POST['doi_subject'] as $k => $v) {
$val1=($_POST['doi_subject'][$k]);
$val2=($_POST['doi_subject_scheme'][$k]);
$val3=($_POST['doi_subject_scheme_uri'][$k]);
if ($val1!='') {
$item9= $dom->createElement("subjects");
$main_page->appendChild($item9);

$item10= $dom->createElement("subject");
$item10->APpendChild($dom->createTextNode($val1));
$item9->appendChild($item10);

$item11= $dom->createElement("subject");
$item11->setAttribute('subjectScheme',$val2);
$item11->APpendChild($dom->createTextNode($val3));
$item9->appendChild($item11);


}
}


foreach ($_POST['dt_date'] as $k => $v) {
$val1=($_POST['dt_date'][$k]);
$val2=($_POST['dt_datetype'][$k]);
if ($val1!='') {
$item15= $dom->createElement("dates");
$main_page->appendChild($item15);

$item16= $dom->createElement("date");
$item16->APpendChild($dom->createTextNode($val1));
$item16->setAttribute('dateType',$val2);
$item15->appendChild($item16);
}
}



if ($dt_language!=''){
$item17= $dom->createElement("language");
$item17->APpendChild($dom->createTextNode($dt_language));
$main_page->appendChild($item17);
}

if ($r_type!=''){
$item18= $dom->createElement("resourceType");
$item18->APpendChild($dom->createTextNode($r_type));
$item18->setAttribute('resourceTypeGeneral',$rt_general);
$main_page->appendChild($item18);
}

foreach ($_POST['a_identifier'] as $k => $v) {
$val1=($_POST['a_identifier'][$k]);
$val2=($_POST['a_identifiertype'][$k]);
if ($val1!='') {
$item19= $dom->createElement("alternateIdentifiers");
$main_page->appendChild($item19);

$item20= $dom->createElement("alternateIdentifier");
$item20->APpendChild($dom->createTextNode($val1));
$item20->setAttribute('alternateIdentifierType',$a_identifiertype);
$item19->appendChild($item20);}
}




foreach ($_POST['r_identifier'] as $k => $v) {
$val1=($_POST['r_identifier'][$k]);
$val2=($_POST['r_identifiertype'][$k]);
$val3=($_POST['relation_type'][$k]);
$val4=($_POST['r_identifier_scheme'][$k]);
$val5=($_POST['r_identifier_suri'][$k]);
if ($val1!='') {
$item21= $dom->createElement("relatedIdentifiers");
$main_page->appendChild($item21);

$item21a= $dom->createElement("relatedIdentifier");
$item21a->APpendChild($dom->createTextNode($val1));
$item21a->setAttribute('relatedIdentifierType',$val2);
$item21a->setAttribute('relationType',$val3);
$item21->appendChild($item21a);
}
}


foreach ($_POST['fd_size'] as $k => $v) {
$val1=($_POST['fd_size'][$k]);
if ($val1!='') {
$item22= $dom->createElement("sizes");
$main_page->appendChild($item22);

$item23= $dom->createElement("size");
$item23->APpendChild($dom->createTextNode($val1));
$item22->appendChild($item23);
}
}


foreach ($_POST['fd_format'] as $k => $v) {
$val1=($_POST['fd_format'][$k]);
if ($val1!='') {
$item24= $dom->createElement("formats");
$main_page->appendChild($item24);

$item25= $dom->createElement("format");
$item25->APpendChild($dom->createTextNode($val1));
$item24->appendChild($item25);

}
}


$item26= $dom->createElement("version");
$item26->APpendChild($dom->createTextNode($fd_version));
$main_page->appendChild($item26);


foreach ($_POST['fd_rights'] as $k => $v) {
$val1=($_POST['fd_rights'][$k]);
$val2=($_POST['fd_rights_uri'][$k]);
if ($val1!='') {
$item27= $dom->createElement("rights");
$item27->APpendChild($dom->createTextNode($val1));
$item27->setAttribute('rightsURI',$val2);
$main_page->appendChild($item27);
}
}



foreach ($_POST['fd_description'] as $k => $v) {
$val1=($_POST['fd_description'][$k]);
$val2=($_POST['descp_type'][$k]);
if ($val1!='') {
$item28= $dom->createElement("descriptions");
$main_page->appendChild($item28);

$item29= $dom->createElement("description");
$item29->APpendChild($dom->createTextNode($val1));
$item29->setAttribute('descriptionType',$val2);
$item28->appendChild($item29);
}
}


foreach ($_POST['geo_point'] as $k => $v) {
$val1=($_POST['geo_point'][$k]);
$val2=($_POST['geo_box'][$k]);
$val3=($_POST['geo_place'][$k]);
if ($val3!='' ) {
$item30= $dom->createElement("geoLocations");
$main_page->appendChild($item30);

$item31= $dom->createElement("geoLocation");
$item30->appendChild($item31);

$item14dd= $dom->createElement("geoLocationPoint");
$item14dd->APpendChild($dom->createTextNode($val1));
$item31->appendChild($item14dd);

$item14dd= $dom->createElement("geoLocationBox");
$item14dd->APpendChild($dom->createTextNode($val2));
$item31->appendChild($item14dd);

$item14dd= $dom->createElement("geoLocationPlace");
$item14dd->APpendChild($dom->createTextNode($val3));
$item31->appendChild($item14dd);

}
}





//}

$strxml=$dom->saveXML();
$strxml=rtrim($strxml);





//Settings for production account
$app_id = "510dfd141530c468643c3a296686f4aea383153f"; //Your ANDS APP_ID string
$shared_secret = "95ccca7dfd"; // Your shared secret
// Get POST variables

if (isset($_POST['doi_lpage']) and  ($_POST['doi_lpage']!='')) {
$url= (mysql_escape_string(valid_data_bslash($_POST['doi_lpage'])));}
else {
$url= (mysql_escape_string(valid_data_bslash($_POST['doi_lpage1'])));}

//$url = valid_data_bslash($_POST['doi_lpage']); // Url for the landing page of the object you are minting the DOI for
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

//print_r ($resultXML);


$pieces = explode(" ",$resultXML);

//print_r ($pieces);


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
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Title : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo valid_data($_POST['doi_name'][0])?></font></td>
</tr>

<tr>
<td width="30%"><font face=tahoma size=2 color=#800000>&nbsp;Creator  : </font></td>
<td width="70%"><font face=tahoma size=2 >&nbsp;<?echo valid_data($_POST['doi_cname'][0])?></font></td>
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


 $res3=@MYSQL_QUERY("select dm_id,datacollection_title from  nci_data_management.data_mgmt  where file_identifier='$rtitle'");
     $row3=@MYSQL_fetch_array($res3);
     $dm_id = $row3["dm_id"];
     $dm_title = $row3["datacollection_title"];

/*
     $res1=@MYSQL_QUERY("select max(minting_id) as cc  from nci_doi_main.nci_doi") ;
     $row=@MYSQL_fetch_array($res1);
     $max_id = $row["cc"];
     $max_id=$max_id+1;

$aa=1;
$query=" Insert into nci_doi_main.nci_doi (`minting_id`,`user_id`, `date_post`, `title`, `title_name`, `landing_page`, `creator_lname`, `creator_fname`, `publisher`, `publication_year`, `xml_data`, `doi`, `record_type`, `record_title`, `version_id`, `subject_scheme`, `subject`, `contributor_type`, `contributor_name`, `nameidentifier_scheme`, `nameidentifier`, `date`, `date_type`, `language`, `resourcetype_general`, `resource_type`, `altidentifier_type`, `altidentifer`, `related_identifier`, `relatedidentifier_type`, `relation_type`, `sizes`, `format`, `version`, `rightlist`, `description`, `description_type`,`type`) values ($max_id, '$user_id','$date_post','$doi_ttype','$doi_name','$doi_lpage','$doi_clname','$doi_cfname','$doi_publisher','$doi_pyear','$strxml','$doi','$type','$dm_title','$aa','$doi_subject_scheme','$doi_subject','$doi_contributor_type','$contributor_name','$name_scheme','$name_identifier','$dt_date','$dt_datetype','$dt_language','$rt_general','$r_type','$a_identifier','$a_identifiertype','$r_identifier','$r_identifiertype','$relation_type','$fd_size','$fd_format','$fd_version','$fd_rights','$fd_description','$descp_type','test')";


$result=MYSQL_QUERY($query) ;
*/














 $res1=@MYSQL_QUERY("select max(minting_id) as cc  from nci_doi_main.nci_doi") ;
     $row=@MYSQL_fetch_array($res1);
     $max_id = $row["cc"];
     $max_id=$max_id+1;



$query=" Insert into nci_doi_main.nci_doi (`minting_id`, `date_post`, `landing_page`, `publisher`, `publication_year`, `xml_data`, `user_id`, `doi`, `language`, `resourcetype_general`, `resource_type`, `version`, `type`) values ($max_id, '$d','$doi_lpage','$doi_publisher','$doi_pyear','$strxml','$user_id','$doi','$dt_language','$rt_general','$r_type','$fd_version','test')";
$result=MYSQL_QUERY($query) ;



foreach ($_POST['doi_name'] as $k => $v) {
$val1=($_POST['doi_name'][$k]);
$val2=($_POST['doi_ttype'][$k]);
if ($val2!='') {
$query=" Insert into nci_doi_main.titles (`minting_id`,`title`,`title_type`) values ($max_id,'$val1', '$val2')";
$result=MYSQL_QUERY($query) ;
}
}
 
foreach ($_POST['doi_cname'] as $k => $v) {
$val1=($_POST['doi_cname'][$k]);
$val2=($_POST['doi_aff'][$k]);
$val3=($_POST['doi_cni'][$k]);
$val4=($_POST['doi_nischeme'][$k]);
$val5=($_POST['doi_suri'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.creators ( `minting_id`, `creator_name`, `creator_ni_uri`, `creator_ni_scheme`, `creator_ni`, `creator_aff`) values ($max_id,'$val1', '$val5','$val4','$val3','$val2')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['doi_subject'] as $k => $v) {
$val1=($_POST['doi_subject'][$k]);
$val2=($_POST['doi_subject_scheme'][$k]);
$val3=($_POST['doi_subject_scheme_uri'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.subjects ( `minting_id`, `subject`, `subject_uri`, `subject_scheme`) values ($max_id,'$val1', '$val3','$val2')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['contributor_name'] as $k => $v) {
$val1=($_POST['contributor_name'][$k]);
$val2=($_POST['doi_contributor_type'][$k]);
$val3=($_POST['name_identifier'][$k]);
$val4=($_POST['name_scheme'][$k]);
$val5=($_POST['name_identifier_uri'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.contributors ( `minting_id`, `contributor_name`, `contributor_ni_uri`, `contributor_ni_scheme`, `contributor_ni`, `contributor_type`) values ($max_id,'$val1', '$val5','$val4','$val3','$val2')";
$result=MYSQL_QUERY($query) ;
}
}


foreach ($_POST['dt_date'] as $k => $v) {
$val1=($_POST['dt_date'][$k]);
$val2=($_POST['dt_datetype'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.dates (  `minting_id`, `date`, `date_type`) values ($max_id,'$val1', '$val2')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['a_identifier'] as $k => $v) {
$val1=($_POST['a_identifier'][$k]);
$val2=($_POST['a_identifiertype'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.alternate_identifier (`minting_id`, `altidentifier`, `altidentifier_type`) values ($max_id,'$val1', '$val2')";
$result=MYSQL_QUERY($query) ;
}
}


foreach ($_POST['r_identifier'] as $k => $v) {
$val1=($_POST['r_identifier'][$k]);
$val2=($_POST['r_identifiertype'][$k]);
$val3=($_POST['relation_type'][$k]);
$val4=($_POST['r_identifier_scheme'][$k]);
$val5=($_POST['r_identifier_suri'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.related_identifier ( `minting_id`, `ridentifier_type`, `relation_type`, `ridentifier_scheme`, `ridentifier_uri`, `ridentifier_name`) values ($max_id,'$val2', '$val3','$val4','$val5','$val1')";
$result=MYSQL_QUERY($query) ;
}
}
 
 
foreach ($_POST['fd_size'] as $k => $v) {
$val1=($_POST['fd_size'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.sizes ( `minting_id`, `size`) values ($max_id,'$val1')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['fd_format'] as $k => $v) {
$val1=($_POST['fd_format'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.format ( `minting_id`, `format`) values ($max_id,'$val1')";
$result=MYSQL_QUERY($query) ;
}
}


 
foreach ($_POST['fd_rights'] as $k => $v) {
$val1=($_POST['fd_rights'][$k]);
$val2=($_POST['fd_rights_uri'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.rights (`minting_id`, `rights`, `rights_uri`) values ($max_id,'$val1', '$val2')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['fd_description'] as $k => $v) {
$val1=($_POST['fd_description'][$k]);
$val2=($_POST['descp_type'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.description (`minting_id`, `description`, `description_type`) values ($max_id,'$val1', '$val2')";
$result=MYSQL_QUERY($query) ;
}
}

foreach ($_POST['geo_point'] as $k => $v) {
$val1=($_POST['geo_point'][$k]);
$val2=($_POST['geo_box'][$k]);
$val3=($_POST['geo_place'][$k]);
if ($val1!='') {$query=" Insert into nci_doi_main.geolocation ( `minting_id`, `geol_point`, `geol_box`, `geol_place`) values ($max_id,'$val1', '$val2','$val3')";
$result=MYSQL_QUERY($query) ;
}
}
 
 







/*print_r ($pieces);

echo $strxml;*/

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


$sub="DOI - Addition";
$msg=" DOI  ".$doi. "    for Title : ".$dm_title."   has been saved....";
$event=6;

//email_send($msg,$sub,$event);


?>


<br><br><br>
<a href="../php/doi_minting_test.php" ><image src="../images/back.png"></a>


<br><br>
<br><br>
<br><br><br><br><br><br><br>

<br><br><br><br><br>


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

