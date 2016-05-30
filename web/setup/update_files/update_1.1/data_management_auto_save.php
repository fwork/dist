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
 
<?

$user_id= $_SESSION["uid_".session_id()];

$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
$date_post=$d;

 
 
$res2=@MYSQL_QUERY("select *  from nci_data_management.data_management where dm_id='$dm_id'") ;

$row1=@MYSQL_fetch_array($res2); 

  $datacollection_title= ($row1['datacollection_title']);
  $nci_code= ($row1['nci_code']);
  $abstract= ($row1['abstract']);
 $data_ownership_custodian= ($row1['data_ownership_custodian']);
 $data_history= ($row1['data_history']);
 $dataset_purpose= ($row1['dataset_purpose']);
 $dataset_status= ($row1['dataset_status']);
 $dataset_identifier= ($row1['dataset_identifier']);
 $doi= ($row1['doi']);
 $activities= ($row1['activities']);
 $main_data_owner= ($row1['main_data_owner']);
 $data_custodian= ($row1['data_custodian']);
 $other_data_owners= ($row1['other_data_owners']);
 $main_community= ($row1['main_community']);
 $data_ingest= ($row1['data_ingest']);
 $quality_assurance= ($row1['quality_assurance']);
 $publishing= ($row1['publishing']);
 $maintenance= ($row1['maintenance']);
 $user_support= ($row1['user_support']);
 $data_service= ($row1['data_service']);
 $data_service_operation= ($row1['data_service_operation']);
 $media_contact= ($row1['media_contact']);
 $access_list= ($row1['access_list']);
 $c_classification= ($row1['c_classification']);
 $use_limitations= ($row1['use_limitations']);
 $access_constraints= ($row1['access_constraints']);
 $use_constraints= ($row1['use_constraints']);
 $spatial_extent= ($row1['spatial_extent']);
 $temporal_extent= ($row1['temporal_extent']);
 $format_name_version= ($row1['format_name_version']);
 $dataset_version= ($row1['dataset_version']);
 $tools= ($row1['tools']);
 $software= ($row1['software']);
 $algorithms= ($row1['algorithms']);
 $flexibility= ($row1['flexibility']);
 $ingest_process= ($row1['ingest_process']);
 $qa_process= ($row1['qa_process']);
 $maintenance_process= ($row1['maintenance_process']);
 $backup_recovery_plan= ($row1['backup_recovery_plan']);
 $services= ($row1['services']);
 $catalog_registry= ($row1['catalog_registry']);
 $federated_catalogue= ($row1['federated_catalogue']);
 $keywords= ($row1['keywords']);
 $website= ($row1['website']);
 $documentation= ($row1['documentation']);
 $digital_data_transfer_options= ($row1['digital_data_transfer_options']);
 $feedback= ($row1['feedback']);
 $retentia= ($row1['retentia']);
 $data_life_cycle= ($row1['data_life_cycle']);
 $conflict_of_intrest= ($row1['conflict_of_intrest']);
  $how_to_guide= ($row1['how_to_guide']);
 $data_ingest_tframe= ($row1['data_ingest_tframe']);
 $qa_tframe= ($row1['qa_tframe']);
 $metadata_catalog_tframe= ($row1['metadata_catalog_tframe']);
 $pre_publishing_chklist_tframe= ($row1['pre_publishing_chklist_tframe']);
 $wrap_up_tframe = ($row1['wrap_up_tframe']);


 
 















$res_sec=@MYSQL_QUERY("select *  from nci_data_collection_level.data_collection_level where dm_id='$dm_id'") ;
$row_sec=@MYSQL_fetch_array($res_sec);

 $datacollection_title1= ($row_sec['datacollection_title1']);
$fidentifier=($row_sec['file_identifier']);
 $pidentifier= ($row_sec['parentidentifier']);

 $nci_code1= ($row_sec['nci_code1']);
 $abstract1= ($row_sec['abstract1']);
 $dataset_purpose1= ($row_sec['dataset_purpose1']);
 $dataset_status1= ($row_sec['dataset_status1']);
 $doi1= ($row_sec['doi1']);
 $c_classification1= ($row_sec['c_classification1']);
 $use_limitations1= ($row_sec['use_limitations1']);
 $access_constraints1= ($row_sec['access_constraints1']);
 $use_constraints1= ($row_sec['use_constraints1']);
 $dataset_version1= ($row_sec['dataset_version1']);
 $tools1= ($row_sec['tools1']);
 $maintenance_process1= ($row_sec['maintenance_process1']);
 $backup_recovery_plan1= ($row_sec['backup_recovery_plan1']);
 $dm_id=  $dm_id;


$owner_iname= ($row_sec['owner_iname']);
 $owner_oname= ($row_sec['owner_oname']);
 $owner_pname= ($row_sec['owner_pname']);
 $owner_phone= ($row_sec['owner_phone']);
 $owner_fax= ($row_sec['owner_fax']);
 $owner_dpoint= ($row_sec['owner_dpoint']);
 $owner_city= ($row_sec['owner_city']);
 $owner_adarea= ($row_sec['owner_adarea']);
 $owner_pcode= ($row_sec['owner_pcode']);
 $owner_country= ($row_sec['owner_country']);
 $owner_email= ($row_sec['owner_email']);
 $owner_role= ($row_sec['owner_role']);
 $cust_iname= ($row_sec['cust_iname']);
 $cust_oname= ($row_sec['cust_oname']);
 $cust_pname= ($row_sec['cust_pname']);
 $cust_phone= ($row_sec['cust_phone']);
 $cust_fax= ($row_sec['cust_fax']);
 $cust_dpoint= ($row_sec['cust_dpoint']);
 $cust_city= ($row_sec['cust_city']);
 $cust_adarea= ($row_sec['cust_adarea']);
 $cust_pcode= ($row_sec['cust_pcode']);
 $cust_country= ($row_sec['cust_country']);
 $cust_email= ($row_sec['cust_email']);
 $cust_role= ($row_sec['cust_role']);

 $west_value= ($row_sec['west_value']);
 $east_value= ($row_sec['east_value']);
 $south_value= ($row_sec['south_value']);
 $north_value= ($row_sec['north_value']);

 $bposition= ($row_sec['bposition']);
 $eposition= ($row_sec['eposition']);

 $fname1= ($row_sec['fname1']);
 $fname2= ($row_sec['fname2']);
 $fname3= ($row_sec['fname3']);
 $fname4= ($row_sec['fname4']);
 $fname5= ($row_sec['fname5']);
$fver1= ($row_sec['fver1']);
$fver2= ($row_sec['fver2']);
$fver3= ($row_sec['fver3']);
$fver4= ($row_sec['fver4']);
$fver5= ($row_sec['fver5']);




 $keyword1= ($row_sec['keyword1']);
 $keyword2= ($row_sec['keyword2']);
 $keyword3= ($row_sec['keyword3']);
 $keyword4= ($row_sec['keyword4']);
 $keyword5= ($row_sec['keyword5']);
 $web1= ($row_sec['web1']);
 $web2= ($row_sec['web2']);

 $wrap_up_tframe1= ($row_sec['wrap_up_tframe1']);

 $web1_descp= ($row_sec['web1_descp']);
 $web2_descp= ($row_sec['web2_descp']);

 $m_catalogue1= ($row_sec['m_catalogue1']);

 $data_history1= ($row_sec['data_history1']);
 $alt_title1= ($row_sec['alt_title1']);
 $o_constraints1= ($row_sec['o_constraints1']);
 $o_constraints2 = ($row_sec['o_constraints2']);
 $flexibility1 = ($row_sec['flexibility1']);
 $services1 = ($row_sec['services1']);
 $services1_descp = ($row_sec['services1_descp']);
 $catalog_registry1 = ($row_sec['catalog_registry1']);
 $catalog_registry1_descp = ($row_sec['catalog_registry1_descp']);
 $fed_catalog1 = ($row_sec['fed_catalog1']);
 $fed_catalog2= ($row_sec['fed_catalog2']);
 $fed_catalog3 = ($row_sec['fed_catalog3']);
 $fed_catalog4 = ($row_sec['fed_catalog4']);
 $fed_catalog5 = ($row_sec['fed_catalog5']);
 $fed_catalog1_descp = ($row_sec['fed_catalog1_descp']);
 $fed_catalog2_descp = ($row_sec['fed_catalog2_descp']);
 $fed_catalog3_descp = ($row_sec['fed_catalog3_descp']);
 $fed_catalog4_descp = ($row_sec['fed_catalog4_descp']);
 $fed_catalog5_descp = ($row_sec['fed_catalog5_descp']);
 $data_transfer1 = ($row_sec['data_transfer1']);
 $data_transfer1_descp = ($row_sec['data_transfer1_descp']);
 $retentia1 = ($row_sec['retentia1']);
 $activities1 = ($row_sec['activities1']);
 $ingest_process1 = ($row_sec['ingest_process1']);

 $cust2_iname = ($row_sec['cust2_iname']);
 $cust2_oname = ($row_sec['cust2_oname']);
 $cust2_pname = ($row_sec['cust2_pname']);
 $cust2_phone = ($row_sec['cust2_phone']);
 $cust2_fax = ($row_sec['cust2_fax']);
 $cust2_dpoint = ($row_sec['cust2_dpoint']);
 $cust2_city = ($row_sec['cust2_city']);
 $cust2_adarea = ($row_sec['cust2_adarea']);
 $cust2_pcode = ($row_sec['cust2_pcode']);
 $cust2_country = ($row_sec['cust2_country']);
 $cust2_email = ($row_sec['cust2_email']);
 $cust2_role = ($row_sec['cust2_role']);


 $owner2_iname = ($row_sec['owner2_iname']);
 $owner2_oname = ($row_sec['owner2_oname']);
 $owner2_pname = ($row_sec['owner2_pname']);
 $owner2_phone = ($row_sec['owner2_phone']);
 $owner2_fax = ($row_sec['owner2_fax']);
 $owner2_dpoint = ($row_sec['owner2_dpoint']);
 $owner2_city = ($row_sec['owner2_city']);
 $owner2_adarea = ($row_sec['owner2_adarea']);
 $owner2_pcode = ($row_sec['owner2_pcode']);
 $owner2_country = ($row_sec['owner2_country']);
 $owner2_email = ($row_sec['owner2_email']);
 $owner2_role = ($row_sec['owner2_role']);

 $pc_iname = ($row_sec['pc_iname']);
 $pc_oname = ($row_sec['pc_oname']);
 $pc_pname = ($row_sec['pc_pname']);
 $pc_phone = ($row_sec['pc_phone']);
 $pc_fax = ($row_sec['pc_fax']);
 $pc_dpoint = ($row_sec['pc_dpoint']);
 $pc_city = ($row_sec['pc_city']);
 $pc_adarea = ($row_sec['pc_adarea']);
 $pc_pcode = ($row_sec['pc_pcode']);
 $pc_country = ($row_sec['pc_country']);
 $pc_email = ($row_sec['pc_email']);
 $pc_role = ($row_sec['pc_role']);

 $processor_iname = ($row_sec['processor_iname']);
 $processor_oname = ($row_sec['processor_oname']);
 $processor_pname = ($row_sec['processor_pname']);
 $processor_phone = ($row_sec['processor_phone']);
 $processor_fax = ($row_sec['processor_fax']);
 $processor_dpoint = ($row_sec['processor_dpoint']);
 $processor_city = ($row_sec['processor_city']);
 $processor_adarea = ($row_sec['processor_adarea']);
 $processor_pcode = ($row_sec['processor_pcode']);
 $processor_country = ($row_sec['processor_country']);
 $processor_email = ($row_sec['processor_email']);
 $processor_role = ($row_sec['processor_role']);

 $qassurer_iname = ($row_sec['qassurer_iname']);
 $qassurer_oname = ($row_sec['qassurer_oname']);
 $qassurer_pname = ($row_sec['qassurer_pname']);
 $qassurer_phone = ($row_sec['qassurer_phone']);
 $qassurer_fax = ($row_sec['qassurer_fax']);
 $qassurer_dpoint = ($row_sec['qassurer_dpoint']);
 $qassurer_city = ($row_sec['qassurer_city']);
 $qassurer_adarea = ($row_sec['qassurer_adarea']);
 $qassurer_pcode = ($row_sec['qassurer_pcode']);
 $qassurer_country = ($row_sec['qassurer_country']);
 $qassurer_email = ($row_sec['qassurer_email']);
 $qassurer_role = ($row_sec['qassurer_role']);


 $publisher_iname = ($row_sec['publisher_iname']);
 $publisher_oname = ($row_sec['publisher_oname']);
 $publisher_pname = ($row_sec['publisher_pname']);
 $publisher_phone = ($row_sec['publisher_phone']);
 $publisher_fax = ($row_sec['publisher_fax']);
 $publisher_dpoint = ($row_sec['publisher_dpoint']);
 $publisher_city = ($row_sec['publisher_city']);
 $publisher_adarea = ($row_sec['publisher_adarea']);
 $publisher_pcode = ($row_sec['publisher_pcode']);
 $publisher_country = ($row_sec['publisher_country']);
 $publisher_email = ($row_sec['publisher_email']);
 $publisher_role = ($row_sec['publisher_role']);

 $maintainer_iname = ($row_sec['maintainer_iname']);
 $maintainer_oname = ($row_sec['maintainer_oname']);
 $maintainer_pname = ($row_sec['maintainer_pname']);
 $maintainer_phone = ($row_sec['maintainer_phone']);
 $maintainer_fax = ($row_sec['maintainer_fax']);
 $maintainer_dpoint = ($row_sec['maintainer_dpoint']);
 $maintainer_city = ($row_sec['maintainer_city']);
 $maintainer_adarea = ($row_sec['maintainer_adarea']);
 $maintainer_pcode = ($row_sec['maintainer_pcode']);
 $maintainer_country = ($row_sec['maintainer_country']);
 $maintainer_email = ($row_sec['maintainer_email']);
 $maintainer_role = ($row_sec['maintainer_role']);

 $supporter_iname = ($row_sec['supporter_iname']);
 $supporter_oname = ($row_sec['supporter_oname']);
 $supporter_pname = ($row_sec['supporter_pname']);
 $supporter_phone = ($row_sec['supporter_phone']);
 $supporter_fax = ($row_sec['supporter_fax']);
 $supporter_dpoint = ($row_sec['supporter_dpoint']);
 $supporter_city = ($row_sec['supporter_city']);
 $supporter_adarea = ($row_sec['supporter_adarea']);
 $supporter_pcode = ($row_sec['supporter_pcode']);
 $supporter_country = ($row_sec['supporter_country']);
 $supporter_email = ($row_sec['supporter_email']);
 $supporter_role = ($row_sec['supporter_role']);

 $sdeveloper_iname = ($row_sec['sdeveloper_iname']);
 $sdeveloper_oname = ($row_sec['sdeveloper_oname']);
 $sdeveloper_pname = ($row_sec['sdeveloper_pname']);
 $sdeveloper_phone = ($row_sec['sdeveloper_phone']);
 $sdeveloper_fax = ($row_sec['sdeveloper_fax']);
 $sdeveloper_dpoint = ($row_sec['sdeveloper_dpoint']);
 $sdeveloper_city = ($row_sec['sdeveloper_city']);
 $sdeveloper_adarea = ($row_sec['sdeveloper_adarea']);
 $sdeveloper_pcode = ($row_sec['sdeveloper_pcode']);
 $sdeveloper_country = ($row_sec['sdeveloper_country']);
 $sdeveloper_email = ($row_sec['sdeveloper_email']);
 $sdeveloper_role = ($row_sec['sdeveloper_role']);


 $soperator_iname = ($row_sec['soperator_iname']);
 $soperator_oname = ($row_sec['soperator_oname']);
 $soperator_pname = ($row_sec['soperator_pname']);
 $soperator_phone = ($row_sec['soperator_phone']);
 $soperator_fax = ($row_sec['soperator_fax']);
 $soperator_dpoint = ($row_sec['soperator_dpoint']);
 $soperator_city = ($row_sec['soperator_city']);
 $soperator_adarea = ($row_sec['soperator_adarea']);
 $soperator_pcode = ($row_sec['soperator_pcode']);
 $soperator_country = ($row_sec['soperator_country']);
 $soperator_email = ($row_sec['soperator_email']);
 $soperator_role = ($row_sec['soperator_role']);

 $media_iname = ($row_sec['media_iname']);
 $media_oname = ($row_sec['media_oname']);
 $media_pname = ($row_sec['media_pname']);
 $media_phone = ($row_sec['media_phone']);
 $media_fax = ($row_sec['media_fax']);
 $media_dpoint = ($row_sec['media_dpoint']);
 $media_city = ($row_sec['media_city']);
 $media_adarea = ($row_sec['media_adarea']);
 $media_pcode = ($row_sec['media_pcode']);
 $media_country = ($row_sec['media_country']);
 $media_email = ($row_sec['media_email']);
 $media_role = ($row_sec['media_role']);

 $pinvest_iname = ($row_sec['pinvest_iname']);
 $pinvest_oname = ($row_sec['pinvest_oname']);
 $pinvest_pname = ($row_sec['pinvest_pname']);
 $pinvest_phone = ($row_sec['pinvest_phone']);
 $pinvest_fax = ($row_sec['pinvest_fax']);
 $pinvest_dpoint = ($row_sec['pinvest_dpoint']);
 $pinvest_city = ($row_sec['pinvest_city']);
 $pinvest_adarea = ($row_sec['pinvest_adarea']);
 $pinvest_pcode = ($row_sec['pinvest_pcode']);
 $pinvest_country = ($row_sec['pinvest_country']);
 $pinvest_email = ($row_sec['pinvest_email']);
 $pinvest_role = ($row_sec['pinvest_role']);
 $documentation1 = ($row_sec['documentation1']);

 $keyword_abs_link = ($row_sec['keyword_abs_link']);

?>










<?
$outputFilename   = $fidentifier.'.xml';
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

 
$title_string= $dom->createElement("gco:CharacterString");
$title_string->appendChild($dom->createTextNode($fidentifier));
$item= $dom->createElement("gmd:fileIdentifier");
if ($fidentifier==''){$item->setAttribute('gco:nilReason','missing');}
$item->appendChild($title_string);
$main_page->appendChild($item);

if ($pidentifier!='') {
$title_stringz= $dom->createElement("gco:CharacterString");
$title_stringz->appendChild($dom->createTextNode($pidentifier));
$itemz= $dom->createElement("gmd:parentIdentifier");
if ($pidentifier==''){$itemz->setAttribute('gco:nilReason','missing');}
$itemz->appendChild($title_stringz);
$main_page->appendChild($itemz);
}

$title_string1= $dom->createElement("gco:CharacterString");
$title_string1->appendChild($dom->createTextNode($language));
$item1= $dom->createElement("gmd:language");
if ($language==''){$item1->setAttribute('gco:nilReason','missing');}
$item1->appendChild($title_string1);
$main_page->appendChild($item1);


$title_string2= $dom->createElement("gmd:MD_CharacterSetCode");
$title_string2->appendChild($dom->createTextNode($characterset));
$item2= $dom->createElement("gmd:characterSet");
$item2->appendChild($title_string2);
$title_string2->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_CharacterSetCode');
$title_string2->setAttribute('codeListValue',$characterset);
$main_page->appendChild($item2);









$item5= $dom->createElement("gmd:contact");
$main_page->appendChild($item5);

$item6= $dom->createElement("gmd:CI_ResponsibleParty");
$item5->appendChild($item6);

$title_string7= $dom->createElement("gco:CharacterString");
$title_string7->appendChild($dom->createTextNode($pc_iname));
$item7= $dom->createElement("gmd:individualName");
if ($pc_iname==''){$item7->setAttribute('gco:nilReason','missing');}
$item7->appendChild($title_string7);
$item6->appendChild($item7);

$title_string8= $dom->createElement("gco:CharacterString");
$title_string8->appendChild($dom->createTextNode($pc_oname));
$item8= $dom->createElement("gmd:organisationName");
if ($pc_oname==''){$item8->setAttribute('gco:nilReason','missing');}
$item8->appendChild($title_string8);
$item6->appendChild($item8);


$title_string9= $dom->createElement("gco:CharacterString");
$title_string9->appendChild($dom->createTextNode($pc_pname));
$item9= $dom->createElement("gmd:positionName");
if ($pc_pname==''){$item9->setAttribute('gco:nilReason','missing');}
$item9->appendChild($title_string9);
$item6->appendChild($item9);

$item10= $dom->createElement("gmd:contactInfo");
$item6->appendChild($item10);

$item11= $dom->createElement("gmd:CI_Contact");
$item10->appendChild($item11);

$item12= $dom->createElement("gmd:phone");
$item11->appendChild($item12);

$item13= $dom->createElement("gmd:CI_Telephone");
$item12->appendChild($item13);

$title_string14= $dom->createElement("gco:CharacterString");
$title_string14->appendChild($dom->createTextNode($pc_phone));
$item14= $dom->createElement("gmd:voice");
if ($pc_phone==''){$item14->setAttribute('gco:nilReason','missing');}
$item14->appendChild($title_string14);
$item13->appendChild($item14);

$title_string15= $dom->createElement("gco:CharacterString");
$title_string15->appendChild($dom->createTextNode($pc_fax));
$item15= $dom->createElement("gmd:facsimile");
if ($pc_fax==''){$item15->setAttribute('gco:nilReason','missing');}
$item15->appendChild($title_string15);
$item13->appendChild($item15);

$item16= $dom->createElement("gmd:address");
$item11->appendChild($item16);

$item17= $dom->createElement("gmd:CI_Address");
$item16->appendChild($item17);
 
$title_string18= $dom->createElement("gco:CharacterString");
$title_string18->appendChild($dom->createTextNode($pc_dpoint));
$item18= $dom->createElement("gmd:deliveryPoint");
if ($pc_dpoint==''){$item18->setAttribute('gco:nilReason','missing');}
$item18->appendChild($title_string18);
$item17->appendChild($item18);

$title_string19= $dom->createElement("gco:CharacterString");
$title_string19->appendChild($dom->createTextNode($pc_city));
$item19= $dom->createElement("gmd:city");
if ($pc_city==''){$item19->setAttribute('gco:nilReason','missing');}
$item19->appendChild($title_string19);
$item17->appendChild($item19);

$title_string20= $dom->createElement("gco:CharacterString");
$title_string20->appendChild($dom->createTextNode($pc_adarea));
$item20= $dom->createElement("gmd:administrativeArea");
if ($pc_adarea==''){$item20->setAttribute('gco:nilReason','missing');}
$item20->appendChild($title_string20);
$item17->appendChild($item20);

$title_string21= $dom->createElement("gco:CharacterString");
$title_string21->appendChild($dom->createTextNode($pc_pcode));
$item21= $dom->createElement("gmd:postalCode");
if ($pc_pcode==''){$item21->setAttribute('gco:nilReason','missing');}
$item21->appendChild($title_string21);
$item17->appendChild($item21);

$title_string22= $dom->createElement("gco:CharacterString");
$title_string22->appendChild($dom->createTextNode($pc_country));
$item22= $dom->createElement("gmd:country");
if ($pc_country==''){$item22->setAttribute('gco:nilReason','missing');}
$item22->appendChild($title_string22);
$item17->appendChild($item22);

$title_string23= $dom->createElement("gco:CharacterString");
$title_string23->appendChild($dom->createTextNode($pc_email));
$item23= $dom->createElement("gmd:electronicMailAddress");
if ($pc_email==''){$item23->setAttribute('gco:nilReason','missing');}
$item23->appendChild($title_string23);
$item17->appendChild($item23);


$title_string24= $dom->createElement("gmd:CI_RoleCode");
$title_string24->appendChild($dom->createTextNode('pointOfContact'));
$item24= $dom->createElement("gmd:role");
$item24->appendChild($title_string24);
$title_string24->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string24->setAttribute('codeListValue','pointOfContact');
$item6->appendChild($item24);



 
$title_string25= $dom->createElement("gco:Date");
$title_string25->appendChild($dom->createTextNode($d));
$item25= $dom->createElement("gmd:dateStamp");
$item25->appendChild($title_string25);
$main_page->appendChild($item25);
 

$title_string27a= $dom->createElement("gco:CharacterString");
$title_string27a->appendChild($dom->createTextNode($doi1));
$item27a= $dom->createElement("gmd:dataSetURI");
if ($doi1==''){$item27a->setAttribute('gco:nilReason','missing');}
$item27a->appendChild($title_string27a);
$main_page->appendChild($item27a);







$item35= $dom->createElement("gmd:identificationInfo");
$main_page->appendChild($item35);

$item36= $dom->createElement("gmd:MD_DataIdentification");
$item35->appendChild($item36);

$item37= $dom->createElement("gmd:citation");
$item36->appendChild($item37);

$item38= $dom->createElement("gmd:CI_Citation");
$item37->appendChild($item38);

$title_string39= $dom->createElement("gco:CharacterString");
$title_string39->appendChild($dom->createTextNode($datacollection_title1));
$item39= $dom->createElement("gmd:title");
if ($datacollection_title1==''){$item39->setAttribute('gco:nilReason','missing');}
$item39->appendChild($title_string39);
$item38->appendChild($item39);

$title_string39b= $dom->createElement("gco:CharacterString");
$title_string39b->appendChild($dom->createTextNode($alt_title1));
$item39b= $dom->createElement("gmd:alternateTitle");
if ($alt_title1==''){$item39b->setAttribute('gco:nilReason','missing');}
$item39b->appendChild($title_string39b);
$item38->appendChild($item39b);



$item40= $dom->createElement("gmd:date");
$item38->appendChild($item40);

$item41= $dom->createElement("gmd:CI_Date");
$item40->appendChild($item41);




if ($wrap_up_tframe1==''){
$item42= $dom->createElement("gmd:date");
$item42->setAttribute('gco:nilReason','missing');
$item41->appendChild($item42);
}else {
$title_string42= $dom->createElement("gco:Date");
$title_string42->appendChild($dom->createTextNode($wrap_up_tframe1));
$item42= $dom->createElement("gmd:date");
$item42->appendChild($title_string42);
$item41->appendChild($item42);
}



$title_string43= $dom->createElement("gmd:CI_DateTypeCode");
$title_string43->appendChild($dom->createTextNode('publication'));
$item43= $dom->createElement("gmd:dateType");
$item43->appendChild($title_string43);
$title_string43->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_DateTypeCode');
$title_string43->setAttribute('codeListValue','publication');
$item41->appendChild($item43);





$title_string39f= $dom->createElement("gco:CharacterString");
$title_string39f->appendChild($dom->createTextNode($dataset_version1));
$item39f= $dom->createElement("gmd:edition");
if ($dataset_version1==''){$item39f->setAttribute('gco:nilReason','missing');}
$item39f->appendChild($title_string39f);
$item38->appendChild($item39f);



/*$item43a= $dom->createElement("gmd:identifier");
$item38->appendChild($item43a);

$item43b= $dom->createElement("gmd:MD_Identifier");
$item43a->appendChild($item43b);

$title_string43c= $dom->createElement("gco:CharacterString");
$title_string43c->appendChild($dom->createTextNode($nci_code1));
$item43c= $dom->createElement("gmd:code");
if ($nci_code1==''){$item43c->setAttribute('gco:nilReason','missing');}
$item43c->appendChild($title_string43c);
$item43b->appendChild($item43c);
*/



if ($cust2_iname=='' and $cust2_oname==''){
}
else {
$item43d= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43d);

$item43e= $dom->createElement("gmd:CI_ResponsibleParty");
$item43d->appendChild($item43e);

$title_string43f= $dom->createElement("gco:CharacterString");
$title_string43f->appendChild($dom->createTextNode($cust2_iname));
$item43f= $dom->createElement("gmd:individualName");
if ($cust2_iname==''){$item43f->setAttribute('gco:nilReason','missing');}
$item43f->appendChild($title_string43f);
$item43e->appendChild($item43f);



$title_string8m1= $dom->createElement("gco:CharacterString");
$title_string8m1->appendChild($dom->createTextNode($cust2_oname));
$item8m1= $dom->createElement("gmd:organisationName");
if ($cust2_oname==''){$item8m1->setAttribute('gco:nilReason','missing');}
$item8m1->appendChild($title_string8m1);
$item43e->appendChild($item8m1);


$title_string9m1= $dom->createElement("gco:CharacterString");
$title_string9m1->appendChild($dom->createTextNode($cust2_pname));
$item9m1= $dom->createElement("gmd:positionName");
if ($cust2_pname==''){$item9m1->setAttribute('gco:nilReason','missing');}
$item9m1->appendChild($title_string9m1);
$item43e->appendChild($item9m1);

$item10m1= $dom->createElement("gmd:contactInfo");
$item43e->appendChild($item10m1);

$item11m1= $dom->createElement("gmd:CI_Contact");
$item10m1->appendChild($item11m1);

$item12m1= $dom->createElement("gmd:phone");
$item11m1->appendChild($item12m1);

$item13m1= $dom->createElement("gmd:CI_Telephone");
$item12m1->appendChild($item13m1);

$title_string14m1= $dom->createElement("gco:CharacterString");
$title_string14m1->appendChild($dom->createTextNode($cust2_phone));
$item14m1= $dom->createElement("gmd:voice");
if ($cust2_phone==''){$item14m1->setAttribute('gco:nilReason','missing');}
$item14m1->appendChild($title_string14m1);
$item13m1->appendChild($item14m1);

$title_string15m1= $dom->createElement("gco:CharacterString");
$title_string15m1->appendChild($dom->createTextNode($cust2_fax));
$item15m1= $dom->createElement("gmd:facsimile");
if ($cust2_fax==''){$item15m1->setAttribute('gco:nilReason','missing');}
$item15m1->appendChild($title_string15m1);
$item13m1->appendChild($item15m1);

$item16m1= $dom->createElement("gmd:address");
$item11m1->appendChild($item16m1);

$item17m1= $dom->createElement("gmd:CI_Address");
$item16m1->appendChild($item17m1);
 
$title_string18m1= $dom->createElement("gco:CharacterString");
$title_string18m1->appendChild($dom->createTextNode($cust2_dpoint));
$item18m1= $dom->createElement("gmd:deliveryPoint");
if ($cust2_dpoint==''){$item18m1->setAttribute('gco:nilReason','missing');}
$item18m1->appendChild($title_string18m1);
$item17m1->appendChild($item18m1);

$title_string19m1= $dom->createElement("gco:CharacterString");
$title_string19m1->appendChild($dom->createTextNode($cust2_city));
$item19m1= $dom->createElement("gmd:city");
if ($cust2_city==''){$item19m1->setAttribute('gco:nilReason','missing');}
$item19m1->appendChild($title_string19m1);
$item17m1->appendChild($item19m1);

$title_string20m1= $dom->createElement("gco:CharacterString");
$title_string20m1->appendChild($dom->createTextNode($cust2_adarea));
$item20m1= $dom->createElement("gmd:administrativeArea");
if ($cust2_adarea==''){$item20m1->setAttribute('gco:nilReason','missing');}
$item20m1->appendChild($title_string20m1);
$item17m1->appendChild($item20m1);

$title_string21m1= $dom->createElement("gco:CharacterString");
$title_string21m1->appendChild($dom->createTextNode($cust2_pcode));
$item21m1= $dom->createElement("gmd:postalCode");
if ($cust2_pcode==''){$item21m1->setAttribute('gco:nilReason','missing');}
$item21m1->appendChild($title_string21m1);
$item17m1->appendChild($item21m1);

$title_string22m1= $dom->createElement("gco:CharacterString");
$title_string22m1->appendChild($dom->createTextNode($cust2_country));
$item22m1= $dom->createElement("gmd:country");
if ($cust2_country==''){$item22m1->setAttribute('gco:nilReason','missing');}
$item22m1->appendChild($title_string22m1);
$item17m1->appendChild($item22m1);

$title_string23m1= $dom->createElement("gco:CharacterString");
$title_string23m1->appendChild($dom->createTextNode($cust2_email));
$item23m1= $dom->createElement("gmd:electronicMailAddress");
if ($cust2_email==''){$item23m1->setAttribute('gco:nilReason','missing');}
$item23m1->appendChild($title_string23m1);
$item17m1->appendChild($item23m1);


  
$title_string43g= $dom->createElement("gmd:CI_RoleCode");
$title_string43g->appendChild($dom->createTextNode('custodian'));
$item43g= $dom->createElement("gmd:role");
$item43g->appendChild($title_string43g);
$title_string43g->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43g->setAttribute('codeListValue','custodian');
$item43e->appendChild($item43g);
}





$title_string44= $dom->createElement("gco:CharacterString");
$title_string44->appendChild($dom->createTextNode($abstract1));
$item44= $dom->createElement("gmd:abstract");
if ($abstract1==''){$item44->setAttribute('gco:nilReason','missing');}
$item44->appendChild($title_string44);
$item36->appendChild($item44);

$title_string45= $dom->createElement("gco:CharacterString");
$title_string45->appendChild($dom->createTextNode($dataset_purpose1));
$item45= $dom->createElement("gmd:purpose");
if ($dataset_purpose1==''){$item45->setAttribute('gco:nilReason','missing');}
$item45->appendChild($title_string45);
$item36->appendChild($item45);


$title_string46a= $dom->createElement("gmd:MD_ProgressCode");
$title_string46a->appendChild($dom->createTextNode($dataset_status1));
$item46a= $dom->createElement("gmd:status");
$item46a->appendChild($title_string46a);
$title_string46a->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_ProgressCode');
$title_string46a->setAttribute('codeListValue',$dataset_status1);
$item36->appendChild($item46a);






if ($cust_iname=='' and $cust_oname==''){
}
else {
$item47q= $dom->createElement("gmd:pointOfContact");
$item36->appendChild($item47q);

$item48q= $dom->createElement("gmd:CI_ResponsibleParty");
$item47q->appendChild($item48q);

$title_string49q= $dom->createElement("gco:CharacterString");
$title_string49q->appendChild($dom->createTextNode($cust_iname));
$item49q= $dom->createElement("gmd:individualName");
if ($cust_iname==''){$item49q->setAttribute('gco:nilReason','missing');}
$item49q->appendChild($title_string49q);
$item48q->appendChild($item49q);

$title_string50q= $dom->createElement("gco:CharacterString");
$title_string50q->appendChild($dom->createTextNode($cust_oname));
$item50q= $dom->createElement("gmd:organisationName");
if ($cust_oname==''){$item50q->setAttribute('gco:nilReason','missing');}
$item50q->appendChild($title_string50q);
$item48q->appendChild($item50q);

$title_string51q= $dom->createElement("gco:CharacterString");
$title_string51q->appendChild($dom->createTextNode($cust_pname));
$item51q= $dom->createElement("gmd:positionName");
if ($cust_pname==''){$item51q->setAttribute('gco:nilReason','missing');}
$item51q->appendChild($title_string51q);
$item48q->appendChild($item51q);

$item52q= $dom->createElement("gmd:contactInfo");
$item48q->appendChild($item52q);

$item53q= $dom->createElement("gmd:CI_Contact");
$item52q->appendChild($item53q);

$item54q= $dom->createElement("gmd:phone");
$item53q->appendChild($item54q);

$item55q= $dom->createElement("gmd:CI_Telephone");
$item54q->appendChild($item55q);

$title_string56q= $dom->createElement("gco:CharacterString");
$title_string56q->appendChild($dom->createTextNode($cust_phone));
$item56q= $dom->createElement("gmd:voice");
if ($cust_phone==''){$item56q->setAttribute('gco:nilReason','missing');}
$item56q->appendChild($title_string56q);
$item55q->appendChild($item56q);

$title_string57q= $dom->createElement("gco:CharacterString");
$title_string57q->appendChild($dom->createTextNode($cust_fax));
$item57q= $dom->createElement("gmd:facsimile");
if ($cust_fax==''){$item57q->setAttribute('gco:nilReason','missing');}
$item57q->appendChild($title_string57q);
$item55q->appendChild($item57q);


$item58q= $dom->createElement("gmd:address");
$item53q->appendChild($item58q);

$item59q= $dom->createElement("gmd:CI_Address");
$item58q->appendChild($item59q);


$title_string60q= $dom->createElement("gco:CharacterString");
$title_string60q->appendChild($dom->createTextNode($cust_dpoint));
$item60q= $dom->createElement("gmd:deliveryPoint");
if ($cust_dpoint==''){$item60q->setAttribute('gco:nilReason','missing');}
$item60q->appendChild($title_string60q);
$item59q->appendChild($item60q);

$title_string61q= $dom->createElement("gco:CharacterString");
$title_string61q->appendChild($dom->createTextNode($cust_city));
$item61q= $dom->createElement("gmd:city");
if ($cust_city==''){$item61q->setAttribute('gco:nilReason','missing');}
$item61q->appendChild($title_string61q);
$item59q->appendChild($item61q);

$title_string62q= $dom->createElement("gco:CharacterString");
$title_string62q->appendChild($dom->createTextNode($cust_adarea));
$item62q= $dom->createElement("gmd:administrativeArea");
if ($cust_adarea==''){$item62q->setAttribute('gco:nilReason','missing');}
$item62q->appendChild($title_string62q);
$item59q->appendChild($item62q);

$title_string63q= $dom->createElement("gco:CharacterString");
$title_string63q->appendChild($dom->createTextNode($cust_pcode));
$item63q= $dom->createElement("gmd:postalCode");
if ($cust_pcode==''){$item63q->setAttribute('gco:nilReason','missing');}
$item63q->appendChild($title_string63q);
$item59q->appendChild($item63q);

$title_string64q= $dom->createElement("gco:CharacterString");
$title_string64q->appendChild($dom->createTextNode($cust_country));
$item64q= $dom->createElement("gmd:country");
if ($cust_country==''){$item64q->setAttribute('gco:nilReason','missing');}
$item64q->appendChild($title_string64q);
$item59q->appendChild($item64q);

$title_string65q= $dom->createElement("gco:CharacterString");
$title_string65q->appendChild($dom->createTextNode($cust_email));
$item65q= $dom->createElement("gmd:electronicMailAddress");
if ($cust_email==''){$item65q->setAttribute('gco:nilReason','missing');}
$item65q->appendChild($title_string65q);
$item59q->appendChild($item65q);

$title_string43gq= $dom->createElement("gmd:CI_RoleCode");
$title_string43gq->appendChild($dom->createTextNode('custodian'));
$item43gq= $dom->createElement("gmd:role");
$item43gq->appendChild($title_string43gq);
$title_string43gq->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gq->setAttribute('codeListValue','custodian');
$item48q->appendChild($item43gq);
}






















if ($owner_iname=='' and $owner_oname==''){
}
else {
$item47p= $dom->createElement("gmd:pointOfContact");
$item36->appendChild($item47p);

$item48p= $dom->createElement("gmd:CI_ResponsibleParty");
$item47p->appendChild($item48p);

$title_string49p= $dom->createElement("gco:CharacterString");
$title_string49p->appendChild($dom->createTextNode($owner_iname));
$item49p= $dom->createElement("gmd:individualName");
if ($owner_iname==''){$item49p->setAttribute('gco:nilReason','missing');}
$item49p->appendChild($title_string49p);
$item48p->appendChild($item49p);

$title_string50p= $dom->createElement("gco:CharacterString");
$title_string50p->appendChild($dom->createTextNode($owner_oname));
$item50p= $dom->createElement("gmd:organisationName");
if ($owner_oname==''){$item50p->setAttribute('gco:nilReason','missing');}
$item50p->appendChild($title_string50p);
$item48p->appendChild($item50p);

$title_string51p= $dom->createElement("gco:CharacterString");
$title_string51p->appendChild($dom->createTextNode($owner_pname));
$item51p= $dom->createElement("gmd:positionName");
if ($owner_pname==''){$item51p->setAttribute('gco:nilReason','missing');}
$item51p->appendChild($title_string51p);
$item48p->appendChild($item51p);

$item52p= $dom->createElement("gmd:contactInfo");
$item48p->appendChild($item52p);

$item53p= $dom->createElement("gmd:CI_Contact");
$item52p->appendChild($item53p);

$item54p= $dom->createElement("gmd:phone");
$item53p->appendChild($item54p);

$item55p= $dom->createElement("gmd:CI_Telephone");
$item54p->appendChild($item55p);

$title_string56p= $dom->createElement("gco:CharacterString");
$title_string56p->appendChild($dom->createTextNode($owner_phone));
$item56p= $dom->createElement("gmd:voice");
if ($owner_phone==''){$item56p->setAttribute('gco:nilReason','missing');}
$item56p->appendChild($title_string56p);
$item55p->appendChild($item56p);

$title_string57p= $dom->createElement("gco:CharacterString");
$title_string57p->appendChild($dom->createTextNode($owner_fax));
$item57p= $dom->createElement("gmd:facsimile");
if ($owner_fax==''){$item57p->setAttribute('gco:nilReason','missing');}
$item57p->appendChild($title_string57p);
$item55p->appendChild($item57p);


$item58p= $dom->createElement("gmd:address");
$item53p->appendChild($item58p);

$item59p= $dom->createElement("gmd:CI_Address");
$item58p->appendChild($item59p);


$title_string60p= $dom->createElement("gco:CharacterString");
$title_string60p->appendChild($dom->createTextNode($owner_dpoint));
$item60p= $dom->createElement("gmd:deliveryPoint");
if ($owner_dpoint==''){$item60p->setAttribute('gco:nilReason','missing');}
$item60p->appendChild($title_string60p);
$item59p->appendChild($item60p);

$title_string61p= $dom->createElement("gco:CharacterString");
$title_string61p->appendChild($dom->createTextNode($owner_city));
$item61p= $dom->createElement("gmd:city");
if ($owner_city==''){$item61p->setAttribute('gco:nilReason','missing');}
$item61p->appendChild($title_string61p);
$item59p->appendChild($item61p);

$title_string62p= $dom->createElement("gco:CharacterString");
$title_string62p->appendChild($dom->createTextNode($owner_adarea));
$item62p= $dom->createElement("gmd:administrativeArea");
if ($owner_adarea==''){$item62p->setAttribute('gco:nilReason','missing');}
$item62p->appendChild($title_string62p);
$item59p->appendChild($item62p);

$title_string63p= $dom->createElement("gco:CharacterString");
$title_string63p->appendChild($dom->createTextNode($owner_pcode));
$item63p= $dom->createElement("gmd:postalCode");
if ($owner_pcode==''){$item63p->setAttribute('gco:nilReason','missing');}
$item63p->appendChild($title_string63p);
$item59p->appendChild($item63p);

$title_string64p= $dom->createElement("gco:CharacterString");
$title_string64p->appendChild($dom->createTextNode($owner_country));
$item64p= $dom->createElement("gmd:country");
if ($owner_country==''){$item64p->setAttribute('gco:nilReason','missing');}
$item64p->appendChild($title_string64p);
$item59p->appendChild($item64p);

$title_string65p= $dom->createElement("gco:CharacterString");
$title_string65p->appendChild($dom->createTextNode($owner_email));
$item65p= $dom->createElement("gmd:electronicMailAddress");
if ($owner_email==''){$item65p->setAttribute('gco:nilReason','missing');}
$item65p->appendChild($title_string65p);
$item59p->appendChild($item65p);

$title_string43gp= $dom->createElement("gmd:CI_RoleCode");
$title_string43gp->appendChild($dom->createTextNode('owner'));
$item43gp= $dom->createElement("gmd:role");
$item43gp->appendChild($title_string43gp);
$title_string43gp->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gp->setAttribute('codeListValue','owner');
$item48p->appendChild($item43gp);
}









if ($owner2_iname==$owner_iname){
}
else {


if ($owner2_iname=='' and $owner2_oname==''){
}
else {
$item47m1= $dom->createElement("gmd:pointOfContact");
$item36->appendChild($item47m1);

$item48m1= $dom->createElement("gmd:CI_ResponsibleParty");
$item47m1->appendChild($item48m1);

$title_string49m1= $dom->createElement("gco:CharacterString");
$title_string49m1->appendChild($dom->createTextNode($owner2_iname));
$item49m1= $dom->createElement("gmd:individualName");
if ($owner2_iname==''){$item49m1->setAttribute('gco:nilReason','missing');}
$item49m1->appendChild($title_string49m1);
$item48m1->appendChild($item49m1);

$title_string50m1= $dom->createElement("gco:CharacterString");
$title_string50m1->appendChild($dom->createTextNode($owner2_oname));
$item50m1= $dom->createElement("gmd:organisationName");
if ($owner2_oname==''){$item50m1->setAttribute('gco:nilReason','missing');}
$item50m1->appendChild($title_string50m1);
$item48m1->appendChild($item50m1);

$title_string51m1= $dom->createElement("gco:CharacterString");
$title_string51m1->appendChild($dom->createTextNode($owner2_pname));
$item51m1= $dom->createElement("gmd:positionName");
if ($owner2_pname==''){$item51m1->setAttribute('gco:nilReason','missing');}
$item51m1->appendChild($title_string51m1);
$item48m1->appendChild($item51m1);

$item52m1= $dom->createElement("gmd:contactInfo");
$item48m1->appendChild($item52m1);

$item53m1= $dom->createElement("gmd:CI_Contact");
$item52m1->appendChild($item53m1);

$item54m1= $dom->createElement("gmd:phone");
$item53m1->appendChild($item54m1);

$item55m1= $dom->createElement("gmd:CI_Telephone");
$item54m1->appendChild($item55m1);

$title_string56m1= $dom->createElement("gco:CharacterString");
$title_string56m1->appendChild($dom->createTextNode($owner2_phone));
$item56m1= $dom->createElement("gmd:voice");
if ($owner2_phone==''){$item56m1->setAttribute('gco:nilReason','missing');}
$item56m1->appendChild($title_string56m1);
$item55m1->appendChild($item56m1);

$title_string57m1= $dom->createElement("gco:CharacterString");
$title_string57m1->appendChild($dom->createTextNode($owner2_fax));
$item57m1= $dom->createElement("gmd:facsimile");
if ($owner2_fax==''){$item57m1->setAttribute('gco:nilReason','missing');}
$item57m1->appendChild($title_string57m1);
$item55m1->appendChild($item57m1);


$item58m1= $dom->createElement("gmd:address");
$item53m1->appendChild($item58m1);

$item59m1= $dom->createElement("gmd:CI_Address");
$item58m1->appendChild($item59m1);


$title_string60m1= $dom->createElement("gco:CharacterString");
$title_string60m1->appendChild($dom->createTextNode($owner2_dpoint));
$item60m1= $dom->createElement("gmd:deliveryPoint");
if ($owner2_dpoint==''){$item60m1->setAttribute('gco:nilReason','missing');}
$item60m1->appendChild($title_string60m1);
$item59m1->appendChild($item60m1);

$title_string61m1= $dom->createElement("gco:CharacterString");
$title_string61m1->appendChild($dom->createTextNode($owner2_city));
$item61m1= $dom->createElement("gmd:city");
if ($owner2_city==''){$item61m1->setAttribute('gco:nilReason','missing');}
$item61m1->appendChild($title_string61m1);
$item59m1->appendChild($item61m1);

$title_string62m1= $dom->createElement("gco:CharacterString");
$title_string62m1->appendChild($dom->createTextNode($owner2_adarea));
$item62m1= $dom->createElement("gmd:administrativeArea");
if ($owner2_adarea==''){$item62m1->setAttribute('gco:nilReason','missing');}
$item62m1->appendChild($title_string62m1);
$item59m1->appendChild($item62m1);

$title_string63m1= $dom->createElement("gco:CharacterString");
$title_string63m1->appendChild($dom->createTextNode($owner2_pcode));
$item63m1= $dom->createElement("gmd:postalCode");
if ($owner2_pcode==''){$item63m1->setAttribute('gco:nilReason','missing');}
$item63m1->appendChild($title_string63m1);
$item59m1->appendChild($item63m1);

$title_string64m1= $dom->createElement("gco:CharacterString");
$title_string64m1->appendChild($dom->createTextNode($owner2_country));
$item64m1= $dom->createElement("gmd:country");
if ($owner2_country==''){$item64m1->setAttribute('gco:nilReason','missing');}
$item64m1->appendChild($title_string64m1);
$item59m1->appendChild($item64m1);

$title_string65m1= $dom->createElement("gco:CharacterString");
$title_string65m1->appendChild($dom->createTextNode($owner2_email));
$item65m1= $dom->createElement("gmd:electronicMailAddress");
if ($owner2_email==''){$item65m1->setAttribute('gco:nilReason','missing');}
$item65m1->appendChild($title_string65m1);
$item59m1->appendChild($item65m1);

$title_string43gm1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gm1->appendChild($dom->createTextNode('owner'));
$item43gm1= $dom->createElement("gmd:role");
$item43gm1->appendChild($title_string43gm1);
$title_string43gm1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gm1->setAttribute('codeListValue','owner');
$item48m1->appendChild($item43gm1);
}
}







if ($media_iname==$owner_iname  or $media_iname=$owner2_iname){
}
else {






if ($media_iname=='' and $media_oname==''){
}
else {
$item47n1= $dom->createElement("gmd:pointOfContact");
$item36->appendChild($item47n1);

$item48n1= $dom->createElement("gmd:CI_ResponsibleParty");
$item47n1->appendChild($item48n1);

$title_string49n1= $dom->createElement("gco:CharacterString");
$title_string49n1->appendChild($dom->createTextNode($media_iname));
$item49n1= $dom->createElement("gmd:individualName");
if ($media_iname==''){$item49n1->setAttribute('gco:nilReason','missing');}
$item49n1->appendChild($title_string49n1);
$item48n1->appendChild($item49n1);

$title_string50n1= $dom->createElement("gco:CharacterString");
$title_string50n1->appendChild($dom->createTextNode($media_oname));
$item50n1= $dom->createElement("gmd:organisationName");
if ($media_oname==''){$item50n1->setAttribute('gco:nilReason','missing');}
$item50n1->appendChild($title_string50n1);
$item48n1->appendChild($item50n1);

$title_string51n1= $dom->createElement("gco:CharacterString");
$title_string51n1->appendChild($dom->createTextNode($media_pname));
$item51n1= $dom->createElement("gmd:positionName");
if ($media_pname==''){$item51n1->setAttribute('gco:nilReason','missing');}
$item51n1->appendChild($title_string51n1);
$item48n1->appendChild($item51n1);

$item52n1= $dom->createElement("gmd:contactInfo");
$item48n1->appendChild($item52n1);

$item53n1= $dom->createElement("gmd:CI_Contact");
$item52n1->appendChild($item53n1);

$item54n1= $dom->createElement("gmd:phone");
$item53n1->appendChild($item54n1);

$item55n1= $dom->createElement("gmd:CI_Telephone");
$item54n1->appendChild($item55n1);

$title_string56n1= $dom->createElement("gco:CharacterString");
$title_string56n1->appendChild($dom->createTextNode($media_phone));
$item56n1= $dom->createElement("gmd:voice");
if ($media_phone==''){$item56n1->setAttribute('gco:nilReason','missing');}
$item56n1->appendChild($title_string56n1);
$item55n1->appendChild($item56n1);

$title_string57n1= $dom->createElement("gco:CharacterString");
$title_string57n1->appendChild($dom->createTextNode($media_fax));
$item57n1= $dom->createElement("gmd:facsimile");
if ($media_fax==''){$item57n1->setAttribute('gco:nilReason','missing');}
$item57n1->appendChild($title_string57n1);
$item55n1->appendChild($item57n1);


$item58n1= $dom->createElement("gmd:address");
$item53n1->appendChild($item58n1);

$item59n1= $dom->createElement("gmd:CI_Address");
$item58n1->appendChild($item59n1);


$title_string60n1= $dom->createElement("gco:CharacterString");
$title_string60n1->appendChild($dom->createTextNode($media_dpoint));
$item60n1= $dom->createElement("gmd:deliveryPoint");
if ($media_dpoint==''){$item60n1->setAttribute('gco:nilReason','missing');}
$item60n1->appendChild($title_string60n1);
$item59n1->appendChild($item60n1);

$title_string61n1= $dom->createElement("gco:CharacterString");
$title_string61n1->appendChild($dom->createTextNode($media_city));
$item61n1= $dom->createElement("gmd:city");
if ($media_city==''){$item61n1->setAttribute('gco:nilReason','missing');}
$item61n1->appendChild($title_string61n1);
$item59n1->appendChild($item61n1);

$title_string62n1= $dom->createElement("gco:CharacterString");
$title_string62n1->appendChild($dom->createTextNode($media_adarea));
$item62n1= $dom->createElement("gmd:administrativeArea");
if ($media_adarea==''){$item62n1->setAttribute('gco:nilReason','missing');}
$item62n1->appendChild($title_string62n1);
$item59n1->appendChild($item62n1);

$title_string63n1= $dom->createElement("gco:CharacterString");
$title_string63n1->appendChild($dom->createTextNode($media_pcode));
$item63n1= $dom->createElement("gmd:postalCode");
if ($media_pcode==''){$item63n1->setAttribute('gco:nilReason','missing');}
$item63n1->appendChild($title_string63n1);
$item59n1->appendChild($item63n1);

$title_string64n1= $dom->createElement("gco:CharacterString");
$title_string64n1->appendChild($dom->createTextNode($media_country));
$item64n1= $dom->createElement("gmd:country");
if ($media_country==''){$item64n1->setAttribute('gco:nilReason','missing');}
$item64n1->appendChild($title_string64n1);
$item59n1->appendChild($item64n1);

$title_string65n1= $dom->createElement("gco:CharacterString");
$title_string65n1->appendChild($dom->createTextNode($media_email));
$item65n1= $dom->createElement("gmd:electronicMailAddress");
if ($media_email==''){$item65n1->setAttribute('gco:nilReason','missing');}
$item65n1->appendChild($title_string65n1);
$item59n1->appendChild($item65n1);

$title_string43gn1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gn1->appendChild($dom->createTextNode('media'));
$item43gn1= $dom->createElement("gmd:role");
$item43gn1->appendChild($title_string43gn1);
$title_string43gn1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gn1->setAttribute('codeListValue','media');
$item48n1->appendChild($item43gn1);
}

}
















 
/*
$item71a1= $dom->createElement("gmd:resourceSpecificUsage");
$item36->appendChild($item71a1);

$item71b1= $dom->createElement("gmd:MD_Usage");
$item71a1->appendChild($item71b1);

 
$title_string71c_41= $dom->createElement("gco:CharacterString");
$title_string71c_41->appendChild($dom->createTextNode($retentia1));
$item71c_41= $dom->createElement("gmd:maintenanceNote");
if ($retentia1==''){$item71c_41->setAttribute('gco:nilReason','missing');}
$item71c_41->appendChild($title_string71c_41);
$item71b1->appendChild($item71c_41);
*/


 





 


$item71a= $dom->createElement("gmd:resourceMaintenance");
$item36->appendChild($item71a);

$item71b= $dom->createElement("gmd:MD_MaintenanceInformation");
$item71a->appendChild($item71b);





$title_string71c= $dom->createElement("gmd:MD_MaintenanceFrequencyCode");
$title_string71c->appendChild($dom->createTextNode($maintenance_process1));
$item71c= $dom->createElement("gmd:maintenanceAndUpdateFrequency");
$item71c->appendChild($title_string71c);
$title_string71c->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_MaintenanceFrequencyCode');
$title_string71c->setAttribute('codeListValue',$maintenance_process1);
$item71b->appendChild($item71c);

/*
$title_string71c_4= $dom->createElement("gco:CharacterString");
$title_string71c_4->appendChild($dom->createTextNode($backup_recovery_plan1));
$item71c_4= $dom->createElement("gmd:maintenanceNote");
if ($backup_recovery_plan1==''){$item71c_4->setAttribute('gco:nilReason','missing');}
$item71c_4->appendChild($title_string71c_4);
$item71b->appendChild($item71c_4);
*/




$item72= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72);

$item73= $dom->createElement("gmd:MD_Keywords");
$item72->appendChild($item73);

$title_string74= $dom->createElement("gco:CharacterString");
$title_string74->appendChild($dom->createTextNode($keyword1));
$item74= $dom->createElement("gmd:keyword");
if ($keyword1==''){$item74->setAttribute('gco:nilReason','missing');}
$item74->appendChild($title_string74);
$item73->appendChild($item74);






$item72a= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72a);

$item73a= $dom->createElement("gmd:MD_Keywords");
$item72a->appendChild($item73a);

$title_string74a= $dom->createElement("gco:CharacterString");
$title_string74a->appendChild($dom->createTextNode($keyword2));
$item74a= $dom->createElement("gmd:keyword");
if ($keyword2==''){$item74a->setAttribute('gco:nilReason','missing');}
$item74a->appendChild($title_string74a);
$item73a->appendChild($item74a);


$item72b= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72b);

$item73b= $dom->createElement("gmd:MD_Keywords");
$item72b->appendChild($item73b);

$title_string74b= $dom->createElement("gco:CharacterString");
$title_string74b->appendChild($dom->createTextNode($keyword3));
$item74b= $dom->createElement("gmd:keyword");
if ($keyword3==''){$item74b->setAttribute('gco:nilReason','missing');}
$item74b->appendChild($title_string74b);
$item73b->appendChild($item74b);





$item72c= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72c);

$item73c= $dom->createElement("gmd:MD_Keywords");
$item72c->appendChild($item73c);

$title_string74c= $dom->createElement("gco:CharacterString");
$title_string74c->appendChild($dom->createTextNode($keyword4));
$item74c= $dom->createElement("gmd:keyword");
if ($keyword4==''){$item74c->setAttribute('gco:nilReason','missing');}
$item74c->appendChild($title_string74c);
$item73c->appendChild($item74c);




$item72d= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72d);

$item73d= $dom->createElement("gmd:MD_Keywords");
$item72d->appendChild($item73d);

$title_string74d= $dom->createElement("gco:CharacterString");
$title_string74d->appendChild($dom->createTextNode($keyword5));
$item74d= $dom->createElement("gmd:keyword");
if ($keyword5==''){$item74d->setAttribute('gco:nilReason','missing');}
$item74d->appendChild($title_string74d);
$item73d->appendChild($item74d);















$item81= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item81);

$item82= $dom->createElement("gmd:MD_LegalConstraints");
$item81->appendChild($item82);

$title_string83= $dom->createElement("gco:CharacterString");
$title_string83->appendChild($dom->createTextNode($use_limitations1));
$item83= $dom->createElement("gmd:useLimitation");
if ($use_limitations1==''){$item83->setAttribute('gco:nilReason','missing');}
$item83->appendChild($title_string83);
$item82->appendChild($item83);

$title_string84= $dom->createElement("gmd:MD_RestrictionCode");
$title_string84->appendChild($dom->createTextNode($access_constraints1));
$item84= $dom->createElement("gmd:accessConstraints");
$item84->appendChild($title_string84);
$title_string84->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode');
$title_string84->setAttribute('codeListValue',$access_constraints1);
$item82->appendChild($item84);

$title_string85= $dom->createElement("gco:CharacterString");
$title_string85->appendChild($dom->createTextNode($o_constraints1));
$item85= $dom->createElement("gmd:otherConstraints");
if ($o_constraints1==''){$item85->setAttribute('gco:nilReason','missing');}
$item85->appendChild($title_string85);
$item82->appendChild($item85);



$item86= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item86);

$item87= $dom->createElement("gmd:MD_LegalConstraints");
$item86->appendChild($item87);

$title_string88= $dom->createElement("gmd:MD_RestrictionCode");
$title_string88->appendChild($dom->createTextNode($use_constraints1));
$item88= $dom->createElement("gmd:useConstraints");
$item88->appendChild($title_string88);
$title_string88->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode');
$title_string88->setAttribute('codeListValue',$use_constraints1);
$item87->appendChild($item88);

$title_string89a= $dom->createElement("gco:CharacterString");
$title_string89a->appendChild($dom->createTextNode($o_constraints2));
$item89a= $dom->createElement("gmd:otherConstraints");
if ($o_constraints2==''){$item89a->setAttribute('gco:nilReason','missing');}
$item89a->appendChild($title_string89a);
$item87->appendChild($item89a);




$item86a= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item86a);

$item87a= $dom->createElement("gmd:MD_SecurityConstraints");
$item86a->appendChild($item87a);

$title_string206aaa= $dom->createElement("gmd:MD_ClassificationCode");
$title_string206aaa->appendChild($dom->createTextNode($c_classification1));
$item206aaa= $dom->createElement("gmd:classification");
$item206aaa->appendChild($title_string206aaa);
$title_string206aaa->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_ClassificationCode');
$title_string206aaa->setAttribute('codeListValue',$c_classification1);
$item87a->appendChild($item206aaa);















$item71a11= $dom->createElement("gmd:aggregationInfo");
$item36->appendChild($item71a11);

$item71b11= $dom->createElement("gmd:MD_AggregateInformation");
$item71a11->appendChild($item71b11);


$item71b11a= $dom->createElement("gmd:aggregateDataSetIdentifier");
$item71b11->appendChild($item71b11a);

$item71b11a1= $dom->createElement("gmd:MD_Identifier");
$item71b11a->appendChild($item71b11a1);

$title_stringzz1= $dom->createElement("gco:CharacterString");
$title_stringzz1->appendChild($dom->createTextNode('program'));
$itemzz1= $dom->createElement("gmd:code");
 $itemzz1->appendChild($title_stringzz1);
$item71b11a1->appendChild($itemzz1);


$title_string71c1a= $dom->createElement("gmd:DS_AssociationTypeCode");
$title_string71c1a->appendChild($dom->createTextNode('crossReference'));
$item71c1a= $dom->createElement("gmd:associationType");
$item71c1a->appendChild($title_string71c1a);
$title_string71c1a->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#DS_AssociationTypeCode');
$title_string71c1a->setAttribute('codeListValue','crossReference');
$item71b11->appendChild($item71c1a);
 
$title_string71c1= $dom->createElement("gmd:DS_InitiativeTypeCode");
$title_string71c1->appendChild($dom->createTextNode('program'));
$item71c1= $dom->createElement("gmd:initiativeType");
$item71c1->appendChild($title_string71c1);
$title_string71c1->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_InitiativeTypeCode');
$title_string71c1->setAttribute('codeListValue','program');
$item71b11->appendChild($item71c1);







$item71a112= $dom->createElement("gmd:aggregationInfo");
$item36->appendChild($item71a112);

$item71b112= $dom->createElement("gmd:MD_AggregateInformation");
$item71a112->appendChild($item71b112);

 
 
$item71b11a3= $dom->createElement("gmd:aggregateDataSetIdentifier");
$item71b112->appendChild($item71b11a3);

$item71b11a4= $dom->createElement("gmd:MD_Identifier");
$item71b11a3->appendChild($item71b11a4);

$title_stringz1z1= $dom->createElement("gco:CharacterString");
$title_stringz1z1->appendChild($dom->createTextNode('process'));
$itemz1z1= $dom->createElement("gmd:code");
$itemz1z1->appendChild($title_stringz1z1);
$item71b11a4->appendChild($itemz1z1);
 
 
 
 
$title_string71c1b= $dom->createElement("gmd:DS_AssociationTypeCode");
$title_string71c1b->appendChild($dom->createTextNode('crossReference'));
$item71c1b= $dom->createElement("gmd:associationType");
$item71c1b->appendChild($title_string71c1b);
$title_string71c1b->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#DS_AssociationTypeCode');
$title_string71c1b->setAttribute('codeListValue','crossReference');
$item71b112->appendChild($item71c1b);


$title_string71c12= $dom->createElement("gmd:DS_InitiativeTypeCode");
$title_string71c12->appendChild($dom->createTextNode('process'));
$item71c12= $dom->createElement("gmd:initiativeType");
$item71c12->appendChild($title_string71c12);
$title_string71c12->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_InitiativeTypeCode');
$title_string71c12->setAttribute('codeListValue','process');
$item71b112->appendChild($item71c12);












$title_string97= $dom->createElement("gco:CharacterString");
$title_string97->appendChild($dom->createTextNode($language));
$item97= $dom->createElement("gmd:language");
if ($language==''){$item97->setAttribute('gco:nilReason','missing');}
$item97->appendChild($title_string97);
$item36->appendChild($item97);


  
$title_string99= $dom->createElement("MD_TopicCategoryCode");
$title_string99->appendChild($dom->createTextNode('environment'));
$item99= $dom->createElement("gmd:topicCategory");
$item99->appendChild($title_string99);
//$title_string99->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_TopicCategoryCode');
//$title_string99->setAttribute('codeListValue','environment'); 
$item36->appendChild($item99);

$title_string99a= $dom->createElement("gco:CharacterString");
$title_string99a->appendChild($dom->createTextNode($tools1));
$item99a= $dom->createElement("gmd:environmentDescription");
if ($tools1==''){$item99a->setAttribute('gco:nilReason','missing');}
$item99a->appendChild($title_string99a);
$item36->appendChild($item99a);








$item100= $dom->createElement("gmd:extent");
$item36->appendChild($item100);


$item101= $dom->createElement("gmd:EX_Extent");
$item100->appendChild($item101);

$item102= $dom->createElement("gmd:geographicElement");
$item101->appendChild($item102);

$item103= $dom->createElement("gmd:EX_GeographicBoundingBox");
$item102->appendChild($item103);




if ($west_value==''){
$item105= $dom->createElement("gmd:westBoundLongitude");
$item105->setAttribute('gco:nilReason','missing');
$item103->appendChild($item105);
}else {
$title_string105= $dom->createElement("gco:Decimal");
$title_string105->appendChild($dom->createTextNode($west_value));
$item105= $dom->createElement("gmd:westBoundLongitude");
$item105->appendChild($title_string105);
$item103->appendChild($item105);
}




if ($east_value==''){
$item106= $dom->createElement("gmd:eastBoundLongitude");
$item106->setAttribute('gco:nilReason','missing');
$item103->appendChild($item106);
}else {
$title_string106= $dom->createElement("gco:Decimal");
$title_string106->appendChild($dom->createTextNode($east_value));
$item106= $dom->createElement("gmd:eastBoundLongitude");
 $item106->appendChild($title_string106);
$item103->appendChild($item106);
}





 if ($south_value==''){
$item107= $dom->createElement("gmd:southBoundLatitude");
$item107->setAttribute('gco:nilReason','missing');
$item103->appendChild($item107);
}else {
$title_string107= $dom->createElement("gco:Decimal");
$title_string107->appendChild($dom->createTextNode($south_value));
$item107= $dom->createElement("gmd:southBoundLatitude");
 $item107->appendChild($title_string107);
$item103->appendChild($item107);
}

 


 if ($north_value==''){
$item108= $dom->createElement("gmd:northBoundLatitude");
$item108->setAttribute('gco:nilReason','missing');
$item103->appendChild($item108);
}else {
 $title_string108= $dom->createElement("gco:Decimal");
$title_string108->appendChild($dom->createTextNode($north_value));
$item108= $dom->createElement("gmd:northBoundLatitude");
 $item108->appendChild($title_string108);
$item103->appendChild($item108);

}





$item108a= $dom->createElement("gmd:extent");
$item36->appendChild($item108a);


$item108b= $dom->createElement("gmd:EX_Extent");
$item108a->appendChild($item108b);

  

$item109= $dom->createElement("gmd:temporalElement");
$item108b->appendChild($item109);

$item110= $dom->createElement("gmd:EX_TemporalExtent");
$item109->appendChild($item110);

$item111= $dom->createElement("gmd:extent");
$item110->appendChild($item111);

$item112= $dom->createElement("gml:TimePeriod");
$item112->setAttribute('gml:id','tp1');
$item111->appendChild($item112);

  

$item_child1=$dom->createTextNode($bposition);
$item113= $dom->createElement("gml:beginPosition");
$item113->appendChild($item_child1);
$item112->appendChild($item113);
 

$item_child2=$dom->createTextNode($eposition);
$item114= $dom->createElement("gml:endPosition");
$item114->appendChild($item_child2);
$item112->appendChild($item114);





$title_string1_1= $dom->createElement("gco:CharacterString");
$title_string1_1->appendChild($dom->createTextNode($flexibility1));
$item1_1= $dom->createElement("gmd:supplementalInformation");
if ($flexibility1==''){$item1_1->setAttribute('gco:nilReason','missing');}
$item1_1->appendChild($title_string1_1);
$item36->appendChild($item1_1);






$item124= $dom->createElement("gmd:distributionInfo");
$main_page->appendChild($item124);

$item125= $dom->createElement("gmd:MD_Distribution");
$item124->appendChild($item125);




 
$item126= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126);



$item127= $dom->createElement("gmd:MD_Format");
$item126->appendChild($item127);

$title_string128= $dom->createElement("gco:CharacterString");
$title_string128->appendChild($dom->createTextNode($fname1));
$item128= $dom->createElement("gmd:name");
if ($fname1==''){$item128->setAttribute('gco:nilReason','missing');}
$item128->appendChild($title_string128);
$item127->appendChild($item128);

$title_string129= $dom->createElement("gco:CharacterString");
$title_string129->appendChild($dom->createTextNode($fver1));
$item129= $dom->createElement("gmd:version");
if ($fver1==''){$item129->setAttribute('gco:nilReason','missing');}
$item129->appendChild($title_string129);
$item127->appendChild($item129);





$item126f= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126f);



$item127f= $dom->createElement("gmd:MD_Format");
$item126f->appendChild($item127f);

$title_string128f= $dom->createElement("gco:CharacterString");
$title_string128f->appendChild($dom->createTextNode($fname2));
$item128f= $dom->createElement("gmd:name");
if ($fname2==''){$item128f->setAttribute('gco:nilReason','missing');}
$item128f->appendChild($title_string128f);
$item127f->appendChild($item128f);

$title_string129f= $dom->createElement("gco:CharacterString");
$title_string129f->appendChild($dom->createTextNode($fver2));
$item129f= $dom->createElement("gmd:version");
if ($fver2==''){$item129f->setAttribute('gco:nilReason','missing');}
$item129f->appendChild($title_string129f);
$item127f->appendChild($item129f);




$item126g= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126g);



$item127g= $dom->createElement("gmd:MD_Format");
$item126g->appendChild($item127g);

$title_string128g= $dom->createElement("gco:CharacterString");
$title_string128g->appendChild($dom->createTextNode($fname3));
$item128g= $dom->createElement("gmd:name");
if ($fname3==''){$item128g->setAttribute('gco:nilReason','missing');}
$item128g->appendChild($title_string128g);
$item127g->appendChild($item128g);

$title_string129g= $dom->createElement("gco:CharacterString");
$title_string129g->appendChild($dom->createTextNode($fver3));
$item129g= $dom->createElement("gmd:version");
if ($fver3==''){$item129g->setAttribute('gco:nilReason','missing');}
$item129g->appendChild($title_string129g);
$item127g->appendChild($item129g);



$item126h= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126h);



$item127h= $dom->createElement("gmd:MD_Format");
$item126h->appendChild($item127h);

$title_string128h= $dom->createElement("gco:CharacterString");
$title_string128h->appendChild($dom->createTextNode($fname4));
$item128h= $dom->createElement("gmd:name");
if ($fname4==''){$item128h->setAttribute('gco:nilReason','missing');}
$item128h->appendChild($title_string128h);
$item127h->appendChild($item128h);

$title_string129h= $dom->createElement("gco:CharacterString");
$title_string129h->appendChild($dom->createTextNode($fver4));
$item129h= $dom->createElement("gmd:version");
if ($fver4==''){$item129h->setAttribute('gco:nilReason','missing');}
$item129h->appendChild($title_string129h);
$item127h->appendChild($item129h);



$item126k= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126k);



$item127k= $dom->createElement("gmd:MD_Format");
$item126k->appendChild($item127k);

$title_string128k= $dom->createElement("gco:CharacterString");
$title_string128k->appendChild($dom->createTextNode($fname5));
$item128k= $dom->createElement("gmd:name");
if ($fname5==''){$item128k->setAttribute('gco:nilReason','missing');}
$item128k->appendChild($title_string128k);
$item127k->appendChild($item128k);

$title_string129k= $dom->createElement("gco:CharacterString");
$title_string129k->appendChild($dom->createTextNode($fver5));
$item129k= $dom->createElement("gmd:version");
if ($fver5==''){$item129k->setAttribute('gco:nilReason','missing');}
$item129k->appendChild($title_string129k);
$item127k->appendChild($item129k);



/*


$item142= $dom->createElement("gmd:distributor");
$item125->appendChild($item142);

$item143= $dom->createElement("gmd:MD_Distributor");
$item142->appendChild($item143);


$item162= $dom->createElement("gmd:distributorTransferOptions");
$item143->appendChild($item162);

$item163= $dom->createElement("gmd:MD_DigitalTransferOptions");
$item162->appendChild($item163);

$item164= $dom->createElement("gmd:offLine");
$item163->appendChild($item164);

$item165= $dom->createElement("gmd:MD_Medium");
$item164->appendChild($item165);

$title_string166= $dom->createElement("gco:CharacterString");
$title_string166->appendChild($dom->createTextNode($documentation1));
$item166= $dom->createElement("gmd:mediumNote");
if ($documentation1==''){$item166->setAttribute('gco:nilReason','missing');}
$item166->appendChild($title_string166);
$item165->appendChild($item166);


*/

$item167= $dom->createElement("gmd:transferOptions");
$item125->appendChild($item167);

$item168= $dom->createElement("gmd:MD_DigitalTransferOptions");
$item167->appendChild($item168);






$item169m1= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m1);

$item170m1= $dom->createElement("gmd:CI_OnlineResource");
$item169m1->appendChild($item170m1);

$title_string171m1= $dom->createElement("gmd:URL");
$title_string171m1->appendChild($dom->createTextNode($services1));
$item171m1= $dom->createElement("gmd:linkage");
$item171m1->appendChild($title_string171m1);
$item170m1->appendChild($item171m1);

$title_string174m1= $dom->createElement("gco:CharacterString");
$title_string174m1->appendChild($dom->createTextNode($services1_descp));
$item174m1= $dom->createElement("gmd:description");
if ($services1_descp==''){$item174m1->setAttribute('gco:nilReason','missing');}
$item174m1->appendChild($title_string174m1);
$item170m1->appendChild($item174m1);



$item169m2= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m2);

$item170m2= $dom->createElement("gmd:CI_OnlineResource");
$item169m2->appendChild($item170m2);

$title_string171m2= $dom->createElement("gmd:URL");
$title_string171m2->appendChild($dom->createTextNode($catalog_registry1));
$item171m2= $dom->createElement("gmd:linkage");
$item171m2->appendChild($title_string171m2);
$item170m2->appendChild($item171m2);

$title_string174m2= $dom->createElement("gco:CharacterString");
$title_string174m2->appendChild($dom->createTextNode($catalog_registry1_descp));
$item174m2= $dom->createElement("gmd:description");
if ($catalog_registry1_descp==''){$item174m2->setAttribute('gco:nilReason','missing');}
$item174m2->appendChild($title_string174m2);
$item170m2->appendChild($item174m2);



$item169m3= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m3);

$item170m3= $dom->createElement("gmd:CI_OnlineResource");
$item169m3->appendChild($item170m3);

$title_string171m3= $dom->createElement("gmd:URL");
$title_string171m3->appendChild($dom->createTextNode($fed_catalog1));
$item171m3= $dom->createElement("gmd:linkage");
$item171m3->appendChild($title_string171m3);
$item170m3->appendChild($item171m3);

$title_string174m3= $dom->createElement("gco:CharacterString");
$title_string174m3->appendChild($dom->createTextNode($fed_catalog1_descp));
$item174m3= $dom->createElement("gmd:description");
if ($fed_catalog1_descp==''){$item174m3->setAttribute('gco:nilReason','missing');}
$item174m3->appendChild($title_string174m3);
$item170m3->appendChild($item174m3);



$item169m4= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m4);

$item170m4= $dom->createElement("gmd:CI_OnlineResource");
$item169m4->appendChild($item170m4);

$title_string171m4= $dom->createElement("gmd:URL");
$title_string171m4->appendChild($dom->createTextNode($fed_catalog2));
$item171m4= $dom->createElement("gmd:linkage");
$item171m4->appendChild($title_string171m4);
$item170m4->appendChild($item171m4);

$title_string174m4= $dom->createElement("gco:CharacterString");
$title_string174m4->appendChild($dom->createTextNode($fed_catalog2_descp));
$item174m4= $dom->createElement("gmd:description");
if ($fed_catalog2_descp==''){$item174m4->setAttribute('gco:nilReason','missing');}
$item174m4->appendChild($title_string174m4);
$item170m4->appendChild($item174m4);




$item169m5= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m5);

$item170m5= $dom->createElement("gmd:CI_OnlineResource");
$item169m5->appendChild($item170m5);

$title_string171m5= $dom->createElement("gmd:URL");
$title_string171m5->appendChild($dom->createTextNode($fed_catalog3));
$item171m5= $dom->createElement("gmd:linkage");
$item171m5->appendChild($title_string171m5);
$item170m5->appendChild($item171m5);

$title_string174m5= $dom->createElement("gco:CharacterString");
$title_string174m5->appendChild($dom->createTextNode($fed_catalog3_descp));
$item174m5= $dom->createElement("gmd:description");
if ($fed_catalog3_descp==''){$item174m5->setAttribute('gco:nilReason','missing');}
$item174m5->appendChild($title_string174m5);
$item170m5->appendChild($item174m5);





$item169m6= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m6);

$item170m6= $dom->createElement("gmd:CI_OnlineResource");
$item169m6->appendChild($item170m6);

$title_string171m6= $dom->createElement("gmd:URL");
$title_string171m6->appendChild($dom->createTextNode($fed_catalog4));
$item171m6= $dom->createElement("gmd:linkage");
$item171m6->appendChild($title_string171m6);
$item170m6->appendChild($item171m6);

$title_string174m6= $dom->createElement("gco:CharacterString");
$title_string174m6->appendChild($dom->createTextNode($fed_catalog4_descp));
$item174m6= $dom->createElement("gmd:description");
if ($fed_catalog4_descp==''){$item174m6->setAttribute('gco:nilReason','missing');}
$item174m6->appendChild($title_string174m6);
$item170m6->appendChild($item174m6);




$item169m7= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m7);

$item170m7= $dom->createElement("gmd:CI_OnlineResource");
$item169m7->appendChild($item170m7);

$title_string171m7= $dom->createElement("gmd:URL");
$title_string171m7->appendChild($dom->createTextNode($fed_catalog5));
$item171m7= $dom->createElement("gmd:linkage");
$item171m7->appendChild($title_string171m7);
$item170m7->appendChild($item171m7);

$title_string174m7= $dom->createElement("gco:CharacterString");
$title_string174m7->appendChild($dom->createTextNode($fed_catalog5_descp));
$item174m7= $dom->createElement("gmd:description");
if ($fed_catalog5_descp==''){$item174m7->setAttribute('gco:nilReason','missing');}
$item174m7->appendChild($title_string174m7);
$item170m7->appendChild($item174m7);










$item169= $dom->createElement("gmd:onLine");
$item168->appendChild($item169);

$item170= $dom->createElement("gmd:CI_OnlineResource");
$item169->appendChild($item170);

$title_string171= $dom->createElement("gmd:URL");
$title_string171->appendChild($dom->createTextNode($web1));
$item171= $dom->createElement("gmd:linkage");
$item171->appendChild($title_string171);
$item170->appendChild($item171);

$title_string174= $dom->createElement("gco:CharacterString");
$title_string174->appendChild($dom->createTextNode($web1_descp));
$item174= $dom->createElement("gmd:description");
if ($web1_descp==''){$item174->setAttribute('gco:nilReason','missing');}
$item174->appendChild($title_string174);
$item170->appendChild($item174);



$item169z= $dom->createElement("gmd:onLine");
$item168->appendChild($item169z);

$item170z= $dom->createElement("gmd:CI_OnlineResource");
$item169z->appendChild($item170z);

$title_string171z= $dom->createElement("gmd:URL");
$title_string171z->appendChild($dom->createTextNode($web2));
$item171z= $dom->createElement("gmd:linkage");
$item171z->appendChild($title_string171z);
$item170z->appendChild($item171z);

$title_string174z= $dom->createElement("gco:CharacterString");
$title_string174z->appendChild($dom->createTextNode($web2_descp));
$item174z= $dom->createElement("gmd:description");
if ($web2_descp==''){$item174z->setAttribute('gco:nilReason','missing');}
$item174z->appendChild($title_string174z);
$item170z->appendChild($item174z);





$item169z1= $dom->createElement("gmd:onLine");
$item168->appendChild($item169z1);

$item170z1= $dom->createElement("gmd:CI_OnlineResource");
$item169z1->appendChild($item170z1);

$title_string171z1= $dom->createElement("gmd:URL");
$title_string171z1->appendChild($dom->createTextNode($data_transfer1));
$item171z1= $dom->createElement("gmd:linkage");
$item171z1->appendChild($title_string171z1);
$item170z1->appendChild($item171z1);

$title_string174z1= $dom->createElement("gco:CharacterString");
$title_string174z1->appendChild($dom->createTextNode($data_transfer1_descp));
$item174z1= $dom->createElement("gmd:description");
if ($data_transfer1_descp==''){$item174z1->setAttribute('gco:nilReason','missing');}
$item174z1->appendChild($title_string174z1);
$item170z1->appendChild($item174z1);





$item190= $dom->createElement("gmd:dataQualityInfo");
$main_page->appendChild($item190);

$item191= $dom->createElement("gmd:DQ_DataQuality");
$item190->appendChild($item191);

$item192= $dom->createElement("gmd:scope");
$item191->appendChild($item192);

$item193= $dom->createElement("gmd:DQ_Scope");
$item192->appendChild($item193);



$title_string194= $dom->createElement("gmd:MD_ScopeCode");
$title_string194->appendChild($dom->createTextNode($dq_scope_level));
$item194= $dom->createElement("gmd:level");
$item194->appendChild($title_string194);
$title_string194->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_ScopeCode');
$title_string194->setAttribute('codeListValue',$dq_scope_level);
$item193->appendChild($item194);


$item198= $dom->createElement("gmd:lineage");
$item191->appendChild($item198);

$item199= $dom->createElement("gmd:LI_Lineage");
$item198->appendChild($item199);

$title_string200= $dom->createElement("gco:CharacterString");
$title_string200->appendChild($dom->createTextNode($data_history1));
$item200= $dom->createElement("gmd:statement");
if ($data_history1==''){$item200->setAttribute('gco:nilReason','missing');}
$item200->appendChild($title_string200);
$item199->appendChild($item200);



$item198a= $dom->createElement("gmd:processStep");
$item199->appendChild($item198a);

$item199a= $dom->createElement("gmd:LI_ProcessStep");
$item198a->appendChild($item199a);

$title_string200a= $dom->createElement("gco:CharacterString");
$title_string200a->appendChild($dom->createTextNode($qa_process1));
$item200a= $dom->createElement("gmd:description");
if ($qa_process1==''){$item200a->setAttribute('gco:nilReason','missing');}
$item200a->appendChild($title_string200a);
$item199a->appendChild($item200a);





/*

$item204= $dom->createElement("gmd:metadataConstraints");
$main_page->appendChild($item204);

$item205= $dom->createElement("gmd:MD_SecurityConstraints");
$item204->appendChild($item205);

$title_string206= $dom->createElement("gmd:MD_ClassificationCode");
$title_string206->appendChild($dom->createTextNode($c_classification1));
$item206= $dom->createElement("gmd:classification");
$item206->appendChild($title_string206);
$title_string206->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_ClassificationCode');
$title_string206->setAttribute('codeListValue',$c_classification1);
$item205->appendChild($item206);

*/







$strxml=$dom->saveXML();
$handle = fopen("../../clevel_xml/".$outputFilename, "w");
fwrite($handle,$strxml);
fclose($handle);


 
 include_once('make_data_pdf.php'); 
 
 
 
 ?>
 
