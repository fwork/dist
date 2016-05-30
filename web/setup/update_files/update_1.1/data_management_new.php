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
 
<style>
.scrollit {
    overflow:scroll;
    height:150px;
    width:98%;
}
.scrollit1 {
    overflow:scroll;
    height:80px;
    width:98%;
}

</style>

<script>
function clearform() {

 document.getElementById("pidentifier").value=''
 document.getElementById("hierarchy_level").value='' 
 document.getElementById("datacollection_title").value=''
 document.getElementById("nci_code").value=''
 document.getElementById("abstract").value=''
 document.getElementById("data_ownership").value='' 
 document.getElementById("data_ownership_custodian").value=''
 document.getElementById("dataset_purpose").value=''
 document.getElementById("dataset_status").value=''
 document.getElementById("dataset_identifier").value=''
 document.getElementById("data_source").value=''
 document.getElementById("data_provenance").value=''
 document.getElementById("doi").value=''
 document.getElementById("alternate_title").value=''
 document.getElementById("tact").value=''
 document.getElementById("activities").value=''
 document.getElementById("md_owner_name").value=''
 document.getElementById("md_owner_org").value=''
 document.getElementById("md_owner_position").value=''
 document.getElementById("md_owner_phone").value=''
 document.getElementById("md_owner_fax").value=''
 document.getElementById("md_owner_del").value=''
 document.getElementById("md_owner_city").value=''
  document.getElementById("md_owner_pcode").value=''
 document.getElementById("md_owner_country").value=''
 document.getElementById("md_owner_email").value=''

 document.getElementById("content_name").value=''
 document.getElementById("content_org").value=''
 document.getElementById("content_position").value=''
 document.getElementById("content_phone").value=''
 document.getElementById("content_fax").value=''
 document.getElementById("content_del").value=''
 document.getElementById("content_city").value=''
 document.getElementById("content_pcode").value=''
 document.getElementById("content_country").value=''
 document.getElementById("content_email").value=''

 document.getElementById("media_contact_name").value=''
 document.getElementById("media_contact_org").value=''
 document.getElementById("media_contact_position").value=''
 document.getElementById("media_contact_phone").value=''
 document.getElementById("media_contact_fax").value=''
 document.getElementById("media_contact_del").value=''
  document.getElementById("media_contact_city").value=''
 document.getElementById("media_contact_pcode").value=''
 document.getElementById("media_contact_country").value=''
 document.getElementById("media_contact_email").value=''

 document.getElementById("data_ingest_name").value=''
 document.getElementById("data_ingest_org").value=''
 document.getElementById("data_ingest_position").value=''
 document.getElementById("data_ingest_phone").value=''
 document.getElementById("data_ingest_fax").value=''
 document.getElementById("data_ingest_del").value=''
 document.getElementById("data_ingest_city").value=''
 document.getElementById("data_ingest_pcode").value=''
 document.getElementById("data_ingest_country").value=''
 document.getElementById("data_ingest_email").value=''

 document.getElementById("qa_name").value=''
 document.getElementById("qa_org").value=''
 document.getElementById("qa_position").value=''
 document.getElementById("qa_phone").value=''
 document.getElementById("qa_fax").value=''
 document.getElementById("qa_del").value=''
 document.getElementById("qa_city").value=''
 document.getElementById("qa_pcode").value=''
 document.getElementById("qa_country").value=''
 document.getElementById("qa_email").value=''

 document.getElementById("publish_name").value=''
 document.getElementById("publish_org").value=''
 document.getElementById("publish_position").value=''
 document.getElementById("publish_phone").value=''
 document.getElementById("publish_fax").value=''
 document.getElementById("publish_del").value=''
 document.getElementById("publish_city").value=''
 document.getElementById("publish_pcode").value=''
 document.getElementById("publish_country").value=''
 document.getElementById("publish_email").value=''

 document.getElementById("maint_name").value=''
 document.getElementById("maint_org").value=''
 document.getElementById("maint_position").value=''
 document.getElementById("maint_phone").value=''
 document.getElementById("maint_fax").value=''
 document.getElementById("maint_del").value=''
 document.getElementById("maint_city").value=''
 document.getElementById("maint_pcode").value=''
 document.getElementById("maint_country").value=''
 document.getElementById("maint_email").value=''
 
 document.getElementById("usupport_name").value=''
 document.getElementById("usupport_org").value=''
 document.getElementById("usupport_position").value=''
 document.getElementById("usupport_phone").value=''
 document.getElementById("usupport_fax").value=''
 document.getElementById("usupport_del").value=''
 document.getElementById("usupport_city").value=''
 document.getElementById("usupport_pcode").value=''
 document.getElementById("usupport_country").value=''
 document.getElementById("usupport_email").value=''
 
 document.getElementById("dservice_name").value=''
 document.getElementById("dservice_org").value=''
 document.getElementById("dservice_position").value=''
 document.getElementById("dservice_phone").value=''
 document.getElementById("dservice_fax").value=''
 document.getElementById("dservice_del").value=''
 document.getElementById("dservice_city").value=''
 document.getElementById("dservice_pcode").value=''
 document.getElementById("dservice_country").value=''
 document.getElementById("dservice_email").value=''

 document.getElementById("dservice_op_name").value=''
 document.getElementById("dservice_op_org").value=''
 document.getElementById("dservice_op_position").value=''
 document.getElementById("dservice_op_phone").value=''
 document.getElementById("dservice_op_fax").value=''
 document.getElementById("dservice_op_del").value=''
 document.getElementById("dservice_op_city").value=''
 document.getElementById("dservice_op_pcode").value=''
 document.getElementById("dservice_op_country").value=''
 document.getElementById("dservice_op_email").value=''
 
 document.getElementById("dcycle_name").value=''
 document.getElementById("dcycle_org").value=''
 document.getElementById("dcycle_position").value=''
 document.getElementById("dcycle_phone").value=''
 document.getElementById("dcycle_fax").value=''
 document.getElementById("dcycle_del").value=''
 document.getElementById("dcycle_city").value=''
 document.getElementById("dcycle_pcode").value=''
 document.getElementById("dcycle_country").value=''
 document.getElementById("dcycle_email").value=''

 document.getElementById("dcust_name").value=''
 document.getElementById("dcust_org").value=''
 document.getElementById("dcust_position").value=''
 document.getElementById("dcust_phone").value=''
 document.getElementById("dcust_fax").value=''
 document.getElementById("dcust_del").value=''
 document.getElementById("dcust_city").value=''
 document.getElementById("dcust_pcode").value=''
 document.getElementById("dcust_country").value=''
 document.getElementById("dcust_email").value=''

 document.getElementById("downer_name").value=''
 document.getElementById("downer_org").value=''
 document.getElementById("downer_position").value=''
 document.getElementById("downer_phone").value=''
 document.getElementById("downer_fax").value=''
 document.getElementById("downer_del").value=''
 document.getElementById("downer_city").value=''
 document.getElementById("downer_pcode").value=''
 document.getElementById("downer_country").value=''
 document.getElementById("downer_email").value=''
 
 document.getElementById("c_classification").value=''
 document.getElementById("use_limitations").value=''
 document.getElementById("access_constraints").value=''
 document.getElementById("other_constraints1").value=''
 document.getElementById("use_constraints").value=''
 document.getElementById("other_constraints2").value=''
 document.getElementById("east_value").value=''
 document.getElementById("north_value").value=''
 document.getElementById("south_value").value=''
 document.getElementById("west_value").value=''
 document.getElementById("bposition").value=''
 document.getElementById("eposition").value=''
  document.getElementById("format1").value=''
  document.getElementById("format2").value=''
 document.getElementById("format3").value=''
 document.getElementById("format4").value=''
 document.getElementById("format5").value=''
document.getElementById("fversion1").value=''
document.getElementById("fversion2").value=''
document.getElementById("fversion3").value=''
document.getElementById("fversion4").value=''
document.getElementById("fversion5").value=''
document.getElementById("tools").value=''
 document.getElementById("software").value=''
 document.getElementById("algorithms").value=''
 document.getElementById("flexibility").value=''
 document.getElementById("ingest_process").value=''
 document.getElementById("qa_process").value=''
 document.getElementById("maintenance_process").value=''
 document.getElementById("backup_recovery_plan").value=''
 document.getElementById("services").value=''
 document.getElementById("services_url").value=''
 document.getElementById("keywords1").value=''
 document.getElementById("keywords2").value=''
 document.getElementById("keywords3").value=''
 document.getElementById("keywords4").value=''
  document.getElementById("catalog_registry").value=''
 document.getElementById("federated_catalogue").value=''
 document.getElementById("keywords").value=''
 document.getElementById("website").value=''
 document.getElementById("documentation").value=''
 document.getElementById("local_file_path").value=''
 document.getElementById("feedback").value=''
 document.getElementById("retentia").value=''
 document.getElementById("how_to_guide").value=''
 document.getElementById("data_ingest_tframe").value=''
 document.getElementById("metadata_catalog_tframe").value=''
 document.getElementById("data_qa").value=''

 document.getElementById("downer_linkage1").value=''
 document.getElementById("downer_name1").value=''
 document.getElementById("downer_descp1").value=''
 document.getElementById("downer_linkage2").value=''
 document.getElementById("downer_name2").value=''
 document.getElementById("downer_descp2").value=''
 document.getElementById("downer_linkage3").value=''
 document.getElementById("downer_name3").value=''
 document.getElementById("downer_descp3").value=''
 document.getElementById("downer_linkage4").value=''
 document.getElementById("downer_name4").value=''
 document.getElementById("downer_descp4").value=''
 
 
 document.getElementById("dcust_linkage1").value=''
 document.getElementById("dcust_name1").value=''
 document.getElementById("dcust_descp1").value=''
 document.getElementById("dcust_linkage2").value=''
 document.getElementById("dcust_name2").value=''
 document.getElementById("dcust_descp2").value=''
 document.getElementById("dcust_linkage3").value=''
 document.getElementById("dcust_name3").value=''
 document.getElementById("dcust_descp3").value=''
 document.getElementById("dcust_linkage4").value=''
 document.getElementById("dcust_name4").value=''
 document.getElementById("dcust_descp4").value=''
 
 document.getElementById("md_owner_linkage1").value=''
 document.getElementById("md_owner_name1").value=''
 document.getElementById("md_owner_descp1").value=''
 document.getElementById("md_owner_linkage2").value=''
 document.getElementById("md_owner_name2").value=''
 document.getElementById("md_owner_descp2").value=''
 document.getElementById("md_owner_linkage3").value=''
 document.getElementById("md_owner_name3").value=''
 document.getElementById("md_owner_descp3").value=''
 document.getElementById("md_owner_linkage4").value=''
 document.getElementById("md_owner_name4").value=''
 document.getElementById("md_owner_descp4").value=''
 
 document.getElementById("content_linkage1").value=''
 document.getElementById("content_name1").value=''
 document.getElementById("content_descp1").value=''
 document.getElementById("content_linkage2").value=''
 document.getElementById("content_name2").value=''
 document.getElementById("content_descp2").value=''
 document.getElementById("content_linkage3").value=''
 document.getElementById("content_name3").value=''
 document.getElementById("content_descp3").value=''
 document.getElementById("content_linkage4").value=''
 document.getElementById("content_name4").value=''
 document.getElementById("content_descp4").value=''
 
 document.getElementById("media_contact_linkage1").value=''
 document.getElementById("media_contact_name1").value=''
 document.getElementById("media_contact_descp1").value=''
 document.getElementById("media_contact_linkage2").value=''
 document.getElementById("media_contact_name2").value=''
 document.getElementById("media_contact_descp2").value=''
 document.getElementById("media_contact_linkage3").value=''
 document.getElementById("media_contact_name3").value=''
 document.getElementById("media_contact_descp3").value=''
 document.getElementById("media_contact_linkage4").value=''
 document.getElementById("media_contact_name4").value=''
 document.getElementById("media_contact_descp4").value=''
 
   
   window.location.href="http://datamgt.nci.org.au/php/data_management_new.php";

}
  </script>
  






<script>
function showComment0()  {

 var tE  = document.getElementById("div_comment0");
 var obj = document.getElementById("expandButton0");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>


<script>
function showComment1()  {
 var tE  = document.getElementById("div_comment1");
 var obj = document.getElementById("expandButton1");
 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>


<script>
function showComment2()  {

 var tE  = document.getElementById("div_comment2");
 var obj = document.getElementById("expandButton2");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>

<script>
function showComment3()  {

 var tE  = document.getElementById("div_comment3");
 var obj = document.getElementById("expandButton3");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>

<script>
function showComment4()  {

 var tE  = document.getElementById("div_comment4");
 var obj = document.getElementById("expandButton4");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>

<script>
function showComment5()  {

 var tE  = document.getElementById("div_comment5");
 var obj = document.getElementById("expandButton5");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>


<script>
function showComment6()  {

 var tE  = document.getElementById("div_comment6");
 var obj = document.getElementById("expandButton6");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>

<script>
function showComment7()  {

 var tE  = document.getElementById("div_comment7");
 var obj = document.getElementById("expandButton7");


 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>
</head>

 <body class="page-Main_Page ">

<?/* echo basename($_SERVER["PHP_SELF"]);*/?>

<script>
function Check_Import () {
var key = ldapInput.titlea.selectedIndex;
var val = ldapInput.titlea[key].value;
   window.location.href="data_management_new.php?file_identifier="+val;
}
</script>






  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>

 <?$user_id= $_SESSION["uid_".session_id()];?>
 <? include_once ($inc_path.check_includes_file_exist('get_user_privileges').".php");?>

<?

if (isset($_REQUEST['stitle'])) {
     $search_title=valid_data(($_REQUEST['stitle']));}

if (isset($_REQUEST['scode'])) {
     $search_code=valid_data(($_REQUEST['scode']));}


if ($search_title!='' and $search_code=='') {
$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where datacollection_title like '%$search_title%' order by datacollection_title") ;
}

elseif ($search_title=='' and $search_code!='') {
$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where nci_code='$search_code' order by datacollection_title") ;
}

elseif ($search_title=='' and $search_code=='') {
$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt order by datacollection_title") ;
}

elseif ($search_title!='' and $search_code!='') {
$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where datacollection_title like '%$search_title%' and nci_code='$search_code' order by datacollection_title") ;
}




//$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt order by datacollection_title") ;


    $a=0;                      ?>
    <div class="content hentry">

        <div class="entry-content">

 <script>
  function link_mover() {
var_title=document.getElementById("search_title").value;
var_code=document.getElementById("search_code").value;
   window.location.href="/php/data_management_new.php?stitle="+var_title+"&scode="+var_code;
}
</script>

<script>
  function clearcriteria() {
   window.location.href="/php/data_management_new.php";
}
</script>





 
<script>
 var helpWindow = '';
  function showHelp(url) {
   w = screen.availWidth;
   h = screen.availHeight;
    var popW = 775, popH = 550;
var leftPos = (w-popW)/2, topPos = (h-popH)/2;  

      helpWindow = window.open(url,'helpwindow','width=775,height=550,toolbar=no, location=no,directories=no,status=yes,menubar=no,scrollbars=yes,copyhistory=yes,resizable=no,top=' + topPos + ',left=' + leftPos);
  }   
</script>
 <form method="POST" name="ldapInput" action="data_management_save_new.php" onSubmit="return validate_form()">

 
<div align=right>
<a href="../php/example.pdf" target='_blank'>Download a DMP Example</a>|&nbsp;&nbsp;&nbsp;<input type="button" value="Clear Form" onclick="javascript:clearform();"  style="cursor:hand;" class="sbttn3">
</div>

<?$user_id=$_SESSION["uid_".session_id()] ;
?>




<font face=tahoma color=blue size=3>Saved Data Management Plans</font>
<br><br>

<table  border=0 width="98%"    >
<thead>
<tr bgcolor=#ececec>
<td width="65%"><font size=1>Data Collection Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="search_title" name="search_title" size=55>&nbsp;<image src="../images/try_orange.jpg" width="12" height="12" onClick="javascript: link_mover();" ></font></td>
<td width="10%" align=center><font size=1>Date Post</font></td>
<td width="10%" align=center><font size=1>Project</font>&nbsp;<input type="text" id="search_code" size=2>&nbsp;<image src="../images/try_orange.jpg" width="12" height="12" onClick="javascript: link_mover();"></td>
<td width="15%" align=center><font size=2><input type="button" value="Clear Search" onclick="javascript:clearcriteria();"  style="cursor:hand;" class="sbttn3"></font></td>
</tr>
</table>

<div class="scrollit">



<table class='tborder' border=0 width="100%"    >
<thead>

<? while ($row=@MYSQL_fetch_array($res1)) {
$a=$a+1;
$title=$row['datacollection_title'];
$file_identifier=$row['file_identifier'];
$ncode=$row['nci_code'];
$rest1a=@MYSQL_QUERY("select count(dm_id) as ced  from nci_data_management.data_mgmt where nci_code='$ncode'") ;
$rowta=@MYSQL_fetch_array($rest1a);
$nci_total=$rowta['ced'];
$uid=$row['user_id'];
$dmid=$row['dm_id'];
$dpost=$row['date_post'];
?>

<tr height="20">
<td width="65%"><font face=tahoma size=2>



<?$arr_check='';
foreach ($privileges['project_id'] as &$value) {
if ($value==$ncode) { $arr_check='t';}
}
if (($arr_check=='t') or ($_SESSION["uacat_".session_id()]=='1') ) {?>
<a href="data_management_new.php?file_identifier=<?echo encrypt($file_identifier);?>"><?echo $a;?>. <?echo $title;?></a>
<?} else {?>
<?echo $a;?>. <?echo $title;?>
<?}?>




</font>
</td>

<script>
function win_open(str) {
  w = screen.availWidth;
   h = screen.availHeight;
    var popW = 550, popH = 250;
var leftPos = (w-popW)/2, topPos = (h-popH)/2; 
 win2=window.open('delete_dmid.php?dm='+str,'win2','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=550,height=250,top=' + topPos + ',left=' + leftPos); 
}

</script>


 



<td width="10%" align=center><font face=tahoma size=2>
<font size=1><?echo retrieve_date_format($dpost);?></font>
<?if ($user_id=='jbw900' or $user_id=='rkg900' or $user_id=='bje900') {?>
&nbsp;&nbsp;<a href="javascript:win_open('<?=$dmid?>')">  <image src="../images/del_icon.png" width=10 height=10></a>
<?}?>
</td>



<td width="10%" align=center><font face=tahoma size=2>
<?echo $ncode;
if ($user_id=='jbw900' or $user_id=='rkg900' or $user_id=='bje900') {
echo "<font size=1> (".$nci_total.")</font>";}

?>
</font>
</td>
<td width="15%" align=center>
<?$filename='dmplan_id_'.$dmid.'.pdf';?><a href='view_pdf.php?fname=<?echo $filename;?>' target='_blank'><image src="../images/adobe_icon.png" width=20 height=20> <font size=2>&nbsp;Download</font></a>
 </a>
</font>
</td>
</tr>

<?}?>
</table>
</div>
<?if ($_SESSION["uacat_".session_id()]=='1') {
?>

<?/*?>
<font size=1>Legend : </font>&nbsp;&nbsp;&nbsp;&nbsp;<image src="../images/edit.png" width=15 height=15>&nbsp;  <font size=1>Edit already saved catalogue </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<image src="../images/addicon.png" width=10 height=10> &nbsp;<font size=1>Add catalogue</font>
<?*/?>
<?}?>






<br><br><br>
<font face=tahoma color=#800000 size=2>Temp Data Management Plans</font>
<br><br>
<table  border=0 width="98%"    >
<thead>
<tr bgcolor=#ececec>
<td width="65%"><font size=1>Data Collection Title</font></td>
</tr>
</table>

<div class="scrollit1">
<table class='tborder' border=0 width="100%"    >
<thead>
<?$aa=0;


if (($user_id=='rkg900') or ($user_id=='jbw900') or ($user_id=='bje900') )
{
$rest1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt_temp order by datacollection_title") ;
} else {
$rest1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt_temp where user_id='$user_id'order by datacollection_title") ;?>
<? }?>


<? while ($rowt=@MYSQL_fetch_array($rest1)) {
$aa=$aa+1;
$title_t=$rowt['datacollection_title'];
$file_identifier_t=$rowt['file_identifier'];
?>

<tr height="20">
<td width="65%"><font face=tahoma size=2>
<a href="data_management_new.php?file_identifier_t=<?echo encrypt($file_identifier_t);?>"><?echo $aa;?>. <?echo $title_t;?></a>
</td></tr><?}?></table>
</div>












<br>
<? 
 if (isset($_REQUEST['file_identifier'])) {
 $file_identifier=valid_data(decrypt($_REQUEST['file_identifier']));
$res2=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where file_identifier='$file_identifier'") ;
$row1=@MYSQL_fetch_array($res2);
$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
$date_post=$d;

$hierarchy_level= ($row1['hierarchy_level']); 
$datacollection_title= ($row1['datacollection_title']);

$datamid=($row1['dm_id']);
$sel=array();
$res22=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt_assoc_source where dm_id='$datamid'") ;
while ($row22=@MYSQL_fetch_array($res22)) {
 array_push($sel,($row22['source_file_id']));
}
 $pidentifier= ($row1['parentidentifier']);
 $nci_code= ($row1['nci_code']);
 $abstract= ($row1['abstract']);
 $data_ownership= ($row1['data_ownership']); 
 $data_ownership_custodian= ($row1['data_ownership_custodian']);
 $dataset_purpose= ($row1['dataset_purpose']);
 $dataset_status= ($row1['dataset_status']);
 $dataset_identifier= ($row1['dataset_identifier']);
 $data_source= ($row1['data_source']);
 $data_provenance= ($row1['data_provenance']);
 $doi= ($row1['doi']);
 $alternate_title= ($row1['alternate_title']);
 $tcat= ($row1['tcat']);
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


}



if (isset($_REQUEST['file_identifier_t'])) {
 $file_identifier_t=valid_data(decrypt($_REQUEST['file_identifier_t']));
$res2=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt_temp where file_identifier='$file_identifier_t'") ;
$row1=@MYSQL_fetch_array($res2);
$d=@date("Y-m-d H:i:s");
$user_id=$_SESSION["uid_".session_id()] ;
$date_post=$d;


$datamid=($row1['dm_id']);
$sel=array();
$res22=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt_assoc_source where dm_id='$datamid'") ;
while ($row22=@MYSQL_fetch_array($res22)) {
 array_push($sel,($row22['source_file_id']));
}
$hierarchy_level= ($row1['hierarchy_level']); 
$datacollection_title= ($row1['datacollection_title']);
$nci_code= ($row1['nci_code']);
 $pidentifier= ($row1['parentidentifier']);
 $abstract= ($row1['abstract']);
 $data_ownership= ($row1['data_ownership']); 
 $data_ownership_custodian= ($row1['data_ownership_custodian']);
 $dataset_purpose= ($row1['dataset_purpose']);
 $dataset_status= ($row1['dataset_status']);
 $dataset_identifier= ($row1['dataset_identifier']);
 $data_source= ($row1['data_source']);
 $data_provenance= ($row1['data_provenance']);
 $doi= ($row1['doi']);
 $alternate_title= ($row1['alternate_title']);
  $tcat= ($row1['tcat']);
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

}


?>

<?if (($user_id=='rkg900') or ($user_id=='jbw900') or ($user_id=='bje900') )  {?>
<br><br>

<table class='tborder' border=0 width="98%"    >
<tr bgcolor="#ededed" height=40><td width="100%">
&nbsp;&nbsp;Import DMP From other DMP &nbsp;<select name="titlea" id="titlea"   class=form-field  style="width:400px;" size=1 onchange="Check_Import()">
<?
$result1=@MYSQL_query("Select file_identifier,datacollection_title from nci_data_management.data_mgmt order by datacollection_title ");
 while ($row1=@MYSQL_fetch_array($result1)){
 ?>
  <option value="<? echo $row1['file_identifier'];?>" > <? echo ($row1['datacollection_title']);?></option>
  <?}?>
</select>
</td></tr></table>
<?}?>
<br><br>
<br>


<!--
<div align=right>
<font face="tahoma" color="#800000" size=2>Note: Fields marked with * are required&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div>
-->


<?
$result3=@MYSQL_query("create TEMPORARY TABLE temp_table  as select * from  nci_data_management.data_mgmt");
$result3=@MYSQL_query("ALTER TABLE temp_table ADD FULLTEXT INDEX (datacollection_title)");

?>






<script>
function call_f() {
var a1=(Math.floor((Math.random()*10000)+1));
var a2=(Math.floor((Math.random()*10000)+1));
var a3=(Math.floor((Math.random()*10000)+1));
var a4=(Math.floor((Math.random()*10000)+1));
document.getElementById("file_identifier").value='f'+a1+'_'+a2+'_'+a3+'_'+a4;
}
</script>




<image src="../images/arrow-green-04.png" width=20 height=20>&nbsp;&nbsp;External Fields





<?if ((!isset($_REQUEST['file_identifier'])) and (!isset($_REQUEST['file_identifier_t'])))  {
$a1 = mt_rand(1000,9999);
$a2 = mt_rand(1000,9999);
$a3 = mt_rand(1000,9999);
$a4 = mt_rand(1000,9999);
$file_identifier='f'.$a1.'_'.$a2.'_'.$a3.'_'.$a4;

$result1a=@MYSQL_query("Select count(dm_id) as cc from nci_data_management.data_mgmt where file_identifier='$file_identifier'");
 $row1a=@MYSQL_fetch_array($result1a);
$cnt=$row1a['cc'];
if ($cnt>0) {
$a1 = mt_rand(1000,9999);
$a2 = mt_rand(1000,9999);
$a3 = mt_rand(1000,9999);
$a4 = mt_rand(1000,9999);
$file_identifier='f'.$a1.'_'.$a2.'_'.$a3.'_'.$a4;
}






} else {


if (isset($_REQUEST['file_identifier'])) {
     $file_identifier=valid_data(decrypt($_REQUEST['file_identifier']));}

if (isset($_REQUEST['file_identifier_t'])) {
     $file_identifier=valid_data(decrypt($_REQUEST['file_identifier_t']));}



}





?>





<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp;Data Description &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>


<tr class="row1" height=30  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">File Identifier</font> </td><td colspan=3 width="70%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="file_identifier" name="file_identifier" style="width:300px; background-color : #d1d1d1;" value="<?echo @$file_identifier;?>" ><font size=1><i> (NCI use only)</i> 
<?if (($user_id=='rkg900') or ($user_id=='jbw900') or ($user_id=='bje900') )  {?>
&nbsp;&nbsp;&nbsp;<input name="btn1" type="button" id="btn1" value="  Get File Identifier    " style="cursor:hand;" class="sbttn3" onclick="call_f()">
<?}?>
</font>
</td>
</tr>





<tr class="row1"  height=30>
<td width="30%" align=left valign=top><font size=3 face='arial' color="blue">Parent Identifier</font> </td><td colspan=3 width="70%" align=left valign=middle>
&nbsp;
<select name="pidentifier" id="pidentifier"   class=form-field   size="1"  >
<option></option>
<?
$result1=@MYSQL_query("Select file_identifier,datacollection_title from nci_data_management.data_mgmt order by datacollection_title ");
 while ($row1=@MYSQL_fetch_array($result1)){
 if ($row1['file_identifier']==$pidentifier){
 $s="selected='selected'";
 } else {$s='';}
  ?>
  <option value="<? echo $row1['file_identifier'];?>" <?=$s?> >  <? echo $row1['datacollection_title'];?></option>
  <?}?>
</select>


</td>
</tr>




<tr class="row1"  height=30>
<td width="30%" align=left valign=top><font size=3 face='arial' color="blue">Associated Source Dataset</font> </td><td  width="70%" align=left valign=middle>
&nbsp;


<select name="selectShift[]" id="selectShift" class="form-field_big"     multiple="multiple" size=10 style="width:600px;">
<option></option>
<?
$result1=@MYSQL_query("Select file_identifier,datacollection_title from nci_data_management.data_mgmt order by datacollection_title ");
 while ($row1=@MYSQL_fetch_array($result1)){

if (in_array ($row1['file_identifier'],$sel)) 
    {
 $s="selected='selected'";
 } else {$s='';}    

  ?>

  <option value="<? echo $row1['file_identifier'];?>" <?=$s?> >  <? echo $row1['datacollection_title'];?></option>
  <?}?>
</select>




</td>
</tr>








<tr class="row1" height=30 >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Hierarchy Level</font> </td><td colspan=3 width="70%" align=left valign=middle>&nbsp;



<select name="hierarchy_level" id="hierarchy_level"   class=form-field   size="1" >


 <option value="collectionSession" <?=($hierarchy_level=='collectionSession')?'selected':''?> >collectionSession</option>
  <option value="series" <?=($hierarchy_level=='series')?'selected':''?>>series</option>
  <option value="attribute" <?=($hierarchy_level=='attribute')?'selected':''?> >attribute</option>
  <option value="attributeType" <?=($hierarchy_level=='attributeType')?'selected':''?>>attributeType</option>
  <option value="collectionHardware" <?=($hierarchy_level=='collectionHardware')?'selected':''?>>collectionHardware</option>
  <option value="dataset" <?=($hierarchy_level=='dataset')?'selected':''?>>dataset</option>
  <option value="nonGeographicDataset" <?=($hierarchy_level=='nonGeographicDataset')?'selected':''?>>nonGeographicDataset</option>
  <option value="dimensionGroup" <?=($hierarchy_level=='dimensionGroup')?'selected':''?>>dimensionGroup</option>
  <option value="feature" <?=($hierarchy_level=='feature')?'selected':''?>>feature</option>
  <option value="featureType" <?=($hierarchy_level=='featureType')?'selected':''?>>featureType</option>
  <option value="propertytype" <?=($hierarchy_level=='propertytype')?'selected':''?>>propertytype</option>
  <option value="feildSession" <?=($hierarchy_level=='feildSession')?'selected':''?>>feildSession</option>
  <option value="software" <?=($hierarchy_level=='software')?'selected':''?>>software</option>
  <option value="service" <?=($hierarchy_level=='service')?'selected':''?>>service</option>
  <option value="model" <?=($hierarchy_level=='model')?'selected':''?>>model</option>
  <option value="tile" <?=($hierarchy_level=='tile')?'selected':''?>>tile</option>
</select>



&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=nci_code');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=hierarchy_level');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> &nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top><font size=3 face='arial' color="blue">Data Collection Title</font> </td><td colspan=3 width="70%" align=left valign=middle>&nbsp;
<textarea class=form-field_big  id="datacollection_title" name="datacollection_title" rows=1 style="width: 500px; height: 40px;"><?echo @$datacollection_title;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=datacollection_title');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=datacollection_title');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">NCI Data Collection Code</font> </td><td colspan=3 width="70%" align=left valign=middle>&nbsp;

<?
if ($_SESSION["uacat_".session_id()]=='1') {?>
<textarea class=form-field_big  id="nci_code" name="nci_code" rows=1 style="width: 500px; height: 40px;"><?echo @$nci_code;?></textarea>
<?} else {?>
<select name="nci_code" id="nci_code"   class=form-field   size="1" >
<?
for ($i=0; $i<count($privileges['project_id']); $i++) {
$pid= ($privileges['project_id'][$i]);
 if ($nci_code==$pid){
 $s="selected='selected'";
 } else {$s='';}
?>
<option value="<? echo $pid;?>"  <?=$s?>> <? echo $pid;?></option>
<?}?>
</select>
<?}?>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=nci_code');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=nci_code');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> &nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Dataset Abstract</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="abstract" name="abstract" rows=1 style="width: 500px; height: 200px;"><?echo @$abstract;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=abstract');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=abstract');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>


&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>









<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Ownership</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="downer_name" name="downer_name" style="width:200px;" value="<?echo @$downer_name;?>"></font>&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="downer_org" name="downer_org" style="width:200px;" value="<?echo @$downer_org;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="downer_position" name="downer_position" style="width:200px;" value="<?echo @$downer_position;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="downer_phone" name="downer_phone" style="width:200px;" value="<?echo @$downer_phone;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="downer_fax" name="downer_fax" style="width:200px;" value="<?echo @$downer_fax;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="downer_del" name="downer_del" style="width:200px;" value="<?echo @$downer_del;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="downer_city" name="downer_city" style="width:200px;" value="<?echo @$downer_city;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="downer_pcode" name="downer_pcode" style="width:200px;" value="<?echo @$downer_pcode;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="downer_country" name="downer_country" style="width:200px;" value="<?echo @$downer_country;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="downer_email" name="downer_email" style="width:200px;" value="<?echo @$downer_email;?>"></font></td></tr>

</table>

<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment1();"><img id="expandButton1" border="0" src="../images/collapse.gif"> IDs</a>
<br>

 <div id="div_comment1" style="display: none; width:600px">
<br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="downer_linkage1" name="downer_linkage1" style="width:200px;" value="<?echo @$downer_linkage1;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="downer_name1" name="downer_name1" style="width:200px;" value="<?echo @$downer_name1;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="downer_descp1" name="downer_descp1" style="width:200px;" value="<?echo @$downer_descp1;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="downer_linkage2" name="downer_linkage2" style="width:200px;" value="<?echo @$downer_linkage2;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="downer_name2" name="downer_name2" style="width:200px;" value="<?echo @$downer_name2;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="downer_descp2" name="downer_descp2" style="width:200px;" value="<?echo @$downer_descp2;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="downer_linkage3" name="downer_linkage3" style="width:200px;" value="<?echo @$downer_linkage3;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="downer_name3" name="downer_name3" style="width:200px;" value="<?echo @$downer_name3;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="downer_descp3" name="downer_descp3" style="width:200px;" value="<?echo @$downer_descp3;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="downer_linkage4" name="downer_linkage4" style="width:200px;" value="<?echo @$downer_linkage4;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="downer_name4" name="downer_name4" style="width:200px;" value="<?echo @$downer_name4;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="downer_descp4" name="downer_descp4" style="width:200px;" value="<?echo @$downer_descp4;?>"></font></td></tr>

</table>


<br><br></div>

<br>





</td>
</tr>




<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Custodianship</font> </td><td colspan=3 width="70%" align=left>&nbsp;


 
 <br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcust_name" name="dcust_name" style="width:200px;" value="<?echo @$dcust_name;?>"></font>&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="dcust_org" name="dcust_org" style="width:200px;" value="<?echo @$dcust_org;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="dcust_position" name="dcust_position" style="width:200px;" value="<?echo @$dcust_position;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="dcust_phone" name="dcust_phone" style="width:200px;" value="<?echo @$dcust_phone;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="dcust_fax" name="dcust_fax" style="width:200px;" value="<?echo @$dcust_fax;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="dcust_del" name="dcust_del" style="width:200px;" value="<?echo @$dcust_del;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="dcust_city" name="dcust_city" style="width:200px;" value="<?echo @$dcust_city;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="dcust_pcode" name="dcust_pcode" style="width:200px;" value="<?echo @$dcust_pcode;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="dcust_country" name="dcust_country" style="width:200px;" value="<?echo @$dcust_country;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="dcust_email" name="dcust_email" style="width:200px;" value="<?echo @$dcust_email;?>"></font></td></tr>

</table>

<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment2();"><img id="expandButton2" border="0" src="../images/collapse.gif"> IDs</a>
<br>


 <div id="div_comment2" style="display: none; width:600px">
<br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="dcust_linkage1" name="dcust_linkage1" style="width:200px;" value="<?echo @$dcust_linkage1;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcust_name1" name="dcust_name1" style="width:200px;" value="<?echo @$dcust_name1;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="dcust_descp1" name="dcust_descp1" style="width:200px;" value="<?echo @$dcust_descp1;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="dcust_linkage2" name="dcust_linkage2" style="width:200px;" value="<?echo @$dcust_linkage2;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcust_name2" name="dcust_name2" style="width:200px;" value="<?echo @$dcust_name2;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="dcust_descp2" name="dcust_descp2" style="width:200px;" value="<?echo @$dcust_descp2;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="dcust_linkage3" name="dcust_linkage3" style="width:200px;" value="<?echo @$dcust_linkage3;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcust_name3" name="dcust_name3" style="width:200px;" value="<?echo @$dcust_name3;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="dcust_descp3" name="dcust_descp3" style="width:200px;" value="<?echo @$dcust_descp3;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="dcust_linkage4" name="dcust_linkage4" style="width:200px;" value="<?echo @$dcust_linkage4;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcust_name4" name="dcust_name4" style="width:200px;" value="<?echo @$dcust_name4;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="dcust_descp4" name="dcust_descp4" style="width:200px;" value="<?echo @$dcust_descp4;?>"></font></td></tr>

</table>

<br><br></div>




<br>



</td>
</tr>










<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">DOI</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="doi" name="doi" rows=1 style="width: 500px; height: 40px;"><?echo @$doi;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=doi');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=doi');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>


<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Dataset Identifier</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="dataset_identifier" name="dataset_identifier" rows=1 style="width: 500px; height: 40px;"><?echo @$dataset_identifier;?></textarea>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=dataset_identifier');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=dataset_identifier');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>




 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Source of Data</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="data_source" name="data_source" rows=1 style="width: 500px; height: 40px;"><?echo @$data_source;?></textarea>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=data_source');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=data_source');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Dataset Provenance</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="data_provenance" name="data_provenance" rows=1 style="width: 500px; height: 40px;"><?echo @$data_provenance;?></textarea>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=data_provenance');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=data_provenance');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>





<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Dataset Purpose</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="dataset_purpose" name="dataset_purpose" rows=1 style="width: 500px; height: 60px;"><?echo @$dataset_purpose;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=dataset_purpose');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
 <?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=dataset_purpose');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Dataset Status</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<select name="dataset_status" id="dataset_status"   class=form-field   size="1" >
<?/*
if ($row1['field_name']==$dataset_status1){
 $s="selected='selected'";
 } else {$s='';}
*/?>
  <option value="completed" <?if ($dataset_status == 'completed')  {echo 'selected'; } ?>>completed</option>
  <option value="historicalArchival" <?if ($dataset_status == 'historicalArchival')  {echo 'selected'; } ?> >historicalArchival</option>
  <option value="obsolete" <?if ($dataset_status == 'obsolete')  {echo 'selected'; } ?>>obsolete</option>
  <option value="ongoing" <?if ($dataset_status == 'ongoing')  {echo 'selected'; } ?>>ongoing</option>
  <option value="planned" <?if ($dataset_status == 'planned')  {echo 'selected'; } ?>>planned</option>
  <option value=required" <?if ($dataset_status == 'required')  {echo 'selected'; } ?>>required</option>
  <option value="underdevelopment" <?if ($dataset_status == 'underdevelopment')  {echo 'selected'; } ?>>underdevelopment</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=dataset_status');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
 <?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=dataset_status');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;

&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>



<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Alternate Title</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="alternate_title" name="alternate_title" rows=1 style="width: 500px; height: 60px;"><?echo @$alternate_title;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=alternate_title');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
 <?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=alternate_title');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>
&nbsp;&nbsp;

&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>



<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Topic Category</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<select name="tcat" id="tcat"   class=form-field   size="1" >
  <option value="environment" <?if ($tcat == 'environment')  {echo 'selected'; } ?> >environment</option>
  <option value="farming" <?if ($tcat == 'farming')  {echo 'selected'; } ?>>farming</option>
  <option value="biota" <?if ($tcat == 'biota')  {echo 'selected'; } ?>>biota</option>
  <option value="boundaries" <?if ($tcat == 'boundaries')  {echo 'selected'; } ?>>boundaries</option>
  <option value="economy" <?if ($tcat == 'economy')  {echo 'selected'; } ?>>economy</option>
  <option value="elevation" <?if ($tcat == 'elevation')  {echo 'selected'; } ?>>elevation</option>
  <option value="geoscientificInformation" <?if ($tcat == 'geoscientificInformation')  {echo 'selected'; } ?>>geoscientificInformation</option>
  <option value="health" <?if ($tcat == 'health')  {echo 'selected'; } ?>>health</option>
  <option value="inlandWaters" <?if ($tcat == 'inlandWaters')  {echo 'selected'; } ?>>inlandWaters</option>
  <option value="location" <?if ($tcat == 'location')  {echo 'selected'; } ?>>location</option>
  <option value="oceans" <?if ($tcat == 'oceans')  {echo 'selected'; } ?>>oceans</option>
  <option value="society" <?if ($tcat == 'society')  {echo 'selected'; } ?>>society</option>
  <option value="structure" <?if ($tcat == 'structure')  {echo 'selected'; } ?>>structure</option>
  <option value="transportation" <?if ($tcat == 'transportation')  {echo 'selected'; } ?>>transportation</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=dataset_status');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
 <?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=dataset_status');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;

&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>








<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Activities</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="activities" name="activities" rows=1 style="width: 500px; height: 40px;"><?echo @$activities;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=activities');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=activities');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>

</td>
</tr>


</tbody>
</table>
<br><br>













<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Roles/Contacts from the Provider Organization&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>



<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Principal Investigator responsible for the data</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_name" name="md_owner_name" style="width:200px;" value="<?echo @$md_owner_name;?>"></font>&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_org" name="md_owner_org" style="width:200px;" value="<?echo @$md_owner_org;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_position" name="md_owner_position" style="width:200px;" value="<?echo @$md_owner_position;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_phone" name="md_owner_phone" style="width:200px;" value="<?echo @$md_owner_phone;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_fax" name="md_owner_fax" style="width:200px;" value="<?echo @$md_owner_fax;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_del" name="md_owner_del" style="width:200px;" value="<?echo @$md_owner_del;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_city" name="md_owner_city" style="width:200px;" value="<?echo @$md_owner_city;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_pcode" name="md_owner_pcode" style="width:200px;" value="<?echo @$md_owner_pcode;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_country" name="md_owner_country" style="width:200px;" value="<?echo @$md_owner_country;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_email" name="md_owner_email" style="width:200px;" value="<?echo @$md_owner_email;?>"></font></td></tr>

</table>
 
<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment3();"><img id="expandButton3" border="0" src="../images/collapse.gif"> IDs</a>
<br>


 <div id="div_comment3" style="display: none; width:600px">
<br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_linkage1" name="md_owner_linkage1" style="width:200px;" value="<?echo @$md_owner_linkage1;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_name1" name="md_owner_name1" style="width:200px;" value="<?echo @$md_owner_name1;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_descp1" name="md_owner_descp1" style="width:200px;" value="<?echo @$md_owner_descp1;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_linkage2" name="md_owner_linkage2" style="width:200px;" value="<?echo @$md_owner_linkage2;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_name2" name="md_owner_name2" style="width:200px;" value="<?echo @$md_owner_name2;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_descp2" name="md_owner_descp2" style="width:200px;" value="<?echo @$md_owner_descp2;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_linkage3" name="md_owner_linkage3" style="width:200px;" value="<?echo @$md_owner_linkage3;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_name3" name="md_owner_name3" style="width:200px;" value="<?echo @$md_owner_name3;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_descp3" name="md_owner_descp3" style="width:200px;" value="<?echo @$md_owner_descp3;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_linkage4" name="md_owner_linkage4" style="width:200px;" value="<?echo @$md_owner_linkage4;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_name4" name="md_owner_name4" style="width:200px;" value="<?echo @$md_owner_name4;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="md_owner_descp4" name="md_owner_descp4" style="width:200px;" value="<?echo @$md_owner_descp4;?>"></font></td></tr>

</table>

<br><br></div>




<br>


 
 </td>
</tr>



<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Content Expert</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="content_name" name="content_name" style="width:200px;" value="<?echo @$content_name;?>"></font>&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="content_org" name="content_org" style="width:200px;" value="<?echo @$content_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="content_position" name="content_position" style="width:200px;" value="<?echo @$content_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="content_phone" name="content_phone" style="width:200px;" value="<?echo @$content_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="content_fax" name="content_fax" style="width:200px;" value="<?echo @$content_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="content_del" name="content_del" style="width:200px;" value="<?echo @$content_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="content_city" name="content_city" style="width:200px;" value="<?echo @$content_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="content_pcode" name="content_pcode" style="width:200px;" value="<?echo @$content_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="content_country" name="content_country" style="width:200px;" value="<?echo @$content_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="content_email" name="content_email" style="width:200px;" value="<?echo @$content_email;?>"></font></td></tr>
</table>

<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment4();"><img id="expandButton4" border="0" src="../images/collapse.gif"> IDs</a>
<br>



 <div id="div_comment4" style="display: none; width:600px">
<br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="content_linkage1" name="content_linkage1" style="width:200px;" value="<?echo @$content_linkage1;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="content_name1" name="content_name1" style="width:200px;" value="<?echo @$content_name1;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="content_descp1" name="content_descp1" style="width:200px;" value="<?echo @$content_descp1;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="content_linkage2" name="content_linkage2" style="width:200px;" value="<?echo @$content_linkage2;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="content_name2" name="content_name2" style="width:200px;" value="<?echo @$content_name2;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="content_descp2" name="content_descp2" style="width:200px;" value="<?echo @$content_descp2;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="content_linkage3" name="content_linkage3" style="width:200px;" value="<?echo @$content_linkage3;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="content_name3" name="content_name3" style="width:200px;" value="<?echo @$content_name3;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="content_descp3" name="content_descp3" style="width:200px;" value="<?echo @$content_descp3;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="content_linkage4" name="content_linkage4" style="width:200px;" value="<?echo @$content_linkage4;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="content_name4" name="content_name4" style="width:200px;" value="<?echo @$content_name4;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="content_descp4" name="content_descp4" style="width:200px;" value="<?echo @$content_descp4;?>"></font></td></tr>

</table>

<br><br></div>




<br>




 </td>
</tr>



 
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Contact for Media Communication</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_name" name="media_contact_name" style="width:200px;" value="<?echo @$media_contact_name;?>"></font>&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_org" name="media_contact_org" style="width:200px;" value="<?echo @$media_contact_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_position" name="media_contact_position" style="width:200px;" value="<?echo @$media_contact_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_phone" name="media_contact_phone" style="width:200px;" value="<?echo @$media_contact_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_fax" name="media_contact_fax" style="width:200px;" value="<?echo @$media_contact_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_del" name="media_contact_del" style="width:200px;" value="<?echo @$media_contact_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_city" name="media_contact_city" style="width:200px;" value="<?echo @$media_contact_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_pcode" name="media_contact_pcode" style="width:200px;" value="<?echo @$media_contact_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_country" name="media_contact_country" style="width:200px;" value="<?echo @$media_contact_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_email" name="media_contact_email" style="width:200px;" value="<?echo @$media_contact_email;?>"></font></td></tr>
</table>

<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment5();"><img id="expandButton5" border="0" src="../images/collapse.gif"> IDs</a>
<br>


 <div id="div_comment5" style="display: none; width:600px">
<br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_linkage1" name="media_contact_linkage1" style="width:200px;" value="<?echo @$media_contact_linkage1;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_name1" name="media_contact_name1" style="width:200px;" value="<?echo @$media_contact_name1;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_descp1" name="media_contact_descp1" style="width:200px;" value="<?echo @$media_contact_descp1;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_linkage2" name="media_contact_linkage2" style="width:200px;" value="<?echo @$media_contact_linkage2;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_name2" name="media_contact_name2" style="width:200px;" value="<?echo @$media_contact_name2;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_descp2" name="media_contact_descp2" style="width:200px;" value="<?echo @$media_contact_descp2;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_linkage3" name="media_contact_linkage3" style="width:200px;" value="<?echo @$media_contact_linkage3;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_name3" name="media_contact_name3" style="width:200px;" value="<?echo @$media_contact_name3;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_descp3" name="media_contact_descp3" style="width:200px;" value="<?echo @$media_contact_descp3;?>"></font></td></tr>

</table>

<br><br>

<table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_linkage4" name="media_contact_linkage4" style="width:200px;" value="<?echo @$media_contact_linkage4;?>"></font>&nbsp;</td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_name4" name="media_contact_name4" style="width:200px;" value="<?echo @$media_contact_name4;?>"></font></td></tr>

<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="media_contact_descp4" name="media_contact_descp4" style="width:200px;" value="<?echo @$media_contact_descp4;?>"></font></td></tr>

</table>

<br><br></div>




<br>




 </td>
</tr>
 
 
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data transfer/Ingestion</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_name" name="data_ingest_name" style="width:200px;" value="<?echo @$data_ingest_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_org" name="data_ingest_org" style="width:200px;" value="<?echo @$data_ingest_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_position" name="data_ingest_position" style="width:200px;" value="<?echo @$data_ingest_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_phone" name="data_ingest_phone" style="width:200px;" value="<?echo @$data_ingest_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_fax" name="data_ingest_fax" style="width:200px;" value="<?echo @$data_ingest_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_del" name="data_ingest_del" style="width:200px;" value="<?echo @$data_ingest_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_city" name="data_ingest_city" style="width:200px;" value="<?echo @$data_ingest_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_pcode" name="data_ingest_pcode" style="width:200px;" value="<?echo @$data_ingest_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_country" name="data_ingest_country" style="width:200px;" value="<?echo @$data_ingest_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="data_ingest_email" name="data_ingest_email" style="width:200px;" value="<?echo @$data_ingest_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 
 
 
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Quality Assurance/Quality Control</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="qa_name" name="qa_name" style="width:200px;" value="<?echo @$qa_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="qa_org" name="qa_org" style="width:200px;" value="<?echo @$qa_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="qa_position" name="qa_position" style="width:200px;" value="<?echo @$qa_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="qa_phone" name="qa_phone" style="width:200px;" value="<?echo @$qa_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="qa_fax" name="qa_fax" style="width:200px;" value="<?echo @$qa_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="qa_del" name="qa_del" style="width:200px;" value="<?echo @$qa_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="qa_city" name="qa_city" style="width:200px;" value="<?echo @$qa_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="qa_pcode" name="qa_pcode" style="width:200px;" value="<?echo @$qa_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="qa_country" name="qa_country" style="width:200px;" value="<?echo @$qa_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="qa_email" name="qa_email" style="width:200px;" value="<?echo @$qa_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 
 
 
 
 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Publishing</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="publish_name" name="publish_name" style="width:200px;" value="<?echo @$publish_name;?>"></font>&nbsp;</td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="publish_org" name="publish_org" style="width:200px;" value="<?echo @$publish_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="publish_position" name="publish_position" style="width:200px;" value="<?echo @$publish_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="publish_phone" name="publish_phone" style="width:200px;" value="<?echo @$publish_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="publish_fax" name="publish_fax" style="width:200px;" value="<?echo @$publish_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="publish_del" name="publish_del" style="width:200px;" value="<?echo @$publish_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="publish_city" name="publish_city" style="width:200px;" value="<?echo @$publish_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="publish_pcode" name="publish_pcode" style="width:200px;" value="<?echo @$publish_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="publish_country" name="publish_country" style="width:200px;" value="<?echo @$publish_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="publish_email" name="publish_email" style="width:200px;" value="<?echo @$publish_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 



 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Maintenance</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="maint_name" name="maint_name" style="width:200px;" value="<?echo @$maint_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="maint_org" name="maint_org" style="width:200px;" value="<?echo @$maint_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="maint_position" name="maint_position" style="width:200px;" value="<?echo @$maint_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="maint_phone" name="maint_phone" style="width:200px;" value="<?echo @$maint_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="maint_fax" name="maint_fax" style="width:200px;" value="<?echo @$maint_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="maint_del" name="maint_del" style="width:200px;" value="<?echo @$maint_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="maint_city" name="maint_city" style="width:200px;" value="<?echo @$maint_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="maint_pcode" name="maint_pcode" style="width:200px;" value="<?echo @$maint_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="maint_country" name="maint_country" style="width:200px;" value="<?echo @$maint_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="maint_email" name="maint_email" style="width:200px;" value="<?echo @$maint_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 



 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">User Support</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="usupport_name" name="usupport_name" style="width:200px;" value="<?echo @$usupport_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="usupport_org" name="usupport_org" style="width:200px;" value="<?echo @$usupport_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="usupport_position" name="usupport_position" style="width:200px;" value="<?echo @$usupport_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="usupport_phone" name="usupport_phone" style="width:200px;" value="<?echo @$usupport_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="usupport_fax" name="usupport_fax" style="width:200px;" value="<?echo @$usupport_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="usupport_del" name="usupport_del" style="width:200px;" value="<?echo @$usupport_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="usupport_city" name="usupport_city" style="width:200px;" value="<?echo @$usupport_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="usupport_pcode" name="usupport_pcode" style="width:200px;" value="<?echo @$usupport_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="usupport_country" name="usupport_country" style="width:200px;" value="<?echo @$usupport_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="usupport_email" name="usupport_email" style="width:200px;" value="<?echo @$usupport_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 

 
  <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Service Development</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dservice_name" name="dservice_name" style="width:200px;" value="<?echo @$dservice_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="dservice_org" name="dservice_org" style="width:200px;" value="<?echo @$dservice_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="dservice_position" name="dservice_position" style="width:200px;" value="<?echo @$dservice_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="dservice_phone" name="dservice_phone" style="width:200px;" value="<?echo @$dservice_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="dservice_fax" name="dservice_fax" style="width:200px;" value="<?echo @$dservice_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="dservice_del" name="dservice_del" style="width:200px;" value="<?echo @$dservice_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="dservice_city" name="dservice_city" style="width:200px;" value="<?echo @$dservice_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="dservice_pcode" name="dservice_pcode" style="width:200px;" value="<?echo @$dservice_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="dservice_country" name="dservice_country" style="width:200px;" value="<?echo @$dservice_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="dservice_email" name="dservice_email" style="width:200px;" value="<?echo @$dservice_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 

 
  <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Service Operation</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_name" name="dservice_op_name" style="width:200px;" value="<?echo @$dservice_op_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_org" name="dservice_op_org" style="width:200px;" value="<?echo @$dservice_op_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_position" name="dservice_op_position" style="width:200px;" value="<?echo @$dservice_op_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_phone" name="dservice_op_phone" style="width:200px;" value="<?echo @$dservice_op_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_fax" name="dservice_op_fax" style="width:200px;" value="<?echo @$dservice_op_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_del" name="dservice_op_del" style="width:200px;" value="<?echo @$dservice_op_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_city" name="dservice_op_city" style="width:200px;" value="<?echo @$dservice_op_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_pcode" name="dservice_op_pcode" style="width:200px;" value="<?echo @$dservice_op_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_country" name="dservice_op_country" style="width:200px;" value="<?echo @$dservice_op_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="dservice_op_email" name="dservice_op_email" style="width:200px;" value="<?echo @$dservice_op_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 
 
 
 
 
  <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Life-Cycle Control</font> </td>
<td colspan=3 width="70%" align=left>
<br><table border=0 width="100%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_name" name="dcycle_name" style="width:200px;" value="<?echo @$dcycle_name;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Organization :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_org" name="dcycle_org" style="width:200px;" value="<?echo @$dcycle_org;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Position :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_position" name="dcycle_position" style="width:200px;" value="<?echo @$dcycle_position;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Phone :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_phone" name="dcycle_phone" style="width:200px;" value="<?echo @$dcycle_phone;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Fax :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_fax" name="dcycle_fax" style="width:200px;" value="<?echo @$dcycle_fax;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Delivery Point :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_del" name="dcycle_del" style="width:200px;" value="<?echo @$dcycle_del;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;City :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_city" name="dcycle_city" style="width:200px;" value="<?echo @$dcycle_city;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Post Code :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_pcode" name="dcycle_pcode" style="width:200px;" value="<?echo @$dcycle_pcode;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Country :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_country" name="dcycle_country" style="width:200px;" value="<?echo @$dcycle_country;?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Email :</td><td width=80% align=left><input type=text class=form-field  id="dcycle_email" name="dcycle_email" style="width:200px;" value="<?echo @$dcycle_email;?>"></font></td></tr>
</table>
 <br>
 </td>
</tr> 
</tbody>
</table>
<br><br>








<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Constraints on the Data&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Use limitations</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="use_limitations" name="use_limitations" rows=1 style="width: 500px; height: 80px;"><?echo @$use_limitations;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=use_limitations');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=use_limitations');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;

&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Access constraints</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<select name="access_constraints" id="access_constraints"   class=form-field   size="1" >
    <option value="license" <?=($access_constraints=='license')?'selected':''?> >license</option>
  <option value="copyright" <?=($access_constraints=='copyright')?'selected':''?>>copyright</option>
  <option value="patent" <?=($access_constraints=='patent')?'selected':''?>>patent</option>
  <option value="patentPending" <?=($access_constraints=='patentPending')?'selected':''?>>patentPending</option>
  <option value="trademark" <?=($access_constraints=='trademark')?'selected':''?>>trademark</option>
  <option value="restricted" <?=($access_constraints=='restricted')?'selected':''?>>restricted</option>
  <option value="otherRestrictions" <?=($access_constraints=='otherRestrictions')?'selected':''?>>otherRestrictions</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=access_constraints');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=access_constraints');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;

&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>



<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Copy of Access constraints</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="other_constraints1" name="other_constraints1" rows=1 style="width: 500px; height: 80px;"><?echo @$other_constraints1;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=other_constraints1');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=other_constraints1');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Use Constraints</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<select name="use_constraints" id="use_constraints"   class=form-field   size="1" >
    <option value="license" <?=($use_constraints=='license')?'selected':''?> >license</option>
<option value="copyright" <?=($use_constraints=='copyright')?'selected':''?>>copyright</option>
  <option value="patent" <?=($use_constraints=='patent')?'selected':''?> >patent</option>
  <option value="patentPending" <?=($use_constraints=='patentPending')?'selected':''?> >patentPending</option>
  <option value="trademark" <?=($use_constraints=='trademark')?'selected':''?> >trademark</option>
  <option value="intellectualPropertyRights" <?=($use_constraints=='intellectualPropertyRights')?'selected':''?> >intellectualPropertyRights</option>
  <option value="restricted"<?=($use_constraints=='restricted')?'selected':''?>  >restricted</option>
  <option value="otherRestrictions" <?=($use_constraints=='otherRestrictions')?'selected':''?> >otherRestrictions</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=use_constraints');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=use_constraints');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Copy of Constraints on Using</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="other_constraints2" name="other_constraints2" rows=1 style="width: 500px; height: 80px;"><?echo @$other_constraints2;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=other_constraints2');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=other_constraints2');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Security Classification</font> </td><td colspan=3 width="70%" align=left>&nbsp;
 <select name="c_classification" id="c_classification"   class=form-field   size="1" >
  <option value="unclassified" <?=($c_classification=='unclassified')?'selected':''?> >unclassified</option>
  <option value="restricted" <?=($c_classification=='restricted')?'selected':''?> >restrcited</option>
  <option value="confidential" <?=($c_classification=='confidential')?'selected':''?>>confidential</option>
  <option value="secret" <?=($c_classification=='secret')?'selected':''?>>secret</option>
  <option value="topSecret" <?=($c_classification=='topSecret')?'selected':''?>>topSecret</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=c_classification');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=c_classification');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>


</tbody>
</table>
<br><br>


<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Extent &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Spatial Extent</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<table border=0 width="90%">
<tr class=row1 >
<td width="90%" align=left><font size=2>
<font size=1>West Longitude : </font><input type=text class=form-field  id="west_value" name="west_value" style="width:200px;" value="<?echo @$west_value;?>"><br>
<font size=1>East Longitude : &nbsp;</font><input type=text class=form-field  id="east_value" name="east_value" style="width:200px;" value="<?echo @$east_value;?>"><br>
<font size=1>South Latitude : &nbsp;</font><input type=text class=form-field  id="south_value" name="south_value" style="width:200px;" value="<?echo @$south_value;?>"><br>
<font size=1>North Latitude : &nbsp;</font><input type=text class=form-field  id="north_value" name="north_value" style="width:200px;" value="<?echo @$north_value;?>"><br>
</td>
</tr>
</table>

&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=spatial_extent');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=spatial_extent');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> 

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Temporal Extent</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<table border=0 width="90%">
<tr class=row1 >
<td  width="90%" align=left><font size=2>
<font size=1>Begin Position : </font><input type=text class=form-field  id="bposition" name="bposition" style="width:200px;" value="<?echo @$bposition;?>"><font size=2>&nbsp;<font size=1>(YYYY-mm-dd)</font><br>
<font size=1>End Position : &nbsp;&nbsp;</font><input type=text class=form-field  id="eposition" name="eposition" style="width:200px;" value="<?echo @$eposition;?>"><font size=2>&nbsp;<font size=1>(YYYY-mm-dd)</font><br>
</td>
</tr>
</table>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=temporal_extent');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=temporal_extent');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

 </tbody>
</table>
<br><br>



<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Formats &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Format Name/Version</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<table border=0 width="90%">
<tr class=row1 >
<td  width="90%" align=left><font size=2>&nbsp;
<font size=1>Name : </font><input type=text class=form-field  id="format1" name="format1" style="width:200px;" value="<?echo @$format1;?>">&nbsp;&nbsp;<font size=1>Version : </font>&nbsp;&nbsp;</font><input type=text class=form-field  id="fversion1" name="fversion1" style="width:200px;" value="<?echo @$fversion1;?>">&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15><br>
</td>
</tr>

<tr class=row1 >
<td  width="90%" align=left><font size=2>&nbsp;
<font size=1>Name : </font><input type=text class=form-field  id="format2" name="format2" style="width:200px;" value="<?echo @$format2;?>">&nbsp;&nbsp;<font size=1>Version : </font>&nbsp;&nbsp;</font><input type=text class=form-field  id="fversion2" name="fversion2" style="width:200px;" value="<?echo @$fversion2;?>">&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15><br>
</td>
</tr>

<tr class=row1 >
<td  width="90%" align=left><font size=2>&nbsp;
<font size=1>Name : </font><input type=text class=form-field  id="format3" name="format3" style="width:200px;" value="<?echo @$format3;?>">&nbsp;&nbsp;<font size=1>Version : </font>&nbsp;&nbsp;</font><input type=text class=form-field  id="fversion3" name="fversion3" style="width:200px;" value="<?echo @$fversion3;?>">&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15><br>
</td>
</tr>

<tr class=row1 >
<td  width="90%" align=left><font size=2>&nbsp;
<font size=1>Name : </font><input type=text class=form-field  id="format4" name="format4" style="width:200px;" value="<?echo @$format4;?>">&nbsp;&nbsp;<font size=1>Version : </font>&nbsp;&nbsp;</font><input type=text class=form-field  id="fversion4" name="fversion4" style="width:200px;" value="<?echo @$fversion4;?>">&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15><br>
</td>
</tr>

<tr class=row1 >
<td  width="90%" align=left><font size=2>&nbsp;
<font size=1>Name : </font><input type=text class=form-field  id="format5" name="format5" style="width:200px;" value="<?echo @$format5;?>">&nbsp;&nbsp;<font size=1>Version : </font>&nbsp;&nbsp;</font><input type=text class=form-field  id="fversion5" name="fversion5" style="width:200px;" value="<?echo @$fversion5;?>">&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15><br>
</td>
</tr>




</table>


 </td>
</tr>










  </tbody>
</table>
<br><br>



<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Usage &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Tools</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="tools" name="tools" rows=1 style="width: 500px; height: 40px;"><?echo @$tools;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=tools');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=tools');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> 

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Software</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="software" name="software" rows=1 style="width: 500px; height: 40px;"><?echo @$software;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=software');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=software');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Algorithms/Libraries</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="algorithms" name="algorithms" rows=1 style="width: 500px; height: 40px;"><?echo @$algorithms;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=algorithms');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=algorithms');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Flexibility</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="flexibility" name="flexibility" rows=1 style="width: 500px; height: 40px;"><?echo @$flexibility;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=flexibility');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=flexibility');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

 </tbody>
</table>
<br><br>



<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Pre-publishing Preparation &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Ingest Process </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="ingest_process" name="ingest_process" rows=1 style="width: 500px; height: 40px;"><?echo @$ingest_process;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=ingest_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=ingest_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Quality Assurance Process</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="qa_process" name="qa_process" rows=1 style="width: 500px; height: 100px;"><?echo @$qa_process;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=qa_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=qa_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> 

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Maintenance Process</font> </td><td colspan=3 width="70%" align=left>&nbsp;
 <select name="maintenance_process" id="maintenance_process"   class=form-field   size="1" >
  <option value="continual" <?=($maintenance_process=='continual')?'selected':''?>>continual</option>
  <option value="daily" <?=($maintenance_process=='daily')?'selected':''?>>daily</option>
  <option value="weekly" <?=($maintenance_process=='weekly')?'selected':''?>>weekly</option>
  <option value="fortnightly" <?=($maintenance_process=='fortnightly')?'selected':''?>>fortnightly</option>
  <option value="monthly" <?=($maintenance_process=='monthly')?'selected':''?>>monthly</option>
  <option value="quarterly" <?=($maintenance_process=='quarterly')?'selected':''?>>quarterly</option>
  <option value="annually" <?=($maintenance_process=='annually')?'selected':''?>>annually</option>
  <option value="biannually" <?=($maintenance_process=='biannually')?'selected':''?>>biannually</option>
  <option value="asNeeded" <?=($maintenance_process=='asNeeded')?'selected':''?>>asNeeded</option>
  <option value="irregular" <?=($maintenance_process=='irregular')?'selected':''?>>irregular</option>
  <option value="notPlanned" <?=($maintenance_process=='notPlanned')?'selected':''?>>notPlanned</option>
  <option value="unknown" <?=($maintenance_process=='unknown')?'selected':''?>>unknown</option>
 </select>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=maintenance_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=maintenance_process');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Backup and Recovery plan</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="backup_recovery_plan" name="backup_recovery_plan" rows=1 style="width: 500px; height: 40px;"><?echo @$backup_recovery_plan;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=backup_recovery_plan');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=backup_recovery_plan');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
 </td>
</tr>
 

 </tbody>
</table>
<br><br>



<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Publishing Process &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Services </font> </td><td colspan=3 width="70%" align=left>&nbsp;
 <select name="services" id="services"   class=form-field   size="1" >
    <option value="OpenDAP: OpenDAP" <?=($services=='OpenDAP: OpenDAP')?'selected':''?> >OpenDAP: OpenDAP</option>
   <option value="ESRI: ArcIMS" <?=($services=='ESRI: ArcIMS')?'selected':''?> >ESRI: ArcIMS</option>
  <option value="ESRI: ArcGIS" <?=($services=='ESRI: ArcGIS')?'selected':''?>>ESRI: ArcGIS</option>
  <option value="W3C: HTML: INFORMATION" <?=($services=='W3C: HTML: INFORMATION')?'selected':''?>>W3C: HTML: INFORMATION</option>
  <option value="W3C: HTML: DOWNLOAD" <?=($services=='W3C: HTML: DOWNLOAD')?'selected':''?>>W3C: HTML: DOWNLOAD</option>
  <option value="OGC: WEB Feature Services" <?=($services=='OGC: WEB Feature Services')?'selected':''?>>OGC: WEB Feature Services</option>
  <option value="OGC: WEB Mapping Services" <?=($services=='OGC: WEB Mapping Services')?'selected':''?>>OGC: WEB Mapping Services</option>
  <option value="OGC: WEB Processing Services" <?=($services=='OGC: WEB Processing Services')?'selected':''?>>OGC: WEB Processing Services</option>
  <option value="OGC: Catalogue Services for the web" <?=($services=='OGC: Catalogue Services for the web')?'selected':''?>>OGC: Catalogue Services for the web</option>
  <option value="OGC: Web Coverage Services" <?=($services=='OGC: Web Coverage Services')?'selected':''?>>OGC: Web Coverage Services</option>
  <option value="OGC: Senior Observation Services" <?=($services=='OGC: Senior Observation Services')?'selected':''?>>OGC: Senior Observation Services</option>
 </select>
&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=services');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=services');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>

<br>
<br>
&nbsp;&nbsp;&nbsp;URL : <input type=text class=form-field  id="services_url" name="services_url" style="width:300px;" value="<?echo @$services_url;?>">
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Catalogue Registry </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="catalog_registry" name="catalog_registry" rows=1 style="width: 500px; height: 100px;"><?echo @$catalog_registry;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=catalog_registry');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=catalog_registry');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

 
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Federated Catalogues</font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="federated_catalogue" name="federated_catalogue" rows=1 style="width: 500px; height: 60px;"><?echo @$federated_catalogue;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=federated_catalogue');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=federated_catalogue');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Search Words/ keywords </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<input type=text class=form-field  id="keywords" name="keywords" style="width:300px;" value="<?echo @$keywords;?>">&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=keywords');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=keywords');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>

<br>
<br>
&nbsp;&nbsp;<input type=text class=form-field  id="keywords1" name="keywords1" style="width:300px;" value="<?echo @$keywords1;?>">
<br>
<br>
&nbsp;&nbsp;<input type=text class=form-field  id="keywords2" name="keywords2" style="width:300px;" value="<?echo @$keywords2;?>">
<br>
<br>
&nbsp;&nbsp;<input type=text class=form-field  id="keywords3" name="keywords3" style="width:300px;" value="<?echo @$keywords3;?>">
<br>
<br>
&nbsp;&nbsp;<input type=text class=form-field  id="keywords4" name="keywords4" style="width:300px;" value="<?echo @$keywords4;?>">



 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Website </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="website" name="website" rows=1 style="width: 500px; height: 40px;"><?echo @$website;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=website');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=website');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>



<?$query=" Select * from nci_data_management.data_mgmt_papers where  dm_id='$datamid' order by table_id asc";
$res1=MYSQL_QUERY($query) ;
while ($row=@MYSQL_fetch_array($res1)) {
$val1[]=valid_data_bslash($row['linkage']);
$val2[]=valid_data_bslash($row['protocol']);
$val3[]=valid_data_bslash($row['name']);
$val4[]=valid_data_bslash($row['description']);
$val5[]=valid_data_bslash($row['function']);
}?>

  <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Paper Reference</font> </td>
<td colspan=3 width="70%" align=left>
<br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage:</td><td width=80% align=left><input type=text class=form-field  id="paper_linkage[]" name="paper_linkage[]" style="width:200px;" value="<? echo $val1[0];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Protocol :</td><td width=80% align=left><input type=text class=form-field  id="paper_protocol[]" name="paper_protocol[]" style="width:200px;" value="<? echo $val2[0];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="paper_name[]" name="paper_name[]" style="width:200px;" value="<? echo $val3[0];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="paper_description[]" name="paper_description[]" style="width:200px;" value="<? echo $val4[0];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Function :</td><td width=80% align=left><input type=text class=form-field  id="paper_function[]" name="paper_function[]" style="width:200px;" value="<? echo $val5[0];?>"></font></td></tr>
</table>
 
<br>


<br>&nbsp;&nbsp;
<a href="javascript:void(0)" onClick="showComment0();"><img id="expandButton0" border="0" src="../images/collapse.gif"> More</a>
<br><br>


 <div id="div_comment0" style="display: none; width:600px">
<br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage:</td><td width=80% align=left><input type=text class=form-field  id="paper_linkage[]" name="paper_linkage[]" style="width:200px;" value="<? echo $val1[1];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Protocol :</td><td width=80% align=left><input type=text class=form-field  id="paper_protocol[]" name="paper_protocol[]" style="width:200px;" value="<? echo $val2[1];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="paper_name[]" name="paper_name[]" style="width:200px;" value="<? echo $val3[1];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="paper_description[]" name="paper_description[]" style="width:200px;" value="<? echo $val4[1];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Function :</td><td width=80% align=left><input type=text class=form-field  id="paper_function[]" name="paper_function[]" style="width:200px;" value="<? echo $val5[1];?>"></font></td></tr>
</table>

<br><br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage:</td><td width=80% align=left><input type=text class=form-field  id="paper_linkage[]" name="paper_linkage[]" style="width:200px;" value="<? echo $val1[2];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Protocol :</td><td width=80% align=left><input type=text class=form-field  id="paper_protocol[]" name="paper_protocol[]" style="width:200px;" value="<? echo $val2[2];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="paper_name[]" name="paper_name[]" style="width:200px;" value="<? echo $val3[2];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="paper_description[]" name="paper_description[]" style="width:200px;" value="<? echo $val4[2];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Function :</td><td width=80% align=left><input type=text class=form-field  id="paper_function[]" name="paper_function[]" style="width:200px;" value="<? echo $val5[2];?>"></font></td></tr>
</table>

<br><br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage:</td><td width=80% align=left><input type=text class=form-field  id="paper_linkage[]" name="paper_linkage[]" style="width:200px;" value="<? echo $val1[3];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Protocol :</td><td width=80% align=left><input type=text class=form-field  id="paper_protocol[]" name="paper_protocol[]" style="width:200px;" value="<? echo $val2[3];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="paper_name[]" name="paper_name[]" style="width:200px;" value="<? echo $val3[3];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="paper_description[]" name="paper_description[]" style="width:200px;" value="<? echo $val4[3];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Function :</td><td width=80% align=left><input type=text class=form-field  id="paper_function[]" name="paper_function[]" style="width:200px;" value="<? echo $val5[3];?>"></font></td></tr>
</table>

<br><br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Linkage:</td><td width=80% align=left><input type=text class=form-field  id="paper_linkage[]" name="paper_linkage[]" style="width:200px;" value="<? echo $val1[4];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Protocol :</td><td width=80% align=left><input type=text class=form-field  id="paper_protocol[]" name="paper_protocol[]" style="width:200px;" value="<? echo $val2[4];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Name :</td><td width=80% align=left><input type=text class=form-field  id="paper_name[]" name="paper_name[]" style="width:200px;" value="<? echo $val3[4];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Description :</td><td width=80% align=left><input type=text class=form-field  id="paper_description[]" name="paper_description[]" style="width:200px;" value="<? echo $val4[4];?>"></font></td></tr>
<tr  bgcolor='#ebebeb'> <td width="20%" align=left><font size=1>&nbsp;&nbsp;Function :</td><td width=80% align=left><input type=text class=form-field  id="paper_function[]" name="paper_function[]" style="width:200px;" value="<? echo $val5[4];?>"></font></td></tr>
</table>


<br><br></div>





 </td>
</tr>





<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Documentation and Compilation </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="documentation" name="documentation" rows=1 style="width: 500px; height: 100px;"><?echo @$documentation;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=documentation');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=documentation');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Local File Path </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="local_file_path" name="local_file_path" rows=1 style="width: 500px; height: 60px;"><?echo @$local_file_path;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=local_file_path');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=local_file_path');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Feedback </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="feedback" name="feedback" rows=1 style="width: 500px; height: 40px;"><?echo @$feedback;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=feedback');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=feedback');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Retention of Data </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="retentia" name="retentia" rows=1 style="width: 500px; height: 40px;"><?echo @$retentia;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=retentia');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=retentia');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

  </tbody>
</table>
<br><br>







<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Others &nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">How-to Guide </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="how_to_guide" name="how_to_guide" rows=1 style="width: 500px; height: 60px;"><?echo @$how_to_guide;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=how_to_guide');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=how_to_guide');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>
 
 </tbody>
</table>
<br><br>






<table class='tborder' border=0 width="98%"    >
<thead>
<tr height="30" background="../images/blue1.jpg">
<td     align="right" nowrap="nowrap" width="100%" colspan=2 height="20"><font size="3" face=tahoma color="#ffffff"> &nbsp;&nbsp; Time Frame for Ingestion and publication of data&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data Ingest </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="data_ingest_tframe" name="data_ingest_tframe" rows=1 style="width: 500px; height: 40px;"><?echo @$data_ingest_tframe;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=data_ingest_tframe');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=data_ingest_tframe');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> 


&nbsp;&nbsp;
</td>
</tr>
 

<tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Metadata catalogue  </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="metadata_catalog_tframe" name="metadata_catalog_tframe" rows=1 style="width: 500px; height: 40px;"><?echo @$metadata_catalog_tframe;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=metadata_catalog_tframe');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=metadata_catalog_tframe');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?> 

&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
</td>
</tr>



 <tr class="row1"  >
<td width="35%" align=left valign=top ><font size=3 face='arial' color="blue">Data and Metadata Quality assurance after ingestion </font> </td><td colspan=3 width="70%" align=left>&nbsp;
<textarea class=form-field_big  id="data_qa" name="data_qa" rows=1 style="width: 500px; height: 40px;"><?echo @$data_qa;?></textarea>&nbsp;&nbsp; <image src="../images/help_logo.jpg" width=18 height=18 id="help" onClick="javascript: showHelp('helpWindow1.php?keyword=data_qa');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?if ($_SESSION["uacat_".session_id()]=='1') {?>
&nbsp;&nbsp; <image src="../images/edit.png" width=15 height=15 id="help" onClick="javascript: showHelp('helpWindow2.php?keyword=data_qa');" onmouseover="this.style.cursor = 'hand';" onmouseout="this.style.cursor = 'hand';">
<?}?>


&nbsp;&nbsp;
&nbsp;<image src="../images/arrow-green-04.png" width=15 height=15>
 </td>
</tr>

 </tbody>
</table>
<br>

<br></center>
				 

<br>

<?$sec_class->captcha_div();?>


<br><br>
<input type="hidden" name="nonce" value="<?php echo $nonce?>"/>




<br>
<div align=right>
<?if (($user_id=='rkg900') or ($user_id=='jbw900') or ($user_id=='bje900') )  {?>
<input name="btnLogin1" type="submit" id="btnLogin1" value="     Submit Plan    " style="cursor:hand;" class="sbttn3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?} else {?>
<input name="btnLogin2" type="submit" id="btnLogin2" value="     Save    " style="cursor:hand;" class="sbttn3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?}?>

</div>

<input type="hidden" name="title_t" value="<?echo $title_t;?>">
</form>

<br>
Note : All data collections should be accompanied by a collection description file and a data license. These two files should be saved in the home directory under each collection allocation. The templates of collection description file and license file are 
<br><br>
<a href="../php/readme.txt" target='_blank' >readme.txt</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../php/license.txt" target='_blank' >license.txt</a>
<br>
 <div class="printfooter">
 </div>
                </div>

        </div>

<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->
</center>

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>



</body></html>




