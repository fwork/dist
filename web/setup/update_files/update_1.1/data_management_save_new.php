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




  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>

 <? include_once ($inc_path.check_includes_file_exist('get_user_privileges').".php");?>

 

    <div class="content hentry">
    
	

 
		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
		
<?$sec_class->captcha_check();?>  
 
</center>
<br>


<?
$shiftarraycalc = array();
$shift=$_POST['selectShift'];
if ($shift)
{
    foreach ($shift as $value)
    {
        array_push($shiftarraycalc,$value);
    }
}
?>
<?

 



if (isset($_POST['btnLogin2'])) {

$hierarchy_level= rtrim((mysql_escape_string(valid_data_bslash($_POST['hierarchy_level']))), "."); 
$datacollection_title= rtrim((mysql_escape_string(valid_data_bslash($_POST['datacollection_title']))), ".");
$nci_code= rtrim((mysql_escape_string(valid_data_bslash($_POST['nci_code']))), ".");
 $abstract= rtrim((mysql_escape_string(valid_data_bslash($_POST['abstract']))), ".");
 $dataset_purpose= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_purpose']))), ".");
 $dataset_status= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_status']))), ".");
 $dataset_identifier= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_identifier']))), ".");
 $data_source= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_source']))), ".");
 $data_provenance= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_provenance']))), ".");
 $doi= rtrim((mysql_escape_string(valid_data_bslash($_POST['doi']))), ".");
 $alternate_title= rtrim((mysql_escape_string(valid_data_bslash($_POST['alternate_title']))), ".");
 $activities= rtrim((mysql_escape_string(valid_data_bslash($_POST['activities']))), ".");
 $md_owner_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name']))), ".");
 $md_owner_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_org']))), ".");
 $md_owner_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_position']))), ".");
 $md_owner_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_phone']))), ".");
 $md_owner_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_fax']))), ".");
 $md_owner_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_del']))), ".");
 $md_owner_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_city']))), ".");
 $md_owner_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_pcode']))), ".");
 $md_owner_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_country']))), ".");
 $md_owner_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_email']))), ".");

$content_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name']))), ".");
 $content_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_org']))), ".");
 $content_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_position']))), ".");
 $content_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_phone']))), ".");
 $content_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_fax']))), ".");
 $content_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_del']))), ".");
 $content_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_city']))), ".");
 $content_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_pcode']))), ".");
 $content_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_country']))), ".");
 $content_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_email']))), ".");

$media_contact_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name']))), ".");
 $media_contact_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_org']))), ".");
 $media_contact_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_position']))), ".");
 $media_contact_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_phone']))), ".");
 $media_contact_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_fax']))), ".");
 $media_contact_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_del']))), ".");
 $media_contact_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_city']))), ".");
 $media_contact_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_pcode']))), ".");
 $media_contact_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_country']))), ".");
 $media_contact_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_email']))), ".");

$data_ingest_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_name']))), ".");
 $data_ingest_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_org']))), ".");
 $data_ingest_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_position']))), ".");
 $data_ingest_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_phone']))), ".");
 $data_ingest_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_fax']))), ".");
 $data_ingest_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_del']))), ".");
 $data_ingest_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_city']))), ".");
 $data_ingest_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_pcode']))), ".");
 $data_ingest_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_country']))), ".");
 $data_ingest_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_email']))), ".");

$qa_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_name']))), ".");
 $qa_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_org']))), ".");
 $qa_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_position']))), ".");
 $qa_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_phone']))), ".");
 $qa_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_fax']))), ".");
 $qa_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_del']))), ".");
 $qa_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_city']))), ".");
 $qa_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_pcode']))), ".");
 $qa_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_country']))), ".");
 $qa_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_email']))), ".");

$publish_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_name']))), ".");
 $publish_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_org']))), ".");
 $publish_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_position']))), ".");
 $publish_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_phone']))), ".");
 $publish_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_fax']))), ".");
 $publish_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_del']))), ".");
 $publish_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_city']))), ".");
 $publish_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_pcode']))), ".");
 $publish_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_country']))), ".");
 $publish_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_email']))), ".");

 $maint_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_name']))), ".");
 $maint_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_org']))), ".");
 $maint_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_position']))), ".");
 $maint_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_phone']))), ".");
 $maint_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_fax']))), ".");
 $maint_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_del']))), ".");
 $maint_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_city']))), ".");
 $maint_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_pcode']))), ".");
 $maint_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_country']))), ".");
 $maint_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_email']))), ".");
 
 $usupport_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_name']))), ".");
 $usupport_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_org']))), ".");
 $usupport_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_position']))), ".");
 $usupport_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_phone']))), ".");
 $usupport_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_fax']))), ".");
 $usupport_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_del']))), ".");
 $usupport_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_city']))), ".");
 $usupport_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_pcode']))), ".");
 $usupport_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_country']))), ".");
 $usupport_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_email']))), ".");
 
 $dservice_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_name']))), ".");
 $dservice_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_org']))), ".");
 $dservice_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_position']))), ".");
 $dservice_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_phone']))), ".");
 $dservice_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_fax']))), ".");
 $dservice_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_del']))), ".");
 $dservice_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_city']))), ".");
 $dservice_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_pcode']))), ".");
 $dservice_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_country']))), ".");
 $dservice_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_email']))), ".");

 $dservice_op_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_name']))), ".");
 $dservice_op_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_org']))), ".");
 $dservice_op_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_position']))), ".");
 $dservice_op_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_phone']))), ".");
 $dservice_op_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_fax']))), ".");
 $dservice_op_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_del']))), ".");
 $dservice_op_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_city']))), ".");
 $dservice_op_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_pcode']))), ".");
 $dservice_op_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_country']))), ".");
 $dservice_op_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_email']))), ".");
 
 $dcycle_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_name']))), ".");
 $dcycle_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_org']))), ".");
 $dcycle_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_position']))), ".");
 $dcycle_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_phone']))), ".");
 $dcycle_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_fax']))), ".");
 $dcycle_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_del']))), ".");
 $dcycle_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_city']))), ".");
 $dcycle_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_pcode']))), ".");
 $dcycle_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_country']))), ".");
 $dcycle_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_email']))), ".");
 
  $dcust_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name']))), ".");
 $dcust_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_org']))), ".");
 $dcust_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_position']))), ".");
 $dcust_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_phone']))), ".");
 $dcust_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_fax']))), ".");
 $dcust_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_del']))), ".");
 $dcust_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_city']))), ".");
 $dcust_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_pcode']))), ".");
 $dcust_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_country']))), ".");
 $dcust_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_email']))), ".");

  $downer_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name']))), ".");
 $downer_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_org']))), ".");
 $downer_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_position']))), ".");
 $downer_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_phone']))), ".");
 $downer_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_fax']))), ".");
 $downer_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_del']))), ".");
 $downer_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_city']))), ".");
 $downer_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_pcode']))), ".");
 $downer_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_country']))), ".");
 $downer_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_email']))), ".");


$c_classification= rtrim((mysql_escape_string(valid_data_bslash($_POST['c_classification']))), ".");
 $use_limitations= rtrim((mysql_escape_string(valid_data_bslash($_POST['use_limitations']))), ".");
 $access_constraints= rtrim((mysql_escape_string(valid_data_bslash($_POST['access_constraints']))), ".");
 $other_constraints1= rtrim((mysql_escape_string(valid_data_bslash($_POST['other_constraints1']))), ".");
 $use_constraints= rtrim((mysql_escape_string(valid_data_bslash($_POST['use_constraints']))), ".");
 $other_constraints2= rtrim((mysql_escape_string(valid_data_bslash($_POST['other_constraints2']))), ".");
 $east_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['east_value']))), ".");
 $north_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['north_value']))), ".");
 $south_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['south_value']))), ".");
 $west_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['west_value']))), ".");
 $bposition= rtrim((mysql_escape_string(valid_data_bslash($_POST['bposition']))), ".");
 $eposition= rtrim((mysql_escape_string(valid_data_bslash($_POST['eposition']))), ".");
 $format1= rtrim((mysql_escape_string(valid_data_bslash($_POST['format1']))), ".");
 $format2= rtrim((mysql_escape_string(valid_data_bslash($_POST['format2']))), ".");
 $format3= rtrim((mysql_escape_string(valid_data_bslash($_POST['format3']))), ".");
 $format4= rtrim((mysql_escape_string(valid_data_bslash($_POST['format4']))), ".");
 $format5= rtrim((mysql_escape_string(valid_data_bslash($_POST['format5']))), ".");
 $fversion1= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion1']))), ".");
 $fversion2= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion2']))), ".");
 $fversion3= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion3']))), ".");
 $fversion4= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion4']))), ".");
 $fversion5= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion5']))), ".");
 $tools= rtrim((mysql_escape_string(valid_data_bslash($_POST['tools']))), ".");
 $pidentifier= rtrim((mysql_escape_string(valid_data_bslash($_POST['pidentifier']))), ".");
 $software= rtrim((mysql_escape_string(valid_data_bslash($_POST['software']))), ".");
 $algorithms= rtrim((mysql_escape_string(valid_data_bslash($_POST['algorithms']))), ".");
 $flexibility= rtrim((mysql_escape_string(valid_data_bslash($_POST['flexibility']))), ".");
 $ingest_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['ingest_process']))), ".");
 $qa_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_process']))), ".");
 $maintenance_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['maintenance_process']))), ".");
 $backup_recovery_plan= rtrim((mysql_escape_string(valid_data_bslash($_POST['backup_recovery_plan']))), ".");
 $services= rtrim((mysql_escape_string(valid_data_bslash($_POST['services']))), ".");
 $services_url= rtrim((mysql_escape_string(valid_data_bslash($_POST['services_url']))), ".");
 $keywords1= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords1']))), ".");
 $keywords2= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords2']))), ".");
 $keywords3= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords3']))), ".");
 $keywords4= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords4']))), ".");
 $catalog_registry= rtrim((mysql_escape_string(valid_data_bslash($_POST['catalog_registry']))), ".");
 $federated_catalogue= rtrim((mysql_escape_string(valid_data_bslash($_POST['federated_catalogue']))), ".");
 $keywords= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords']))), ".");
 $website= rtrim((mysql_escape_string(valid_data_bslash($_POST['website']))), ".");
 $documentation= rtrim((mysql_escape_string(valid_data_bslash($_POST['documentation']))), ".");
 $local_file_path= rtrim((mysql_escape_string(valid_data_bslash($_POST['local_file_path']))), ".");
  $feedback= rtrim((mysql_escape_string(valid_data_bslash($_POST['feedback']))), ".");
 $retentia= rtrim((mysql_escape_string(valid_data_bslash($_POST['retentia']))), ".");
  $how_to_guide= rtrim((mysql_escape_string(valid_data_bslash($_POST['how_to_guide']))), ".");
 $data_ingest_tframe= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_tframe']))), ".");
 $metadata_catalog_tframe= rtrim((mysql_escape_string(valid_data_bslash($_POST['metadata_catalog_tframe']))), ".");
 $data_qa= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_qa']))), ".");

 $downer_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage1']))), ".");
 $downer_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name1']))), ".");
 $downer_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp1']))), ".");
 $downer_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage2']))), ".");
 $downer_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name2']))), ".");
 $downer_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp2']))), ".");
 $downer_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage3']))), ".");
 $downer_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name3']))), ".");
 $downer_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp3']))), ".");
 $downer_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage4']))), ".");
 $downer_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name4']))), ".");
 $downer_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp4']))), ".");
 
 
 $dcust_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage1']))), ".");
 $dcust_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name1']))), ".");
 $dcust_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp1']))), ".");
 $dcust_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage2']))), ".");
 $dcust_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name2']))), ".");
 $dcust_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp2']))), ".");
 $dcust_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage3']))), ".");
 $dcust_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name3']))), ".");
 $dcust_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp3']))), ".");
 $dcust_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage4']))), ".");
 $dcust_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name4']))), ".");
 $dcust_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp4']))), ".");
 
 $md_owner_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage1']))), ".");
 $md_owner_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name1']))), ".");
 $md_owner_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp1']))), ".");
 $md_owner_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage2']))), ".");
 $md_owner_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name2']))), ".");
 $md_owner_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp2']))), ".");
 $md_owner_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage3']))), ".");
 $md_owner_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name3']))), ".");
 $md_owner_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp3']))), ".");
 $md_owner_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage4']))), ".");
 $md_owner_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name4']))), ".");
 $md_owner_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp4']))), ".");
 
 $content_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage1']))), ".");
 $content_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name1']))), ".");
 $content_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp1']))), ".");
 $content_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage2']))), ".");
 $content_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name2']))), ".");
 $content_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp2']))), ".");
 $content_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage3']))), ".");
 $content_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name3']))), ".");
 $content_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp3']))), ".");
 $content_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage4']))), ".");
 $content_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name4']))), ".");
 $content_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp4']))), ".");
 
 $media_contact_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage1']))), ".");
 $media_contact_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name1']))), ".");
 $media_contact_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp1']))), ".");
 $media_contact_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage2']))), ".");
 $media_contact_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name2']))), ".");
 $media_contact_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp2']))), ".");
 $media_contact_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage3']))), ".");
 $media_contact_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name3']))), ".");
 $media_contact_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp3']))), ".");
 $media_contact_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage4']))), ".");
 $media_contact_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name4']))), ".");
 $media_contact_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp4']))), ".");
 

$fid= rtrim((mysql_escape_string(valid_data_bslash($_POST['file_identifier']))), ".");
$tcat= rtrim((mysql_escape_string(valid_data_bslash($_POST['tcat']))), ".");
$version_id=1;
if ($nci_code=='') { $nci_code='def';}
$date_post=@date("Y-m-d");




$qr1=@MYSQL_QUERY("select count(dm_id) as cc from nci_data_management.data_mgmt_temp where file_identifier='$fid'") ;
$rq1=@MYSQL_fetch_array($qr1);
$cnt1=$rq1['cc'];
$qr2=@MYSQL_QUERY("select count(dm_id) as cc from nci_data_management.data_mgmt where file_identifier='$fid'") ;
$rq2=@MYSQL_fetch_array($qr2);
$cnt2=$rq2['cc'];





if ($cnt1==0 and $cnt2==0) {


$res1=@MYSQL_QUERY("select max(dm_id) as cc  from nci_data_management.data_mgmt_temp") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
		          $max_id=$max_id+1;
                          
$query1=" Insert into nci_data_management.data_mgmt_temp (`file_identifier`,`tcat`,`dm_id`, `user_id`, `date_post`, `version_id`, `hierarchy_level`, `datacollection_title`, `nci_code`, `abstract`,  `dataset_purpose`, `dataset_status`, `dataset_identifier`, `data_source`, `data_provenance`, `doi`, `alternate_title`, `activities`, `md_owner_name`, `md_owner_org`, `md_owner_position`, `md_owner_phone`, `md_owner_fax`, `md_owner_del`, `md_owner_city`, `md_owner_pcode`, `md_owner_country`, `md_owner_email`, `content_name`, `content_org`, `content_position`, `content_phone`, `content_fax`, `content_del`, `content_city`, `content_pcode`, `content_country`, `content_email`, `media_contact_name`, `media_contact_org`, `media_contact_position`, `media_contact_phone`, `media_contact_fax`, `media_contact_del`, `media_contact_city`, `media_contact_pcode`, `media_contact_country`, `media_contact_email`, `data_ingest_name`, `data_ingest_org`, `data_ingest_position`, `data_ingest_phone`, `data_ingest_fax`, `data_ingest_del`, `data_ingest_city`, `data_ingest_pcode`, `data_ingest_country`, `data_ingest_email`, `qa_name`, `qa_org`, `qa_position`, `qa_phone`, `qa_fax`, `qa_del`, `qa_city`, `qa_pcode`, `qa_country`, `qa_email`, `publish_name`, `publish_org`, `publish_position`, `publish_phone`, `publish_fax`, `publish_del`, `publish_city`, `publish_pcode`, `publish_country`, `publish_email`, `maint_name`, `maint_org`, `maint_position`, `maint_phone`, `maint_fax`, `maint_del`, `maint_city`, `maint_pcode`, `maint_country`, `maint_email`, `usupport_name`, `usupport_org`, `usupport_position`, `usupport_phone`, `usupport_fax`, `usupport_del`, `usupport_city`, `usupport_pcode`, `usupport_country`, `usupport_email`, `dservice_name`, `dservice_org`, `dservice_position`, `dservice_phone`, `dservice_fax`, `dservice_del`, `dservice_city`, `dservice_pcode`, `dservice_country`, `dservice_email`, `dservice_op_name`, `dservice_op_org`, `dservice_op_position`, `dservice_op_phone`, `dservice_op_fax`, `dservice_op_del`, `dservice_op_city`, `dservice_op_pcode`, `dservice_op_country`, `dservice_op_email`, `dcust_name`, `dcust_org`, `dcust_position`, `dcust_phone`, `dcust_fax`, `dcust_del`, `dcust_city`, `dcust_pcode`, `dcust_country`, `dcust_email`,`downer_name`, `downer_org`, `downer_position`, `downer_phone`, `downer_fax`, `downer_del`, `downer_city`, `downer_pcode`, `downer_country`, `downer_email`,`dcycle_name`, `dcycle_org`, `dcycle_position`, `dcycle_phone`, `dcycle_fax`, `dcycle_del`, `dcycle_city`, `dcycle_pcode`, `dcycle_country`, `dcycle_email`, `c_classification`, `use_limitations`, `access_constraints`, `other_constraints1`, `use_constraints`, `other_constraints2`, `spatial_west`, `spatial_east`, `spatial_north`, `spatial_south`, `temp_begin`, `temp_end`, `format1`, `format2`, `format3`, `format4`, `format5`,`fversion1`,`fversion2`,`fversion3`,`fversion4`,`fversion5`, `tools`,`parentidentifier`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`,`services_url`,`keywords1`,`keywords2`,`keywords3`,`keywords4`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `local_file_path`, `feedback`, `retentia`, `how_to_guide`, `data_ingest_tframe`, `metadata_catalog_tframe`, `data_qa`, `dcust_linkage1`, `dcust_name1`, `dcust_descp1`, `dcust_linkage2`, `dcust_name2`, `dcust_descp2`, `dcust_linkage3`, `dcust_name3`, `dcust_descp3`, `dcust_linkage4`, `dcust_name4`, `dcust_descp4`,`downer_linkage1`, `downer_name1`, `downer_descp1`, `downer_linkage2`, `downer_name2`, `downer_descp2`, `downer_linkage3`, `downer_name3`, `downer_descp3`, `downer_linkage4`, `downer_name4`, `downer_descp4`,`md_owner_linkage1`, `md_owner_name1`, `md_owner_descp1`, `md_owner_linkage2`, `md_owner_name2`, `md_owner_descp2`, `md_owner_linkage3`, `md_owner_name3`, `md_owner_descp3`, `md_owner_linkage4`, `md_owner_name4`, `md_owner_descp4`,`content_linkage1`, `content_name1`, `content_descp1`, `content_linkage2`, `content_name2`, `content_descp2`, `content_linkage3`, `content_name3`, `content_descp3`, `content_linkage4`, `content_name4`, `content_descp4`,`media_contact_linkage1`, `media_contact_name1`, `media_contact_descp1`, `media_contact_linkage2`, `media_contact_name2`, `media_contact_descp2`, `media_contact_linkage3`, `media_contact_name3`, `media_contact_descp3`, `media_contact_linkage4`, `media_contact_name4`, `media_contact_descp4`) values ('$fid','$tcat',$max_id,  '$user_id', '$date_post', '$version_id', '$hierarchy_level','$datacollection_title', '$nci_code', '$abstract', '$dataset_purpose', '$dataset_status', '$dataset_identifier','$data_source','$data_provenance','$doi','$alternate_title','$activities','$md_owner_name','$md_owner_org','$md_owner_position','$md_owner_phone','$md_owner_fax','$md_owner_del','$md_owner_city','$md_owner_pcode','$md_owner_country','$md_owner_email','$content_name','$content_org','$content_position','$content_phone','$content_fax','$content_del','$content_city','$content_pcode','$content_country','$content_email','$media_contact_name','$media_contact_org','$media_contact_position','$media_contact_phone','$media_contact_fax','$media_contact_del','$media_contact_city','$media_contact_pcode','$media_contact_country','$media_contact_email','$data_ingest_name','$data_ingest_org','$data_ingest_position','$data_ingest_phone','$data_ingest_fax','$data_ingest_del','$data_ingest_city','$data_ingest_pcode','$data_ingest_country','$data_ingest_email','$qa_name','$qa_org','$qa_position','$qa_phone','$qa_fax','$qa_del','$qa_city','$qa_pcode','$qa_country','$qa_email','$publish_name','$publish_org','$publish_position','$publish_phone','$publish_fax','$publish_del','$publish_city','$publish_pcode','$publish_country','$publish_email','$maint_name','$maint_org','$maint_position','$maint_phone','$maint_fax','$maint_del','$maint_city','$maint_pcode','$maint_country','$maint_email','$usupport_name','$usupport_org','$usupport_position','$usupport_phone','$usupport_fax','$usupport_del','$usupport_city','$usupport_pcode','$usupport_country','$usupport_email','$dservice_name','$dservice_org','$dservice_position','$dservice_phone','$dservice_fax','$dservice_del','$dservice_city','$dservice_pcode','$dservice_country','$dservice_email','$dservice_op_name','$dservice_op_org','$dservice_op_position','$dservice_op_phone','$dservice_op_fax','$dservice_op_del','$dservice_op_city','$dservice_op_pcode','$dservice_op_country','$dservice_op_email','$dcust_name','$dcust_org','$dcust_position','$dcust_phone','$dcust_fax','$dcust_del','$dcust_city','$dcust_pcode','$dcust_country','$dcust_email','$downer_name','$downer_org','$downer_position','$downer_phone','$downer_fax','$downer_del','$downer_city','$downer_pcode','$downer_country','$downer_email','$dcycle_name','$dcycle_org','$dcycle_position','$dcycle_phone','$dcycle_fax','$dcycle_del','$dcycle_city','$dcycle_pcode','$dcycle_country','$dcycle_email','$c_classification', '$use_limitations', '$access_constraints', '$other_constraints1','$use_constraints','$other_constraints2', '$west_value','$east_value','$north_value','$south_value', '$bposition','$eposition', '$format1', '$format2', '$format3', '$format4', '$format5','$fversion1','$fversion2','$fversion3','$fversion4','$fversion5', '$tools','$pidentifier', '$software', '$algorithms', '$flexibility', '$ingest_process', '$qa_process', '$maintenance_process', '$backup_recovery_plan', '$services','$services_url','$keywords1','$keywords2','$keywords3','$keywords4', '$catalog_registry', '$federated_catalogue', '$keywords', '$website', '$documentation', '$local_file_path', '$feedback', '$retentia', '$how_to_guide', '$data_ingest_tframe', '$metadata_catalog_tframe','$data_qa',  '$dcust_linkage1', '$dcust_name1', '$dcust_descp1', '$dcust_linkage2', '$dcust_name2', '$dcust_descp2', '$dcust_linkage3', '$dcust_name3', '$dcust_descp3', '$dcust_linkage4', '$dcust_name4', '$dcust_descp4','$downer_linkage1', '$downer_name1', '$downer_descp1', '$downer_linkage2', '$downer_name2', '$downer_descp2', '$downer_linkage3', '$downer_name3', '$downer_descp3', '$downer_linkage4', '$downer_name4', '$downer_descp4','$md_owner_linkage1', '$md_owner_name1', '$md_owner_descp1', '$md_owner_linkage2', '$md_owner_name2', '$md_owner_descp2', '$md_owner_linkage3', '$md_owner_name3', '$md_owner_descp3', '$md_owner_linkage4', '$md_owner_name4', '$md_owner_descp4','$content_linkage1', '$content_name1', '$content_descp1', '$content_linkage2', '$content_name2', '$content_descp2', '$content_linkage3', '$content_name3', '$content_descp3', '$content_linkage4', '$content_name4', '$content_descp4','$media_contact_linkage1', '$media_contact_name1', '$media_contact_descp1', '$media_contact_linkage2', '$media_contact_name2', '$media_contact_descp2', '$media_contact_linkage3', '$media_contact_name3', '$media_contact_descp3', '$media_contact_linkage4', '$media_contact_name4', '$media_contact_descp4')";


$result1=MYSQL_QUERY($query1) ;


$query1_b="delete from nci_data_management.data_mgmt_assoc_source where dm_id=$max_id";
$result1_b=MYSQL_QUERY($query1_b) ;

$query1_c="delete from nci_data_management.data_mgmt_papers where dm_id=$max_id";
$result1_c=MYSQL_QUERY($query1_c) ;

foreach ($_POST['paper_linkage'] as $k => $v) {
$val1=valid_data_bslash($_POST['paper_linkage'][$k]);
$val2=valid_data_bslash($_POST['paper_protocol'][$k]);
$val3=valid_data_bslash($_POST['paper_name'][$k]);
$val4=valid_data_bslash($_POST['paper_description'][$k]);
$val5=valid_data_bslash($_POST['paper_function'][$k]);
if ($val1!='') {$query=" Insert into nci_data_management.data_mgmt_papers (`dm_id`, `linkage`, `protocol`, `name`, `description`, `function`) values ($max_id,'$val1', '$val2','$val3','$val4','$val5')";
$result=MYSQL_QUERY($query) ;
}
}


foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){
$query1_a=" Insert into nci_data_management.data_mgmt_assoc_source (`source_file_id`,`dm_id` ) values ('$sfid',$max_id)";
$result1_a=MYSQL_QUERY($query1_a) ;
}
}


}

elseif ($cnt1!=0 and $cnt2==0) {


$res1a=@MYSQL_QUERY("delete  from nci_data_management.data_mgmt_temp where file_identifier='$fid'") ;
$res1=@MYSQL_QUERY("select max(dm_id) as cc  from nci_data_management.data_mgmt_temp") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
                          $max_id=$max_id+1;

$query1=" Insert into nci_data_management.data_mgmt_temp (`file_identifier`,`tcat`,`dm_id`, `user_id`, `date_post`, `version_id`, `hierarchy_level`, `datacollection_title`, `nci_code`, `abstract`,  `dataset_purpose`, `dataset_status`, `dataset_identifier`, `data_source`, `data_provenance`, `doi`, `alternate_title`, `activities`, `md_owner_name`, `md_owner_org`, `md_owner_position`, `md_owner_phone`, `md_owner_fax`, `md_owner_del`, `md_owner_city`, `md_owner_pcode`, `md_owner_country`, `md_owner_email`, `content_name`, `content_org`, `content_position`, `content_phone`, `content_fax`, `content_del`, `content_city`, `content_pcode`, `content_country`, `content_email`, `media_contact_name`, `media_contact_org`, `media_contact_position`, `media_contact_phone`, `media_contact_fax`, `media_contact_del`, `media_contact_city`, `media_contact_pcode`, `media_contact_country`, `media_contact_email`, `data_ingest_name`, `data_ingest_org`, `data_ingest_position`, `data_ingest_phone`, `data_ingest_fax`, `data_ingest_del`, `data_ingest_city`, `data_ingest_pcode`, `data_ingest_country`, `data_ingest_email`, `qa_name`, `qa_org`, `qa_position`, `qa_phone`, `qa_fax`, `qa_del`, `qa_city`, `qa_pcode`, `qa_country`, `qa_email`, `publish_name`, `publish_org`, `publish_position`, `publish_phone`, `publish_fax`, `publish_del`, `publish_city`, `publish_pcode`, `publish_country`, `publish_email`, `maint_name`, `maint_org`, `maint_position`, `maint_phone`, `maint_fax`, `maint_del`, `maint_city`, `maint_pcode`, `maint_country`, `maint_email`, `usupport_name`, `usupport_org`, `usupport_position`, `usupport_phone`, `usupport_fax`, `usupport_del`, `usupport_city`, `usupport_pcode`, `usupport_country`, `usupport_email`, `dservice_name`, `dservice_org`, `dservice_position`, `dservice_phone`, `dservice_fax`, `dservice_del`, `dservice_city`, `dservice_pcode`, `dservice_country`, `dservice_email`, `dservice_op_name`, `dservice_op_org`, `dservice_op_position`, `dservice_op_phone`, `dservice_op_fax`, `dservice_op_del`, `dservice_op_city`, `dservice_op_pcode`, `dservice_op_country`, `dservice_op_email`, `dcust_name`, `dcust_org`, `dcust_position`, `dcust_phone`, `dcust_fax`, `dcust_del`, `dcust_city`, `dcust_pcode`, `dcust_country`, `dcust_email`,`downer_name`, `downer_org`, `downer_position`, `downer_phone`, `downer_fax`, `downer_del`, `downer_city`, `downer_pcode`, `downer_country`, `downer_email`,`dcycle_name`, `dcycle_org`, `dcycle_position`, `dcycle_phone`, `dcycle_fax`, `dcycle_del`, `dcycle_city`, `dcycle_pcode`, `dcycle_country`, `dcycle_email`, `c_classification`, `use_limitations`, `access_constraints`, `other_constraints1`, `use_constraints`, `other_constraints2`, `spatial_west`, `spatial_east`, `spatial_north`, `spatial_south`, `temp_begin`, `temp_end`, `format1`, `format2`, `format3`, `format4`, `format5`,`fversion1`,`fversion2`,`fversion3`,`fversion4`,`fversion5`, `tools`,`parentidentifier`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`,`services_url`,`keywords1`,`keywords2`,`keywords3`,`keywords4`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `local_file_path`, `feedback`, `retentia`, `how_to_guide`, `data_ingest_tframe`, `metadata_catalog_tframe`, `data_qa`, `dcust_linkage1`, `dcust_name1`, `dcust_descp1`, `dcust_linkage2`, `dcust_name2`, `dcust_descp2`, `dcust_linkage3`, `dcust_name3`, `dcust_descp3`, `dcust_linkage4`, `dcust_name4`, `dcust_descp4`,`downer_linkage1`, `downer_name1`, `downer_descp1`, `downer_linkage2`, `downer_name2`, `downer_descp2`, `downer_linkage3`, `downer_name3`, `downer_descp3`, `downer_linkage4`, `downer_name4`, `downer_descp4`,`md_owner_linkage1`, `md_owner_name1`, `md_owner_descp1`, `md_owner_linkage2`, `md_owner_name2`, `md_owner_descp2`, `md_owner_linkage3`, `md_owner_name3`, `md_owner_descp3`, `md_owner_linkage4`, `md_owner_name4`, `md_owner_descp4`,`content_linkage1`, `content_name1`, `content_descp1`, `content_linkage2`, `content_name2`, `content_descp2`, `content_linkage3`, `content_name3`, `content_descp3`, `content_linkage4`, `content_name4`, `content_descp4`,`media_contact_linkage1`, `media_contact_name1`, `media_contact_descp1`, `media_contact_linkage2`, `media_contact_name2`, `media_contact_descp2`, `media_contact_linkage3`, `media_contact_name3`, `media_contact_descp3`, `media_contact_linkage4`, `media_contact_name4`, `media_contact_descp4`) values ('$fid','$tcat',$max_id,  '$user_id', '$date_post', '$version_id', '$hierarchy_level','$datacollection_title', '$nci_code', '$abstract', '$dataset_purpose', '$dataset_status', '$dataset_identifier','$data_source','$data_provenance','$doi','$alternate_title','$activities','$md_owner_name','$md_owner_org','$md_owner_position','$md_owner_phone','$md_owner_fax','$md_owner_del','$md_owner_city','$md_owner_pcode','$md_owner_country','$md_owner_email','$content_name','$content_org','$content_position','$content_phone','$content_fax','$content_del','$content_city','$content_pcode','$content_country','$content_email','$media_contact_name','$media_contact_org','$media_contact_position','$media_contact_phone','$media_contact_fax','$media_contact_del','$media_contact_city','$media_contact_pcode','$media_contact_country','$media_contact_email','$data_ingest_name','$data_ingest_org','$data_ingest_position','$data_ingest_phone','$data_ingest_fax','$data_ingest_del','$data_ingest_city','$data_ingest_pcode','$data_ingest_country','$data_ingest_email','$qa_name','$qa_org','$qa_position','$qa_phone','$qa_fax','$qa_del','$qa_city','$qa_pcode','$qa_country','$qa_email','$publish_name','$publish_org','$publish_position','$publish_phone','$publish_fax','$publish_del','$publish_city','$publish_pcode','$publish_country','$publish_email','$maint_name','$maint_org','$maint_position','$maint_phone','$maint_fax','$maint_del','$maint_city','$maint_pcode','$maint_country','$maint_email','$usupport_name','$usupport_org','$usupport_position','$usupport_phone','$usupport_fax','$usupport_del','$usupport_city','$usupport_pcode','$usupport_country','$usupport_email','$dservice_name','$dservice_org','$dservice_position','$dservice_phone','$dservice_fax','$dservice_del','$dservice_city','$dservice_pcode','$dservice_country','$dservice_email','$dservice_op_name','$dservice_op_org','$dservice_op_position','$dservice_op_phone','$dservice_op_fax','$dservice_op_del','$dservice_op_city','$dservice_op_pcode','$dservice_op_country','$dservice_op_email','$dcust_name','$dcust_org','$dcust_position','$dcust_phone','$dcust_fax','$dcust_del','$dcust_city','$dcust_pcode','$dcust_country','$dcust_email','$downer_name','$downer_org','$downer_position','$downer_phone','$downer_fax','$downer_del','$downer_city','$downer_pcode','$downer_country','$downer_email','$dcycle_name','$dcycle_org','$dcycle_position','$dcycle_phone','$dcycle_fax','$dcycle_del','$dcycle_city','$dcycle_pcode','$dcycle_country','$dcycle_email','$c_classification', '$use_limitations', '$access_constraints', '$other_constraints1','$use_constraints','$other_constraints2', '$west_value','$east_value','$north_value','$south_value', '$bposition','$eposition', '$format1', '$format2', '$format3', '$format4', '$format5','$fversion1','$fversion2','$fversion3','$fversion4','$fversion5', '$tools','$pidentifier', '$software', '$algorithms', '$flexibility', '$ingest_process', '$qa_process', '$maintenance_process', '$backup_recovery_plan', '$services','$services_url','$keywords1','$keywords2','$keywords3','$keywords4', '$catalog_registry', '$federated_catalogue', '$keywords', '$website', '$documentation', '$local_file_path', '$feedback', '$retentia', '$how_to_guide', '$data_ingest_tframe', '$metadata_catalog_tframe','$data_qa','$dcust_linkage1', '$dcust_name1', '$dcust_descp1', '$dcust_linkage2', '$dcust_name2', '$dcust_descp2', '$dcust_linkage3', '$dcust_name3', '$dcust_descp3', '$dcust_linkage4', '$dcust_name4', '$dcust_descp4','$downer_linkage1', '$downer_name1', '$downer_descp1', '$downer_linkage2', '$downer_name2', '$downer_descp2', '$downer_linkage3', '$downer_name3', '$downer_descp3', '$downer_linkage4', '$downer_name4', '$downer_descp4','$md_owner_linkage1', '$md_owner_name1', '$md_owner_descp1', '$md_owner_linkage2', '$md_owner_name2', '$md_owner_descp2', '$md_owner_linkage3', '$md_owner_name3', '$md_owner_descp3', '$md_owner_linkage4', '$md_owner_name4', '$md_owner_descp4','$content_linkage1', '$content_name1', '$content_descp1', '$content_linkage2', '$content_name2', '$content_descp2', '$content_linkage3', '$content_name3', '$content_descp3', '$content_linkage4', '$content_name4', '$content_descp4','$media_contact_linkage1', '$media_contact_name1', '$media_contact_descp1', '$media_contact_linkage2', '$media_contact_name2', '$media_contact_descp2', '$media_contact_linkage3', '$media_contact_name3', '$media_contact_descp3', '$media_contact_linkage4', '$media_contact_name4', '$media_contact_descp4')";


$result1=MYSQL_QUERY($query1) ;

$query1_c="delete from nci_data_management.data_mgmt_papers where dm_id=$max_id";
$result1_c=MYSQL_QUERY($query1_c) ;

foreach ($_POST['paper_linkage'] as $k => $v) {
$val1=valid_data_bslash($_POST['paper_linkage'][$k]);
$val2=valid_data_bslash($_POST['paper_protocol'][$k]);
$val3=valid_data_bslash($_POST['paper_name'][$k]);
$val4=valid_data_bslash($_POST['paper_description'][$k]);
$val5=valid_data_bslash($_POST['paper_function'][$k]);
if ($val1!='') {$query=" Insert into nci_data_management.data_mgmt_papers (`dm_id`, `linkage`, `protocol`, `name`, `description`, `function`) values ($max_id,'$val1', '$val2','$val3','$val4','$val5')";
$result=MYSQL_QUERY($query) ;
}
}


$query1_b="delete from nci_data_management.data_mgmt_assoc_source where dm_id=$max_id";
$result1_b=MYSQL_QUERY($query1_b) ;

foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){
$query1_a=" Insert into nci_data_management.data_mgmt_assoc_source (`source_file_id`,`dm_id` ) values ('$sfid',$max_id)";
$result1_a=MYSQL_QUERY($query1_a) ;
}}

}



elseif ($cnt1==0 and $cnt2!=0) {


$res1a=@MYSQL_QUERY("delete  from nci_data_management.data_mgmt where file_identifier='$fid'") ;
$res1=@MYSQL_QUERY("select max(dm_id) as cc  from nci_data_management.data_mgmt") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
                          $max_id=$max_id+1;

$query1=" Insert into nci_data_management.data_mgmt (`file_identifier`,`tcat`,`dm_id`, `user_id`, `date_post`, `version_id`, `hierarchy_level`, `datacollection_title`, `nci_code`, `abstract`,  `dataset_purpose`, `dataset_status`, `dataset_identifier`, `data_source`, `data_provenance`, `doi`, `alternate_title`, `activities`, `md_owner_name`, `md_owner_org`, `md_owner_position`, `md_owner_phone`, `md_owner_fax`, `md_owner_del`, `md_owner_city`, `md_owner_pcode`, `md_owner_country`, `md_owner_email`, `content_name`, `content_org`, `content_position`, `content_phone`, `content_fax`, `content_del`, `content_city`, `content_pcode`, `content_country`, `content_email`, `media_contact_name`, `media_contact_org`, `media_contact_position`, `media_contact_phone`, `media_contact_fax`, `media_contact_del`, `media_contact_city`, `media_contact_pcode`, `media_contact_country`, `media_contact_email`, `data_ingest_name`, `data_ingest_org`, `data_ingest_position`, `data_ingest_phone`, `data_ingest_fax`, `data_ingest_del`, `data_ingest_city`, `data_ingest_pcode`, `data_ingest_country`, `data_ingest_email`, `qa_name`, `qa_org`, `qa_position`, `qa_phone`, `qa_fax`, `qa_del`, `qa_city`, `qa_pcode`, `qa_country`, `qa_email`, `publish_name`, `publish_org`, `publish_position`, `publish_phone`, `publish_fax`, `publish_del`, `publish_city`, `publish_pcode`, `publish_country`, `publish_email`, `maint_name`, `maint_org`, `maint_position`, `maint_phone`, `maint_fax`, `maint_del`, `maint_city`, `maint_pcode`, `maint_country`, `maint_email`, `usupport_name`, `usupport_org`, `usupport_position`, `usupport_phone`, `usupport_fax`, `usupport_del`, `usupport_city`, `usupport_pcode`, `usupport_country`, `usupport_email`, `dservice_name`, `dservice_org`, `dservice_position`, `dservice_phone`, `dservice_fax`, `dservice_del`, `dservice_city`, `dservice_pcode`, `dservice_country`, `dservice_email`, `dservice_op_name`, `dservice_op_org`, `dservice_op_position`, `dservice_op_phone`, `dservice_op_fax`, `dservice_op_del`, `dservice_op_city`, `dservice_op_pcode`, `dservice_op_country`, `dservice_op_email`, `dcust_name`, `dcust_org`, `dcust_position`, `dcust_phone`, `dcust_fax`, `dcust_del`, `dcust_city`, `dcust_pcode`, `dcust_country`, `dcust_email`,`downer_name`, `downer_org`, `downer_position`, `downer_phone`, `downer_fax`, `downer_del`, `downer_city`, `downer_pcode`, `downer_country`, `downer_email`,`dcycle_name`, `dcycle_org`, `dcycle_position`, `dcycle_phone`, `dcycle_fax`, `dcycle_del`, `dcycle_city`, `dcycle_pcode`, `dcycle_country`, `dcycle_email`, `c_classification`, `use_limitations`, `access_constraints`, `other_constraints1`, `use_constraints`, `other_constraints2`, `spatial_west`, `spatial_east`, `spatial_north`, `spatial_south`, `temp_begin`, `temp_end`, `format1`, `format2`, `format3`, `format4`, `format5`,`fversion1`,`fversion2`,`fversion3`,`fversion4`,`fversion5`, `tools`,`parentidentifier`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`,`services_url`,`keywords1`,`keywords2`,`keywords3`,`keywords4`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `local_file_path`, `feedback`, `retentia`, `how_to_guide`, `data_ingest_tframe`, `metadata_catalog_tframe`, `data_qa`, `dcust_linkage1`, `dcust_name1`, `dcust_descp1`, `dcust_linkage2`, `dcust_name2`, `dcust_descp2`, `dcust_linkage3`, `dcust_name3`, `dcust_descp3`, `dcust_linkage4`, `dcust_name4`, `dcust_descp4`,`downer_linkage1`, `downer_name1`, `downer_descp1`, `downer_linkage2`, `downer_name2`, `downer_descp2`, `downer_linkage3`, `downer_name3`, `downer_descp3`, `downer_linkage4`, `downer_name4`, `downer_descp4`,`md_owner_linkage1`, `md_owner_name1`, `md_owner_descp1`, `md_owner_linkage2`, `md_owner_name2`, `md_owner_descp2`, `md_owner_linkage3`, `md_owner_name3`, `md_owner_descp3`, `md_owner_linkage4`, `md_owner_name4`, `md_owner_descp4`,`content_linkage1`, `content_name1`, `content_descp1`, `content_linkage2`, `content_name2`, `content_descp2`, `content_linkage3`, `content_name3`, `content_descp3`, `content_linkage4`, `content_name4`, `content_descp4`,`media_contact_linkage1`, `media_contact_name1`, `media_contact_descp1`, `media_contact_linkage2`, `media_contact_name2`, `media_contact_descp2`, `media_contact_linkage3`, `media_contact_name3`, `media_contact_descp3`, `media_contact_linkage4`, `media_contact_name4`, `media_contact_descp4`) values ('$fid','$tcat',$max_id,  '$user_id', '$date_post', '$version_id', '$hierarchy_level','$datacollection_title', '$nci_code', '$abstract', '$dataset_purpose', '$dataset_status', '$dataset_identifier','$data_source','$data_provenance','$doi','$alternate_title','$activities','$md_owner_name','$md_owner_org','$md_owner_position','$md_owner_phone','$md_owner_fax','$md_owner_del','$md_owner_city','$md_owner_pcode','$md_owner_country','$md_owner_email','$content_name','$content_org','$content_position','$content_phone','$content_fax','$content_del','$content_city','$content_pcode','$content_country','$content_email','$media_contact_name','$media_contact_org','$media_contact_position','$media_contact_phone','$media_contact_fax','$media_contact_del','$media_contact_city','$media_contact_pcode','$media_contact_country','$media_contact_email','$data_ingest_name','$data_ingest_org','$data_ingest_position','$data_ingest_phone','$data_ingest_fax','$data_ingest_del','$data_ingest_city','$data_ingest_pcode','$data_ingest_country','$data_ingest_email','$qa_name','$qa_org','$qa_position','$qa_phone','$qa_fax','$qa_del','$qa_city','$qa_pcode','$qa_country','$qa_email','$publish_name','$publish_org','$publish_position','$publish_phone','$publish_fax','$publish_del','$publish_city','$publish_pcode','$publish_country','$publish_email','$maint_name','$maint_org','$maint_position','$maint_phone','$maint_fax','$maint_del','$maint_city','$maint_pcode','$maint_country','$maint_email','$usupport_name','$usupport_org','$usupport_position','$usupport_phone','$usupport_fax','$usupport_del','$usupport_city','$usupport_pcode','$usupport_country','$usupport_email','$dservice_name','$dservice_org','$dservice_position','$dservice_phone','$dservice_fax','$dservice_del','$dservice_city','$dservice_pcode','$dservice_country','$dservice_email','$dservice_op_name','$dservice_op_org','$dservice_op_position','$dservice_op_phone','$dservice_op_fax','$dservice_op_del','$dservice_op_city','$dservice_op_pcode','$dservice_op_country','$dservice_op_email','$dcust_name','$dcust_org','$dcust_position','$dcust_phone','$dcust_fax','$dcust_del','$dcust_city','$dcust_pcode','$dcust_country','$dcust_email','$downer_name','$downer_org','$downer_position','$downer_phone','$downer_fax','$downer_del','$downer_city','$downer_pcode','$downer_country','$downer_email','$dcycle_name','$dcycle_org','$dcycle_position','$dcycle_phone','$dcycle_fax','$dcycle_del','$dcycle_city','$dcycle_pcode','$dcycle_country','$dcycle_email','$c_classification', '$use_limitations', '$access_constraints', '$other_constraints1','$use_constraints','$other_constraints2', '$west_value','$east_value','$north_value','$south_value', '$bposition','$eposition', '$format1', '$format2', '$format3', '$format4', '$format5','$fversion1','$fversion2','$fversion3','$fversion4','$fversion5', '$tools','$pidentifier', '$software', '$algorithms', '$flexibility', '$ingest_process', '$qa_process', '$maintenance_process', '$backup_recovery_plan', '$services','$services_url','$keywords1','$keywords2','$keywords3','$keywords4', '$catalog_registry', '$federated_catalogue', '$keywords', '$website', '$documentation', '$local_file_path', '$feedback', '$retentia', '$how_to_guide', '$data_ingest_tframe', '$metadata_catalog_tframe','$data_qa', '$dcust_linkage1', '$dcust_name1', '$dcust_descp1', '$dcust_linkage2', '$dcust_name2', '$dcust_descp2', '$dcust_linkage3', '$dcust_name3', '$dcust_descp3', '$dcust_linkage4', '$dcust_name4', '$dcust_descp4','$downer_linkage1', '$downer_name1', '$downer_descp1', '$downer_linkage2', '$downer_name2', '$downer_descp2', '$downer_linkage3', '$downer_name3', '$downer_descp3', '$downer_linkage4', '$downer_name4', '$downer_descp4','$md_owner_linkage1', '$md_owner_name1', '$md_owner_descp1', '$md_owner_linkage2', '$md_owner_name2', '$md_owner_descp2', '$md_owner_linkage3', '$md_owner_name3', '$md_owner_descp3', '$md_owner_linkage4', '$md_owner_name4', '$md_owner_descp4','$content_linkage1', '$content_name1', '$content_descp1', '$content_linkage2', '$content_name2', '$content_descp2', '$content_linkage3', '$content_name3', '$content_descp3', '$content_linkage4', '$content_name4', '$content_descp4','$media_contact_linkage1', '$media_contact_name1', '$media_contact_descp1', '$media_contact_linkage2', '$media_contact_name2', '$media_contact_descp2', '$media_contact_linkage3', '$media_contact_name3', '$media_contact_descp3', '$media_contact_linkage4', '$media_contact_name4', '$media_contact_descp4')";


$result1=MYSQL_QUERY($query1) ;

$query1_c="delete from nci_data_management.data_mgmt_papers where dm_id=$max_id";
$result1_c=MYSQL_QUERY($query1_c) ;

foreach ($_POST['paper_linkage'] as $k => $v) {
$val1=valid_data_bslash($_POST['paper_linkage'][$k]);
$val2=valid_data_bslash($_POST['paper_protocol'][$k]);
$val3=valid_data_bslash($_POST['paper_name'][$k]);
$val4=valid_data_bslash($_POST['paper_description'][$k]);
$val5=valid_data_bslash($_POST['paper_function'][$k]);
if ($val1!='') {$query=" Insert into nci_data_management.data_mgmt_papers (`dm_id`, `linkage`, `protocol`, `name`, `description`, `function`) values ($max_id,'$val1', '$val2','$val3','$val4','$val5')";
$result=MYSQL_QUERY($query) ;
}
}


$query1_b="delete from nci_data_management.data_mgmt_assoc_source where dm_id=$max_id";
$result1_b=MYSQL_QUERY($query1_b) ;

foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){
$query1_a=" Insert into nci_data_management.data_mgmt_assoc_source (`source_file_id`,`dm_id` ) values ('$sfid',$max_id)";
$result1_a=MYSQL_QUERY($query1_a) ;
}}


}








$sub="Data Management Plan - Temp";
$msg="A new temporary data management plan has been saved by $user_id ....
<br>
<br>
Title : ".$datacollection_title."<br><br>

Project : ".$nci_code;

//email_send_short($msg,$sub,1);
email_send($msg,$sub,1);


?>

<br><br>

<img src='../images/gtick.jpg' width=30 height=30>&nbsp;&nbsp; <font size=2>Data Management Plan temporarily saved.....
<br><br>
<i><font color=blue size=2>All Data Management plans will appear in our GeoNetwork within next 24-48 hours after approval from NCI ...</i></font>
<br>
 

<br><br>
<br><br>
<a href="../php/data_management_new.php" ><image src="../images/back.png"></a>


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br><br><br><br>
<br><br>


<?

}  else   {













$nci_code= (mysql_escape_string(valid_data($_POST['nci_code'])));

$arr_check='';
foreach ($privileges['project_id'] as &$value) {
if ($value==$nci_code) { $arr_check='t';}
}


if (($arr_check=='t') or ($_SESSION["uacat_".session_id()]=='1') ) {




$user_id= $_SESSION["uid_".session_id()];

$d=@date("Y-m-d");
$user_id=$_SESSION["uid_".session_id()] ;
 $date_post=$d;
 
$hierarchy_level= rtrim((mysql_escape_string(valid_data_bslash($_POST['hierarchy_level']))), "."); 
$datacollection_title= rtrim((mysql_escape_string(valid_data_bslash($_POST['datacollection_title']))), "."); 
$nci_code= rtrim((mysql_escape_string(valid_data_bslash($_POST['nci_code']))), "."); 
 $abstract= rtrim((mysql_escape_string(valid_data_bslash($_POST['abstract']))), "."); 
 $dataset_purpose= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_purpose']))), "."); 
 $dataset_status= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_status']))), "."); 
 $dataset_identifier= rtrim((mysql_escape_string(valid_data_bslash($_POST['dataset_identifier']))), "."); 
 $data_source= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_source']))), "."); 
 $data_provenance= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_provenance']))), "."); 
 $doi= rtrim((mysql_escape_string(valid_data_bslash($_POST['doi']))), "."); 
 $alternate_title= rtrim((mysql_escape_string(valid_data_bslash($_POST['alternate_title']))), "."); 
 $activities= rtrim((mysql_escape_string(valid_data_bslash($_POST['activities']))), "."); 
 $md_owner_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name']))), "."); 
 $md_owner_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_org']))), "."); 
 $md_owner_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_position']))), "."); 
 $md_owner_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_phone']))), "."); 
 $md_owner_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_fax']))), "."); 
 $md_owner_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_del']))), "."); 
 $md_owner_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_city']))), "."); 
 $md_owner_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_pcode']))), "."); 
 $md_owner_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_country']))), "."); 
 $md_owner_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_email']))), "."); 

$content_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name']))), "."); 
 $content_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_org']))), "."); 
 $content_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_position']))), "."); 
 $content_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_phone']))), "."); 
 $content_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_fax']))), "."); 
 $content_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_del']))), "."); 
 $content_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_city']))), "."); 
 $content_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_pcode']))), "."); 
 $content_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_country']))), "."); 
 $content_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_email']))), "."); 

$media_contact_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name']))), "."); 
 $media_contact_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_org']))), "."); 
 $media_contact_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_position']))), "."); 
 $media_contact_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_phone']))), "."); 
 $media_contact_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_fax']))), "."); 
 $media_contact_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_del']))), "."); 
 $media_contact_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_city']))), "."); 
 $media_contact_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_pcode']))), "."); 
 $media_contact_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_country']))), "."); 
 $media_contact_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_email']))), "."); 

$data_ingest_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_name']))), "."); 
 $data_ingest_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_org']))), "."); 
 $data_ingest_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_position']))), "."); 
 $data_ingest_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_phone']))), "."); 
 $data_ingest_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_fax']))), "."); 
 $data_ingest_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_del']))), "."); 
 $data_ingest_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_city']))), "."); 
 $data_ingest_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_pcode']))), "."); 
 $data_ingest_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_country']))), "."); 
 $data_ingest_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_email']))), "."); 

$qa_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_name']))), "."); 
 $qa_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_org']))), "."); 
 $qa_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_position']))), "."); 
 $qa_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_phone']))), "."); 
 $qa_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_fax']))), "."); 
 $qa_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_del']))), "."); 
 $qa_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_city']))), "."); 
 $qa_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_pcode']))), "."); 
 $qa_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_country']))), "."); 
 $qa_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_email']))), "."); 

$publish_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_name']))), "."); 
 $publish_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_org']))), "."); 
 $publish_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_position']))), "."); 
 $publish_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_phone']))), "."); 
 $publish_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_fax']))), "."); 
 $publish_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_del']))), "."); 
 $publish_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_city']))), "."); 
 $publish_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_pcode']))), "."); 
 $publish_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_country']))), "."); 
 $publish_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['publish_email']))), "."); 

 $maint_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_name']))), "."); 
 $maint_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_org']))), "."); 
 $maint_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_position']))), "."); 
 $maint_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_phone']))), "."); 
 $maint_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_fax']))), "."); 
 $maint_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_del']))), "."); 
 $maint_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_city']))), "."); 
 $maint_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_pcode']))), "."); 
 $maint_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_country']))), "."); 
 $maint_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['maint_email']))), "."); 
 
 $usupport_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_name']))), "."); 
 $usupport_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_org']))), "."); 
 $usupport_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_position']))), "."); 
 $usupport_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_phone']))), "."); 
 $usupport_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_fax']))), "."); 
 $usupport_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_del']))), "."); 
 $usupport_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_city']))), "."); 
 $usupport_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_pcode']))), "."); 
 $usupport_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_country']))), "."); 
 $usupport_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['usupport_email']))), "."); 
 
 $dservice_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_name']))), "."); 
 $dservice_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_org']))), "."); 
 $dservice_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_position']))), "."); 
 $dservice_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_phone']))), "."); 
 $dservice_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_fax']))), "."); 
 $dservice_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_del']))), "."); 
 $dservice_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_city']))), "."); 
 $dservice_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_pcode']))), "."); 
 $dservice_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_country']))), "."); 
 $dservice_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_email']))), "."); 

 $dservice_op_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_name']))), "."); 
 $dservice_op_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_org']))), "."); 
 $dservice_op_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_position']))), "."); 
 $dservice_op_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_phone']))), "."); 
 $dservice_op_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_fax']))), "."); 
 $dservice_op_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_del']))), "."); 
 $dservice_op_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_city']))), "."); 
 $dservice_op_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_pcode']))), "."); 
 $dservice_op_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_country']))), "."); 
 $dservice_op_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dservice_op_email']))), "."); 
 
 $dcycle_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_name']))), "."); 
 $dcycle_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_org']))), "."); 
 $dcycle_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_position']))), "."); 
 $dcycle_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_phone']))), "."); 
 $dcycle_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_fax']))), "."); 
 $dcycle_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_del']))), "."); 
 $dcycle_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_city']))), "."); 
 $dcycle_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_pcode']))), "."); 
 $dcycle_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_country']))), "."); 
 $dcycle_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcycle_email']))), "."); 
 
 $dcust_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name']))), "."); 
 $dcust_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_org']))), "."); 
 $dcust_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_position']))), "."); 
 $dcust_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_phone']))), "."); 
 $dcust_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_fax']))), "."); 
 $dcust_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_del']))), "."); 
 $dcust_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_city']))), "."); 
 $dcust_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_pcode']))), "."); 
 $dcust_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_country']))), "."); 
 $dcust_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_email']))), "."); 

 $downer_name= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name']))), "."); 
 $downer_org= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_org']))), "."); 
 $downer_position= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_position']))), "."); 
 $downer_phone= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_phone']))), "."); 
 $downer_fax= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_fax']))), "."); 
 $downer_del= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_del']))), "."); 
 $downer_city= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_city']))), "."); 
 $downer_pcode= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_pcode']))), "."); 
 $downer_country= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_country']))), "."); 
 $downer_email= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_email']))), "."); 


$c_classification= rtrim((mysql_escape_string(valid_data_bslash($_POST['c_classification']))), "."); 
 $use_limitations= rtrim((mysql_escape_string(valid_data_bslash($_POST['use_limitations']))), "."); 
 $access_constraints= rtrim((mysql_escape_string(valid_data_bslash($_POST['access_constraints']))), "."); 
 $other_constraints1= rtrim((mysql_escape_string(valid_data_bslash($_POST['other_constraints1']))), "."); 
 $use_constraints= rtrim((mysql_escape_string(valid_data_bslash($_POST['use_constraints']))), "."); 
 $other_constraints2= rtrim((mysql_escape_string(valid_data_bslash($_POST['other_constraints2']))), "."); 
 $east_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['east_value']))), "."); 
 $north_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['north_value']))), "."); 
 $south_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['south_value']))), "."); 
 $west_value= rtrim((mysql_escape_string(valid_data_bslash($_POST['west_value']))), "."); 
 $bposition= rtrim((mysql_escape_string(valid_data_bslash($_POST['bposition']))), "."); 
 $eposition= rtrim((mysql_escape_string(valid_data_bslash($_POST['eposition']))), "."); 
 $format1= rtrim((mysql_escape_string(valid_data_bslash($_POST['format1']))), "."); 
 $format2= rtrim((mysql_escape_string(valid_data_bslash($_POST['format2']))), "."); 
 $format3= rtrim((mysql_escape_string(valid_data_bslash($_POST['format3']))), "."); 
 $format4= rtrim((mysql_escape_string(valid_data_bslash($_POST['format4']))), "."); 
 $format5= rtrim((mysql_escape_string(valid_data_bslash($_POST['format5']))), "."); 
 $fversion1= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion1']))), "."); 
 $fversion2= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion2']))), "."); 
 $fversion3= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion3']))), "."); 
 $fversion4= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion4']))), "."); 
 $fversion5= rtrim((mysql_escape_string(valid_data_bslash($_POST['fversion5']))), "."); 
$tools= rtrim((mysql_escape_string(valid_data_bslash($_POST['tools']))), "."); 
 $pidentifier= rtrim((mysql_escape_string(valid_data_bslash($_POST['pidentifier']))), "."); 
$software= rtrim((mysql_escape_string(valid_data_bslash($_POST['software']))), "."); 
 $algorithms= rtrim((mysql_escape_string(valid_data_bslash($_POST['algorithms']))), "."); 
 $flexibility= rtrim((mysql_escape_string(valid_data_bslash($_POST['flexibility']))), "."); 
 $ingest_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['ingest_process']))), "."); 
 $qa_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['qa_process']))), "."); 
 $maintenance_process= rtrim((mysql_escape_string(valid_data_bslash($_POST['maintenance_process']))), "."); 
 $backup_recovery_plan= rtrim((mysql_escape_string(valid_data_bslash($_POST['backup_recovery_plan']))), "."); 
 $services= rtrim((mysql_escape_string(valid_data_bslash($_POST['services']))), "."); 
  $services_url= rtrim((mysql_escape_string(valid_data_bslash($_POST['services_url']))), "."); 
 $keywords1= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords1']))), "."); 
 $keywords2= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords2']))), "."); 
 $keywords3= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords3']))), "."); 
 $keywords4= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords4']))), "."); 
$catalog_registry= rtrim((mysql_escape_string(valid_data_bslash($_POST['catalog_registry']))), "."); 
 $federated_catalogue= rtrim((mysql_escape_string(valid_data_bslash($_POST['federated_catalogue']))), "."); 
 $keywords= rtrim((mysql_escape_string(valid_data_bslash($_POST['keywords']))), "."); 
 $website= rtrim((mysql_escape_string(valid_data_bslash($_POST['website']))), "."); 
 $documentation= rtrim((mysql_escape_string(valid_data_bslash($_POST['documentation']))), "."); 
 $local_file_path= rtrim((mysql_escape_string(valid_data_bslash($_POST['local_file_path']))), "."); 
  $feedback= rtrim((mysql_escape_string(valid_data_bslash($_POST['feedback']))), "."); 
 $retentia= rtrim((mysql_escape_string(valid_data_bslash($_POST['retentia']))), "."); 
  $how_to_guide= rtrim((mysql_escape_string(valid_data_bslash($_POST['how_to_guide']))), "."); 
 $data_ingest_tframe= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_ingest_tframe']))), "."); 
 $metadata_catalog_tframe= rtrim((mysql_escape_string(valid_data_bslash($_POST['metadata_catalog_tframe']))), "."); 
 $data_qa= rtrim((mysql_escape_string(valid_data_bslash($_POST['data_qa']))), "."); 
 $fid= rtrim((mysql_escape_string(valid_data_bslash($_POST['file_identifier']))), "."); 
$tcat= rtrim((mysql_escape_string(valid_data_bslash($_POST['tcat']))), "."); 
 $downer_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage1']))), ".");
 $downer_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name1']))), ".");
 $downer_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp1']))), ".");
 $downer_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage2']))), ".");
 $downer_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name2']))), ".");
 $downer_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp2']))), ".");
 $downer_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage3']))), ".");
 $downer_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name3']))), ".");
 $downer_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp3']))), ".");
 $downer_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_linkage4']))), ".");
 $downer_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_name4']))), ".");
 $downer_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['downer_descp4']))), ".");
 
 
 $dcust_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage1']))), ".");
 $dcust_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name1']))), ".");
 $dcust_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp1']))), ".");
 $dcust_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage2']))), ".");
 $dcust_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name2']))), ".");
 $dcust_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp2']))), ".");
 $dcust_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage3']))), ".");
 $dcust_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name3']))), ".");
 $dcust_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp3']))), ".");
 $dcust_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_linkage4']))), ".");
 $dcust_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_name4']))), ".");
 $dcust_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['dcust_descp4']))), ".");
 
 $md_owner_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage1']))), ".");
 $md_owner_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name1']))), ".");
 $md_owner_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp1']))), ".");
 $md_owner_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage2']))), ".");
 $md_owner_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name2']))), ".");
 $md_owner_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp2']))), ".");
 $md_owner_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage3']))), ".");
 $md_owner_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name3']))), ".");
 $md_owner_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp3']))), ".");
 $md_owner_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_linkage4']))), ".");
 $md_owner_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_name4']))), ".");
 $md_owner_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['md_owner_descp4']))), ".");
 
 $content_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage1']))), ".");
 $content_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name1']))), ".");
 $content_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp1']))), ".");
 $content_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage2']))), ".");
 $content_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name2']))), ".");
 $content_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp2']))), ".");
 $content_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage3']))), ".");
 $content_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name3']))), ".");
 $content_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp3']))), ".");
 $content_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_linkage4']))), ".");
 $content_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_name4']))), ".");
 $content_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['content_descp4']))), ".");
 
 $media_contact_linkage1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage1']))), ".");
 $media_contact_name1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name1']))), ".");
 $media_contact_descp1= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp1']))), ".");
 $media_contact_linkage2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage2']))), ".");
 $media_contact_name2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name2']))), ".");
 $media_contact_descp2= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp2']))), ".");
 $media_contact_linkage3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage3']))), ".");
 $media_contact_name3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name3']))), ".");
 $media_contact_descp3= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp3']))), ".");
 $media_contact_linkage4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_linkage4']))), ".");
 $media_contact_name4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_name4']))), ".");
 $media_contact_descp4= rtrim((mysql_escape_string(valid_data_bslash($_POST['media_contact_descp4']))), ".");


$update_check='';


$qr1=@MYSQL_QUERY("select count(dm_id) as cc from nci_data_management.data_mgmt where file_identifier='$fid'") ;
$rq1=@MYSQL_fetch_array($qr1);
$cnt=$rq1['cc'];



if ($cnt==0) {

$res1=@MYSQL_QUERY("select max(dm_id) as cc  from nci_data_management.data_mgmt") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
$max_id=$max_id+1;
$dm_id=$max_id;
$update_check="saved by ";
$version_id=1;
$language='eng';
$characterset='utf8';
$datetype='creation';
$version_id=1;


}

else {
$qr2=@MYSQL_QUERY("select * from nci_data_management.data_mgmt where file_identifier='$fid'") ;
$rq2=@MYSQL_fetch_array($qr2);
$dm_id=$rq2['dm_id'];
$max_id=$dm_id;
$version_id=$rq2['version_id'];
 $file_identifier=$rq2['file_identifier'];
$version_id=$version_id+1;

$hierarchy_levelz= $rq2['hierarchy_level'];
$datacollection_titlez= $rq2['datacollection_title'];
$nci_codez= $rq2['nci_code'];
 $abstractz= $rq2['abstract'];
 $dataset_purposez= $rq2['dataset_purpose'];
 $dataset_statusz= $rq2['dataset_status'];
 $dataset_identifierz= $rq2['dataset_identifier'];
 $data_sourcez= $rq2['data_source'];
 $data_provenancez= $rq2['data_provenance'];
 $doiz= $rq2['doi'];
 $alternate_titlez= $rq2['alternate_title'];
 $activitiesz= $rq2['activities'];
 $md_owner_namez= $rq2['md_owner_name'];
 $md_owner_orgz= $rq2['md_owner_org'];
 $md_owner_positionz= $rq2['md_owner_position'];
 $md_owner_phonez= $rq2['md_owner_phone'];
 $md_owner_faxz= $rq2['md_owner_fax'];
 $md_owner_delz= $rq2['md_owner_del'];
 $md_owner_cityz= $rq2['md_owner_city'];
 $md_owner_pcodez= $rq2['md_owner_pcode'];
 $md_owner_countryz= $rq2['md_owner_country'];
 $md_owner_emailz= $rq2['md_owner_email'];
 
 $content_namez= $rq2['content_name'];
 $content_orgz= $rq2['content_org'];
 $content_positionz= $rq2['content_position'];
 $content_phonez= $rq2['content_phone'];
 $content_faxz= $rq2['content_fax'];
 $content_delz= $rq2['content_del'];
 $content_cityz= $rq2['content_city'];
 $content_pcodez= $rq2['content_pcode'];
 $content_countryz= $rq2['content_country'];
 $content_emailz= $rq2['content_email'];

$media_contact_namez= $rq2['media_contact_name'];
 $media_contact_orgz= $rq2['media_contact_org'];
 $media_contact_positionz= $rq2['media_contact_position'];
 $media_contact_phonez= $rq2['media_contact_phone'];
 $media_contact_faxz= $rq2['media_contact_fax'];
 $media_contact_delz= $rq2['media_contact_del'];
 $media_contact_cityz= $rq2['media_contact_city'];
 $media_contact_pcodez= $rq2['media_contact_pcode'];
 $media_contact_countryz= $rq2['media_contact_country'];
 $media_contact_emailz= $rq2['media_contact_email'];

$data_ingest_namez= $rq2['data_ingest_name'];
 $data_ingest_orgz= $rq2['data_ingest_org'];
 $data_ingest_positionz= $rq2['data_ingest_position'];
 $data_ingest_phonez= $rq2['data_ingest_phone'];
 $data_ingest_faxz= $rq2['data_ingest_fax'];
 $data_ingest_delz= $rq2['data_ingest_del'];
 $data_ingest_cityz= $rq2['data_ingest_city'];
 $data_ingest_pcodez= $rq2['data_ingest_pcode'];
 $data_ingest_countryz= $rq2['data_ingest_country'];
 $data_ingest_emailz= $rq2['data_ingest_email'];

$qa_namez= $rq2['qa_name'];
 $qa_orgz= $rq2['qa_org'];
 $qa_positionz= $rq2['qa_position'];
 $qa_phonez= $rq2['qa_phone'];
 $qa_faxz= $rq2['qa_fax'];
 $qa_delz= $rq2['qa_del'];
 $qa_cityz= $rq2['qa_city'];
 $qa_pcodez= $rq2['qa_pcode'];
 $qa_countryz= $rq2['qa_country'];
 $qa_emailz= $rq2['qa_email'];
 
 $publish_namez= $rq2['publish_name'];
 $publish_orgz= $rq2['publish_org'];
 $publish_positionz= $rq2['publish_position'];
 $publish_phonez= $rq2['publish_phone'];
 $publish_faxz= $rq2['publish_fax'];
 $publish_delz= $rq2['publish_del'];
 $publish_cityz= $rq2['publish_city'];
 $publish_pcodez= $rq2['publish_pcode'];
 $publish_countryz= $rq2['publish_country'];
 $publish_emailz= $rq2['publish_email'];

 $maint_namez= $rq2['maint_name'];
 $maint_orgz= $rq2['maint_org'];
 $maint_positionz= $rq2['maint_position'];
 $maint_phonez= $rq2['maint_phone'];
 $maint_faxz= $rq2['maint_fax'];
 $maint_delz= $rq2['maint_del'];
 $maint_cityz= $rq2['maint_city'];
 $maint_pcodez= $rq2['maint_pcode'];
 $maint_countryz= $rq2['maint_country'];
 $maint_emailz= $rq2['maint_email'];

 $usupport_namez= $rq2['usupport_name'];
 $usupport_orgz= $rq2['usupport_org'];
 $usupport_positionz= $rq2['usupport_position'];
 $usupport_phonez= $rq2['usupport_phone'];
 $usupport_faxz= $rq2['usupport_fax'];
 $usupport_delz= $rq2['usupport_del'];
 $usupport_cityz= $rq2['usupport_city'];
 $usupport_pcodez= $rq2['usupport_pcode'];
 $usupport_countryz= $rq2['usupport_country'];
 $usupport_emailz= $rq2['usupport_email'];

 $dservice_namez= $rq2['dservice_name'];
 $dservice_orgz= $rq2['dservice_org'];
 $dservice_positionz= $rq2['dservice_position'];
 $dservice_phonez= $rq2['dservice_phone'];
 $dservice_faxz= $rq2['dservice_fax'];
 $dservice_delz= $rq2['dservice_del'];
 $dservice_cityz= $rq2['dservice_city'];
 $dservice_pcodez= $rq2['dservice_pcode'];
 $dservice_countryz= $rq2['dservice_country'];
 $dservice_emailz= $rq2['dservice_email'];
 
  $dservice_op_namez= $rq2['dservice_op_name'];
 $dservice_op_orgz= $rq2['dservice_op_org'];
 $dservice_op_positionz= $rq2['dservice_op_position'];
 $dservice_op_phonez= $rq2['dservice_op_phone'];
 $dservice_op_faxz= $rq2['dservice_op_fax'];
 $dservice_op_delz= $rq2['dservice_op_del'];
 $dservice_op_cityz= $rq2['dservice_op_city'];
 $dservice_op_pcodez= $rq2['dservice_op_pcode'];
 $dservice_op_countryz= $rq2['dservice_op_country'];
 $dservice_op_emailz= $rq2['dservice_op_email'];

 $dcycle_namez= $rq2['dcycle_name'];
 $dcycle_orgz= $rq2['dcycle_org'];
 $dcycle_positionz= $rq2['dcycle_position'];
 $dcycle_phonez= $rq2['dcycle_phone'];
 $dcycle_faxz= $rq2['dcycle_fax'];
 $dcycle_delz= $rq2['dcycle_del'];
 $dcycle_cityz= $rq2['dcycle_city'];
 $dcycle_pcodez= $rq2['dcycle_pcode'];
 $dcycle_countryz= $rq2['dcycle_country'];
 $dcycle_emailz= $rq2['dcycle_email'];
 
  $downer_namez= $rq2['downer_name'];
 $downer_orgz= $rq2['downer_org'];
 $downer_positionz= $rq2['downer_position'];
 $downer_phonez= $rq2['downer_phone'];
 $downer_faxz= $rq2['downer_fax'];
 $downer_delz= $rq2['downer_del'];
 $downer_cityz= $rq2['downer_city'];
 $downer_pcodez= $rq2['downer_pcode'];
 $downer_countryz= $rq2['downer_country'];
 $downer_emailz= $rq2['downer_email'];
 
  $dcust_namez= $rq2['dcust_name'];
 $dcust_orgz= $rq2['dcust_org'];
 $dcust_positionz= $rq2['dcust_position'];
 $dcust_phonez= $rq2['dcust_phone'];
 $dcust_faxz= $rq2['dcust_fax'];
 $dcust_delz= $rq2['dcust_del'];
 $dcust_cityz= $rq2['dcust_city'];
 $dcust_pcodez= $rq2['dcust_pcode'];
 $dcust_countryz= $rq2['dcust_country'];
 $dcust_emailz= $rq2['dcust_email'];


 $c_classificationz= $rq2['c_classification'];
 $use_limitationsz= $rq2['use_limitations'];
 $access_constraintsz= $rq2['access_constraints'];
 $other_constraints1z= $rq2['other_constraints1'];
 $use_constraintsz= $rq2['use_constraints'];
 $other_constraints2z= $rq2['other_constraints2'];
$east_valuez=$rq2['spatial_east'];
 $north_valuez=$rq2['spatial_north'];
 $south_valuez=$rq2['spatial_south'];
 $west_valuez=$rq2['spatial_west'];
 $bpositionz=$rq2['temp_begin'];
 $epositionz=$rq2['temp_end'];
 $format1z= $rq2['format1'];
 $format2z= $rq2['format2'];
 $format3z= $rq2['format3'];
 $format4z= $rq2['format4'];
 $format5z= $rq2['format5'];
 $fversion1z= $rq2['fversion1'];
 $fversion2z= $rq2['fversion2'];
 $fversion3z= $rq2['fversion3'];
 $fversion4z= $rq2['fversion4'];
 $fversion5z= $rq2['fversion5'];
 $toolsz= $rq2['tools'];
 $pidentifierz= $rq2['parentidentifier'];
$softwarez= $rq2['software'];
 $algorithmsz= $rq2['algorithms'];
 $flexibilityz= $rq2['flexibility'];
 $ingest_processz= $rq2['ingest_process'];
 $qa_processz= $rq2['qa_process'];
 $maintenance_processz= $rq2['maintenance_process'];
 $backup_recovery_planz= $rq2['backup_recovery_plan'];
 $servicesz= $rq2['services'];
 $services_urlz= $rq2['services_url'];
 $keywords1z= $rq2['keywords1'];
 $keywords2z= $rq2['keywords2'];
 $keywords3z= $rq2['keywords3'];
 $keywords4z= $rq2['keywords4'];
 $catalog_registryz= $rq2['catalog_registry'];
 $federated_cataloguez= $rq2['federated_catalogue'];
 $keywordsz= $rq2['keywords'];
 $websitez= $rq2['website'];
 $documentationz= $rq2['documentation'];
 $local_file_pathz= $rq2['local_file_path'];
  $feedbackz= $rq2['feedback'];
 $retentiaz= $rq2['retentia'];
  $how_to_guidez= $rq2['how_to_guide'];
 $data_ingest_tframez= $rq2['data_ingest_tframe'];
 $metadata_catalog_tframez= $rq2['metadata_catalog_tframe'];
 $data_qaz= $rq2['data_qa'];

 $downer_linkage1z= $rq2['downer_linkage1'];
 $downer_name1z= $rq2['downer_name1'];
 $downer_descp1z= $rq2['downer_descp1']; 
 $downer_linkage2z= $rq2['downer_linkage2'];
 $downer_name2z= $rq2['downer_name2'];
 $downer_descp2z= $rq2['downer_descp2']; 
 $downer_linkage3z= $rq2['downer_linkage2'];
 $downer_name3z= $rq2['downer_name3'];
 $downer_descp3z= $rq2['downer_descp3']; 
 $downer_linkage4z= $rq2['downer_linkage4'];
 $downer_name4z= $rq2['downer_name4'];
 $downer_descp4z= $rq2['downer_descp4']; 
 
 $dcust_linkage1z= $rq2['dcust_linkage1'];
 $dcust_name1z= $rq2['dcust_name1'];
 $dcust_descp1z= $rq2['dcust_descp1']; 
 $dcust_linkage2z= $rq2['dcust_linkage2'];
 $dcust_name2z= $rq2['dcust_name2'];
 $dcust_descp2z= $rq2['dcust_descp2']; 
 $dcust_linkage3z= $rq2['dcust_linkage2'];
 $dcust_name3z= $rq2['dcust_name3'];
 $dcust_descp3z= $rq2['dcust_descp3']; 
 $dcust_linkage4z= $rq2['dcust_linkage4'];
 $dcust_name4z= $rq2['dcust_name4'];
 $dcust_descp4z= $rq2['dcust_descp4']; 
 
 $md_owner_linkage1z= $rq2['md_owner_linkage1'];
 $md_owner_name1z= $rq2['md_owner_name1'];
 $md_owner_descp1z= $rq2['md_owner_descp1']; 
 $md_owner_linkage2z= $rq2['md_owner_linkage2'];
 $md_owner_name2z= $rq2['md_owner_name2'];
 $md_owner_descp2z= $rq2['md_owner_descp2']; 
 $md_owner_linkage3z= $rq2['md_owner_linkage2'];
 $md_owner_name3z= $rq2['md_owner_name3'];
 $md_owner_descp3z= $rq2['md_owner_descp3']; 
 $md_owner_linkage4z= $rq2['md_owner_linkage4'];
 $md_owner_name4z= $rq2['md_owner_name4'];
 $md_owner_descp4z= $rq2['md_owner_descp4']; 
 
 $content_linkage1z= $rq2['content_linkage1'];
 $content_name1z= $rq2['content_name1'];
 $content_descp1z= $rq2['content_descp1']; 
 $content_linkage2z= $rq2['content_linkage2'];
 $content_name2z= $rq2['content_name2'];
 $content_descp2z= $rq2['content_descp2']; 
 $content_linkage3z= $rq2['content_linkage2'];
 $content_name3z= $rq2['content_name3'];
 $content_descp3z= $rq2['content_descp3']; 
 $content_linkage4z= $rq2['content_linkage4'];
 $content_name4z= $rq2['content_name4'];
 $content_descp4z= $rq2['content_descp4']; 
 
 $media_contact_linkage1z= $rq2['media_contact_linkage1'];
 $media_contact_name1z= $rq2['media_contact_name1'];
 $media_contact_descp1z= $rq2['media_contact_descp1']; 
 $media_contact_linkage2z= $rq2['media_contact_linkage2'];
 $media_contact_name2z= $rq2['media_contact_name2'];
 $media_contact_descp2z= $rq2['media_contact_descp2']; 
 $media_contact_linkage3z= $rq2['media_contact_linkage2'];
 $media_contact_name3z= $rq2['media_contact_name3'];
 $media_contact_descp3z= $rq2['media_contact_descp3']; 
 $media_contact_linkage4z= $rq2['media_contact_linkage4'];
 $media_contact_name4z= $rq2['media_contact_name4'];
 $media_contact_descp4z= $rq2['media_contact_descp4']; 

$res1a=@MYSQL_QUERY("delete  from nci_data_management.data_mgmt where file_identifier='$file_identifier'") ;
$update_check="updated by ";








}

 
 
$query1=" Insert into nci_data_management.data_mgmt ( `dm_id`, `user_id`, `date_post`, `version_id`, `hierarchy_level`, `datacollection_title`, `nci_code`, `abstract`, `dataset_purpose`, `dataset_status`, `dataset_identifier`, `data_source`, `data_provenance`, `doi`, `alternate_title`, `activities`, `md_owner_name`, `md_owner_org`, `md_owner_position`, `md_owner_phone`, `md_owner_fax`, `md_owner_del`, `md_owner_city`, `md_owner_pcode`, `md_owner_country`, `md_owner_email`, `content_name`, `content_org`, `content_position`, `content_phone`, `content_fax`, `content_del`, `content_city`, `content_pcode`, `content_country`, `content_email`, `media_contact_name`, `media_contact_org`, `media_contact_position`, `media_contact_phone`, `media_contact_fax`, `media_contact_del`, `media_contact_city`, `media_contact_pcode`, `media_contact_country`, `media_contact_email`, `data_ingest_name`, `data_ingest_org`, `data_ingest_position`, `data_ingest_phone`, `data_ingest_fax`, `data_ingest_del`, `data_ingest_city`, `data_ingest_pcode`, `data_ingest_country`, `data_ingest_email`, `qa_name`, `qa_org`, `qa_position`, `qa_phone`, `qa_fax`, `qa_del`, `qa_city`, `qa_pcode`, `qa_country`, `qa_email`, `publish_name`, `publish_org`, `publish_position`, `publish_phone`, `publish_fax`, `publish_del`, `publish_city`, `publish_pcode`, `publish_country`, `publish_email`, `maint_name`, `maint_org`, `maint_position`, `maint_phone`, `maint_fax`, `maint_del`, `maint_city`, `maint_pcode`, `maint_country`, `maint_email`, `usupport_name`, `usupport_org`, `usupport_position`, `usupport_phone`, `usupport_fax`, `usupport_del`, `usupport_city`, `usupport_pcode`, `usupport_country`, `usupport_email`, `dservice_name`, `dservice_org`, `dservice_position`, `dservice_phone`, `dservice_fax`, `dservice_del`, `dservice_city`, `dservice_pcode`, `dservice_country`, `dservice_email`, `dservice_op_name`, `dservice_op_org`, `dservice_op_position`, `dservice_op_phone`, `dservice_op_fax`, `dservice_op_del`, `dservice_op_city`, `dservice_op_pcode`, `dservice_op_country`, `dservice_op_email`,  `dcust_name`, `dcust_org`, `dcust_position`, `dcust_phone`, `dcust_fax`, `dcust_del`, `dcust_city`, `dcust_pcode`, `dcust_country`, `dcust_email`,`downer_name`, `downer_org`, `downer_position`, `downer_phone`, `downer_fax`, `downer_del`, `downer_city`, `downer_pcode`, `downer_country`, `downer_email`,`dcycle_name`, `dcycle_org`, `dcycle_position`, `dcycle_phone`, `dcycle_fax`, `dcycle_del`, `dcycle_city`, `dcycle_pcode`, `dcycle_country`, `dcycle_email`, `c_classification`, `use_limitations`, `access_constraints`, `other_constraints1`, `use_constraints`, `other_constraints2`, `spatial_west`, `spatial_east`, `spatial_north`, `spatial_south`, `temp_begin`, `temp_end`, `format1`, `format2`, `format3`, `format4`, `format5`,`fversion1`,`fversion2`,`fversion3`,`fversion4`,`fversion5`, `tools`,`parentidentifier`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`,`services_url`,`keywords1`,`keywords2`,`keywords3`,`keywords4`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `local_file_path`, `feedback`, `retentia`, `how_to_guide`, `data_ingest_tframe`, `metadata_catalog_tframe`, `data_qa` ,`file_identifier`,`tcat`, `dcust_linkage1`, `dcust_name1`, `dcust_descp1`, `dcust_linkage2`, `dcust_name2`, `dcust_descp2`, `dcust_linkage3`, `dcust_name3`, `dcust_descp3`, `dcust_linkage4`, `dcust_name4`, `dcust_descp4`,`downer_linkage1`, `downer_name1`, `downer_descp1`, `downer_linkage2`, `downer_name2`, `downer_descp2`, `downer_linkage3`, `downer_name3`, `downer_descp3`, `downer_linkage4`, `downer_name4`, `downer_descp4`,`md_owner_linkage1`, `md_owner_name1`, `md_owner_descp1`, `md_owner_linkage2`, `md_owner_name2`, `md_owner_descp2`, `md_owner_linkage3`, `md_owner_name3`, `md_owner_descp3`, `md_owner_linkage4`, `md_owner_name4`, `md_owner_descp4`,`content_linkage1`, `content_name1`, `content_descp1`, `content_linkage2`, `content_name2`, `content_descp2`, `content_linkage3`, `content_name3`, `content_descp3`, `content_linkage4`, `content_name4`, `content_descp4`,`media_contact_linkage1`, `media_contact_name1`, `media_contact_descp1`, `media_contact_linkage2`, `media_contact_name2`, `media_contact_descp2`, `media_contact_linkage3`, `media_contact_name3`, `media_contact_descp3`, `media_contact_linkage4`, `media_contact_name4`, `media_contact_descp4`) values ($max_id,  '$user_id', '$date_post', '$version_id', '$hierarchy_level','$datacollection_title', '$nci_code', '$abstract', '$dataset_purpose', '$dataset_status', '$dataset_identifier','$data_source','$data_provenance','$doi','$alternate_title','$activities','$md_owner_name','$md_owner_org','$md_owner_position','$md_owner_phone','$md_owner_fax','$md_owner_del','$md_owner_city','$md_owner_pcode','$md_owner_country','$md_owner_email','$content_name','$content_org','$content_position','$content_phone','$content_fax','$content_del','$content_city','$content_pcode','$content_country','$content_email','$media_contact_name','$media_contact_org','$media_contact_position','$media_contact_phone','$media_contact_fax','$media_contact_del','$media_contact_city','$media_contact_pcode','$media_contact_country','$media_contact_email','$data_ingest_name','$data_ingest_org','$data_ingest_position','$data_ingest_phone','$data_ingest_fax','$data_ingest_del','$data_ingest_city','$data_ingest_pcode','$data_ingest_country','$data_ingest_email','$qa_name','$qa_org','$qa_position','$qa_phone','$qa_fax','$qa_del','$qa_city','$qa_pcode','$qa_country','$qa_email','$publish_name','$publish_org','$publish_position','$publish_phone','$publish_fax','$publish_del','$publish_city','$publish_pcode','$publish_country','$publish_email','$maint_name','$maint_org','$maint_position','$maint_phone','$maint_fax','$maint_del','$maint_city','$maint_pcode','$maint_country','$maint_email','$usupport_name','$usupport_org','$usupport_position','$usupport_phone','$usupport_fax','$usupport_del','$usupport_city','$usupport_pcode','$usupport_country','$usupport_email','$dservice_name','$dservice_org','$dservice_position','$dservice_phone','$dservice_fax','$dservice_del','$dservice_city','$dservice_pcode','$dservice_country','$dservice_email','$dservice_op_name','$dservice_op_org','$dservice_op_position','$dservice_op_phone','$dservice_op_fax','$dservice_op_del','$dservice_op_city','$dservice_op_pcode','$dservice_op_country','$dservice_op_email','$dcust_name','$dcust_org','$dcust_position','$dcust_phone','$dcust_fax','$dcust_del','$dcust_city','$dcust_pcode','$dcust_country','$dcust_email','$downer_name','$downer_org','$downer_position','$downer_phone','$downer_fax','$downer_del','$downer_city','$downer_pcode','$downer_country','$downer_email','$dcycle_name','$dcycle_org','$dcycle_position','$dcycle_phone','$dcycle_fax','$dcycle_del','$dcycle_city','$dcycle_pcode','$dcycle_country','$dcycle_email','$c_classification', '$use_limitations', '$access_constraints', '$other_constraints1','$use_constraints','$other_constraints2', '$west_value','$east_value','$north_value','$south_value', '$bposition','$eposition', '$format1', '$format2', '$format3', '$format4', '$format5','$fversion1','$fversion2','$fversion3','$fversion4','$fversion5', '$tools', '$pidentifier', '$software', '$algorithms', '$flexibility', '$ingest_process', '$qa_process', '$maintenance_process', '$backup_recovery_plan', '$services','$services_url','$keywords1','$keywords2','$keywords3','$keywords4', '$catalog_registry', '$federated_catalogue', '$keywords', '$website', '$documentation', '$local_file_path', '$feedback', '$retentia', '$how_to_guide', '$data_ingest_tframe', '$metadata_catalog_tframe','$data_qa','$fid','$tcat','$dcust_linkage1', '$dcust_name1', '$dcust_descp1', '$dcust_linkage2', '$dcust_name2', '$dcust_descp2', '$dcust_linkage3', '$dcust_name3', '$dcust_descp3', '$dcust_linkage4', '$dcust_name4', '$dcust_descp4','$downer_linkage1', '$downer_name1', '$downer_descp1', '$downer_linkage2', '$downer_name2', '$downer_descp2', '$downer_linkage3', '$downer_name3', '$downer_descp3', '$downer_linkage4', '$downer_name4', '$downer_descp4','$md_owner_linkage1', '$md_owner_name1', '$md_owner_descp1', '$md_owner_linkage2', '$md_owner_name2', '$md_owner_descp2', '$md_owner_linkage3', '$md_owner_name3', '$md_owner_descp3', '$md_owner_linkage4', '$md_owner_name4', '$md_owner_descp4','$content_linkage1', '$content_name1', '$content_descp1', '$content_linkage2', '$content_name2', '$content_descp2', '$content_linkage3', '$content_name3', '$content_descp3', '$content_linkage4', '$content_name4', '$content_descp4','$media_contact_linkage1', '$media_contact_name1', '$media_contact_descp1', '$media_contact_linkage2', '$media_contact_name2', '$media_contact_descp2', '$media_contact_linkage3', '$media_contact_name3', '$media_contact_descp3', '$media_contact_linkage4', '$media_contact_name4', '$media_contact_descp4')";

$result1=MYSQL_QUERY($query1) ; 

$query1_c="delete from nci_data_management.data_mgmt_papers where dm_id=$max_id";
$result1_c=MYSQL_QUERY($query1_c) ;

foreach ($_POST['paper_linkage'] as $k => $v) {
$val1=valid_data_bslash($_POST['paper_linkage'][$k]);
$val2=valid_data_bslash($_POST['paper_protocol'][$k]);
$val3=valid_data_bslash($_POST['paper_name'][$k]);
$val4=valid_data_bslash($_POST['paper_description'][$k]);
$val5=valid_data_bslash($_POST['paper_function'][$k]);
if ($val1!='') {$query=" Insert into nci_data_management.data_mgmt_papers (`dm_id`, `linkage`, `protocol`, `name`, `description`, `function`) values ($max_id,'$val1', '$val2','$val3','$val4','$val5')";
$result=MYSQL_QUERY($query) ;
}
}

$query1_b="delete from nci_data_management.data_mgmt_assoc_source where dm_id=$max_id";
$result1_b=MYSQL_QUERY($query1_b) ;

foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){
$query1_a=" Insert into nci_data_management.data_mgmt_assoc_source (`source_file_id`,`dm_id` ) values ('$sfid',$max_id)";
$result1_a=MYSQL_QUERY($query1_a) ;
}}







$query1a=" Insert into nci_data_management.data_mgmt_history ( `file_identifier`,`tcat`,`dm_id`, `user_id`, `date_post`, `version_id`, `hierarchy_level`, `datacollection_title`, `nci_code`, `abstract`,  `dataset_purpose`, `dataset_status`, `dataset_identifier`, `data_source`, `data_provenance`, `doi`, `alternate_title`, `activities`, `md_owner_name`, `md_owner_org`, `md_owner_position`, `md_owner_phone`, `md_owner_fax`, `md_owner_del`, `md_owner_city`, `md_owner_pcode`, `md_owner_country`, `md_owner_email`, `content_name`, `content_org`, `content_position`, `content_phone`, `content_fax`, `content_del`, `content_city`, `content_pcode`, `content_country`, `content_email`, `media_contact_name`, `media_contact_org`, `media_contact_position`, `media_contact_phone`, `media_contact_fax`, `media_contact_del`, `media_contact_city`, `media_contact_pcode`, `media_contact_country`, `media_contact_email`, `data_ingest_name`, `data_ingest_org`, `data_ingest_position`, `data_ingest_phone`, `data_ingest_fax`, `data_ingest_del`, `data_ingest_city`, `data_ingest_pcode`, `data_ingest_country`, `data_ingest_email`, `qa_name`, `qa_org`, `qa_position`, `qa_phone`, `qa_fax`, `qa_del`, `qa_city`, `qa_pcode`, `qa_country`, `qa_email`, `publish_name`, `publish_org`, `publish_position`, `publish_phone`, `publish_fax`, `publish_del`, `publish_city`, `publish_pcode`, `publish_country`, `publish_email`, `maint_name`, `maint_org`, `maint_position`, `maint_phone`, `maint_fax`, `maint_del`, `maint_city`, `maint_pcode`, `maint_country`, `maint_email`, `usupport_name`, `usupport_org`, `usupport_position`, `usupport_phone`, `usupport_fax`, `usupport_del`, `usupport_city`, `usupport_pcode`, `usupport_country`, `usupport_email`, `dservice_name`, `dservice_org`, `dservice_position`, `dservice_phone`, `dservice_fax`, `dservice_del`, `dservice_city`, `dservice_pcode`, `dservice_country`, `dservice_email`, `dservice_op_name`, `dservice_op_org`, `dservice_op_position`, `dservice_op_phone`, `dservice_op_fax`, `dservice_op_del`, `dservice_op_city`, `dservice_op_pcode`, `dservice_op_country`, `dservice_op_email`, `dcust_name`, `dcust_org`, `dcust_position`, `dcust_phone`, `dcust_fax`, `dcust_del`, `dcust_city`, `dcust_pcode`, `dcust_country`, `dcust_email`, `downer_name`, `downer_org`, `downer_position`, `downer_phone`, `downer_fax`, `downer_del`, `downer_city`, `downer_pcode`, `downer_country`, `downer_email`,`dcycle_name`, `dcycle_org`, `dcycle_position`, `dcycle_phone`, `dcycle_fax`, `dcycle_del`, `dcycle_city`, `dcycle_pcode`, `dcycle_country`, `dcycle_email`, `c_classification`, `use_limitations`, `access_constraints`, `other_constraints1`, `use_constraints`, `other_constraints2`, `spatial_west`, `spatial_east`, `spatial_north`, `spatial_south`, `temp_begin`, `temp_end`, `format1`, `format2`, `format3`, `format4`, `format5`,`fversion1`,`fversion2`,`fversion3`,`fversion4`,`fversion5`, `tools`, `parentidentifier`,`software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`,`services_url`,`keywords1`,`keywords2`,`keywords3`,`keywords4`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `local_file_path`, `feedback`, `retentia`, `how_to_guide`, `data_ingest_tframe`, `metadata_catalog_tframe`, `data_qa` ) values ('$fid','$tcat',$max_id,  '$user_id', '$date_post', '$version_id', '$hierarchy_levelz','$datacollection_titlez', '$nci_codez', '$abstractz', '$dataset_purposez', '$dataset_statusz', '$dataset_identifierz','$data_sourcez','$data_provenancez','$doiz','$alternate_titlez','$activitiesz','$md_owner_namez','$md_owner_orgz','$md_owner_positionz','$md_owner_phonez','$md_owner_faxz','$md_owner_delz','$md_owner_cityz','$md_owner_pcodez','$md_owner_countryz','$md_owner_emailz','$content_namez','$content_orgz','$content_positionz','$content_phonez','$content_faxz','$content_delz','$content_cityz','$content_pcodez','$content_countryz','$content_emailz','$media_contact_namez','$media_contact_orgz','$media_contact_positionz','$media_contact_phonez','$media_contact_faxz','$media_contact_delz','$media_contact_cityz','$media_contact_pcodez','$media_contact_countryz','$media_contact_emailz','$data_ingest_namez','$data_ingest_orgz','$data_ingest_positionz','$data_ingest_phonez','$data_ingest_faxz','$data_ingest_delz','$data_ingest_cityz','$data_ingest_pcodez','$data_ingest_countryz','$data_ingest_emailz','$qa_namez','$qa_orgz','$qa_positionz','$qa_phonez','$qa_faxz','$qa_delz','$qa_cityz','$qa_pcodez','$qa_countryz','$qa_emailz','$publish_namez','$publish_orgz','$publish_positionz','$publish_phonez','$publish_faxz','$publish_delz','$publish_cityz','$publish_pcodez','$publish_countryz','$publish_emailz','$maint_namez','$maint_orgz','$maint_positionz','$maint_phonez','$maint_faxz','$maint_delz','$maint_cityz','$maint_pcodez','$maint_countryz','$maint_emailz','$usupport_namez','$usupport_orgz','$usupport_positionz','$usupport_phonez','$usupport_faxz','$usupport_delz','$usupport_cityz','$usupport_pcodez','$usupport_countryz','$usupport_emailz','$dservice_namez','$dservice_orgz','$dservice_positionz','$dservice_phonez','$dservice_faxz','$dservice_delz','$dservice_cityz','$dservice_pcodez','$dservice_countryz','$dservice_emailz','$dservice_op_namez','$dservice_op_orgz','$dservice_op_positionz','$dservice_op_phonez','$dservice_op_faxz','$dservice_op_delz','$dservice_op_cityz','$dservice_op_pcodez','$dservice_op_countryz','$dservice_op_emailz','$dcust_namez','$dcust_orgz','$dcust_positionz','$dcust_phonez','$dcust_faxz','$dcust_delz','$dcust_cityz','$dcust_pcodez','$dcust_countryz','$dcust_emailz','$downer_namez','$downer_orgz','$downer_positionz','$downer_phonez','$downer_faxz','$downer_delz','$downer_cityz','$downer_pcodez','$downer_countryz','$downer_emailz','$dcycle_namez','$dcycle_orgz','$dcycle_positionz','$dcycle_phonez','$dcycle_faxz','$dcycle_delz','$dcycle_cityz','$dcycle_pcodez','$dcycle_countryz','$dcycle_emailz','$c_classificationz', '$use_limitationsz', '$access_constraintsz', '$other_constraints1z','$use_constraintsz','$other_constraints2z', '$west_valuez','$east_valuez','$north_valuez','$south_valuez', '$bpositionz','$epositionz', '$format1z', '$format2z', '$format3z', '$format4z', '$format5z','$fversion1z','$fversion2z','$fversion3z','$fversion4z','$fversion5z','$toolsz','$pidentifierz', '$softwarez', '$algorithmsz', '$flexibilityz', '$ingest_processz', '$qa_processz', '$maintenance_processz', '$backup_recovery_planz', '$servicesz','$services_urlz','$keywords1z','$keywords2z','$keywords3z','$keywords4z', '$catalog_registryz', '$federated_cataloguez', '$keywordsz', '$websitez', '$documentationz', '$local_file_pathz', '$feedbackz', '$retentiaz', '$how_to_guidez', '$data_ingest_tframez', '$metadata_catalog_tframez','$data_qaz')";

$result1a=MYSQL_QUERY($query1a) ;




$res2=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where dm_id='$dm_id'") ;
$row1=@MYSQL_fetch_array($res2);



$hierarchy_level= ($row1['hierarchy_level']); 
$datacollection_title= ($row1['datacollection_title']);
$nci_code= ($row1['nci_code']);
 $abstract= ($row1['abstract']);
 $dataset_purpose= ($row1['dataset_purpose']);
 $dataset_status= ($row1['dataset_status']);
 $dataset_identifier= ($row1['dataset_identifier']);
 $data_source= ($row1['data_source']);
 $data_provenance= ($row1['data_provenance']);
 $doi= ($row1['doi']);
 $alternate_title= ($row1['alternate_title']);
 $activities= ($row1['activities']);
 $md_owner_name= ($row1['md_owner_name']);
 $md_owner_org= ($row1['md_owner_org']);
 $md_owner_position= ($row1['md_owner_position']);
 $md_owner_phone= ($row1['md_owner_phone']);
 $md_owner_fax= ($row1['md_owner_fax']);
 $md_owner_del= ($row1['md_owner_del']);
 $md_owner_city= ($row1['md_owner_city']);
 $md_owner_pcode= ($row1['md_owner_pcode']);
 $md_owner_country= ($row1['md_owner_country']);
 $md_owner_email= ($row1['md_owner_email']);

$content_name= ($row1['content_name']);
 $content_org= ($row1['content_org']);
 $content_position= ($row1['content_position']);
 $content_phone= ($row1['content_phone']);
 $content_fax= ($row1['content_fax']);
 $content_del= ($row1['content_del']);
 $content_city= ($row1['content_city']);
 $content_pcode= ($row1['content_pcode']);
 $content_country= ($row1['content_country']);
 $content_email= ($row1['content_email']);

$media_contact_name= ($row1['media_contact_name']);
 $media_contact_org= ($row1['media_contact_org']);
 $media_contact_position= ($row1['media_contact_position']);
 $media_contact_phone= ($row1['media_contact_phone']);
 $media_contact_fax= ($row1['media_contact_fax']);
 $media_contact_del= ($row1['media_contact_del']);
 $media_contact_city= ($row1['media_contact_city']);
 $media_contact_pcode= ($row1['media_contact_pcode']);
 $media_contact_country= ($row1['media_contact_country']);
 $media_contact_email= ($row1['media_contact_email']);

$data_ingest_name= ($row1['data_ingest_name']);
 $data_ingest_org= ($row1['data_ingest_org']);
 $data_ingest_position= ($row1['data_ingest_position']);
 $data_ingest_phone= ($row1['data_ingest_phone']);
 $data_ingest_fax= ($row1['data_ingest_fax']);
 $data_ingest_del= ($row1['data_ingest_del']);
 $data_ingest_city= ($row1['data_ingest_city']);
 $data_ingest_pcode= ($row1['data_ingest_pcode']);
 $data_ingest_country= ($row1['data_ingest_country']);
 $data_ingest_email= ($row1['data_ingest_email']);

$qa_name= ($row1['qa_name']);
 $qa_org= ($row1['qa_org']);
 $qa_position= ($row1['qa_position']);
 $qa_phone= ($row1['qa_phone']);
 $qa_fax= ($row1['qa_fax']);
 $qa_del= ($row1['qa_del']);
 $qa_city= ($row1['qa_city']);
 $qa_pcode= ($row1['qa_pcode']);
 $qa_country= ($row1['qa_country']);
 $qa_email= ($row1['qa_email']);

$publish_name= ($row1['publish_name']);
 $publish_org= ($row1['publish_org']);
 $publish_position= ($row1['publish_position']);
 $publish_phone= ($row1['publish_phone']);
 $publish_fax= ($row1['publish_fax']);
 $publish_del= ($row1['publish_del']);
 $publish_city= ($row1['publish_city']);
 $publish_pcode= ($row1['publish_pcode']);
 $publish_country= ($row1['publish_country']);
 $publish_email= ($row1['publish_email']);

 $maint_name= ($row1['maint_name']);
 $maint_org= ($row1['maint_org']);
 $maint_position= ($row1['maint_position']);
 $maint_phone= ($row1['maint_phone']);
 $maint_fax= ($row1['maint_fax']);
 $maint_del= ($row1['maint_del']);
 $maint_city= ($row1['maint_city']);
 $maint_pcode= ($row1['maint_pcode']);
 $maint_country= ($row1['maint_country']);
 $maint_email= ($row1['maint_email']);
 
 $usupport_name= ($row1['usupport_name']);
 $usupport_org= ($row1['usupport_org']);
 $usupport_position= ($row1['usupport_position']);
 $usupport_phone= ($row1['usupport_phone']);
 $usupport_fax= ($row1['usupport_fax']);
 $usupport_del= ($row1['usupport_del']);
 $usupport_city= ($row1['usupport_city']);
 $usupport_pcode= ($row1['usupport_pcode']);
 $usupport_country= ($row1['usupport_country']);
 $usupport_email= ($row1['usupport_email']);
 
 $dservice_name= ($row1['dservice_name']);
 $dservice_org= ($row1['dservice_org']);
 $dservice_position= ($row1['dservice_position']);
 $dservice_phone= ($row1['dservice_phone']);
 $dservice_fax= ($row1['dservice_fax']);
 $dservice_del= ($row1['dservice_del']);
 $dservice_city= ($row1['dservice_city']);
 $dservice_pcode= ($row1['dservice_pcode']);
 $dservice_country= ($row1['dservice_country']);
 $dservice_email= ($row1['dservice_email']);

 $dservice_op_name= ($row1['dservice_op_name']);
 $dservice_op_org= ($row1['dservice_op_org']);
 $dservice_op_position= ($row1['dservice_op_position']);
 $dservice_op_phone= ($row1['dservice_op_phone']);
 $dservice_op_fax= ($row1['dservice_op_fax']);
 $dservice_op_del= ($row1['dservice_op_del']);
 $dservice_op_city= ($row1['dservice_op_city']);
 $dservice_op_pcode= ($row1['dservice_op_pcode']);
 $dservice_op_country= ($row1['dservice_op_country']);
 $dservice_op_email= ($row1['dservice_op_email']);
 
 $dcycle_name= ($row1['dcycle_name']);
 $dcycle_org= ($row1['dcycle_org']);
 $dcycle_position= ($row1['dcycle_position']);
 $dcycle_phone= ($row1['dcycle_phone']);
 $dcycle_fax= ($row1['dcycle_fax']);
 $dcycle_del= ($row1['dcycle_del']);
 $dcycle_city= ($row1['dcycle_city']);
 $dcycle_pcode= ($row1['dcycle_pcode']);
 $dcycle_country= ($row1['dcycle_country']);
 $dcycle_email= ($row1['dcycle_email']);
 
  $dcust_name= ($row1['dcust_name']);
 $dcust_org= ($row1['dcust_org']);
 $dcust_position= ($row1['dcust_position']);
 $dcust_phone= ($row1['dcust_phone']);
 $dcust_fax= ($row1['dcust_fax']);
 $dcust_del= ($row1['dcust_del']);
 $dcust_city= ($row1['dcust_city']);
 $dcust_pcode= ($row1['dcust_pcode']);
 $dcust_country= ($row1['dcust_country']);
 $dcust_email= ($row1['dcust_email']);
 
  $downer_name= ($row1['downer_name']);
 $downer_org= ($row1['downer_org']);
 $downer_position= ($row1['downer_position']);
 $downer_phone= ($row1['downer_phone']);
 $downer_fax= ($row1['downer_fax']);
 $downer_del= ($row1['downer_del']);
 $downer_city= ($row1['downer_city']);
 $downer_pcode= ($row1['downer_pcode']);
 $downer_country= ($row1['downer_country']);
 $downer_email= ($row1['downer_email']);


$c_classification= ($row1['c_classification']);
 $use_limitations= ($row1['use_limitations']);
 $access_constraints= ($row1['access_constraints']);
 $other_constraints1= ($row1['other_constraints1']);
 $use_constraints= ($row1['use_constraints']);
 $other_constraints2= ($row1['other_constraints2']);
 $east_value=($row1['spatial_east']);
 $north_value=($row1['spatial_north']);
 $south_value=($row1['spatial_south']);
 $west_value=($row1['spatial_west']);
 $bposition=($row1['temp_begin']);
 $eposition=($row1['temp_end']);
 $format1= ($row1['format1']);
 $format2= ($row1['format2']);
 $format3= ($row1['format3']);
 $format4= ($row1['format4']);
 $format5= ($row1['format5']);
 $fversion1= ($row1['fversion1']);
 $fversion2= ($row1['fversion2']);
 $fversion3= ($row1['fversion3']);
 $fversion4= ($row1['fversion4']);
 $fversion5= ($row1['fversion5']);
 $tools= ($row1['tools']);
 $software= ($row1['software']);
 $pidentifier= ($row1['parentidentifier']);
 $algorithms= ($row1['algorithms']);
 $flexibility= ($row1['flexibility']);
 $ingest_process= ($row1['ingest_process']);
 $qa_process= ($row1['qa_process']);
 $maintenance_process= ($row1['maintenance_process']);
 $backup_recovery_plan= ($row1['backup_recovery_plan']);
 $services= ($row1['services']);
   $services_url= ($row1['services_url']);
  $keywords1= ($row1['keywords1']);
  $keywords2= ($row1['keywords2']);
  $keywords3= ($row1['keywords3']);
  $keywords4= ($row1['keywords4']);

$catalog_registry= ($row1['catalog_registry']);
 $federated_catalogue= ($row1['federated_catalogue']);
 $keywords= ($row1['keywords']);
 $website= ($row1['website']);
 $documentation= ($row1['documentation']);
 $local_file_path= ($row1['local_file_path']);
  $feedback= ($row1['feedback']);
 $retentia= ($row1['retentia']);
  $how_to_guide= ($row1['how_to_guide']);
 $data_ingest_tframe= ($row1['data_ingest_tframe']);
 $metadata_catalog_tframe= ($row1['metadata_catalog_tframe']);
 $data_qa= ($row1['data_qa']);

 $downer_linkage1= ($row1['downer_linkage1']);
 $downer_name1= ($row1['downer_name1']);
 $downer_descp1= ($row1['downer_descp1']);
 $downer_linkage2= ($row1['downer_linkage2']);
 $downer_name2= ($row1['downer_name2']);
 $downer_descp2= ($row1['downer_descp2']);
 $downer_linkage3= ($row1['downer_linkage3']);
 $downer_name3= ($row1['downer_name3']);
 $downer_descp3= ($row1['downer_descp3']);
 $downer_linkage4= ($row1['downer_linkage4']);
 $downer_name4= ($row1['downer_name4']);
 $downer_descp4= ($row1['downer_descp4']);
 
 
 $dcust_linkage1= ($row1['dcust_linkage1']);
 $dcust_name1= ($row1['dcust_name1']);
 $dcust_descp1= ($row1['dcust_descp1']);
 $dcust_linkage2= ($row1['dcust_linkage2']);
 $dcust_name2= ($row1['dcust_name2']);
 $dcust_descp2= ($row1['dcust_descp2']);
 $dcust_linkage3= ($row1['dcust_linkage3']);
 $dcust_name3= ($row1['dcust_name3']);
 $dcust_descp3= ($row1['dcust_descp3']);
 $dcust_linkage4= ($row1['dcust_linkage4']);
 $dcust_name4= ($row1['dcust_name4']);
 $dcust_descp4= ($row1['dcust_descp4']);
 
 
 $md_owner_linkage1= ($row1['md_owner_linkage1']);
 $md_owner_name1= ($row1['md_owner_name1']);
 $md_owner_descp1= ($row1['md_owner_descp1']);
 $md_owner_linkage2= ($row1['md_owner_linkage2']);
 $md_owner_name2= ($row1['md_owner_name2']);
 $md_owner_descp2= ($row1['md_owner_descp2']);
 $md_owner_linkage3= ($row1['md_owner_linkage3']);
 $md_owner_name3= ($row1['md_owner_name3']);
 $md_owner_descp3= ($row1['md_owner_descp3']);
 $md_owner_linkage4= ($row1['md_owner_linkage4']);
 $md_owner_name4= ($row1['md_owner_name4']);
 $md_owner_descp4= ($row1['md_owner_descp4']);
 
 $content_linkage1= ($row1['content_linkage1']);
 $content_name1= ($row1['content_name1']);
 $content_descp1= ($row1['content_descp1']);
 $content_linkage2= ($row1['content_linkage2']);
 $content_name2= ($row1['content_name2']);
 $content_descp2= ($row1['content_descp2']);
 $content_linkage3= ($row1['content_linkage3']);
 $content_name3= ($row1['content_name3']);
 $content_descp3= ($row1['content_descp3']);
 $content_linkage4= ($row1['content_linkage4']);
 $content_name4= ($row1['content_name4']);
 $content_descp4= ($row1['content_descp4']);
 
 $media_contact_linkage1= ($row1['media_contact_linkage1']);
 $media_contact_name1= ($row1['media_contact_name1']);
 $media_contact_descp1= ($row1['media_contact_descp1']);
 $media_contact_linkage2= ($row1['media_contact_linkage2']);
 $media_contact_name2= ($row1['media_contact_name2']);
 $media_contact_descp2= ($row1['media_contact_descp2']);
 $media_contact_linkage3= ($row1['media_contact_linkage3']);
 $media_contact_name3= ($row1['media_contact_name3']);
 $media_contact_descp3= ($row1['media_contact_descp3']);
 $media_contact_linkage4= ($row1['media_contact_linkage4']);
 $media_contact_name4= ($row1['media_contact_name4']);
 $media_contact_descp4= ($row1['media_contact_descp4']);











$user_id=@$_SESSION["uid_".session_id()] ;
$d=@date("Y-m-d");
$txt=$d." : DM Plan ".$update_check.$user_id. "  with Title : ".$datacollection_title;
log_save2($user_id,$txt);


if ($update_check=="saved by "){
$event=1;
$sub="Data Management Plan - Saved";
$msg="A new data management plan has been saved by $user_id ....
<br>
<br>
Title : ".$datacollection_title."<br><br>
 
Project : ".$nci_code;

if ($_POST['title_t']!='') {

$res2a=@MYSQL_QUERY("delete from nci_data_management.data_mgmt_temp where file_identifier='$fid'") ;

}

 


}
else {
$event=2;
$update_text=" Following fields are updated  : <br><br>";

 


 if ($hierarchy_level!=$hierarchy_levelz)    {
  $update_text=$update_text."Hierarchy Level  "."<br>";}

 if ($datacollection_title!=$datacollection_titlez)    {
  $update_text=$update_text."Data Collection Title  "."<br>";}

 if ($nci_code!=$nci_codez)    {
  $update_text=$update_text."NCI Code  "."<br>";}

  if ($abstract!=$abstractz)    {
   $update_text=$update_text."Abstract  "."<br>";}


  if ($dataset_purpose!=$dataset_purposez)    {
   $update_text=$update_text."Dataset Purpose  "."<br>";}

  if ($dataset_status!=$dataset_statusz)    {
   $update_text=$update_text."Dataset Status  "."<br>";}

  if ($dataset_identifier!=$dataset_identifierz)    {
   $update_text=$update_text."Dataset Identifier  "."<br>";}

  if ($data_source!=$data_sourcez)    {
   $update_text=$update_text."Data Source  "."<br>";}

  if ($data_provenance!=$data_provenancez)    {
   $update_text=$update_text."Data Provenance  "."<br>";}

  if ($doi!=$doiz)    {
   $update_text=$update_text."DOI  "."<br>";}

  if ($alternate_title!=$alternate_titlez)    {
   $update_text=$update_text."Alternate Title  "."<br>";}

  if ($activities!=$activitiesz)    {
   $update_text=$update_text."Activities  "."<br>";}

  if ($md_owner_name!=$md_owner_namez)    {
   $update_text=$update_text."Principal Investigator - Name  "."<br>";}

  if ($md_owner_org!=$md_owner_orgz)    {
   $update_text=$update_text."Principal Investigator - Organization  "."<br>";}

  if ($md_owner_position!=$md_owner_positionz)    {
   $update_text=$update_text."Principal Investigator - Position  "."<br>";}

  if ($md_owner_phone!=$md_owner_phonez)    {
   $update_text=$update_text."Principal Investigator - Phone  "."<br>";}

  if ($md_owner_fax!=$md_owner_faxz)    {
   $update_text=$update_text."Principal Investigator - Fax  "."<br>";}

  if ($md_owner_del!=$md_owner_delz)    {
   $update_text=$update_text."Principal Investigator - Delivery Point  "."<br>";}

  if ($md_owner_city!=$md_owner_cityz)    {
   $update_text=$update_text."Principal Investigator - City  "."<br>";}

  if ($md_owner_pcode!=$md_owner_pcodez)    {
   $update_text=$update_text."Principal Investigator - Pcode  "."<br>";}

  if ($md_owner_country!=$md_owner_countryz)    {
   $update_text=$update_text."Principal Investigator - Country  "."<br>";}

  if ($md_owner_email!=$md_owner_emailz)    {
   $update_text=$update_text."Principal Investigator - Email  "."<br>";}


 if ($content_name!=$content_namez)    {
  $update_text=$update_text."Content Expert - Name  "."<br>";}

  if ($content_org!=$content_orgz)    {
   $update_text=$update_text."Content Expert - Organization  "."<br>";}

  if ($content_position!=$content_positionz)    {
   $update_text=$update_text."Content Expert - Position  "."<br>";}

  if ($content_phone!=$content_phonez)    {
   $update_text=$update_text."Content Expert - Phone  "."<br>";}

  if ($content_fax!=$content_faxz)    {
   $update_text=$update_text."Content Expert - Fax  "."<br>";}

  if ($content_del!=$content_delz)    {
   $update_text=$update_text."Content Expert - Delivery Point  "."<br>";}

  if ($content_city!=$content_cityz)    {
   $update_text=$update_text."Content Expert - City  "."<br>";}

  if ($content_pcode!=$content_pcodez)    {
   $update_text=$update_text."Content Expert - Pcode  "."<br>";}

  if ($content_country!=$content_countryz)    {
   $update_text=$update_text."Content Expert - Country  "."<br>";}

  if ($content_email!=$content_emailz)    {
   $update_text=$update_text."Content Expert - Email  "."<br>";}

 
  if ($media_contact_name!=$media_contact_namez)    {
   $update_text=$update_text."Media Contact - Name  "."<br>";}

  if ($media_contact_org!=$media_contact_orgz)    {
   $update_text=$update_text."Media Contact - Organization  "."<br>";}

  if ($media_contact_position!=$media_contact_positionz)    {
   $update_text=$update_text."Media Contact - Position  "."<br>";}

  if ($media_contact_phone!=$media_contact_phonez)    {
   $update_text=$update_text."Media Contact - Phone  "."<br>";}

  if ($media_contact_fax!=$media_contact_faxz)    {
   $update_text=$update_text."Media Contact - Fax  "."<br>";}

  if ($media_contact_del!=$media_contact_delz)    {
   $update_text=$update_text."Media Contact - Delivery Point  "."<br>";}

  if ($media_contact_city!=$media_contact_cityz)    {
   $update_text=$update_text."Media Contact - City  "."<br>";}

  if ($media_contact_pcode!=$media_contact_pcodez)    {
   $update_text=$update_text."Media Contact - Pcode  "."<br>";}

  if ($media_contact_country!=$media_contact_countryz)    {
   $update_text=$update_text."Media Contact - Country  "."<br>";}

  if ($media_contact_email!=$media_contact_emailz)    {
   $update_text=$update_text."Media Contact - Email  "."<br>";}


 if ($data_ingest_name!=$data_ingest_namez)    {
  $update_text=$update_text."Data Ingest - Name  "."<br>";}

  if ($data_ingest_org!=$data_ingest_orgz)    {
   $update_text=$update_text."Data Ingest - Organization  "."<br>";}

  if ($data_ingest_position!=$data_ingest_positionz)    {
   $update_text=$update_text."Data Ingest - Position  "."<br>";}

  if ($data_ingest_phone!=$data_ingest_phonez)    {
   $update_text=$update_text."Data Ingest - Phone  "."<br>";}

  if ($data_ingest_fax!=$data_ingest_faxz)    {
   $update_text=$update_text."Data Ingest - Fax  "."<br>";}

  if ($data_ingest_del!=$data_ingest_delz)    {
   $update_text=$update_text."Data Ingest - Delivery Point  "."<br>";}

  if ($data_ingest_city!=$data_ingest_cityz)    {
   $update_text=$update_text."Data Ingest - City  "."<br>";}

  if ($data_ingest_pcode!=$data_ingest_pcodez)    {
   $update_text=$update_text."Data Ingest - Pcode  "."<br>";}

  if ($data_ingest_country!=$data_ingest_countryz)    {
   $update_text=$update_text."Data Ingest - Country  "."<br>";}

  if ($data_ingest_email!=$data_ingest_emailz)    {
   $update_text=$update_text."Data Ingest - Email  "."<br>";}


 if ($qa_name!=$qa_namez)    {
  $update_text=$update_text."Quality Assurance - Name  "."<br>";}

  if ($qa_org!=$qa_orgz)    {
   $update_text=$update_text."Quality Assurance - Organization  "."<br>";}

  if ($qa_position!=$qa_positionz)    {
   $update_text=$update_text."Quality Assurance - Position  "."<br>";}

  if ($qa_phone!=$qa_phonez)    {
   $update_text=$update_text."Quality Assurance - Phone  "."<br>";}

  if ($qa_fax!=$qa_faxz)    {
   $update_text=$update_text."Quality Assurance - Fax  "."<br>";}

  if ($qa_del!=$qa_delz)    {
   $update_text=$update_text."Quality Assurance - Delivery Point  "."<br>";}

  if ($qa_city!=$qa_cityz)    {
   $update_text=$update_text."Quality Assurance - City  "."<br>";}

  if ($qa_pcode!=$qa_pcodez)    {
   $update_text=$update_text."Quality Assurance - Pcode  "."<br>";}

  if ($qa_country!=$qa_countryz)    {
   $update_text=$update_text."Quality Assurance - Country  "."<br>";}

  if ($qa_email!=$qa_emailz)    {
   $update_text=$update_text."Quality Assurance - Email  "."<br>";}


 if ($publish_name!=$publish_namez)    {
  $update_text=$update_text."Publisher - Name  "."<br>";}

  if ($publish_org!=$publish_orgz)    {
   $update_text=$update_text."Publisher - Organization  "."<br>";}

  if ($publish_position!=$publish_positionz)    {
   $update_text=$update_text."Publisher - Position  "."<br>";}

  if ($publish_phone!=$publish_phonez)    {
   $update_text=$update_text."Publisher - Phone  "."<br>";}

  if ($publish_fax!=$publish_faxz)    {
   $update_text=$update_text."Publisher - Fax  "."<br>";}

  if ($publish_del!=$publish_delz)    {
   $update_text=$update_text."Publisher - Delivery Point  "."<br>";}

  if ($publish_city!=$publish_cityz)    {
   $update_text=$update_text."Publisher - City  "."<br>";}

  if ($publish_pcode!=$publish_pcodez)    {
   $update_text=$update_text."Publisher - Pcode  "."<br>";}

  if ($publish_country!=$publish_countryz)    {
   $update_text=$update_text."Publisher - Country  "."<br>";}

  if ($publish_email!=$publish_emailz)    {
   $update_text=$update_text."Publisher - Email  "."<br>";}



  if ($maint_name!=$maint_namez)    {
   $update_text=$update_text."Maintenance - Name  "."<br>";}

  if ($maint_org!=$maint_orgz)    {
   $update_text=$update_text."Maintenance - Organization  "."<br>";}

  if ($maint_position!=$maint_positionz)    {
   $update_text=$update_text."Maintenance - Position  "."<br>";}

  if ($maint_phone!=$maint_phonez)    {
   $update_text=$update_text."Maintenance - Phone  "."<br>";}

if ($maint_fax!=$maint_faxz)    {
   $update_text=$update_text."Maintenance - Fax "."<br>";}

  if ($maint_del!=$maint_delz)    {
   $update_text=$update_text."Maintenance - Delivery Point  "."<br>";}

  if ($maint_city!=$maint_cityz)    {
   $update_text=$update_text."Maintenance - City  "."<br>";}

  if ($maint_pcode!=$maint_pcodez)    {
   $update_text=$update_text."Maintenance - Pcode  "."<br>";}

  if ($maint_country!=$maint_countryz)    {
   $update_text=$update_text."Maintenance - Country  "."<br>";}

  if ($maint_email!=$maint_emailz)    {
   $update_text=$update_text."Maintenance - Email  "."<br>";}


  if ($usupport_name!=$usupport_namez)    {
    $update_text=$update_text."User Support - Name  "."<br>";}

 if ($usupport_org!=$usupport_orgz)    {
    $update_text=$update_text."User Support - Organization  "."<br>";}

 if ($usupport_position!=$usupport_positionz)    {
    $update_text=$update_text."User Support - Position  "."<br>";}

 if ($usupport_phone!=$usupport_phonez)    {
    $update_text=$update_text."User Support - Phone  "."<br>";}

 if ($usupport_fax!=$usupport_faxz)    {
   $update_text=$update_text."User Support - Fax  "."<br>";}

  if ($usupport_del!=$usupport_delz)    {
   $update_text=$update_text."User Support - Delivery Point  "."<br>";}

  if ($usupport_city!=$usupport_cityz)    {
   $update_text=$update_text."User Support - City  "."<br>";}

  if ($usupport_pcode!=$usupport_pcodez)    {
   $update_text=$update_text."User Support - Pcode  "."<br>";}

  if ($usupport_country!=$usupport_countryz)    {
   $update_text=$update_text."User Support - Country  "."<br>";}

  if ($usupport_email!=$usupport_emailz)    {
   $update_text=$update_text."User Support - Email  "."<br>";}


  if ($dservice_name!=$dservice_namez)    {
   $update_text=$update_text."Data Service - Name  "."<br>";}

  if ($dservice_org!=$dservice_orgz)    {
   $update_text=$update_text."Data Service - Organization  "."<br>";}

  if ($dservice_position!=$dservice_positionz)    {
   $update_text=$update_text."Data Service - Position  "."<br>";}

  if ($dservice_phone!=$dservice_phonez)    {
   $update_text=$update_text."Data Service - Phone  "."<br>";}

  if ($dservice_fax!=$dservice_faxz)    {
   $update_text=$update_text."Data Service - Fax  "."<br>";}

  if ($dservice_del!=$dservice_delz)    {
   $update_text=$update_text."Data Service - Delivery Point  "."<br>";}

  if ($dservice_city!=$dservice_cityz)    {
   $update_text=$update_text."Data Service - City  "."<br>";}

  if ($dservice_pcode!=$dservice_pcodez)    {
   $update_text=$update_text."Data Service - Pcode  "."<br>";}

  if ($dservice_country!=$dservice_countryz)    {
   $update_text=$update_text."Data Service - Country  "."<br>";}

  if ($dservice_email!=$dservice_emailz)    {
   $update_text=$update_text."Data Service - Email  "."<br>";}


  if ($dservice_op_name!=$dservice_op_namez)    {
   $update_text=$update_text."Data Service Oper. - Name  "."<br>";}

  if ($dservice_op_org!=$dservice_op_orgz)    {
   $update_text=$update_text."Data Service Oper. - Organization  "."<br>";}

  if ($dservice_op_position!=$dservice_op_positionz)    {
   $update_text=$update_text."Data Service Oper. - Position  "."<br>";}

  if ($dservice_op_phone!=$dservice_op_phonez)    {
   $update_text=$update_text."Data Service Oper. - Phone  "."<br>";}

  if ($dservice_op_fax!=$dservice_op_faxz)    {
   $update_text=$update_text."Data Service Oper. - Fax  "."<br>";}

  if ($dservice_op_del!=$dservice_op_delz)    {
   $update_text=$update_text."Data Service Oper. - Delivery Point  "."<br>";}

  if ($dservice_op_city!=$dservice_op_cityz)    {
   $update_text=$update_text."Data Service Oper. - City  "."<br>";}

  if ($dservice_op_pcode!=$dservice_op_pcodez)    {
   $update_text=$update_text."Data Service Oper. - Pcode  "."<br>";}

  if ($dservice_op_country!=$dservice_op_countryz)    {
   $update_text=$update_text."Data Service Oper. - Country  "."<br>";}

  if ($dservice_op_email!=$dservice_op_emailz)    {
   $update_text=$update_text."Data Service Oper. - Email  "."<br>";}

 
 
   if ($dcycle_name!=$dcycle_namez)    {
    $update_text=$update_text."Data Cycle - Name  "."<br>";}

 if ($dcycle_org!=$dcycle_orgz)    {
    $update_text=$update_text."Data Cycle - Organization  "."<br>";}

 if ($dcycle_position!=$dcycle_positionz)    {
   $update_text=$update_text."Data Cycle - Position  "."<br>";}

  if ($dcycle_phone!=$dcycle_phonez)    {
   $update_text=$update_text."Data Cycle - Phone  "."<br>";}

  if ($dcycle_fax!=$dcycle_faxz)    {
   $update_text=$update_text."Data Cycle - Fax  "."<br>";}

  if ($dcycle_del!=$dcycle_delz)    {
   $update_text=$update_text."Data Cycle - Delivery Point  "."<br>";}

  if ($dcycle_city!=$dcycle_cityz)    {
   $update_text=$update_text."Data Cycle - City  "."<br>";}

  if ($dcycle_pcode!=$dcycle_pcodez)    {
   $update_text=$update_text."Data Cycle - Pcode  "."<br>";}

  if ($dcycle_country!=$dcycle_countryz)    {
   $update_text=$update_text."Data Cycle - Country  "."<br>";}

  if ($dcycle_email!=$dcycle_emailz)    {
   $update_text=$update_text."Data Cycle - Email  "."<br>";}



  if ($c_classification!=$c_classificationz)    {
    $update_text=$update_text."Security Classification  "."<br>";}

 if ($use_limitations!=$use_limitationsz)    {
   $update_text=$update_text."Use Limitations  "."<br>";}

  if ($access_constraints!=$access_constraintsz)    {
    $update_text=$update_text."Access Constraints  "."<br>";}

 if ($other_constraints1!=$other_constraints1z)    {
   $update_text=$update_text."Other Constraints  "."<br>";}

  if ($use_constraints!=$use_constraintsz)    {
   $update_text=$update_text."Use Constraints  "."<br>";}

  if ($other_constraints2!=$other_constraints2z)    {
   $update_text=$update_text."Other Constraints  "."<br>";}

  if ($east_value!=$east_valuez)    {
   $update_text=$update_text."Spatial - East  "."<br>";}

  if ($north_value!=$north_valuez)    {
   $update_text=$update_text."Spatial - North  "."<br>";}

  if ($south_value!=$south_valuez)    {
   $update_text=$update_text."Spatial - South  "."<br>";}

  if ($west_value!=$west_valuez)    {
   $update_text=$update_text."Spatial - West  "."<br>";}

  if ($bposition!=$bpositionz)    {
   $update_text=$update_text."Temporal Extent - Begin Position  "."<br>";}

  if ($eposition!=$epositionz)    {
   $update_text=$update_text."Temporal Extent - End Position  "."<br>";}

  if ($format1!=$format1z)    {
   $update_text=$update_text."Format Name1  "."<br>";}
  if ($format2!=$format2z)    {
   $update_text=$update_text."Format Name2  "."<br>";}
  if ($format3!=$format3z)    {
   $update_text=$update_text."Format Name3  "."<br>";}
  if ($format4!=$format4z)    {
   $update_text=$update_text."Format Name4  "."<br>";}
  if ($format5!=$format5z)    {
   $update_text=$update_text."Format Name5  "."<br>";}


    if ($fversion1!=$fversion1z)    {
   $update_text=$update_text."Format Version1  "."<br>";}
  if ($fversion2!=$fversion2z)    {
   $update_text=$update_text."Format Version2  "."<br>";}
  if ($fversion3!=$fversion3z)    {
   $update_text=$update_text."Format Version3  "."<br>";}
  if ($fversion4!=$fversion4z)    {
   $update_text=$update_text."Format Version4  "."<br>";}
  if ($fversion5!=$fversion5z)    {
   $update_text=$update_text."Format Version5  "."<br>";}


  if ($tools!=$toolsz)    {
   $update_text=$update_text."Tools  "."<br>";}

  if ($software!=$softwarez)    {
   $update_text=$update_text."Software  "."<br>";}

  if ($algorithms!=$algorithmsz)    {
   $update_text=$update_text."Algorithms  "."<br>";}

  if ($flexibility!=$flexibilityz)    {
   $update_text=$update_text."Flexibility  "."<br>";}

  if ($ingest_process!=$ingest_processz)    {
   $update_text=$update_text."Ingest Process  "."<br>";}

  if ($qa_process!=$qa_processz)    {
   $update_text=$update_text."QA Process  "."<br>";}

  if ($maintenance_process!=$maintenance_processz)    {
   $update_text=$update_text."Maintenance Process  "."<br>";}

  if ($backup_recovery_plan!=$backup_recovery_planz)    {
   $update_text=$update_text."Backup & recovery Plan  "."<br>";}

  if ($services!=$servicesz)    {
   $update_text=$update_text."Services  "."<br>";}

   if ($services_url!=$services_urlz)    {
   $update_text=$update_text."Services  URL"."<br>";}
   
      if ($keywords1!=$keywords1z)    {
   $update_text=$update_text."Keywords(1)  "."<br>";}

      if ($keywords2!=$keywords2z)    {
   $update_text=$update_text."Keywords(2)  "."<br>";}
   
         if ($keywords3!=$keywords3z)    {
   $update_text=$update_text."Keywords(3)  "."<br>";}

         if ($keywords4!=$keywords4z)    {
   $update_text=$update_text."Keywords(4)  "."<br>";}


  if ($catalog_registry!=$catalog_registryz)    {
   $update_text=$update_text."Catalogue Registry  "."<br>";}

  if ($federated_catalogue!=$federated_cataloguez)    {
   $update_text=$update_text."Federated Catalogue  "."<br>";}

  if ($keywords!=$keywordsz)    {
   $update_text=$update_text."Keywords  "."<br>";}

  if ($website!=$websitez)    {
   $update_text=$update_text."Website  "."<br>";}

  if ($documentation!=$documentationz)    {
   $update_text=$update_text."Documentation  "."<br>";}

  if ($local_file_path!=$local_file_pathz)    {
    $update_text=$update_text."Local File Path  "."<br>";}

  if ($feedback!=$feedbackz)    {
   $update_text=$update_text."Feedback  "."<br>";}

  if ($retentia!=$retentiaz)    {
   $update_text=$update_text."Retentia  "."<br>";}

   if ($how_to_guide!=$how_to_guidez)    {
   $update_text=$update_text."How to Guide  "."<br>";}

  if ($data_ingest_tframe!=$data_ingest_tframez)    {
   $update_text=$update_text."Data Ingest  "."<br>";}

  if ($metadata_catalog_tframe!=$metadata_catalog_tframez)    {
   $update_text=$update_text."Metadata Catalogue  "."<br>";}

  if ($data_qa!=$data_qaz)    {
   $update_text=$update_text."Data Quality Assurance  "."<br>";}






$up_text=$update_text;

$sub="Data Management Plan - Updated";
$msg="A data management plan has been updated by $user_id ....
<br>
<br>
Title : ".$datacollection_title."<br><br>
Project : ".$nci_code."<br><br>".
$update_text;


}

//email_send_short($msg,$sub,1);
email_send($msg,$sub,$event);
 $d=@date("Y-m-d");

  $qry4=MYSQL_query("Insert into nci_data_management.data_history_user (dm_id,date_time,userid,text) values ($dm_id,'$d','$user_id','$up_text')");


 
?>
<br><br>








Data Management Plan saved.....
<br><br>
<i><font color=blue>All DMP  will be harvseted in our GeoNetwork within next 60 minutes ...</i></font>
<br><br>
<br><a href="../php/data_management_new.php" ><image src="../images/back.png"></a>
 




<?

$language='eng';
$characterset='utf8';
$datetype='creation';
$tcat='environment';

$res3=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where datacollection_title='$datacollection_title'");

                            $row1=@MYSQL_fetch_array($res3);


$file_identifier= ($row1['file_identifier']);
$dm_id= ($row1['dm_id']);
 $hierarchy_level= ($row1['hierarchy_level']);
$datacollection_title= ($row1['datacollection_title']);
$nci_code= ($row1['nci_code']);
 $abstract= ($row1['abstract']);
 $dataset_purpose= ($row1['dataset_purpose']);
 $dataset_status= ($row1['dataset_status']);
 $dataset_identifier= ($row1['dataset_identifier']);
 $data_source= ($row1['data_source']);
 $data_provenance= ($row1['data_provenance']);
 $doi= ($row1['doi']);
 $alternate_title= ($row1['alternate_title']);
 $activities= ($row1['activities']);
 $md_owner_name= ($row1['md_owner_name']);
 $md_owner_org= ($row1['md_owner_org']);
 $md_owner_position= ($row1['md_owner_position']);
 $md_owner_phone= ($row1['md_owner_phone']);
 $md_owner_fax= ($row1['md_owner_fax']);
 $md_owner_del= ($row1['md_owner_del']);
 $md_owner_city= ($row1['md_owner_city']);
 $md_owner_pcode= ($row1['md_owner_pcode']);
 $md_owner_country= ($row1['md_owner_country']);
 $md_owner_email= ($row1['md_owner_email']);

$content_name= ($row1['content_name']);
 $content_org= ($row1['content_org']);
 $content_position= ($row1['content_position']);
 $content_phone= ($row1['content_phone']);
 $content_fax= ($row1['content_fax']);
 $content_del= ($row1['content_del']);
 $content_city= ($row1['content_city']);
 $content_pcode= ($row1['content_pcode']);
 $content_country= ($row1['content_country']);
 $content_email= ($row1['content_email']);

 $media_contact_name= ($row1['media_contact_name']);
 $media_contact_org= ($row1['media_contact_org']);
 $media_contact_position= ($row1['media_contact_position']);
 $media_contact_phone= ($row1['media_contact_phone']);
 $media_contact_fax= ($row1['media_contact_fax']);
 $media_contact_del= ($row1['media_contact_del']);
 $media_contact_city= ($row1['media_contact_city']);
 $media_contact_pcode= ($row1['media_contact_pcode']);
 $media_contact_country= ($row1['media_contact_country']);
 $media_contact_email= ($row1['media_contact_email']);

$data_ingest_name= ($row1['data_ingest_name']);
 $data_ingest_org= ($row1['data_ingest_org']);
 $data_ingest_position= ($row1['data_ingest_position']);
 $data_ingest_phone= ($row1['data_ingest_phone']);
 $data_ingest_fax= ($row1['data_ingest_fax']);
 $data_ingest_del= ($row1['data_ingest_del']);
 $data_ingest_city= ($row1['data_ingest_city']);
 $data_ingest_pcode= ($row1['data_ingest_pcode']);
 $data_ingest_country= ($row1['data_ingest_country']);
 $data_ingest_email= ($row1['data_ingest_email']);

$qa_name= ($row1['qa_name']);
 $qa_org= ($row1['qa_org']);
 $qa_position= ($row1['qa_position']);
 $qa_phone= ($row1['qa_phone']);
 $qa_fax= ($row1['qa_fax']);
 $qa_del= ($row1['qa_del']);
 $qa_city= ($row1['qa_city']);
 $qa_pcode= ($row1['qa_pcode']);
 $qa_country= ($row1['qa_country']);
 $qa_email= ($row1['qa_email']);

$publish_name= ($row1['publish_name']);
 $publish_org= ($row1['publish_org']);
 $publish_position= ($row1['publish_position']);
 $publish_phone= ($row1['publish_phone']);
 $publish_fax= ($row1['publish_fax']);
 $publish_del= ($row1['publish_del']);
 $publish_city= ($row1['publish_city']);
 $publish_pcode= ($row1['publish_pcode']);
 $publish_country= ($row1['publish_country']);
 $publish_email= ($row1['publish_email']);

  $maint_name= ($row1['maint_name']);
 $maint_org= ($row1['maint_org']);
 $maint_position= ($row1['maint_position']);
 $maint_phone= ($row1['maint_phone']);
 $maint_fax= ($row1['maint_fax']);
 $maint_del= ($row1['maint_del']);
 $maint_city= ($row1['maint_city']);
 $maint_pcode= ($row1['maint_pcode']);
 $maint_country= ($row1['maint_country']);
 $maint_email= ($row1['maint_email']);

 $usupport_name= ($row1['usupport_name']);
 $usupport_org= ($row1['usupport_org']);
 $usupport_position= ($row1['usupport_position']);
 $usupport_phone= ($row1['usupport_phone']);
 $usupport_fax= ($row1['usupport_fax']);
 $usupport_del= ($row1['usupport_del']);
 $usupport_city= ($row1['usupport_city']);
 $usupport_pcode= ($row1['usupport_pcode']);
 $usupport_country= ($row1['usupport_country']);
 $usupport_email= ($row1['usupport_email']);

 $dservice_name= ($row1['dservice_name']);
 $dservice_org= ($row1['dservice_org']);
 $dservice_position= ($row1['dservice_position']);
 $dservice_phone= ($row1['dservice_phone']);
 $dservice_fax= ($row1['dservice_fax']);
 $dservice_del= ($row1['dservice_del']);
 $dservice_city= ($row1['dservice_city']);
 $dservice_pcode= ($row1['dservice_pcode']);
 $dservice_country= ($row1['dservice_country']);
 $dservice_email= ($row1['dservice_email']);


 $dservice_op_name= ($row1['dservice_op_name']);
 $dservice_op_org= ($row1['dservice_op_org']);
 $dservice_op_position= ($row1['dservice_op_position']);
 $dservice_op_phone= ($row1['dservice_op_phone']);
 $dservice_op_fax= ($row1['dservice_op_fax']);
 $dservice_op_del= ($row1['dservice_op_del']);
 $dservice_op_city= ($row1['dservice_op_city']);
 $dservice_op_pcode= ($row1['dservice_op_pcode']);
 $dservice_op_country= ($row1['dservice_op_country']);
 $dservice_op_email= ($row1['dservice_op_email']);

 $dcycle_name= ($row1['dcycle_name']);
 $dcycle_org= ($row1['dcycle_org']);
 $dcycle_position= ($row1['dcycle_position']);
 $dcycle_phone= ($row1['dcycle_phone']);
 $dcycle_fax= ($row1['dcycle_fax']);
 $dcycle_del= ($row1['dcycle_del']);
 $dcycle_city= ($row1['dcycle_city']);
 $dcycle_pcode= ($row1['dcycle_pcode']);
 $dcycle_country= ($row1['dcycle_country']);
 $dcycle_email= ($row1['dcycle_email']);

  $dcust_name= ($row1['dcust_name']);
 $dcust_org= ($row1['dcust_org']);
 $dcust_position= ($row1['dcust_position']);
 $dcust_phone= ($row1['dcust_phone']);
 $dcust_fax= ($row1['dcust_fax']);
 $dcust_del= ($row1['dcust_del']);
 $dcust_city= ($row1['dcust_city']);
 $dcust_pcode= ($row1['dcust_pcode']);
 $dcust_country= ($row1['dcust_country']);
 $dcust_email= ($row1['dcust_email']);

  $downer_name= ($row1['downer_name']);
 $downer_org= ($row1['downer_org']);
 $downer_position= ($row1['downer_position']);
 $downer_phone= ($row1['downer_phone']);
 $downer_fax= ($row1['downer_fax']);
 $downer_del= ($row1['downer_del']);
 $downer_city= ($row1['downer_city']);
 $downer_pcode= ($row1['downer_pcode']);
 $downer_country= ($row1['downer_country']);
 $downer_email= ($row1['downer_email']);

 $c_classification= ($row1['c_classification']);
 $use_limitations= ($row1['use_limitations']);
 $access_constraints= ($row1['access_constraints']);
 $other_constraints1= ($row1['other_constraints1']);
 $use_constraints= ($row1['use_constraints']);
 $other_constraints2= ($row1['other_constraints2']);
 $east_value=($row1['spatial_east']);
 $north_value=($row1['spatial_north']);
 $south_value=($row1['spatial_south']);
 $west_value=($row1['spatial_west']);
 $bposition=($row1['temp_begin']);
 $eposition=($row1['temp_end']);

 $format1= ($row1['format1']);
 $format2= ($row1['format2']);
 $format3= ($row1['format3']);
 $format4= ($row1['format4']);
 $format5= ($row1['format5']);
 $fversion1= ($row1['fversion1']);
 $fversion2= ($row1['fversion2']);
 $fversion3= ($row1['fversion3']);
 $fversion4= ($row1['fversion4']);
 $fversion5= ($row1['fversion5']);


 $tools= ($row1['tools']);
 $software= ($row1['software']);
 $algorithms= ($row1['algorithms']);
 $flexibility= ($row1['flexibility']);
 $ingest_process= ($row1['ingest_process']);
 $qa_process= ($row1['qa_process']);
 $maintenance_process= ($row1['maintenance_process']);
 $backup_recovery_plan= ($row1['backup_recovery_plan']);
 $services= ($row1['services']);
  $services_url= ($row1['services_url']);
$catalog_registry= ($row1['catalog_registry']);
 $federated_catalogue= ($row1['federated_catalogue']);
 $keywords= ($row1['keywords']);
 $keywords1= ($row1['keywords1']);
 $keywords2= ($row1['keywords2']);
 $keywords3= ($row1['keywords3']);
 $keywords4= ($row1['keywords4']);

 $website= ($row1['website']);
 $documentation= ($row1['documentation']);
 $local_file_path= ($row1['local_file_path']);
  $feedback= ($row1['feedback']);
 $retentia= ($row1['retentia']);
  $how_to_guide= ($row1['how_to_guide']);
 $data_ingest_tframe= ($row1['data_ingest_tframe']);
 $metadata_catalog_tframe= ($row1['metadata_catalog_tframe']);
 $data_qa= ($row1['data_qa']);
$pidentifier=($row1['parentidentifier']);
 $downer_linkage1= ($row1['downer_linkage1']);
 $downer_name1= ($row1['downer_name1']);
 $downer_descp1= ($row1['downer_descp1']);
 $downer_linkage2= ($row1['downer_linkage2']);
 $downer_name2= ($row1['downer_name2']);
 $downer_descp2= ($row1['downer_descp2']);
 $downer_linkage3= ($row1['downer_linkage3']);
 $downer_name3= ($row1['downer_name3']);
 $downer_descp3= ($row1['downer_descp3']);
 $downer_linkage4= ($row1['downer_linkage4']);
 $downer_name4= ($row1['downer_name4']);
 $downer_descp4= ($row1['downer_descp4']);
 
 
 $dcust_linkage1= ($row1['dcust_linkage1']);
 $dcust_name1= ($row1['dcust_name1']);
 $dcust_descp1= ($row1['dcust_descp1']);
 $dcust_linkage2= ($row1['dcust_linkage2']);
 $dcust_name2= ($row1['dcust_name2']);
 $dcust_descp2= ($row1['dcust_descp2']);
 $dcust_linkage3= ($row1['dcust_linkage3']);
 $dcust_name3= ($row1['dcust_name3']);
 $dcust_descp3= ($row1['dcust_descp3']);
 $dcust_linkage4= ($row1['dcust_linkage4']);
 $dcust_name4= ($row1['dcust_name4']);
 $dcust_descp4= ($row1['dcust_descp4']);
 
 
 $md_owner_linkage1= ($row1['md_owner_linkage1']);
 $md_owner_name1= ($row1['md_owner_name1']);
 $md_owner_descp1= ($row1['md_owner_descp1']);
 $md_owner_linkage2= ($row1['md_owner_linkage2']);
 $md_owner_name2= ($row1['md_owner_name2']);
 $md_owner_descp2= ($row1['md_owner_descp2']);
 $md_owner_linkage3= ($row1['md_owner_linkage3']);
 $md_owner_name3= ($row1['md_owner_name3']);
 $md_owner_descp3= ($row1['md_owner_descp3']);
 $md_owner_linkage4= ($row1['md_owner_linkage4']);
 $md_owner_name4= ($row1['md_owner_name4']);
 $md_owner_descp4= ($row1['md_owner_descp4']);
 
 $content_linkage1= ($row1['content_linkage1']);
 $content_name1= ($row1['content_name1']);
 $content_descp1= ($row1['content_descp1']);
 $content_linkage2= ($row1['content_linkage2']);
 $content_name2= ($row1['content_name2']);
 $content_descp2= ($row1['content_descp2']);
 $content_linkage3= ($row1['content_linkage3']);
 $content_name3= ($row1['content_name3']);
 $content_descp3= ($row1['content_descp3']);
 $content_linkage4= ($row1['content_linkage4']);
 $content_name4= ($row1['content_name4']);
 $content_descp4= ($row1['content_descp4']);
 
 $media_contact_linkage1= ($row1['media_contact_linkage1']);
 $media_contact_name1= ($row1['media_contact_name1']);
 $media_contact_descp1= ($row1['media_contact_descp1']);
 $media_contact_linkage2= ($row1['media_contact_linkage2']);
 $media_contact_name2= ($row1['media_contact_name2']);
 $media_contact_descp2= ($row1['media_contact_descp2']);
 $media_contact_linkage3= ($row1['media_contact_linkage3']);
 $media_contact_name3= ($row1['media_contact_name3']);
 $media_contact_descp3= ($row1['media_contact_descp3']);
 $media_contact_linkage4= ($row1['media_contact_linkage4']);
 $media_contact_name4= ($row1['media_contact_name4']);
 $media_contact_descp4= ($row1['media_contact_descp4']);




$outputFilename   = $file_identifier.'.xml';
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
$title_string->appendChild($dom->createTextNode($file_identifier));
$item= $dom->createElement("gmd:fileIdentifier");
if ($file_identifier==''){$item->setAttribute('gco:nilReason','missing');}
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

/*
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

*/


$item5= $dom->createElement("gmd:contact");
$main_page->appendChild($item5);

$item6= $dom->createElement("gmd:CI_ResponsibleParty");
$item5->appendChild($item6);

$title_string7= $dom->createElement("gco:CharacterString");
$title_string7->appendChild($dom->createTextNode($downer_name));
$item7= $dom->createElement("gmd:individualName");
if ($downer_name==''){$item7->setAttribute('gco:nilReason','missing');}
$item7->appendChild($title_string7);
$item6->appendChild($item7);

$title_string8= $dom->createElement("gco:CharacterString");
$title_string8->appendChild($dom->createTextNode($downer_org));
$item8= $dom->createElement("gmd:organisationName");
if ($downer_org==''){$item8->setAttribute('gco:nilReason','missing');}
$item8->appendChild($title_string8);
$item6->appendChild($item8);


$title_string9= $dom->createElement("gco:CharacterString");
$title_string9->appendChild($dom->createTextNode($downer_position));
$item9= $dom->createElement("gmd:positionName");
if ($downer_position==''){$item9->setAttribute('gco:nilReason','missing');}
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
$title_string14->appendChild($dom->createTextNode($downer_phone));
$item14= $dom->createElement("gmd:voice");
if ($downer_phone==''){$item14->setAttribute('gco:nilReason','missing');}
$item14->appendChild($title_string14);
$item13->appendChild($item14);

$title_string15= $dom->createElement("gco:CharacterString");
$title_string15->appendChild($dom->createTextNode($downer_fax));
$item15= $dom->createElement("gmd:facsimile");
if ($downer_fax==''){$item15->setAttribute('gco:nilReason','missing');}
$item15->appendChild($title_string15);
$item13->appendChild($item15);

$item16= $dom->createElement("gmd:address");
$item11->appendChild($item16);

$item17= $dom->createElement("gmd:CI_Address");
$item16->appendChild($item17);

$title_string18= $dom->createElement("gco:CharacterString");
$title_string18->appendChild($dom->createTextNode($downer_del));
$item18= $dom->createElement("gmd:deliveryPoint");
if ($downer_del==''){$item18->setAttribute('gco:nilReason','missing');}
$item18->appendChild($title_string18);
$item17->appendChild($item18);

$title_string19= $dom->createElement("gco:CharacterString");
$title_string19->appendChild($dom->createTextNode($downer_city));
$item19= $dom->createElement("gmd:city");
if ($downer_city==''){$item19->setAttribute('gco:nilReason','missing');}
$item19->appendChild($title_string19);
$item17->appendChild($item19);


$title_string21= $dom->createElement("gco:CharacterString");
$title_string21->appendChild($dom->createTextNode($downer_pcode));
$item21= $dom->createElement("gmd:postalCode");
if ($downer_pcode==''){$item21->setAttribute('gco:nilReason','missing');}
$item21->appendChild($title_string21);
$item17->appendChild($item21);

$title_string22= $dom->createElement("gco:CharacterString");
$title_string22->appendChild($dom->createTextNode($downer_country));
$item22= $dom->createElement("gmd:country");
if ($downer_country==''){$item22->setAttribute('gco:nilReason','missing');}
$item22->appendChild($title_string22);
$item17->appendChild($item22);

$title_string23= $dom->createElement("gco:CharacterString");
$title_string23->appendChild($dom->createTextNode($downer_email));
$item23= $dom->createElement("gmd:electronicMailAddress");
if ($downer_email==''){$item23->setAttribute('gco:nilReason','missing');}
$item23->appendChild($title_string23);
$item17->appendChild($item23);








 


if ($downer_linkage1!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($downer_linkage1));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($downer_name1));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($downer_descp1));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($downer_linkage2!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($downer_linkage2));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($downer_name2));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($downer_descp2));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($downer_linkage3!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($downer_linkage3));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($downer_name3));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($downer_descp3));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}



if ($downer_linkage4!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($downer_linkage4));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($downer_name4));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($downer_descp4));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}






















$title_string24= $dom->createElement("gmd:CI_RoleCode");
$title_string24->appendChild($dom->createTextNode('pointOfContact'));
$item24= $dom->createElement("gmd:role");
$item24->appendChild($title_string24);
$title_string24->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string24->setAttribute('codeListValue','owner');
$item6->appendChild($item24);




$title_string25= $dom->createElement("gco:Date");
$title_string25->appendChild($dom->createTextNode($d));
$item25= $dom->createElement("gmd:dateStamp");
$item25->appendChild($title_string25);
$main_page->appendChild($item25);


$title_string27a= $dom->createElement("gco:CharacterString");
$title_string27a->appendChild($dom->createTextNode($doi));
$item27a= $dom->createElement("gmd:dataSetURI");
if ($doi==''){$item27a->setAttribute('gco:nilReason','missing');}
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
$title_string39->appendChild($dom->createTextNode(data_check($datacollection_title)));
$item39= $dom->createElement("gmd:title");
if ($datacollection_title==''){$item39->setAttribute('gco:nilReason','missing');}
$item39->appendChild($title_string39);
$item38->appendChild($item39);

$title_string39b= $dom->createElement("gco:CharacterString");
$title_string39b->appendChild($dom->createTextNode($alternate_title));
$item39b= $dom->createElement("gmd:alternateTitle");
if ($alternate_title==''){$item39b->setAttribute('gco:nilReason','missing');}
$item39b->appendChild($title_string39b);
$item38->appendChild($item39b);



$item40= $dom->createElement("gmd:date");
$item38->appendChild($item40);

$item41= $dom->createElement("gmd:CI_Date");
$item40->appendChild($item41);


//$item41a= $dom->createElement("gmd:date");
//$item40->appendChild($item41a);

if ($metadata_catalog_tframe=='') {
$metadata_catalog_tframe=date("Y-m-d");}
$title_string42= $dom->createElement("gco:Date");
$title_string42->appendChild($dom->createTextNode($metadata_catalog_tframe));
$item42= $dom->createElement("gmd:date");
$item42->appendChild($title_string42);
$item41->appendChild($item42);

$title_string43= $dom->createElement("gmd:CI_DateTypeCode");
$title_string43->appendChild($dom->createTextNode('creation'));
$item43= $dom->createElement("gmd:dateType");
$item43->appendChild($title_string43);
$title_string43->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_DateTypeCode');
$title_string43->setAttribute('codeListValue','creation');
$item41->appendChild($item43);




/*
$title_string39f= $dom->createElement("gco:CharacterString");
$title_string39f->appendChild($dom->createTextNode($dataset_version1));
$item39f= $dom->createElement("gmd:edition");
if ($dataset_version1==''){$item39f->setAttribute('gco:nilReason','missing');}
$item39f->appendChild($title_string39f);
$item38->appendChild($item39f);
*/


$item43a= $dom->createElement("gmd:identifier");
$item38->appendChild($item43a);

$item43b= $dom->createElement("gmd:MD_Identifier");
$item43a->appendChild($item43b);

$title_string43c= $dom->createElement("gco:CharacterString");
$title_string43c->appendChild($dom->createTextNode($nci_code));
$item43c= $dom->createElement("gmd:code");
if ($nci_code==''){$item43c->setAttribute('gco:nilReason','missing');}
$item43c->appendChild($title_string43c);
$item43b->appendChild($item43c);








 $item43d= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43d);

$item43e= $dom->createElement("gmd:CI_ResponsibleParty");
$item43d->appendChild($item43e);

$title_string43f= $dom->createElement("gco:CharacterString");
$title_string43f->appendChild($dom->createTextNode($dcust_name));
$item43f= $dom->createElement("gmd:individualName");
if ($dcust_name==''){$item43f->setAttribute('gco:nilReason','missing');}
$item43f->appendChild($title_string43f);
$item43e->appendChild($item43f);



$title_string8m1= $dom->createElement("gco:CharacterString");
$title_string8m1->appendChild($dom->createTextNode($dcust_org));
$item8m1= $dom->createElement("gmd:organisationName");
if ($dcust_org==''){$item8m1->setAttribute('gco:nilReason','missing');}
$item8m1->appendChild($title_string8m1);
$item43e->appendChild($item8m1);


$title_string9m1= $dom->createElement("gco:CharacterString");
$title_string9m1->appendChild($dom->createTextNode($dcust_position));
$item9m1= $dom->createElement("gmd:positionName");
if ($dcust_position==''){$item9m1->setAttribute('gco:nilReason','missing');}
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
$title_string14m1->appendChild($dom->createTextNode($dcust_phone));
$item14m1= $dom->createElement("gmd:voice");
if ($dcust_phone==''){$item14m1->setAttribute('gco:nilReason','missing');}
$item14m1->appendChild($title_string14m1);
$item13m1->appendChild($item14m1);

$title_string15m1= $dom->createElement("gco:CharacterString");
$title_string15m1->appendChild($dom->createTextNode($dcust_fax));
$item15m1= $dom->createElement("gmd:facsimile");
if ($dcust_fax==''){$item15m1->setAttribute('gco:nilReason','missing');}
$item15m1->appendChild($title_string15m1);
$item13m1->appendChild($item15m1);

$item16m1= $dom->createElement("gmd:address");
$item11m1->appendChild($item16m1);

$item17m1= $dom->createElement("gmd:CI_Address");
$item16m1->appendChild($item17m1);

$title_string18m1= $dom->createElement("gco:CharacterString");
$title_string18m1->appendChild($dom->createTextNode($dcust_del));
$item18m1= $dom->createElement("gmd:deliveryPoint");
if ($dcust_del==''){$item18m1->setAttribute('gco:nilReason','missing');}
$item18m1->appendChild($title_string18m1);
$item17m1->appendChild($item18m1);

$title_string19m1= $dom->createElement("gco:CharacterString");
$title_string19m1->appendChild($dom->createTextNode($dcust_city));
$item19m1= $dom->createElement("gmd:city");
if ($dcust_city==''){$item19m1->setAttribute('gco:nilReason','missing');}
$item19m1->appendChild($title_string19m1);
$item17m1->appendChild($item19m1);


$title_string21m1= $dom->createElement("gco:CharacterString");
$title_string21m1->appendChild($dom->createTextNode($dcust_pcode));
$item21m1= $dom->createElement("gmd:postalCode");
if ($dcust_pcode==''){$item21m1->setAttribute('gco:nilReason','missing');}
$item21m1->appendChild($title_string21m1);
$item17m1->appendChild($item21m1);

$title_string22m1= $dom->createElement("gco:CharacterString");
$title_string22m1->appendChild($dom->createTextNode($dcust_country));
$item22m1= $dom->createElement("gmd:country");
if ($dcust_country==''){$item22m1->setAttribute('gco:nilReason','missing');}
$item22m1->appendChild($title_string22m1);
$item17m1->appendChild($item22m1);

$title_string23m1= $dom->createElement("gco:CharacterString");
$title_string23m1->appendChild($dom->createTextNode($dcust_email));
$item23m1= $dom->createElement("gmd:electronicMailAddress");
if ($dcust_email==''){$item23m1->setAttribute('gco:nilReason','missing');}
$item23m1->appendChild($title_string23m1);
$item17m1->appendChild($item23m1);










if ($dcust_linkage1!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($dcust_linkage1));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($dcust_name1));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($dcust_descp1));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($dcust_linkage2!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($dcust_linkage2));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($dcust_name2));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($dcust_descp2));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($dcust_linkage3!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($dcust_linkage3));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($dcust_name3));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($dcust_descp3));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}


if ($dcust_linkage4!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($dcust_linkage4));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($dcust_name4));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($dcust_descp4));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}












$title_string43g= $dom->createElement("gmd:CI_RoleCode");
$title_string43g->appendChild($dom->createTextNode('custodian'));
$item43g= $dom->createElement("gmd:role");
$item43g->appendChild($title_string43g);
$title_string43g->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43g->setAttribute('codeListValue','custodian');
$item43e->appendChild($item43g);



$title_string44= $dom->createElement("gco:CharacterString");
$title_string44->appendChild($dom->createTextNode($abstract));
$item44= $dom->createElement("gmd:abstract");
if ($abstract==''){$item44->setAttribute('gco:nilReason','missing');}
$item44->appendChild($title_string44);
$item36->appendChild($item44);

$title_string45= $dom->createElement("gco:CharacterString");
$title_string45->appendChild($dom->createTextNode($dataset_purpose));
$item45= $dom->createElement("gmd:purpose");
if ($dataset_purpose==''){$item45->setAttribute('gco:nilReason','missing');}
$item45->appendChild($title_string45);
$item36->appendChild($item45);


$title_string46a= $dom->createElement("gmd:MD_ProgressCode");
$title_string46a->appendChild($dom->createTextNode($dataset_status));
$item46a= $dom->createElement("gmd:status");
$item46a->appendChild($title_string46a);
$title_string46a->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_ProgressCode');
$title_string46a->setAttribute('codeListValue',$dataset_status);
$item36->appendChild($item46a);

















$item43dAp1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dAp1);

$item43eAp1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dAp1->appendChild($item43eAp1);

$title_string43fAp1= $dom->createElement("gco:CharacterString");
$title_string43fAp1->appendChild($dom->createTextNode($md_owner_name));
$item43fAp1= $dom->createElement("gmd:individualName");
if ($md_owner_name==''){$item43fAp1->setAttribute('gco:nilReason','missing');}
$item43fAp1->appendChild($title_string43fAp1);
$item43eAp1->appendChild($item43fAp1);

$title_string8m1Ap1= $dom->createElement("gco:CharacterString");
$title_string8m1Ap1->appendChild($dom->createTextNode($md_owner_org));
$item8m1Ap1= $dom->createElement("gmd:organisationName");
if ($md_owner_org==''){$item8m1Ap1->setAttribute('gco:nilReason','missing');}
$item8m1Ap1->appendChild($title_string8m1Ap1);
$item43eAp1->appendChild($item8m1Ap1);


$title_string9m1Ap1= $dom->createElement("gco:CharacterString");
$title_string9m1Ap1->appendChild($dom->createTextNode($md_owner_position));
$item9m1Ap1= $dom->createElement("gmd:positionName");
if ($md_owner_position==''){$item9m1Ap1->setAttribute('gco:nilReason','missing');}
$item9m1Ap1->appendChild($title_string9m1Ap1);
$item43eAp1->appendChild($item9m1Ap1);

$item10m1Ap1= $dom->createElement("gmd:contactInfo");
$item43eAp1->appendChild($item10m1Ap1);

$item11m1Ap1= $dom->createElement("gmd:CI_Contact");
$item10m1Ap1->appendChild($item11m1Ap1);

$item12m1Ap1= $dom->createElement("gmd:phone");
$item11m1Ap1->appendChild($item12m1Ap1);

$item13m1Ap1= $dom->createElement("gmd:CI_Telephone");
$item12m1Ap1->appendChild($item13m1Ap1);

$title_string14m1Ap1= $dom->createElement("gco:CharacterString");
$title_string14m1Ap1->appendChild($dom->createTextNode($md_owner_phone));
$item14m1Ap1= $dom->createElement("gmd:voice");
if ($md_owner_phone==''){$item14m1Ap1->setAttribute('gco:nilReason','missing');}
$item14m1Ap1->appendChild($title_string14m1Ap1);
$item13m1Ap1->appendChild($item14m1Ap1);

$title_string15m1Ap1= $dom->createElement("gco:CharacterString");
$title_string15m1Ap1->appendChild($dom->createTextNode($md_owner_fax));
$item15m1Ap1= $dom->createElement("gmd:facsimile");
if ($md_owner_fax==''){$item15m1Ap1->setAttribute('gco:nilReason','missing');}
$item15m1Ap1->appendChild($title_string15m1Ap1);
$item13m1Ap1->appendChild($item15m1Ap1);

$item16m1Ap1= $dom->createElement("gmd:address");
$item11m1Ap1->appendChild($item16m1Ap1);

$item17m1Ap1= $dom->createElement("gmd:CI_Address");
$item16m1Ap1->appendChild($item17m1Ap1);

$title_string18m1Ap1= $dom->createElement("gco:CharacterString");
$title_string18m1Ap1->appendChild($dom->createTextNode($md_owner_del));
$item18m1Ap1= $dom->createElement("gmd:deliveryPoint");
if ($md_owner_del==''){$item18m1Ap1->setAttribute('gco:nilReason','missing');}
$item18m1Ap1->appendChild($title_string18m1Ap1);
$item17m1Ap1->appendChild($item18m1Ap1);

$title_string19m1Ap1= $dom->createElement("gco:CharacterString");
$title_string19m1Ap1->appendChild($dom->createTextNode($md_owner_city));
$item19m1Ap1= $dom->createElement("gmd:city");
if ($md_owner_city==''){$item19m1Ap1->setAttribute('gco:nilReason','missing');}
$item19m1Ap1->appendChild($title_string19m1Ap1);
$item17m1Ap1->appendChild($item19m1Ap1);


$title_string21m1Ap1= $dom->createElement("gco:CharacterString");
$title_string21m1Ap1->appendChild($dom->createTextNode($md_owner_pcode));
$item21m1Ap1= $dom->createElement("gmd:postalCode");
if ($md_owner_pcode==''){$item21m1Ap1->setAttribute('gco:nilReason','missing');}
$item21m1Ap1->appendChild($title_string21m1Ap1);
$item17m1Ap1->appendChild($item21m1Ap1);

$title_string22m1Ap1= $dom->createElement("gco:CharacterString");
$title_string22m1Ap1->appendChild($dom->createTextNode($md_owner_country));
$item22m1Ap1= $dom->createElement("gmd:country");
if ($md_owner_country==''){$item22m1Ap1->setAttribute('gco:nilReason','missing');}
$item22m1Ap1->appendChild($title_string22m1Ap1);
$item17m1Ap1->appendChild($item22m1Ap1);

$title_string23m1Ap1= $dom->createElement("gco:CharacterString");
$title_string23m1Ap1->appendChild($dom->createTextNode($md_owner_email));
$item23m1Ap1= $dom->createElement("gmd:electronicMailAddress");
if ($md_owner_email==''){$item23m1Ap1->setAttribute('gco:nilReason','missing');}
$item23m1Ap1->appendChild($title_string23m1Ap1);
$item17m1Ap1->appendChild($item23m1Ap1);






if ($md_owner_linkage1!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1Ap1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($md_owner_linkage1));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($md_owner_name1));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($md_owner_descp1));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($md_owner_linkage2!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1Ap1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($md_owner_linkage2));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($md_owner_name2));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($md_owner_descp2));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($md_owner_linkage3!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1Ap1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($md_owner_linkage3));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($md_owner_name3));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($md_owner_descp3));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}


if ($md_owner_linkage4!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1Ap1->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($md_owner_linkage4));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($md_owner_name4));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($md_owner_descp4));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}









$title_string43gAp1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gAp1->appendChild($dom->createTextNode('principalInvestigator'));
$item43gAp1= $dom->createElement("gmd:role");
$item43gAp1->appendChild($title_string43gAp1);
$title_string43gAp1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gAp1->setAttribute('codeListValue','principalInvestigator');
$item43eAp1->appendChild($item43gAp1);



$item43dA= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dA);

$item43eA= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dA->appendChild($item43eA);

$title_string43fA= $dom->createElement("gco:CharacterString");
$title_string43fA->appendChild($dom->createTextNode($content_name));
$item43fA= $dom->createElement("gmd:individualName");
if ($content_name==''){$item43fA->setAttribute('gco:nilReason','missing');}
$item43fA->appendChild($title_string43fA);
$item43eA->appendChild($item43fA);



$title_string8m1A= $dom->createElement("gco:CharacterString");
$title_string8m1A->appendChild($dom->createTextNode($content_org));
$item8m1A= $dom->createElement("gmd:organisationName");
if ($content_org==''){$item8m1A->setAttribute('gco:nilReason','missing');}
$item8m1A->appendChild($title_string8m1A);
$item43eA->appendChild($item8m1A);


$title_string9m1A= $dom->createElement("gco:CharacterString");
$title_string9m1A->appendChild($dom->createTextNode($content_position));
$item9m1A= $dom->createElement("gmd:positionName");
if ($content_position==''){$item9m1A->setAttribute('gco:nilReason','missing');}
$item9m1A->appendChild($title_string9m1A);
$item43eA->appendChild($item9m1A);

$item10m1A= $dom->createElement("gmd:contactInfo");
$item43eA->appendChild($item10m1A);

$item11m1A= $dom->createElement("gmd:CI_Contact");
$item10m1A->appendChild($item11m1A);

$item12m1A= $dom->createElement("gmd:phone");
$item11m1A->appendChild($item12m1A);

$item13m1A= $dom->createElement("gmd:CI_Telephone");
$item12m1A->appendChild($item13m1A);

$title_string14m1A= $dom->createElement("gco:CharacterString");
$title_string14m1A->appendChild($dom->createTextNode($content_phone));
$item14m1A= $dom->createElement("gmd:voice");
if ($content_phone==''){$item14m1A->setAttribute('gco:nilReason','missing');}
$item14m1A->appendChild($title_string14m1A);
$item13m1A->appendChild($item14m1A);


$title_string15m1A= $dom->createElement("gco:CharacterString");
$title_string15m1A->appendChild($dom->createTextNode($content_fax));
$item15m1A= $dom->createElement("gmd:facsimile");
if ($content_fax==''){$item15m1A->setAttribute('gco:nilReason','missing');}
$item15m1A->appendChild($title_string15m1A);
$item13m1A->appendChild($item15m1A);

$item16m1A= $dom->createElement("gmd:address");
$item11m1A->appendChild($item16m1A);

$item17m1A= $dom->createElement("gmd:CI_Address");
$item16m1A->appendChild($item17m1A);

$title_string18m1A= $dom->createElement("gco:CharacterString");
$title_string18m1A->appendChild($dom->createTextNode($content_del));
$item18m1A= $dom->createElement("gmd:deliveryPoint");
if ($content_del==''){$item18m1A->setAttribute('gco:nilReason','missing');}
$item18m1A->appendChild($title_string18m1A);
$item17m1A->appendChild($item18m1A);

$title_string19m1A= $dom->createElement("gco:CharacterString");
$title_string19m1A->appendChild($dom->createTextNode($content_city));
$item19m1A= $dom->createElement("gmd:city");
if ($content_city==''){$item19m1A->setAttribute('gco:nilReason','missing');}
$item19m1A->appendChild($title_string19m1A);
$item17m1A->appendChild($item19m1A);


$title_string21m1A= $dom->createElement("gco:CharacterString");
$title_string21m1A->appendChild($dom->createTextNode($content_pcode));
$item21m1A= $dom->createElement("gmd:postalCode");
if ($content_pcode==''){$item21m1A->setAttribute('gco:nilReason','missing');}
$item21m1A->appendChild($title_string21m1A);
$item17m1A->appendChild($item21m1A);

$title_string22m1A= $dom->createElement("gco:CharacterString");
$title_string22m1A->appendChild($dom->createTextNode($content_country));
$item22m1A= $dom->createElement("gmd:country");
if ($content_country==''){$item22m1A->setAttribute('gco:nilReason','missing');}
$item22m1A->appendChild($title_string22m1A);
$item17m1A->appendChild($item22m1A);

$title_string23m1A= $dom->createElement("gco:CharacterString");
$title_string23m1A->appendChild($dom->createTextNode($content_email));
$item23m1A= $dom->createElement("gmd:electronicMailAddress");
if ($content_email==''){$item23m1A->setAttribute('gco:nilReason','missing');}
$item23m1A->appendChild($title_string23m1A);
$item17m1A->appendChild($item23m1A);








if ($content_linkage1!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1A->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($content_linkage1));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($content_name1));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($content_descp1));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($content_linkage2!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1A->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($content_linkage2));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($content_name2));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($content_descp2));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($content_linkage3!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1A->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($content_linkage3));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($content_name3));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($content_descp3));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}


if ($content_linkage4!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1A->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($content_linkage4));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($content_name4));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($content_descp4));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}








$title_string43gA= $dom->createElement("gmd:CI_RoleCode");
$title_string43gA->appendChild($dom->createTextNode('contentexpert'));
$item43gA= $dom->createElement("gmd:role");
$item43gA->appendChild($title_string43gA);
$title_string43gA->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gA->setAttribute('codeListValue','contentexpert');
$item43eA->appendChild($item43gA);


$item43dB= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dB);

$item43eB= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dB->appendChild($item43eB);

$title_string43fB= $dom->createElement("gco:CharacterString");
$title_string43fB->appendChild($dom->createTextNode($media_contact_name));
$item43fB= $dom->createElement("gmd:individualName");
if ($media_contact_name==''){$item43fB->setAttribute('gco:nilReason','missing');}
$item43fB->appendChild($title_string43fB);
$item43eB->appendChild($item43fB);



$title_string8m1B= $dom->createElement("gco:CharacterString");
$title_string8m1B->appendChild($dom->createTextNode($media_contact_org));
$item8m1B= $dom->createElement("gmd:organisationName");
if ($media_contact_org==''){$item8m1B->setAttribute('gco:nilReason','missing');}
$item8m1B->appendChild($title_string8m1B);
$item43eB->appendChild($item8m1B);


$title_string9m1B= $dom->createElement("gco:CharacterString");
$title_string9m1B->appendChild($dom->createTextNode($media_contact_position));
$item9m1B= $dom->createElement("gmd:positionName");
if ($media_contact_position==''){$item9m1B->setAttribute('gco:nilReason','missing');}
$item9m1B->appendChild($title_string9m1B);
$item43eB->appendChild($item9m1B);

$item10m1B= $dom->createElement("gmd:contactInfo");
$item43eB->appendChild($item10m1B);

$item11m1B= $dom->createElement("gmd:CI_Contact");
$item10m1B->appendChild($item11m1B);

$item12m1B= $dom->createElement("gmd:phone");
$item11m1B->appendChild($item12m1B);

$item13m1B= $dom->createElement("gmd:CI_Telephone");
$item12m1B->appendChild($item13m1B);

$title_string14m1B= $dom->createElement("gco:CharacterString");
$title_string14m1B->appendChild($dom->createTextNode($media_contact_phone));
$item14m1B= $dom->createElement("gmd:voice");
if ($media_contact_phone==''){$item14m1B->setAttribute('gco:nilReason','missing');}
$item14m1B->appendChild($title_string14m1B);
$item13m1B->appendChild($item14m1B);

$title_string15m1B= $dom->createElement("gco:CharacterString");
$title_string15m1B->appendChild($dom->createTextNode($media_contact_fax));
$item15m1B= $dom->createElement("gmd:facsimile");
if ($media_contact_fax==''){$item15m1B->setAttribute('gco:nilReason','missing');}
$item15m1B->appendChild($title_string15m1B);
$item13m1B->appendChild($item15m1B);

$item16m1B= $dom->createElement("gmd:address");
$item11m1B->appendChild($item16m1B);

$item17m1B= $dom->createElement("gmd:CI_Address");
$item16m1B->appendChild($item17m1B);

$title_string18m1B= $dom->createElement("gco:CharacterString");
$title_string18m1B->appendChild($dom->createTextNode($media_contact_del));
$item18m1B= $dom->createElement("gmd:deliveryPoint");
if ($media_contact_del==''){$item18m1B->setAttribute('gco:nilReason','missing');}
$item18m1B->appendChild($title_string18m1B);
$item17m1B->appendChild($item18m1B);

$title_string19m1B= $dom->createElement("gco:CharacterString");
$title_string19m1B->appendChild($dom->createTextNode($media_contact_city));
$item19m1B= $dom->createElement("gmd:city");
if ($media_contact_city==''){$item19m1B->setAttribute('gco:nilReason','missing');}
$item19m1B->appendChild($title_string19m1B);
$item17m1B->appendChild($item19m1B);


$title_string21m1B= $dom->createElement("gco:CharacterString");
$title_string21m1B->appendChild($dom->createTextNode($media_contact_pcode));
$item21m1B= $dom->createElement("gmd:postalCode");
if ($media_contact_pcode==''){$item21m1B->setAttribute('gco:nilReason','missing');}
$item21m1B->appendChild($title_string21m1B);
$item17m1B->appendChild($item21m1B);

$title_string22m1B= $dom->createElement("gco:CharacterString");
$title_string22m1B->appendChild($dom->createTextNode($media_contact_country));
$item22m1B= $dom->createElement("gmd:country");
if ($media_contact_country==''){$item22m1B->setAttribute('gco:nilReason','missing');}
$item22m1B->appendChild($title_string22m1B);
$item17m1B->appendChild($item22m1B);

$title_string23m1B= $dom->createElement("gco:CharacterString");
$title_string23m1B->appendChild($dom->createTextNode($media_contact_email));
$item23m1B= $dom->createElement("gmd:electronicMailAddress");
if ($media_contact_email==''){$item23m1B->setAttribute('gco:nilReason','missing');}
$item23m1B->appendChild($title_string23m1B);
$item17m1B->appendChild($item23m1B);









if ($media_contact_linkage1!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1B->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($media_contact_linkage1));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($media_contact_name1));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($media_contact_descp1));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($media_contact_linkage2!='') { 
$item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1B->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($media_contact_linkage2));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($media_contact_name2));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($media_contact_descp2));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}

if ($media_contact_linkage3!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1B->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($media_contact_linkage3));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($media_contact_name3));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($media_contact_descp3));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}


if ($media_contact_linkage4!='') { 
 $item169aa1= $dom->createElement("gmd:onlineResource");
$item11m1B->appendChild($item169aa1);

$item170aa1= $dom->createElement("gmd:CI_OnlineResource");
$item169aa1->appendChild($item170aa1);

$title_string171aa1= $dom->createElement("gmd:URL");
$title_string171aa1->appendChild($dom->createTextNode($media_contact_linkage4));
$item171aa1= $dom->createElement("gmd:linkage");
$item171aa1->appendChild($title_string171aa1);
$item170aa1->appendChild($item171aa1);

 
$title_string172aa1= $dom->createElement("gco:CharacterString");
$title_string172aa1->appendChild($dom->createTextNode($media_contact_name4));
$item172aa1= $dom->createElement("gmd:name");
$item172aa1->appendChild($title_string172aa1);
$item170aa1->appendChild($item172aa1);

$title_string173aa1= $dom->createElement("gco:CharacterString");
$title_string173aa1->appendChild($dom->createTextNode($media_contact_descp4));
$item173aa1= $dom->createElement("gmd:description");
$item173aa1->appendChild($title_string173aa1);
$item170aa1->appendChild($item173aa1);
}








$title_string43gB= $dom->createElement("gmd:CI_RoleCode");
$title_string43gB->appendChild($dom->createTextNode('media'));
$item43gB= $dom->createElement("gmd:role");
$item43gB->appendChild($title_string43gB);
$title_string43gB->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gB->setAttribute('codeListValue','media');
$item43eB->appendChild($item43gB);

/*
$item43dC1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dC1);

$item43eC1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dC1->appendChild($item43eC1);

$title_string43fC1= $dom->createElement("gco:CharacterString");
$title_string43fC1->appendChild($dom->createTextNode($data_ingest_name));
$item43fC1= $dom->createElement("gmd:individualName");
if ($data_ingest_name==''){$item43fC1->setAttribute('gco:nilReason','missing');}
$item43fC1->appendChild($title_string43fC1);
$item43eC1->appendChild($item43fC1);



$title_string8m1C1= $dom->createElement("gco:CharacterString");
$title_string8m1C1->appendChild($dom->createTextNode($data_ingest_org));
$item8m1C1= $dom->createElement("gmd:organisationName");
if ($data_ingest_org==''){$item8m1C1->setAttribute('gco:nilReason','missing');}
$item8m1C1->appendChild($title_string8m1C1);
$item43eC1->appendChild($item8m1C1);


$title_string9m1C1= $dom->createElement("gco:CharacterString");
$title_string9m1C1->appendChild($dom->createTextNode($data_ingest_position));
$item9m1C1= $dom->createElement("gmd:positionName");
if ($data_ingest_position==''){$item9m1C1->setAttribute('gco:nilReason','missing');}
$item9m1C1->appendChild($title_string9m1C1);
$item43eC1->appendChild($item9m1C1);

$item10m1C1= $dom->createElement("gmd:contactInfo");
$item43eC1->appendChild($item10m1C1);

$item11m1C1= $dom->createElement("gmd:CI_Contact");
$item10m1C1->appendChild($item11m1C1);

$item12m1C1= $dom->createElement("gmd:phone");
$item11m1C1->appendChild($item12m1C1);

$item13m1C1= $dom->createElement("gmd:CI_Telephone");
$item12m1C1->appendChild($item13m1C1);

$title_string14m1C1= $dom->createElement("gco:CharacterString");
$title_string14m1C1->appendChild($dom->createTextNode($data_ingest_phone));
$item14m1C1= $dom->createElement("gmd:voice");
if ($data_ingest_phone==''){$item14m1C1->setAttribute('gco:nilReason','missing');}
$item14m1C1->appendChild($title_string14m1C1);
$item13m1C1->appendChild($item14m1C1);

$title_string15m1C1= $dom->createElement("gco:CharacterString");
$title_string15m1C1->appendChild($dom->createTextNode($data_ingest_fax));
$item15m1C1= $dom->createElement("gmd:facsimile");
if ($data_ingest_fax==''){$item15m1C1->setAttribute('gco:nilReason','missing');}
$item15m1C1->appendChild($title_string15m1C1);
$item13m1C1->appendChild($item15m1C1);

$item16m1C1= $dom->createElement("gmd:address");
$item11m1C1->appendChild($item16m1C1);

$item17m1C1= $dom->createElement("gmd:CI_Address");
$item16m1C1->appendChild($item17m1C1);

$title_string18m1C1= $dom->createElement("gco:CharacterString");
$title_string18m1C1->appendChild($dom->createTextNode($data_ingest_del));
$item18m1C1= $dom->createElement("gmd:deliveryPoint");
if ($data_ingest_del==''){$item18m1C1->setAttribute('gco:nilReason','missing');}
$item18m1C1->appendChild($title_string18m1C1);
$item17m1C1->appendChild($item18m1C1);

$title_string19m1C1= $dom->createElement("gco:CharacterString");
$title_string19m1C1->appendChild($dom->createTextNode($data_ingest_city));
$item19m1C1= $dom->createElement("gmd:city");
if ($data_ingest_city==''){$item19m1C1->setAttribute('gco:nilReason','missing');}
$item19m1C1->appendChild($title_string19m1C1);
$item17m1C1->appendChild($item19m1C1);


$title_string21m1C1= $dom->createElement("gco:CharacterString");
$title_string21m1C1->appendChild($dom->createTextNode($data_ingest_pcode));
$item21m1C1= $dom->createElement("gmd:postalCode");
if ($data_ingest_pcode==''){$item21m1C1->setAttribute('gco:nilReason','missing');}
$item21m1C1->appendChild($title_string21m1C1);
$item17m1C1->appendChild($item21m1C1);

$title_string22m1C1= $dom->createElement("gco:CharacterString");
$title_string22m1C1->appendChild($dom->createTextNode($data_ingest_country));
$item22m1C1= $dom->createElement("gmd:country");
if ($data_ingest_country==''){$item22m1C1->setAttribute('gco:nilReason','missing');}
$item22m1C1->appendChild($title_string22m1C1);
$item17m1C1->appendChild($item22m1C1);

$title_string23m1C1= $dom->createElement("gco:CharacterString");
$title_string23m1C1->appendChild($dom->createTextNode($data_ingest_email));
$item23m1C1= $dom->createElement("gmd:electronicMailAddress");
if ($data_ingest_email==''){$item23m1C1->setAttribute('gco:nilReason','missing');}
$item23m1C1->appendChild($title_string23m1C1);
$item17m1C1->appendChild($item23m1C1);



$title_string43gC1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gC1->appendChild($dom->createTextNode('processor'));
$item43gC1= $dom->createElement("gmd:role");
$item43gC1->appendChild($title_string43gC1);
$title_string43gC1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gC1->setAttribute('codeListValue','processor');
$item43eC1->appendChild($item43gC1);


$item43dD1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dD1);

$item43eD1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dD1->appendChild($item43eD1);

$title_string43fD1= $dom->createElement("gco:CharacterString");
$title_string43fD1->appendChild($dom->createTextNode($qa_name));
$item43fD1= $dom->createElement("gmd:individualName");
if ($qa_name==''){$item43fD1->setAttribute('gco:nilReason','missing');}
$item43fD1->appendChild($title_string43fD1);
$item43eD1->appendChild($item43fD1);



$title_string8m1D1= $dom->createElement("gco:CharacterString");
$title_string8m1D1->appendChild($dom->createTextNode($qa_org));
$item8m1D1= $dom->createElement("gmd:organisationName");
if ($qa_org==''){$item8m1D1->setAttribute('gco:nilReason','missing');}
$item8m1D1->appendChild($title_string8m1D1);
$item43eD1->appendChild($item8m1D1);

$title_string9m1D1= $dom->createElement("gco:CharacterString");
$title_string9m1D1->appendChild($dom->createTextNode($qa_position));
$item9m1D1= $dom->createElement("gmd:positionName");
if ($qa_position==''){$item9m1D1->setAttribute('gco:nilReason','missing');}
$item9m1D1->appendChild($title_string9m1D1);
$item43eD1->appendChild($item9m1D1);

$item10m1D1= $dom->createElement("gmd:contactInfo");
$item43eD1->appendChild($item10m1D1);

$item11m1D1= $dom->createElement("gmd:CI_Contact");
$item10m1D1->appendChild($item11m1D1);

$item12m1D1= $dom->createElement("gmd:phone");
$item11m1D1->appendChild($item12m1D1);

$item13m1D1= $dom->createElement("gmd:CI_Telephone");
$item12m1D1->appendChild($item13m1D1);

$title_string14m1D1= $dom->createElement("gco:CharacterString");
$title_string14m1D1->appendChild($dom->createTextNode($qa_phone));
$item14m1D1= $dom->createElement("gmd:voice");
if ($qa_phone==''){$item14m1D1->setAttribute('gco:nilReason','missing');}
$item14m1D1->appendChild($title_string14m1D1);
$item13m1D1->appendChild($item14m1D1);

$title_string15m1D1= $dom->createElement("gco:CharacterString");
$title_string15m1D1->appendChild($dom->createTextNode($qa_fax));
$item15m1D1= $dom->createElement("gmd:facsimile");
if ($qa_fax==''){$item15m1D1->setAttribute('gco:nilReason','missing');}
$item15m1D1->appendChild($title_string15m1D1);
$item13m1D1->appendChild($item15m1D1);

$item16m1D1= $dom->createElement("gmd:address");
$item11m1D1->appendChild($item16m1D1);

$item17m1D1= $dom->createElement("gmd:CI_Address");
$item16m1D1->appendChild($item17m1D1);

$title_string18m1D1= $dom->createElement("gco:CharacterString");
$title_string18m1D1->appendChild($dom->createTextNode($qa_del));
$item18m1D1= $dom->createElement("gmd:deliveryPoint");
if ($qa_del==''){$item18m1D1->setAttribute('gco:nilReason','missing');}
$item18m1D1->appendChild($title_string18m1D1);
$item17m1D1->appendChild($item18m1D1);

$title_string19m1D1= $dom->createElement("gco:CharacterString");
$title_string19m1D1->appendChild($dom->createTextNode($qa_city));
$item19m1D1= $dom->createElement("gmd:city");
if ($qa_city==''){$item19m1D1->setAttribute('gco:nilReason','missing');}
$item19m1D1->appendChild($title_string19m1D1);
$item17m1D1->appendChild($item19m1D1);

$title_string21m1D1= $dom->createElement("gco:CharacterString");
$title_string21m1D1->appendChild($dom->createTextNode($qa_pcode));
$item21m1D1= $dom->createElement("gmd:postalCode");
if ($qa_pcode==''){$item21m1D1->setAttribute('gco:nilReason','missing');}
$item21m1D1->appendChild($title_string21m1D1);
$item17m1D1->appendChild($item21m1D1);

$title_string22m1D1= $dom->createElement("gco:CharacterString");
$title_string22m1D1->appendChild($dom->createTextNode($qa_country));
$item22m1D1= $dom->createElement("gmd:country");
if ($qa_country==''){$item22m1D1->setAttribute('gco:nilReason','missing');}
$item22m1D1->appendChild($title_string22m1D1);
$item17m1D1->appendChild($item22m1D1);

$title_string23m1D1= $dom->createElement("gco:CharacterString");
$title_string23m1D1->appendChild($dom->createTextNode($qa_email));
$item23m1D1= $dom->createElement("gmd:electronicMailAddress");
if ($qa_email==''){$item23m1D1->setAttribute('gco:nilReason','missing');}
$item23m1D1->appendChild($title_string23m1D1);
$item17m1D1->appendChild($item23m1D1);



$title_string43gD1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gD1->appendChild($dom->createTextNode('qassurer'));
$item43gD1= $dom->createElement("gmd:role");
$item43gD1->appendChild($title_string43gD1);
$title_string43gD1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gD1->setAttribute('codeListValue','qassurer');
$item43eD1->appendChild($item43gD1);


$item43dE1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dE1);

$item43eE1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dE1->appendChild($item43eE1);

$title_string43fE1= $dom->createElement("gco:CharacterString");
$title_string43fE1->appendChild($dom->createTextNode($publish_name));
$item43fE1= $dom->createElement("gmd:individualName");
if ($publish_name==''){$item43fE1->setAttribute('gco:nilReason','missing');}
$item43fE1->appendChild($title_string43fE1);
$item43eE1->appendChild($item43fE1);



$title_string8m1E1= $dom->createElement("gco:CharacterString");
$title_string8m1E1->appendChild($dom->createTextNode($publish_org));
$item8m1E1= $dom->createElement("gmd:organisationName");
if ($publish_org==''){$item8m1E1->setAttribute('gco:nilReason','missing');}
$item8m1E1->appendChild($title_string8m1E1);
$item43eE1->appendChild($item8m1E1);


$title_string9m1E1= $dom->createElement("gco:CharacterString");
$title_string9m1E1->appendChild($dom->createTextNode($publish_position));
$item9m1E1= $dom->createElement("gmd:positionName");
if ($publish_position==''){$item9m1E1->setAttribute('gco:nilReason','missing');}
$item9m1E1->appendChild($title_string9m1E1);
$item43eE1->appendChild($item9m1E1);

$item10m1E1= $dom->createElement("gmd:contactInfo");
$item43eE1->appendChild($item10m1E1);

$item11m1E1= $dom->createElement("gmd:CI_Contact");
$item10m1E1->appendChild($item11m1E1);

$item12m1E1= $dom->createElement("gmd:phone");
$item11m1E1->appendChild($item12m1E1);

$item13m1E1= $dom->createElement("gmd:CI_Telephone");
$item12m1E1->appendChild($item13m1E1);

$title_string14m1E1= $dom->createElement("gco:CharacterString");
$title_string14m1E1->appendChild($dom->createTextNode($publish_phone));
$item14m1E1= $dom->createElement("gmd:voice");
if ($publish_phone==''){$item14m1E1->setAttribute('gco:nilReason','missing');}
$item14m1E1->appendChild($title_string14m1E1);
$item13m1E1->appendChild($item14m1E1);

$title_string15m1E1= $dom->createElement("gco:CharacterString");
$title_string15m1E1->appendChild($dom->createTextNode($publish_fax));
$item15m1E1= $dom->createElement("gmd:facsimile");
if ($publish_fax==''){$item15m1E1->setAttribute('gco:nilReason','missing');}
$item15m1E1->appendChild($title_string15m1E1);
$item13m1E1->appendChild($item15m1E1);

$item16m1E1= $dom->createElement("gmd:address");
$item11m1E1->appendChild($item16m1E1);

$item17m1E1= $dom->createElement("gmd:CI_Address");
$item16m1E1->appendChild($item17m1E1);

$title_string18m1E1= $dom->createElement("gco:CharacterString");
$title_string18m1E1->appendChild($dom->createTextNode($publish_del));
$item18m1E1= $dom->createElement("gmd:deliveryPoint");
if ($publish_del==''){$item18m1E1->setAttribute('gco:nilReason','missing');}
$item18m1E1->appendChild($title_string18m1E1);
$item17m1E1->appendChild($item18m1E1);

$title_string19m1E1= $dom->createElement("gco:CharacterString");
$title_string19m1E1->appendChild($dom->createTextNode($publish_city));
$item19m1E1= $dom->createElement("gmd:city");
if ($publish_city==''){$item19m1E1->setAttribute('gco:nilReason','missing');}
$item19m1E1->appendChild($title_string19m1E1);
$item17m1E1->appendChild($item19m1E1);


$title_string21m1E1= $dom->createElement("gco:CharacterString");
$title_string21m1E1->appendChild($dom->createTextNode($publish_pcode));
$item21m1E1= $dom->createElement("gmd:postalCode");
if ($publish_pcode==''){$item21m1E1->setAttribute('gco:nilReason','missing');}
$item21m1E1->appendChild($title_string21m1E1);
$item17m1E1->appendChild($item21m1E1);

$title_string22m1E1= $dom->createElement("gco:CharacterString");
$title_string22m1E1->appendChild($dom->createTextNode($publish_country));
$item22m1E1= $dom->createElement("gmd:country");
if ($publish_country==''){$item22m1E1->setAttribute('gco:nilReason','missing');}
$item22m1E1->appendChild($title_string22m1E1);
$item17m1E1->appendChild($item22m1E1);

$title_string23m1E1= $dom->createElement("gco:CharacterString");
$title_string23m1E1->appendChild($dom->createTextNode($publish_email));
$item23m1E1= $dom->createElement("gmd:electronicMailAddress");
if ($publish_email==''){$item23m1E1->setAttribute('gco:nilReason','missing');}
$item23m1E1->appendChild($title_string23m1E1);
$item17m1E1->appendChild($item23m1E1);



$title_string43gE1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gE1->appendChild($dom->createTextNode('publisher'));
$item43gE1= $dom->createElement("gmd:role");
$item43gE1->appendChild($title_string43gE1);
$title_string43gE1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gE1->setAttribute('codeListValue','publisher');
$item43eE1->appendChild($item43gE1);



$item43dF1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dF1);

$item43eF1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dF1->appendChild($item43eF1);

$title_string43fF1= $dom->createElement("gco:CharacterString");
$title_string43fF1->appendChild($dom->createTextNode($maint_name));
$item43fF1= $dom->createElement("gmd:individualName");
if ($maint_name==''){$item43fF1->setAttribute('gco:nilReason','missing');}
$item43fF1->appendChild($title_string43fF1);
$item43eF1->appendChild($item43fF1);

$title_string8m1F1= $dom->createElement("gco:CharacterString");
$title_string8m1F1->appendChild($dom->createTextNode($maint_org));
$item8m1F1= $dom->createElement("gmd:organisationName");
if ($maint_org==''){$item8m1F1->setAttribute('gco:nilReason','missing');}
$item8m1F1->appendChild($title_string8m1F1);
$item43eF1->appendChild($item8m1F1);


$title_string9m1F1= $dom->createElement("gco:CharacterString");
$title_string9m1F1->appendChild($dom->createTextNode($maint_position));
$item9m1F1= $dom->createElement("gmd:positionName");
if ($maint_position==''){$item9m1F1->setAttribute('gco:nilReason','missing');}
$item9m1F1->appendChild($title_string9m1F1);
$item43eF1->appendChild($item9m1F1);

$item10m1F1= $dom->createElement("gmd:contactInfo");
$item43eF1->appendChild($item10m1F1);

$item11m1F1= $dom->createElement("gmd:CI_Contact");
$item10m1F1->appendChild($item11m1F1);

$item12m1F1= $dom->createElement("gmd:phone");
$item11m1F1->appendChild($item12m1F1);

$item13m1F1= $dom->createElement("gmd:CI_Telephone");
$item12m1F1->appendChild($item13m1F1);

$title_string14m1F1= $dom->createElement("gco:CharacterString");
$title_string14m1F1->appendChild($dom->createTextNode($maint_phone));
$item14m1F1= $dom->createElement("gmd:voice");
if ($maint_phone==''){$item14m1F1->setAttribute('gco:nilReason','missing');}
$item14m1F1->appendChild($title_string14m1F1);
$item13m1F1->appendChild($item14m1F1);

$title_string15m1F1= $dom->createElement("gco:CharacterString");
$title_string15m1F1->appendChild($dom->createTextNode($maint_fax));
$item15m1F1= $dom->createElement("gmd:facsimile");
if ($maint_fax==''){$item15m1F1->setAttribute('gco:nilReason','missing');}
$item15m1F1->appendChild($title_string15m1F1);
$item13m1F1->appendChild($item15m1F1);

$item16m1F1= $dom->createElement("gmd:address");
$item11m1F1->appendChild($item16m1F1);

$item17m1F1= $dom->createElement("gmd:CI_Address");
$item16m1F1->appendChild($item17m1F1);

$title_string18m1F1= $dom->createElement("gco:CharacterString");
$title_string18m1F1->appendChild($dom->createTextNode($maint_del));
$item18m1F1= $dom->createElement("gmd:deliveryPoint");
if ($maint_del==''){$item18m1F1->setAttribute('gco:nilReason','missing');}
$item18m1F1->appendChild($title_string18m1F1);
$item17m1F1->appendChild($item18m1F1);


$title_string19m1F1= $dom->createElement("gco:CharacterString");
$title_string19m1F1->appendChild($dom->createTextNode($maint_city));
$item19m1F1= $dom->createElement("gmd:city");
if ($maint_city==''){$item19m1F1->setAttribute('gco:nilReason','missing');}
$item19m1F1->appendChild($title_string19m1F1);
$item17m1F1->appendChild($item19m1F1);


$title_string21m1F1= $dom->createElement("gco:CharacterString");
$title_string21m1F1->appendChild($dom->createTextNode($maint_pcode));
$item21m1F1= $dom->createElement("gmd:postalCode");
if ($maint_pcode==''){$item21m1F1->setAttribute('gco:nilReason','missing');}
$item21m1F1->appendChild($title_string21m1F1);
$item17m1F1->appendChild($item21m1F1);

$title_string22m1F1= $dom->createElement("gco:CharacterString");
$title_string22m1F1->appendChild($dom->createTextNode($maint_country));
$item22m1F1= $dom->createElement("gmd:country");
if ($maint_country==''){$item22m1F1->setAttribute('gco:nilReason','missing');}
$item22m1F1->appendChild($title_string22m1F1);
$item17m1F1->appendChild($item22m1F1);

$title_string23m1F1= $dom->createElement("gco:CharacterString");
$title_string23m1F1->appendChild($dom->createTextNode($maint_email));
$item23m1F1= $dom->createElement("gmd:electronicMailAddress");
if ($maint_email==''){$item23m1F1->setAttribute('gco:nilReason','missing');}
$item23m1F1->appendChild($title_string23m1F1);
$item17m1F1->appendChild($item23m1F1);



$title_string43gF1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gF1->appendChild($dom->createTextNode('maintainer'));
$item43gF1= $dom->createElement("gmd:role");
$item43gF1->appendChild($title_string43gF1);
$title_string43gF1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gF1->setAttribute('codeListValue','maintainer');
$item43eF1->appendChild($item43gF1);


$item43dG1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dG1);

$item43eG1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dG1->appendChild($item43eG1);

$title_string43fG1= $dom->createElement("gco:CharacterString");
$title_string43fG1->appendChild($dom->createTextNode($usupport_name));
$item43fG1= $dom->createElement("gmd:individualName");
if ($usupport_name==''){$item43fG1->setAttribute('gco:nilReason','missing');}
$item43fG1->appendChild($title_string43fG1);
$item43eG1->appendChild($item43fG1);


$title_string8m1G1= $dom->createElement("gco:CharacterString");
$title_string8m1G1->appendChild($dom->createTextNode($usupport_org));
$item8m1G1= $dom->createElement("gmd:organisationName");
if ($usupport_org==''){$item8m1G1->setAttribute('gco:nilReason','missing');}
$item8m1G1->appendChild($title_string8m1G1);
$item43eG1->appendChild($item8m1G1);


$title_string9m1G1= $dom->createElement("gco:CharacterString");
$title_string9m1G1->appendChild($dom->createTextNode($usupport_position));
$item9m1G1= $dom->createElement("gmd:positionName");
if ($usupport_position==''){$item9m1G1->setAttribute('gco:nilReason','missing');}
$item9m1G1->appendChild($title_string9m1G1);
$item43eG1->appendChild($item9m1G1);

$item10m1G1= $dom->createElement("gmd:contactInfo");
$item43eG1->appendChild($item10m1G1);

$item11m1G1= $dom->createElement("gmd:CI_Contact");
$item10m1G1->appendChild($item11m1G1);

$item12m1G1= $dom->createElement("gmd:phone");
$item11m1G1->appendChild($item12m1G1);

$item13m1G1= $dom->createElement("gmd:CI_Telephone");
$item12m1G1->appendChild($item13m1G1);

$title_string14m1G1= $dom->createElement("gco:CharacterString");
$title_string14m1G1->appendChild($dom->createTextNode($usupport_phone));
$item14m1G1= $dom->createElement("gmd:voice");
if ($usupport_phone==''){$item14m1G1->setAttribute('gco:nilReason','missing');}
$item14m1G1->appendChild($title_string14m1G1);
$item13m1G1->appendChild($item14m1G1);

$title_string15m1G1= $dom->createElement("gco:CharacterString");
$title_string15m1G1->appendChild($dom->createTextNode($usupport_fax));
$item15m1G1= $dom->createElement("gmd:facsimile");
if ($usupport_fax==''){$item15m1G1->setAttribute('gco:nilReason','missing');}
$item15m1G1->appendChild($title_string15m1G1);
$item13m1G1->appendChild($item15m1G1);

$item16m1G1= $dom->createElement("gmd:address");
$item11m1G1->appendChild($item16m1G1);

$item17m1G1= $dom->createElement("gmd:CI_Address");
$item16m1G1->appendChild($item17m1G1);

$title_string18m1G1= $dom->createElement("gco:CharacterString");
$title_string18m1G1->appendChild($dom->createTextNode($usupport_del));
$item18m1G1= $dom->createElement("gmd:deliveryPoint");
if ($usupport_del==''){$item18m1G1->setAttribute('gco:nilReason','missing');}
$item18m1G1->appendChild($title_string18m1G1);
$item17m1G1->appendChild($item18m1G1);

$title_string19m1G1= $dom->createElement("gco:CharacterString");
$title_string19m1G1->appendChild($dom->createTextNode($usupport_city));
$item19m1G1= $dom->createElement("gmd:city");
if ($usupport_city==''){$item19m1G1->setAttribute('gco:nilReason','missing');}
$item19m1G1->appendChild($title_string19m1G1);
$item17m1G1->appendChild($item19m1G1);


$title_string21m1G1= $dom->createElement("gco:CharacterString");
$title_string21m1G1->appendChild($dom->createTextNode($usupport_pcode));
$item21m1G1= $dom->createElement("gmd:postalCode");
if ($usupport_pcode==''){$item21m1G1->setAttribute('gco:nilReason','missing');}
$item21m1G1->appendChild($title_string21m1G1);
$item17m1G1->appendChild($item21m1G1);

$title_string22m1G1= $dom->createElement("gco:CharacterString");
$title_string22m1G1->appendChild($dom->createTextNode($usupport_country));
$item22m1G1= $dom->createElement("gmd:country");
if ($usupport_country==''){$item22m1G1->setAttribute('gco:nilReason','missing');}
$item22m1G1->appendChild($title_string22m1G1);
$item17m1G1->appendChild($item22m1G1);

$title_string23m1G1= $dom->createElement("gco:CharacterString");
$title_string23m1G1->appendChild($dom->createTextNode($usupport_email));
$item23m1G1= $dom->createElement("gmd:electronicMailAddress");
if ($usupport_email==''){$item23m1G1->setAttribute('gco:nilReason','missing');}
$item23m1G1->appendChild($title_string23m1G1);
$item17m1G1->appendChild($item23m1G1);



$title_string43gG1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gG1->appendChild($dom->createTextNode('supporter'));
$item43gG1= $dom->createElement("gmd:role");
$item43gG1->appendChild($title_string43gG1);
$title_string43gG1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gG1->setAttribute('codeListValue','supporter');
$item43eG1->appendChild($item43gG1);


$item43dH1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dH1);

$item43eH1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dH1->appendChild($item43eH1);

$title_string43fH1= $dom->createElement("gco:CharacterString");
$title_string43fH1->appendChild($dom->createTextNode($dservice_name));
$item43fH1= $dom->createElement("gmd:individualName");
if ($dservice_name==''){$item43fH1->setAttribute('gco:nilReason','missing');}
$item43fH1->appendChild($title_string43fH1);
$item43eH1->appendChild($item43fH1);

$title_string8m1H1= $dom->createElement("gco:CharacterString");
$title_string8m1H1->appendChild($dom->createTextNode($dservice_org));
$item8m1H1= $dom->createElement("gmd:organisationName");
if ($dservice_org==''){$item8m1H1->setAttribute('gco:nilReason','missing');}
$item8m1H1->appendChild($title_string8m1H1);
$item43eH1->appendChild($item8m1H1);


$title_string9m1H1= $dom->createElement("gco:CharacterString");
$title_string9m1H1->appendChild($dom->createTextNode($dservice_position));
$item9m1H1= $dom->createElement("gmd:positionName");
if ($dservice_position==''){$item9m1H1->setAttribute('gco:nilReason','missing');}
$item9m1H1->appendChild($title_string9m1H1);
$item43eH1->appendChild($item9m1H1);

$item10m1H1= $dom->createElement("gmd:contactInfo");
$item43eH1->appendChild($item10m1H1);

$item11m1H1= $dom->createElement("gmd:CI_Contact");
$item10m1H1->appendChild($item11m1H1);

$item12m1H1= $dom->createElement("gmd:phone");
$item11m1H1->appendChild($item12m1H1);

$item13m1H1= $dom->createElement("gmd:CI_Telephone");
$item12m1H1->appendChild($item13m1H1);

$title_string14m1H1= $dom->createElement("gco:CharacterString");
$title_string14m1H1->appendChild($dom->createTextNode($dservice_phone));
$item14m1H1= $dom->createElement("gmd:voice");
if ($dservice_phone==''){$item14m1H1->setAttribute('gco:nilReason','missing');}
$item14m1H1->appendChild($title_string14m1H1);
$item13m1H1->appendChild($item14m1H1);

$title_string15m1H1= $dom->createElement("gco:CharacterString");
$title_string15m1H1->appendChild($dom->createTextNode($dservice_fax));
$item15m1H1= $dom->createElement("gmd:facsimile");
if ($dservice_fax==''){$item15m1H1->setAttribute('gco:nilReason','missing');}
$item15m1H1->appendChild($title_string15m1H1);
$item13m1H1->appendChild($item15m1H1);

$item16m1H1= $dom->createElement("gmd:address");
$item11m1H1->appendChild($item16m1H1);

$item17m1H1= $dom->createElement("gmd:CI_Address");
$item16m1H1->appendChild($item17m1H1);

$title_string18m1H1= $dom->createElement("gco:CharacterString");
$title_string18m1H1->appendChild($dom->createTextNode($dservice_del));
$item18m1H1= $dom->createElement("gmd:deliveryPoint");
if ($dservice_del==''){$item18m1H1->setAttribute('gco:nilReason','missing');}
$item18m1H1->appendChild($title_string18m1H1);
$item17m1H1->appendChild($item18m1H1);


$title_string19m1H1= $dom->createElement("gco:CharacterString");
$title_string19m1H1->appendChild($dom->createTextNode($dservice_city));
$item19m1H1= $dom->createElement("gmd:city");
if ($dservice_city==''){$item19m1H1->setAttribute('gco:nilReason','missing');}
$item19m1H1->appendChild($title_string19m1H1);
$item17m1H1->appendChild($item19m1H1);


$title_string21m1H1= $dom->createElement("gco:CharacterString");
$title_string21m1H1->appendChild($dom->createTextNode($dservice_pcode));
$item21m1H1= $dom->createElement("gmd:postalCode");
if ($dservice_pcode==''){$item21m1H1->setAttribute('gco:nilReason','missing');}
$item21m1H1->appendChild($title_string21m1H1);
$item17m1H1->appendChild($item21m1H1);

$title_string22m1H1= $dom->createElement("gco:CharacterString");
$title_string22m1H1->appendChild($dom->createTextNode($dservice_country));
$item22m1H1= $dom->createElement("gmd:country");
if ($dservice_country==''){$item22m1H1->setAttribute('gco:nilReason','missing');}
$item22m1H1->appendChild($title_string22m1H1);
$item17m1H1->appendChild($item22m1H1);

$title_string23m1H1= $dom->createElement("gco:CharacterString");
$title_string23m1H1->appendChild($dom->createTextNode($dservice_email));
$item23m1H1= $dom->createElement("gmd:electronicMailAddress");
if ($dservice_email==''){$item23m1H1->setAttribute('gco:nilReason','missing');}
$item23m1H1->appendChild($title_string23m1H1);
$item17m1H1->appendChild($item23m1H1);



$title_string43gH1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gH1->appendChild($dom->createTextNode('sdeveloper'));
$item43gH1= $dom->createElement("gmd:role");
$item43gH1->appendChild($title_string43gH1);
$title_string43gH1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gH1->setAttribute('codeListValue','sdeveloper');
$item43eH1->appendChild($item43gH1);

$item43dJ1= $dom->createElement("gmd:citedResponsibleParty");
$item38->appendChild($item43dJ1);

$item43eJ1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43dJ1->appendChild($item43eJ1);

$title_string43fJ1= $dom->createElement("gco:CharacterString");
$title_string43fJ1->appendChild($dom->createTextNode($dservice_op_name));
$item43fJ1= $dom->createElement("gmd:individualName");
if ($dservice_op_name==''){$item43fJ1->setAttribute('gco:nilReason','missing');}
$item43fJ1->appendChild($title_string43fJ1);
$item43eJ1->appendChild($item43fJ1);

$title_string8m1J1= $dom->createElement("gco:CharacterString");
$title_string8m1J1->appendChild($dom->createTextNode($dservice_op_org));
$item8m1J1= $dom->createElement("gmd:organisationName");
if ($dservice_op_org==''){$item8m1J1->setAttribute('gco:nilReason','missing');}
$item8m1J1->appendChild($title_string8m1J1);
$item43eJ1->appendChild($item8m1J1);


$title_string9m1J1= $dom->createElement("gco:CharacterString");
$title_string9m1J1->appendChild($dom->createTextNode($dservice_op_position));
$item9m1J1= $dom->createElement("gmd:positionName");
if ($dservice_op_position==''){$item9m1J1->setAttribute('gco:nilReason','missing');}
$item9m1J1->appendChild($title_string9m1J1);
$item43eJ1->appendChild($item9m1J1);

$item10m1J1= $dom->createElement("gmd:contactInfo");
$item43eJ1->appendChild($item10m1J1);

$item11m1J1= $dom->createElement("gmd:CI_Contact");
$item10m1J1->appendChild($item11m1J1);

$item12m1J1= $dom->createElement("gmd:phone");
$item11m1J1->appendChild($item12m1J1);

$item13m1J1= $dom->createElement("gmd:CI_Telephone");
$item12m1J1->appendChild($item13m1J1);

$title_string14m1J1= $dom->createElement("gco:CharacterString");
$title_string14m1J1->appendChild($dom->createTextNode($dservice_op_phone));
$item14m1J1= $dom->createElement("gmd:voice");
if ($dservice_op_phone==''){$item14m1J1->setAttribute('gco:nilReason','missing');}
$item14m1J1->appendChild($title_string14m1J1);
$item13m1J1->appendChild($item14m1J1);

$title_string15m1J1= $dom->createElement("gco:CharacterString");
$title_string15m1J1->appendChild($dom->createTextNode($dservice_op_fax));
$item15m1J1= $dom->createElement("gmd:facsimile");
if ($dservice_op_fax==''){$item15m1J1->setAttribute('gco:nilReason','missing');}
$item15m1J1->appendChild($title_string15m1J1);
$item13m1J1->appendChild($item15m1J1);

$item16m1J1= $dom->createElement("gmd:address");
$item11m1J1->appendChild($item16m1J1);

$item17m1J1= $dom->createElement("gmd:CI_Address");
$item16m1J1->appendChild($item17m1J1);

$title_string18m1J1= $dom->createElement("gco:CharacterString");
$title_string18m1J1->appendChild($dom->createTextNode($dservice_op_del));
$item18m1J1= $dom->createElement("gmd:deliveryPoint");
if ($dservice_op_del==''){$item18m1J1->setAttribute('gco:nilReason','missing');}
$item18m1J1->appendChild($title_string18m1J1);
$item17m1J1->appendChild($item18m1J1);

$title_string19m1J1= $dom->createElement("gco:CharacterString");
$title_string19m1J1->appendChild($dom->createTextNode($dservice_op_city));
$item19m1J1= $dom->createElement("gmd:city");
if ($dservice_op_city==''){$item19m1J1->setAttribute('gco:nilReason','missing');}
$item19m1J1->appendChild($title_string19m1J1);
$item17m1J1->appendChild($item19m1J1);


$title_string21m1J1= $dom->createElement("gco:CharacterString");
$title_string21m1J1->appendChild($dom->createTextNode($dservice_op_op_pcode));
$item21m1J1= $dom->createElement("gmd:postalCode");
if ($dservice_op_pcode==''){$item21m1J1->setAttribute('gco:nilReason','missing');}
$item21m1J1->appendChild($title_string21m1J1);
$item17m1J1->appendChild($item21m1J1);

$title_string22m1J1= $dom->createElement("gco:CharacterString");
$title_string22m1J1->appendChild($dom->createTextNode($dservice_op_country));
$item22m1J1= $dom->createElement("gmd:country");
if ($dservice_op_country==''){$item22m1J1->setAttribute('gco:nilReason','missing');}
$item22m1J1->appendChild($title_string22m1J1);
$item17m1J1->appendChild($item22m1J1);

$title_string23m1J1= $dom->createElement("gco:CharacterString");
$title_string23m1J1->appendChild($dom->createTextNode($dservice_op_email));
$item23m1J1= $dom->createElement("gmd:electronicMailAddress");
if ($dservice_op_email==''){$item23m1J1->setAttribute('gco:nilReason','missing');}
$item23m1J1->appendChild($title_string23m1J1);
$item17m1J1->appendChild($item23m1J1);



$title_string43gJ1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gJ1->appendChild($dom->createTextNode('soperator'));
$item43gJ1= $dom->createElement("gmd:role");
$item43gJ1->appendChild($title_string43gJ1);
$title_string43gJ1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gJ1->setAttribute('codeListValue','soperator');
$item43eJ1->appendChild($item43gJ1);




*/


$item43po_1= $dom->createElement("gmd:pointOfContact");
$item36->appendChild($item43po_1);



$item43eK1= $dom->createElement("gmd:CI_ResponsibleParty");
$item43po_1->appendChild($item43eK1);

$title_string43fK1= $dom->createElement("gco:CharacterString");
$title_string43fK1->appendChild($dom->createTextNode($md_owner_name));
$item43fK1= $dom->createElement("gmd:individualName");
if ($md_owner_name==''){$item43fK1->setAttribute('gco:nilReason','missing');}
$item43fK1->appendChild($title_string43fK1);
$item43eK1->appendChild($item43fK1);

$title_string8m1K1= $dom->createElement("gco:CharacterString");
$title_string8m1K1->appendChild($dom->createTextNode($md_owner_org));
$item8m1K1= $dom->createElement("gmd:organisationName");
if ($md_owner_org==''){$item8m1K1->setAttribute('gco:nilReason','missing');}
$item8m1K1->appendChild($title_string8m1K1);
$item43eK1->appendChild($item8m1K1);


$title_string9m1K1= $dom->createElement("gco:CharacterString");
$title_string9m1K1->appendChild($dom->createTextNode($md_owner_position));
$item9m1K1= $dom->createElement("gmd:positionName");
if ($md_owner_position==''){$item9m1K1->setAttribute('gco:nilReason','missing');}
$item9m1K1->appendChild($title_string9m1K1);
$item43eK1->appendChild($item9m1K1);

$item10m1K1= $dom->createElement("gmd:contactInfo");
$item43eK1->appendChild($item10m1K1);

$item11m1K1= $dom->createElement("gmd:CI_Contact");
$item10m1K1->appendChild($item11m1K1);

$item12m1K1= $dom->createElement("gmd:phone");
$item11m1K1->appendChild($item12m1K1);

$item13m1K1= $dom->createElement("gmd:CI_Telephone");
$item12m1K1->appendChild($item13m1K1);

$title_string14m1K1= $dom->createElement("gco:CharacterString");
$title_string14m1K1->appendChild($dom->createTextNode($md_owner_phone));
$item14m1K1= $dom->createElement("gmd:voice");
if ($md_owner_phone==''){$item14m1K1->setAttribute('gco:nilReason','missing');}
$item14m1K1->appendChild($title_string14m1K1);
$item13m1K1->appendChild($item14m1K1);

$title_string15m1K1= $dom->createElement("gco:CharacterString");
$title_string15m1K1->appendChild($dom->createTextNode($md_owner_fax));
$item15m1K1= $dom->createElement("gmd:facsimile");
if ($md_owner_fax==''){$item15m1K1->setAttribute('gco:nilReason','missing');}
$item15m1K1->appendChild($title_string15m1K1);
$item13m1K1->appendChild($item15m1K1);

$item16m1K1= $dom->createElement("gmd:address");
$item11m1K1->appendChild($item16m1K1);

$item17m1K1= $dom->createElement("gmd:CI_Address");
$item16m1K1->appendChild($item17m1K1);

$title_string18m1K1= $dom->createElement("gco:CharacterString");
$title_string18m1K1->appendChild($dom->createTextNode($md_owner_del));
$item18m1K1= $dom->createElement("gmd:deliveryPoint");
if ($md_owner_del==''){$item18m1K1->setAttribute('gco:nilReason','missing');}
$item18m1K1->appendChild($title_string18m1K1);
$item17m1K1->appendChild($item18m1K1);

$title_string19m1K1= $dom->createElement("gco:CharacterString");
$title_string19m1K1->appendChild($dom->createTextNode($md_owner_city));
$item19m1K1= $dom->createElement("gmd:city");
if ($md_owner_city==''){$item19m1K1->setAttribute('gco:nilReason','missing');}
$item19m1K1->appendChild($title_string19m1K1);
$item17m1K1->appendChild($item19m1K1);


$title_string21m1K1= $dom->createElement("gco:CharacterString");
$title_string21m1K1->appendChild($dom->createTextNode($md_owner_pcode));
$item21m1K1= $dom->createElement("gmd:postalCode");
if ($md_owner_pcode==''){$item21m1K1->setAttribute('gco:nilReason','missing');}
$item21m1K1->appendChild($title_string21m1K1);
$item17m1K1->appendChild($item21m1K1);

$title_string22m1K1= $dom->createElement("gco:CharacterString");
$title_string22m1K1->appendChild($dom->createTextNode($md_owner_country));
$item22m1K1= $dom->createElement("gmd:country");
if ($md_owner_country==''){$item22m1K1->setAttribute('gco:nilReason','missing');}
$item22m1K1->appendChild($title_string22m1K1);
$item17m1K1->appendChild($item22m1K1);

$title_string23m1K1= $dom->createElement("gco:CharacterString");
$title_string23m1K1->appendChild($dom->createTextNode($md_owner_email));
$item23m1K1= $dom->createElement("gmd:electronicMailAddress");
if ($md_owner_email==''){$item23m1K1->setAttribute('gco:nilReason','missing');}
$item23m1K1->appendChild($title_string23m1K1);
$item17m1K1->appendChild($item23m1K1);



$title_string43gK1= $dom->createElement("gmd:CI_RoleCode");
$title_string43gK1->appendChild($dom->createTextNode('pointOfContact'));
$item43gK1= $dom->createElement("gmd:role");
$item43gK1->appendChild($title_string43gK1);
$title_string43gK1->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#CI_RoleCode');
$title_string43gK1->setAttribute('codeListValue','pointOfContact');
$item43eK1->appendChild($item43gK1);





$item71a= $dom->createElement("gmd:resourceMaintenance");
$item36->appendChild($item71a);

$item71b= $dom->createElement("gmd:MD_MaintenanceInformation");
$item71a->appendChild($item71b);





$title_string71c= $dom->createElement("gmd:MD_MaintenanceFrequencyCode");
$title_string71c->appendChild($dom->createTextNode($maintenance_process));
$item71c= $dom->createElement("gmd:maintenanceAndUpdateFrequency");
$item71c->appendChild($title_string71c);
$title_string71c->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_MaintenanceFrequencyCode');
$title_string71c->setAttribute('codeListValue',$maintenance_process);
$item71b->appendChild($item71c);


$title_string71c_4= $dom->createElement("gco:CharacterString");
$title_string71c_4->appendChild($dom->createTextNode($backup_recovery_plan));
$item71c_4= $dom->createElement("gmd:maintenanceNote");
if ($backup_recovery_plan==''){$item71c_4->setAttribute('gco:nilReason','missing');}
$item71c_4->appendChild($title_string71c_4);
$item71b->appendChild($item71c_4);





$item72= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72);

$item73= $dom->createElement("gmd:MD_Keywords");
$item72->appendChild($item73);

$title_string74= $dom->createElement("gco:CharacterString");
$title_string74->appendChild($dom->createTextNode($keywords));
$item74= $dom->createElement("gmd:keyword");
if ($keywords==''){$item74->setAttribute('gco:nilReason','missing');}
$item74->appendChild($title_string74);
$item73->appendChild($item74);


$item72a= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72a);

$item73a= $dom->createElement("gmd:MD_Keywords");
$item72a->appendChild($item73a);

$title_string74a= $dom->createElement("gco:CharacterString");
$title_string74a->appendChild($dom->createTextNode($keywords1));
$item74a= $dom->createElement("gmd:keyword");
if ($keywords1==''){$item74a->setAttribute('gco:nilReason','missing');}
$item74a->appendChild($title_string74a);
$item73a->appendChild($item74a);


$item72b= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72b);

$item73b= $dom->createElement("gmd:MD_Keywords");
$item72b->appendChild($item73b);

$title_string74b= $dom->createElement("gco:CharacterString");
$title_string74b->appendChild($dom->createTextNode($keywords2));
$item74b= $dom->createElement("gmd:keyword");
if ($keywords2==''){$item74b->setAttribute('gco:nilReason','missing');}
$item74b->appendChild($title_string74b);
$item73b->appendChild($item74b);


$item72c= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72c);

$item73c= $dom->createElement("gmd:MD_Keywords");
$item72c->appendChild($item73c);

$title_string74c= $dom->createElement("gco:CharacterString");
$title_string74c->appendChild($dom->createTextNode($keywords3));
$item74c= $dom->createElement("gmd:keyword");
if ($keywords3==''){$item74c->setAttribute('gco:nilReason','missing');}
$item74c->appendChild($title_string74c);
$item73c->appendChild($item74c);




$item72d= $dom->createElement("gmd:descriptiveKeywords");
$item36->appendChild($item72d);

$item73d= $dom->createElement("gmd:MD_Keywords");
$item72d->appendChild($item73d);

$title_string74d= $dom->createElement("gco:CharacterString");
$title_string74d->appendChild($dom->createTextNode($keywords4));
$item74d= $dom->createElement("gmd:keyword");
if ($keywords4==''){$item74d->setAttribute('gco:nilReason','missing');}
$item74d->appendChild($title_string74d);
$item73d->appendChild($item74d);



$item81= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item81);

$item82= $dom->createElement("gmd:MD_LegalConstraints");
$item81->appendChild($item82);

$title_string83= $dom->createElement("gco:CharacterString");
$title_string83->appendChild($dom->createTextNode($use_limitations));
$item83= $dom->createElement("gmd:useLimitation");
if ($use_limitations==''){$item83->setAttribute('gco:nilReason','missing');}
$item83->appendChild($title_string83);
$item82->appendChild($item83);

$title_string84= $dom->createElement("gmd:MD_RestrictionCode");
$title_string84->appendChild($dom->createTextNode($access_constraints));
$item84= $dom->createElement("gmd:accessConstraints");
$item84->appendChild($title_string84);
$title_string84->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode');
$title_string84->setAttribute('codeListValue',$access_constraints);
$item82->appendChild($item84);

$title_string85= $dom->createElement("gco:CharacterString");
$title_string85->appendChild($dom->createTextNode($other_constraints1));
$item85= $dom->createElement("gmd:otherConstraints");
if ($other_constraints1==''){$item85->setAttribute('gco:nilReason','missing');}
$item85->appendChild($title_string85);
$item82->appendChild($item85);



$item86= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item86);

$item87= $dom->createElement("gmd:MD_LegalConstraints");
$item86->appendChild($item87);

$title_string88= $dom->createElement("gmd:MD_RestrictionCode");
$title_string88->appendChild($dom->createTextNode($use_constraints));
$item88= $dom->createElement("gmd:useConstraints");
$item88->appendChild($title_string88);
$title_string88->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_RestrictionCode');
$title_string88->setAttribute('codeListValue',$use_constraints);
$item87->appendChild($item88);

$title_string89a= $dom->createElement("gco:CharacterString");
$title_string89a->appendChild($dom->createTextNode($other_constraints2));
$item89a= $dom->createElement("gmd:otherConstraints");
if ($other_constraints2==''){$item89a->setAttribute('gco:nilReason','missing');}
$item89a->appendChild($title_string89a);
$item87->appendChild($item89a);



$item86a= $dom->createElement("gmd:resourceConstraints");
$item36->appendChild($item86a);

$item87a= $dom->createElement("gmd:MD_SecurityConstraints");
$item86a->appendChild($item87a);

$title_string206aaa= $dom->createElement("gmd:MD_ClassificationCode");
$title_string206aaa->appendChild($dom->createTextNode($c_classification));
$item206aaa= $dom->createElement("gmd:classification");
$item206aaa->appendChild($title_string206aaa);
$title_string206aaa->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_ClassificationCode');
$title_string206aaa->setAttribute('codeListValue',$c_classification);
$item87a->appendChild($item206aaa);






foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){



$item71a11= $dom->createElement("gmd:aggregationInfo");
$item36->appendChild($item71a11);

$item71b11= $dom->createElement("gmd:MD_AggregateInformation");
$item71a11->appendChild($item71b11);


$item71b11a= $dom->createElement("gmd:aggregateDataSetIdentifier");
$item71b11->appendChild($item71b11a);

$item71b11a1= $dom->createElement("gmd:MD_Identifier");
$item71b11a->appendChild($item71b11a1);

$title_stringzz1= $dom->createElement("gco:CharacterString");
$title_stringzz1->appendChild($dom->createTextNode($sfid));
$itemzz1= $dom->createElement("gmd:code");
 $itemzz1->appendChild($title_stringzz1);
$item71b11a1->appendChild($itemzz1);

$title_string71c1a= $dom->createElement("gmd:DS_AssociationTypeCode");
$title_string71c1a->appendChild($dom->createTextNode('source'));
$item71c1a= $dom->createElement("gmd:associationType");
$item71c1a->appendChild($title_string71c1a);
$title_string71c1a->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#DS_AssociationTypeCode');
$title_string71c1a->setAttribute('codeListValue','source');
$item71b11->appendChild($item71c1a);

$title_string71c1= $dom->createElement("gmd:DS_InitiativeTypeCode");
$title_string71c1->appendChild($dom->createTextNode('collection'));
$item71c1= $dom->createElement("gmd:initiativeType");
$item71c1->appendChild($title_string71c1);
$title_string71c1->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_InitiativeTypeCode');
$title_string71c1->setAttribute('codeListValue','collection');
$item71b11->appendChild($item71c1);


}}















/*



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

 */


$title_string97= $dom->createElement("gco:CharacterString");
$title_string97->appendChild($dom->createTextNode($language));
$item97= $dom->createElement("gmd:language");
if ($language==''){$item97->setAttribute('gco:nilReason','missing');}
$item97->appendChild($title_string97);
$item36->appendChild($item97);

$title_string2= $dom->createElement("gmd:MD_CharacterSetCode");
$title_string2->appendChild($dom->createTextNode($characterset));
$item2= $dom->createElement("gmd:characterSet");
$item2->appendChild($title_string2);
$title_string2->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_CharacterSetCode');
$title_string2->setAttribute('codeListValue',$characterset);
$item36->appendChild($item2);

$title_string99= $dom->createElement("MD_TopicCategoryCode");
$title_string99->appendChild($dom->createTextNode('environment'));
$item99= $dom->createElement("gmd:topicCategory");
$item99->appendChild($title_string99);
//$title_string99->setAttribute('codeList','http://www.isotc211.org/2005/resources/codeList.xml#MD_TopicCategoryCode');
//$title_string99->setAttribute('codeListValue','environment');
$item36->appendChild($item99);

if ($tools!=''){
$title_string99a= $dom->createElement("gco:CharacterString");
$title_string99a->appendChild($dom->createTextNode($tools));
$item99a= $dom->createElement("gmd:environmentDescription");
if ($tools==''){$item99a->setAttribute('gco:nilReason','missing');}
$item99a->appendChild($title_string99a);
$item36->appendChild($item99a);
}

if ($software!=''){
$title_string99a1= $dom->createElement("gco:CharacterString");
$title_string99a1->appendChild($dom->createTextNode($software));
$item99a1= $dom->createElement("gmd:environmentDescription");
if ($software==''){$item99a1->setAttribute('gco:nilReason','missing');}
$item99a1->appendChild($title_string99a1);
$item36->appendChild($item99a1);
}

if ($algorithms!=''){
$title_string99a2= $dom->createElement("gco:CharacterString");
$title_string99a2->appendChild($dom->createTextNode($algorithms));
$item99a2= $dom->createElement("gmd:environmentDescription");
if ($algorithms==''){$item99a2->setAttribute('gco:nilReason','missing');}
$item99a2->appendChild($title_string99a2);
$item36->appendChild($item99a2);
}







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
$item110->setAttribute('id','temporalExtent');
$item109->appendChild($item110);

$item111= $dom->createElement("gmd:extent");
$item110->appendChild($item111);

$item112= $dom->createElement("gml:TimePeriod");
$item112->setAttribute('gml:id','boundingTemporalExtentPeriod');
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
$title_string1_1->appendChild($dom->createTextNode($flexibility));
$item1_1= $dom->createElement("gmd:supplementalInformation");
if ($flexibility==''){$item1_1->setAttribute('gco:nilReason','missing');}
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
$title_string128->appendChild($dom->createTextNode($format1));
$item128= $dom->createElement("gmd:name");
if ($format1==''){$item128->setAttribute('gco:nilReason','missing');}
$item128->appendChild($title_string128);
$item127->appendChild($item128);

$title_string129= $dom->createElement("gco:CharacterString");
$title_string129->appendChild($dom->createTextNode($fversion1));
$item129= $dom->createElement("gmd:version");
if ($fversion1==''){$item129->setAttribute('gco:nilReason','missing');}
$item129->appendChild($title_string129);
$item127->appendChild($item129);

$item126f= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126f);



$item127f= $dom->createElement("gmd:MD_Format");
$item126f->appendChild($item127f);

$title_string128f= $dom->createElement("gco:CharacterString");
$title_string128f->appendChild($dom->createTextNode($format2));
$item128f= $dom->createElement("gmd:name");
if ($format2==''){$item128f->setAttribute('gco:nilReason','missing');}
$item128f->appendChild($title_string128f);
$item127f->appendChild($item128f);

$title_string129f= $dom->createElement("gco:CharacterString");
$title_string129f->appendChild($dom->createTextNode($fversion2));
$item129f= $dom->createElement("gmd:version");
if ($fversion2==''){$item129f->setAttribute('gco:nilReason','missing');}
$item129f->appendChild($title_string129f);
$item127f->appendChild($item129f);



$item126g= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126g);



$item127g= $dom->createElement("gmd:MD_Format");
$item126g->appendChild($item127g);

$title_string128g= $dom->createElement("gco:CharacterString");
$title_string128g->appendChild($dom->createTextNode($format3));
$item128g= $dom->createElement("gmd:name");
if ($format3==''){$item128g->setAttribute('gco:nilReason','missing');}
$item128g->appendChild($title_string128g);
$item127g->appendChild($item128g);

$title_string129g= $dom->createElement("gco:CharacterString");
$title_string129g->appendChild($dom->createTextNode($fversion3));
$item129g= $dom->createElement("gmd:version");
if ($fversion3==''){$item129g->setAttribute('gco:nilReason','missing');}
$item129g->appendChild($title_string129g);
$item127g->appendChild($item129g);


$item126h= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126h);



$item127h= $dom->createElement("gmd:MD_Format");
$item126h->appendChild($item127h);

$title_string128h= $dom->createElement("gco:CharacterString");
$title_string128h->appendChild($dom->createTextNode($format4));
$item128h= $dom->createElement("gmd:name");
if ($format4==''){$item128h->setAttribute('gco:nilReason','missing');}
$item128h->appendChild($title_string128h);
$item127h->appendChild($item128h);

$title_string129h= $dom->createElement("gco:CharacterString");
$title_string129h->appendChild($dom->createTextNode($fversion4));
$item129h= $dom->createElement("gmd:version");
if ($fversion4==''){$item129h->setAttribute('gco:nilReason','missing');}
$item129h->appendChild($title_string129h);
$item127h->appendChild($item129h);



$item126k= $dom->createElement("gmd:distributionFormat");
$item125->appendChild($item126k);



$item127k= $dom->createElement("gmd:MD_Format");
$item126k->appendChild($item127k);

$title_string128k= $dom->createElement("gco:CharacterString");
$title_string128k->appendChild($dom->createTextNode($format5));
$item128k= $dom->createElement("gmd:name");
if ($format5==''){$item128k->setAttribute('gco:nilReason','missing');}
$item128k->appendChild($title_string128k);
$item127k->appendChild($item128k);

$title_string129k= $dom->createElement("gco:CharacterString");
$title_string129k->appendChild($dom->createTextNode($fversion5));
$item129k= $dom->createElement("gmd:version");
if ($fversion5==''){$item129k->setAttribute('gco:nilReason','missing');}
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
$title_string166->appendChild($dom->createTextNode($documentation));
$item166= $dom->createElement("gmd:mediumNote");
if ($documentation==''){$item166->setAttribute('gco:nilReason','missing');}
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
$title_string171m1->appendChild($dom->createTextNode($services_url));
$item171m1= $dom->createElement("gmd:linkage");
$item171m1->appendChild($title_string171m1);
$item170m1->appendChild($item171m1);



$item169m2= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m2);

$item170m2= $dom->createElement("gmd:CI_OnlineResource");
$item169m2->appendChild($item170m2);

$title_string171m2= $dom->createElement("gmd:URL");
$title_string171m2->appendChild($dom->createTextNode($catalog_registry));
$item171m2= $dom->createElement("gmd:linkage");
$item171m2->appendChild($title_string171m2);
$item170m2->appendChild($item171m2);





$item169m3= $dom->createElement("gmd:onLine");
$item168->appendChild($item169m3);

$item170m3= $dom->createElement("gmd:CI_OnlineResource");
$item169m3->appendChild($item170m3);

$title_string171m3= $dom->createElement("gmd:URL");
$title_string171m3->appendChild($dom->createTextNode($federated_catalog));
$item171m3= $dom->createElement("gmd:linkage");
$item171m3->appendChild($title_string171m3);
$item170m3->appendChild($item171m3);








$item169= $dom->createElement("gmd:onLine");
$item168->appendChild($item169);

$item170= $dom->createElement("gmd:CI_OnlineResource");
$item169->appendChild($item170);

$title_string171= $dom->createElement("gmd:URL");
$title_string171->appendChild($dom->createTextNode($website));
$item171= $dom->createElement("gmd:linkage");
$item171->appendChild($title_string171);
$item170->appendChild($item171);








$item169z1= $dom->createElement("gmd:onLine");
$item168->appendChild($item169z1);

$item170z1= $dom->createElement("gmd:CI_OnlineResource");
$item169z1->appendChild($item170z1);

$title_string171z1= $dom->createElement("gmd:URL");
$title_string171z1->appendChild($dom->createTextNode($local_file_path));
$item171z1= $dom->createElement("gmd:linkage");
$item171z1->appendChild($title_string171z1);
$item170z1->appendChild($item171z1);









foreach ($_POST['paper_linkage'] as $k => $v) {
$val1=valid_data_bslash($_POST['paper_linkage'][$k]);
$val2=valid_data_bslash($_POST['paper_protocol'][$k]);
$val3=valid_data_bslash($_POST['paper_name'][$k]);
$val4=valid_data_bslash($_POST['paper_description'][$k]);
$val5=valid_data_bslash($_POST['paper_function'][$k]);
if ($val1!='') {
$item169z1a= $dom->createElement("gmd:onLine");
$item168->appendChild($item169z1a);

$item170z1a= $dom->createElement("gmd:CI_OnlineResource");
$item169z1a->appendChild($item170z1a);

$title_string171z1a= $dom->createElement("gmd:URL");
$title_string171z1a->appendChild($dom->createTextNode($val1));
$item171z1a= $dom->createElement("gmd:linkage");
$item171z1a->appendChild($title_string171z1a);
$item170z1a->appendChild($item171z1a);

$title_string171z1b= $dom->createElement("gco:CharacterString");
$title_string171z1b->appendChild($dom->createTextNode($val2));
$item171z1b= $dom->createElement("gmd:protocol");
$item171z1b->appendChild($title_string171z1b);
$item170z1a->appendChild($item171z1b);

$title_string171z1c= $dom->createElement("gco:CharacterString");
$title_string171z1c->appendChild($dom->createTextNode($val3));
$item171z1c= $dom->createElement("gmd:name");
$item171z1c->appendChild($title_string171z1c);
$item170z1a->appendChild($item171z1c);

$title_string171z1d= $dom->createElement("gco:CharacterString");
$title_string171z1d->appendChild($dom->createTextNode($val4));
$item171z1d= $dom->createElement("gmd:description");
$item171z1d->appendChild($title_string171z1d);
$item170z1a->appendChild($item171z1d);

$title_string171z1e= $dom->createElement("CI_OnLineFunctionCode");
$title_string171z1e->appendChild($dom->createTextNode($val5));
$item171z1e= $dom->createElement("gmd:function");
$item171z1e->appendChild($title_string171z1e);
$title_string171z1e->setAttribute('codeList','http://asdd.ga.gov.au/asdd/profileinfo/gmxCodelists.xml#CI_OnLineFunctionCode');
$title_string171z1e->setAttribute('codeListValue',$val5);
$item170z1a->appendChild($item171z1e);


}
}








$item190= $dom->createElement("gmd:dataQualityInfo");
$main_page->appendChild($item190);

$item191= $dom->createElement("gmd:DQ_DataQuality");
$item190->appendChild($item191);

$item192= $dom->createElement("gmd:scope");
$item191->appendChild($item192);

$item193= $dom->createElement("gmd:DQ_Scope");
$item192->appendChild($item193);



$title_string194= $dom->createElement("gmd:MD_ScopeCode");
$title_string194->appendChild($dom->createTextNode($hierarchy_level));
$item194= $dom->createElement("gmd:level");
$item194->appendChild($title_string194);
$title_string194->setAttribute('codeList','http://www.isotc211.org/2005/resources/Codelist/gmxCodelists.xml#MD_ScopeCode');
$title_string194->setAttribute('codeListValue',$hierarchy_level);
$item193->appendChild($item194);


$item198= $dom->createElement("gmd:lineage");
$item191->appendChild($item198);

$item199= $dom->createElement("gmd:LI_Lineage");
$item198->appendChild($item199);

$title_string200= $dom->createElement("gco:CharacterString");
$title_string200->appendChild($dom->createTextNode($data_provenance));
$item200= $dom->createElement("gmd:statement");
if ($data_provenance==''){$item200->setAttribute('gco:nilReason','missing');}
$item200->appendChild($title_string200);
$item199->appendChild($item200);



$item198a= $dom->createElement("gmd:processStep");
$item199->appendChild($item198a);

$item199a= $dom->createElement("gmd:LI_ProcessStep");
$item198a->appendChild($item199a);

$title_string200a= $dom->createElement("gco:CharacterString");
$title_string200a->appendChild($dom->createTextNode($qa_process));
$item200a= $dom->createElement("gmd:description");
if ($qa_process==''){$item200a->setAttribute('gco:nilReason','missing');}
$item200a->appendChild($title_string200a);
$item199a->appendChild($item200a);





$item198ab= $dom->createElement("gmd:source");
$item199->appendChild($item198ab);

$item199ab= $dom->createElement("gmd:LI_Source");
$item198ab->appendChild($item199ab);

$title_string200ab= $dom->createElement("gco:CharacterString");
$title_string200ab->appendChild($dom->createTextNode($documentation));
$item200ab= $dom->createElement("gmd:description");
if ($documentation==''){$item200ab->setAttribute('gco:nilReason','missing');}
$item200ab->appendChild($title_string200ab);
$item199ab->appendChild($item200ab);





/*
foreach ($shiftarraycalc as $sfid)
    {
$sfid=rtrim((mysql_escape_string(valid_data_bslash($sfid))), ".");
if ($sfid!=''){
$item201a= $dom->createElement("gmd:source");
$item201a->setAttribute('uuidref',$sfid);
$item199->appendChild($item201a);
}}
*/








$ROOT_PATH = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$datasetxmls_path=$ROOT_PATH."dataset_xmls/";
$datasetpdf_path=$ROOT_PATH."dataset_pdf/";

if ($datacollection_title!='') {
$strxml=$dom->saveXML();
$handle = fopen($datasetxmls_path.$outputFilename, "w");
fwrite($handle,$strxml);
fclose($handle);
}

$path1=$datasetxmls_path.$outputFilename;
$filename = $datasetxmls_path.$outputFilename;
if (file_exists($filename)) {
?>
<br><br><font size=2>An XML file  &nbsp;&nbsp;&nbsp;<b> <?=$outputFilename?></b> &nbsp;&nbsp;&nbsp;   has been saved ....  <br><br>
<br>&nbsp;&nbsp;&nbsp; <a target='_blank' href="view_pdf2.php?fname=<?=$outputFilename?>"><image src="../images/view_icon.png" width=25 height=25>&nbsp;View</a>  &nbsp;&nbsp;&nbsp;   

   
<?} else {?>
<br><br><br><image src="../images/error.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error in saving xml file......</b><br>
<br><br>
<?}?>



<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<?
$path=$datasetpdf_path;
$file=$path.'dmplan_query_id_'.$dm_id.'.txt';
$myfile = fopen($file, "w");
fwrite($myfile, $query1);
fclose($myfile);
?>

 






<?} else {?>

Data Management Plan not saved.....
<br><br>
You dont have write permission on this project...
<br><br>

<a href="../php/data_management_new.php" ><image src="../images/back.png"></a>


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>



<?}


} ?>

 
 <div class="printfooter">
 </div>
		</div>	
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 
<?    include_once('make_data_pdf.php');
?>
























</body></html>
