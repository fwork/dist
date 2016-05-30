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

$nci_code= valid_data((mysql_escape_string($_POST['nci_code'])));

$arr_check='';
foreach ($privileges['project_id'] as &$value) {
if ($value==$nci_code) { $arr_check='t';}
}


if (($arr_check=='t') or ($_SESSION["uacat_".session_id()]=='1') ) {




$user_id= $_SESSION["uid_".session_id()];

$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
 $date_post=$d;
 
 $datacollection_title= rtrim((mysql_escape_string(valid_data($_POST['datacollection_title']))), ".");
 $nci_code= (mysql_escape_string(valid_data($_POST['nci_code'])));
 $abstract= (mysql_escape_string(valid_data($_POST['abstract'])));
 $data_ownership_custodian= (mysql_escape_string(valid_data($_POST['data_ownership_custodian'])));
 $data_history= (mysql_escape_string(valid_data($_POST['data_history'])));
 $dataset_purpose= (mysql_escape_string(valid_data($_POST['dataset_purpose'])));
 $dataset_status= (mysql_escape_string(valid_data($_POST['dataset_status'])));
 $dataset_identifier= (mysql_escape_string(valid_data($_POST['dataset_identifier'])));
 $doi= (mysql_escape_string(valid_data($_POST['doi'])));
 $activities= (mysql_escape_string(valid_data($_POST['activities'])));
 $main_data_owner= (mysql_escape_string(valid_data($_POST['main_data_owner'])));
 $data_custodian= (mysql_escape_string(valid_data($_POST['data_custodian'])));
 $other_data_owners= (mysql_escape_string(valid_data($_POST['other_data_owners'])));
 $main_community= (mysql_escape_string(valid_data($_POST['main_community'])));
 $data_ingest= (mysql_escape_string(valid_data($_POST['data_ingest'])));
 $quality_assurance= (mysql_escape_string(valid_data($_POST['quality_assurance'])));
 $publishing= (mysql_escape_string(valid_data($_POST['publishing'])));
 $maintenance= (mysql_escape_string(valid_data($_POST['maintenance'])));
 $user_support= (mysql_escape_string(valid_data($_POST['user_support'])));
 $data_service= (mysql_escape_string(valid_data($_POST['data_service'])));
 $data_service_operation= (mysql_escape_string(valid_data($_POST['data_service_operation'])));
 $media_contact= (mysql_escape_string(valid_data($_POST['media_contact'])));
 $access_list= (mysql_escape_string(valid_data($_POST['access_list'])));
 $c_classification= (mysql_escape_string(valid_data($_POST['c_classification'])));
 $use_limitations= (mysql_escape_string(valid_data($_POST['use_limitations'])));
 $access_constraints= (mysql_escape_string(valid_data($_POST['access_constraints'])));
 $use_constraints= (mysql_escape_string(valid_data($_POST['use_constraints'])));
 $spatial_extent= (mysql_escape_string(valid_data($_POST['spatial_extent'])));
 $temporal_extent= (mysql_escape_string(valid_data($_POST['temporal_extent'])));
 $format_name_version= (mysql_escape_string(valid_data($_POST['format_name_version'])));
 $dataset_version= (mysql_escape_string(valid_data($_POST['dataset_version'])));
 $tools= (mysql_escape_string(valid_data($_POST['tools'])));
 $software= (mysql_escape_string(valid_data($_POST['software'])));
 $algorithms= (mysql_escape_string(valid_data($_POST['algorithms'])));
 $flexibility= (mysql_escape_string(valid_data($_POST['flexibility'])));
 $ingest_process= (mysql_escape_string(valid_data($_POST['ingest_process'])));
 $qa_process= (mysql_escape_string(valid_data($_POST['qa_process'])));
 $maintenance_process= (mysql_escape_string(valid_data($_POST['maintenance_process'])));
 $backup_recovery_plan= (mysql_escape_string(valid_data($_POST['backup_recovery_plan'])));
 $services= (mysql_escape_string(valid_data($_POST['services'])));
 $catalog_registry= (mysql_escape_string(valid_data($_POST['catalog_registry'])));
 $federated_catalogue= (mysql_escape_string(valid_data($_POST['federated_catalogue'])));
 $keywords= (mysql_escape_string(valid_data($_POST['keywords'])));
 $website= (mysql_escape_string(valid_data($_POST['website'])));
 $documentation= (mysql_escape_string(valid_data($_POST['documentation'])));
 $digital_data_transfer_options= (mysql_escape_string(valid_data($_POST['digital_data_transfer_options'])));
 $feedback= (mysql_escape_string(valid_data($_POST['feedback'])));
 $retentia= (mysql_escape_string(valid_data($_POST['retentia'])));
 $data_life_cycle= (mysql_escape_string(valid_data($_POST['data_life_cycle'])));
 $conflict_of_intrest= (mysql_escape_string(valid_data($_POST['conflict_of_intrest'])));
  $how_to_guide= (mysql_escape_string(valid_data($_POST['how_to_guide'])));
 $data_ingest_tframe= (mysql_escape_string(valid_data($_POST['data_ingest_tframe'])));
 $qa_tframe= (mysql_escape_string(valid_data($_POST['qa_tframe'])));
 $metadata_catalog_tframe= (mysql_escape_string(valid_data($_POST['metadata_catalog_tframe'])));
 $pre_publishing_chklist_tframe= (mysql_escape_string(valid_data($_POST['pre_publishing_chklist_tframe'])));
 $wrap_up_tframe = (mysql_escape_string(valid_data($_POST['wrap_up_tframe'])));

$update_check='';


$qr1=@MYSQL_QUERY("select count(dm_id) as cc from nci_data_management.data_management where datacollection_title='$datacollection_title'") ;
$rq1=@MYSQL_fetch_array($qr1);
$cnt=$rq1['cc'];



if ($cnt==0) {

$res1=@MYSQL_QUERY("select max(dm_id) as cc  from nci_data_management.data_management") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
$max_id=$max_id+1;
$dm_id=$max_id;
$update_check="saved by ";
$version_id=1;
}

else {
$qr2=@MYSQL_QUERY("select * from nci_data_management.data_management where datacollection_title='$datacollection_title'") ;
$rq2=@MYSQL_fetch_array($qr2);
$dm_id=$rq2['dm_id'];
$max_id=$dm_id;
$version_id=$rq2['version_id'];

$version_id=$version_id+1;

$datacollection_titlez= $rq2['datacollection_title'];
 $nci_codez= $rq2['nci_code'];
 $abstractz= $rq2['abstract'];
 $data_ownership_custodianz= $rq2['data_ownership_custodian'];
 $data_historyz= $rq2['data_history'];
 $dataset_purposez= $rq2['dataset_purpose'];
 $dataset_statusz= $rq2['dataset_status'];
 $dataset_identifierz= $rq2['dataset_identifier'];
 $doiz= $rq2['doi'];
 $activitiesz= $rq2['activities'];
 $main_data_ownerz= $rq2['main_data_owner'];
 $data_custodianz= $rq2['data_custodian'];
 $other_data_ownersz= $rq2['other_data_owners'];
 $main_communityz= $rq2['main_community'];
 $data_ingestz= $rq2['data_ingest'];
 $quality_assurancez= $rq2['quality_assurance'];
 $publishingz= $rq2['publishing'];
 $maintenancez= $rq2['maintenance'];
 $user_supportz= $rq2['user_support'];
 $data_servicez= $rq2['data_service'];
 $data_service_operationz= $rq2['data_service_operation'];
 $media_contactz= $rq2['media_contact'];
 $access_listz= $rq2['access_list'];
 $c_classificationz= $rq2['c_classification'];
 $use_limitationsz= $rq2['use_limitations'];
 $access_constraintsz= $rq2['access_constraints'];
 $use_constraintsz= $rq2['use_constraints'];
 $spatial_extentz= $rq2['spatial_extent'];
 $temporal_extentz= $rq2['temporal_extent'];
 $format_name_versionz= $rq2['format_name_version'];
 $dataset_versionz= $rq2['dataset_version'];
 $toolsz= $rq2['tools'];
 $softwarez= $rq2['software'];
 $algorithmsz= $rq2['algorithms'];
 $flexibilityz= $rq2['flexibility'];
 $ingest_processz= $rq2['ingest_process'];
 $qa_processz= $rq2['qa_process'];
 $maintenance_processz= $rq2['maintenance_process'];
 $backup_recovery_planz= $rq2['backup_recovery_plan'];
 $servicesz= $rq2['services'];
 $catalog_registryz= $rq2['catalog_registry'];
 $federated_cataloguez= $rq2['federated_catalogue'];
 $keywordsz= $rq2['keywords'];
 $websitez= $rq2['website'];
 $documentationz= $rq2['documentation'];
 $digital_data_transfer_optionsz= $rq2['digital_data_transfer_options'];
 $feedbackz= $rq2['feedback'];
 $retentiaz= $rq2['retentia'];
 $data_life_cyclez= $rq2['data_life_cycle'];
 $conflict_of_intrestz= $rq2['conflict_of_intrest'];
  $how_to_guidez= $rq2['how_to_guide'];
 $data_ingest_tframez= $rq2['data_ingest_tframe'];
 $qa_tframez= $rq2['qa_tframe'];
 $metadata_catalog_tframez= $rq2['metadata_catalog_tframe'];
 $pre_publishing_chklist_tframez= $rq2['pre_publishing_chklist_tframe'];
 $wrap_up_tframez= $rq2['wrap_up_tframe'];

$res1a=@MYSQL_QUERY("delete  from nci_data_management.data_management where datacollection_title='$datacollection_title'") ;
$update_check="updated by ";








}

 
 
$query1=" Insert into nci_data_management.data_management (`dm_id`, `user_id`, `date_post`, `version_id`, `datacollection_title`, `nci_code`, `abstract`, `data_ownership_custodian`, `data_history`, `dataset_purpose`, `dataset_status`, `dataset_identifier`, `doi`, `activities`, `main_data_owner`, `data_custodian`, `other_data_owners`, `main_community`, `data_ingest`, `quality_assurance`, `publishing`, `maintenance`, `user_support`, `data_service`, `data_service_operation`, `media_contact`, `c_classification`, `use_limitations`, `access_constraints`, `use_constraints`, `spatial_extent`, `temporal_extent`, `format_name_version`, `dataset_version`, `tools`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `digital_data_transfer_options`, `feedback`, `retentia`, `data_life_cycle`, `conflict_of_intrest`,  `how_to_guide`, `data_ingest_tframe`, `qa_tframe`, `metadata_catalog_tframe`, `pre_publishing_chklist_tframe`, `wrap_up_tframe` ,`access_list` ) values ($max_id,  '$user_id', '$date_post', '$version_id', '$datacollection_title', '$nci_code', '$abstract', '$data_ownership_custodian', '$data_history', '$dataset_purpose', '$dataset_status', '$dataset_identifier', '$doi', '$activities', '$main_data_owner', '$data_custodian', '$other_data_owners', '$main_community', '$data_ingest', '$quality_assurance', '$publishing', '$maintenance', '$user_support', '$data_service', '$data_service_operation', '$media_contact', '$c_classification', '$use_limitations', '$access_constraints', '$use_constraints', '$spatial_extent', '$temporal_extent', '$format_name_version', '$dataset_version', '$tools', '$software', '$algorithms', '$flexibility', '$ingest_process', '$qa_process', '$maintenance_process', '$backup_recovery_plan', '$services', '$catalog_registry', '$federated_catalogue', '$keywords', '$website', '$documentation', '$digital_data_transfer_options', '$feedback', '$retentia', '$data_life_cycle', '$conflict_of_intrest',  '$how_to_guide', '$data_ingest_tframe', '$qa_tframe', '$metadata_catalog_tframe', '$pre_publishing_chklist_tframe', '$wrap_up_tframe' ,'$access_list')";

$result1=MYSQL_QUERY($query1) ; 








$query1a=" Insert into nci_data_management.data_management_history (`dm_id`, `user_id`, `date_post`, `version_id`, `datacollection_title`, `nci_code`, `abstract`, `data_ownership_custodian`, `data_history`, `dataset_purpose`, `dataset_status`, `dataset_identifier`, `doi`, `activities`, `main_data_owner`, `data_custodian`, `other_data_owners`, `main_community`, `data_ingest`, `quality_assurance`, `publishing`, `maintenance`, `user_support`, `data_service`, `data_service_operation`, `media_contact`, `c_classification`, `use_limitations`, `access_constraints`, `use_constraints`, `spatial_extent`, `temporal_extent`, `format_name_version`, `dataset_version`, `tools`, `software`, `algorithms`, `flexibility`, `ingest_process`, `qa_process`, `maintenance_process`, `backup_recovery_plan`, `services`, `catalog_registry`, `federated_catalogue`, `keywords`, `website`, `documentation`, `digital_data_transfer_options`, `feedback`, `retentia`, `data_life_cycle`, `conflict_of_intrest`,  `how_to_guide`, `data_ingest_tframe`, `qa_tframe`, `metadata_catalog_tframe`, `pre_publishing_chklist_tframe`, `wrap_up_tframe` ,`access_list` ) values ($max_id,  '$user_id', '$date_post', '$version_id', '$datacollection_titlez', '$nci_codez', '$abstractz', '$data_ownership_custodianz', '$data_historyz', '$dataset_purposez', '$dataset_statusz', '$dataset_identifierz', '$doiz', '$activitiesz', '$main_data_ownerz', '$data_custodianz', '$other_data_ownersz', '$main_communityz', '$data_ingestz', '$quality_assurancez', '$publishingz', '$maintenancez', '$user_supportz', '$data_servicez', '$data_service_operationz', '$media_contactz', '$c_classificationz', '$use_limitationsz', '$access_constraintsz', '$use_constraintsz', '$spatial_extentz', '$temporal_extentz', '$format_name_versionz', '$dataset_versionz', '$toolsz', '$softwarez', '$algorithmsz', '$flexibilityz', '$ingest_processz', '$qa_processz', '$maintenance_processz', '$backup_recovery_planz', '$servicesz', '$catalog_registryz', '$federated_cataloguez', '$keywordsz', '$websitez', '$documentationz', '$digital_data_transfer_optionsz', '$feedbackz', '$retentiaz', '$data_life_cyclez', '$conflict_of_intrestz',  '$how_to_guidez', '$data_ingest_tframez', '$qa_tframez', '$metadata_catalog_tframez', '$pre_publishing_chklist_tframez', '$wrap_up_tframez' ,'$access_listz')";

$result1a=MYSQL_QUERY($query1a) ;




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











$user_id=@$_SESSION["uid_".session_id()] ;
$d=@date("Y-m-d H:i:s");
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
}
else {
$event=2;
$update_text=" Following fields are updated  : <br><br>";

 if ($datacollection_title!=$datacollection_titlez)    {
 $update_text=$update_text."Data Collection Title  "."<br>";}
 
if ($nci_code!=$nci_codez)    {
 $update_text=$update_text."NCI Data Collection Code  "."<br>";}

if ($abstract!=$abstractz)    {
 $update_text=$update_text."Dataset/Product full descriptions/Abstract  "."<br>";}

if ($data_ownership_custodian!=$data_ownership_custodianz)    {
 $update_text=$update_text."Data Ownership and Custodianship  "."<br>";}

if ($data_history!=$data_historyz)    {
 $update_text=$update_text."Data Collection Background/History  "."<br>";}

if ($dataset_purpose!=$dataset_purposez)    {
 $update_text=$update_text."Dataset Purpose  "."<br>";}

if ($dataset_status!=$dataset_statusz)    {
 $update_text=$update_text."Dataset Status  "."<br>";}

if ($dataset_identifier!=$dataset_identifierz)    {
 $update_text=$update_text."Alternative Title/Dataset Identifier  "."<br>";}

if ($doi!=$doiz)    {
 $update_text=$update_text."DOI  "."<br>";}

if ($activities!=$activitiesz)    {
 $update_text=$update_text."Activities  "."<br>";}

if ($main_data_owner!=$main_data_ownerz)    {
 $update_text=$update_text."Main (Principal) Data owner  "."<br>";}

if ($data_custodian!=$data_custodianz)    {
 $update_text=$update_text."Data Custodian (if different from data owner)  "."<br>";}

if ($other_data_owners!=$other_data_ownersz)    {
 $update_text=$update_text."Other Data Owners  "."<br>";}

if ($main_community!=$main_communityz)    {
 $update_text=$update_text."Main community contact  "."<br>";}

if ($data_ingest!=$data_ingestz)    {
 $update_text=$update_text."Ingest/Data transfer  "."<br>";}

if ($quality_assurance!=$quality_assurancez)    {
 $update_text=$update_text."Quality Assurance  "."<br>";}

if ($publishing!=$publishingz)    {
 $update_text=$update_text."Publishing  "."<br>";}

if ($maintenance!=$maintenancez)    {
 $update_text=$update_text."Maintenance  "."<br>";}

if ($user_support!=$user_supportz)    {
 $update_text=$update_text."User Support  "."<br>";}

if ($data_service!=$data_servicez)    {
 $update_text=$update_text."Data Service Development  "."<br>";}

if ($data_service_operation!=$data_service_operationz)    {
 $update_text=$update_text."Data Service Operation  "."<br>";}

if ($media_contact!=$media_contactz)    {
 $update_text=$update_text."Contact for Media Communication  "."<br>";}

if ($access_list!=$access_listz)    {
 $update_text=$update_text."Access Control Lists "."<br>";}

if ($c_classification!=$c_classificationz)    {
 $update_text=$update_text."Security Classification  "."<br>";}

if ($use_limitations!=$use_limitationsz)    {
 $update_text=$update_text."Use limitations  "."<br>";}

if ($access_constraints!=$access_constraintsz)    {
 $update_text=$update_text."Access constraints  "."<br>";}

if ($use_constraints!=$use_constraintsz)    {
 $update_text=$update_text."Use Constraints  "."<br>";}

if ($spatial_extent!=$spatial_extentz)    {
 $update_text=$update_text."Spatial Extent  "."<br>";}

if ($temporal_extent!=$temporal_extentz)    {
 $update_text=$update_text."Temporal Extent  "."<br>";}

if ($format_name_version!=$format_name_versionz)    {
 $update_text=$update_text."Format Name/Format version  "."<br>";}

if ($dataset_version!=$dataset_versionz)    {
 $update_text=$update_text."Dataset Version  "."<br>";}

if ($tools!=$toolsz)    {
 $update_text=$update_text."Tools  "."<br>";}

if ($software!=$softwarez)    {
 $update_text=$update_text."Software  "."<br>";}

if ($algorithms!=$algorithmsz)    {
 $update_text=$update_text."Algorithms/Libraries  "."<br>";}

if ($flexibility!=$flexibilityz)    {
 $update_text=$update_text."Flexibility  "."<br>";}

if ($ingest_process!=$ingest_processz)    {
 $update_text=$update_text."Ingest Process  "."<br>";}

if ($qa_process!=$qa_processz)    {
 $update_text=$update_text."Quality Assurance Process  "."<br>";}

if ($maintenance_process!=$maintenance_processz)    {
 $update_text=$update_text."Maintenance Process  "."<br>";}

if ($backup_recovery_plan!=$backup_recovery_planz)    {
 $update_text=$update_text."Backup and Recovery plan  "."<br>";}

if ($services!=$servicesz)    {
 $update_text=$update_text."Services  "."<br>";}

if ($catalog_registry!=$catalog_registryz)    {
 $update_text=$update_text."Catalogue Registry  "."<br>";}

if ($federated_catalogue!=$federated_cataloguez)    {
 $update_text=$update_text."Federated Catalogues  "."<br>";}

if ($keywords!=$keywordsz)    {
 $update_text=$update_text."Search Words/ keywords  "."<br>";}

if ($website!=$websitez)    {
 $update_text=$update_text."Website  "."<br>";}

if ($documentation!=$documentationz)    {
 $update_text=$update_text."Documentation and Compilation  "."<br>";}

if ($digital_data_transfer_options!=$digital_data_transfer_optionsz)    {
 $update_text=$update_text."Digital Data Transfer Options  "."<br>";}

if ($feedback!=$feedbackz)    {
 $update_text=$update_text."Feedback  "."<br>";}

if ($retentia!=$retentiaz)    {
 $update_text=$update_text."Retention of Data  "."<br>";}

if ($data_life_cycle!=$data_life_cyclez)    {
 $update_text=$update_text."Data Life-cycle Control  "."<br>";}

if ($conflict_of_intrest!=$conflict_of_intrestz)    {
 $update_text=$update_text."Conflict of Interest  "."<br>";}

if ($how_to_guide!=$how_to_guidez)    {
 $update_text=$update_text."How-to Guide  "."<br>";}

if ($data_ingest_tframe!=$data_ingest_tframez)    {
 $update_text=$update_text."Data Ingest  "."<br>";}

if ($qa_tframe!=$qa_tframez)    {
 $update_text=$update_text."Quality assurance  "."<br>";}

if ($metadata_catalog_tframe!=$metadata_catalog_tframez)    {
 $update_text=$update_text."Metadata catalogue  "."<br>";}

if ($pre_publishing_chklist_tframe!=$pre_publishing_chklist_tframez)    {
 $update_text=$update_text."Tick pre-publishing checklist  "."<br>";}

if ($wrap_up_tframe !=$wrap_up_tframez)    {
 $update_text=$update_text."Wrap up and publishing data  "."<br>"."<br>";}

$up_text=$update_text;

$sub="Data Management Plan - Updated";
$msg="A data management plan has been updated by $user_id ....
<br>
<br>
Title : ".$datacollection_title."<br><br>
Project : ".$nci_code."<br><br>".
$update_text;


}


email_send($msg,$sub,$event);
 $d=@date("Y-m-d H:i:s");

  $qry4=MYSQL_query("Insert into nci_data_management.data_history_user (dm_id,date_time,userid,text) values ($dm_id,'$d','$user_id','$up_text')");


 
?>
<br><br>

Data Management Plan saved.....
<br><br><br>
<a href="../php/data_management.php" ><image src="../images/back.png"></a>
 


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<?
$path='../../dataset_pdf/';
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

<a href="../php/data_management.php" ><image src="../images/back.png"></a>


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>




<?}?>


 <?}?>

 <div class="printfooter">
 </div>
		</div>	
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 
 <?    include_once('make_data_pdf.php'); ?>

</body></html>
