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
 

<script>
var req_fifo; 
 
function check_uuid(str)
{
   var uuid=document.ldapInput.rtitle1.value;
       var url="uuid_find.php"
   url=url+"?uuid="+uuid
   url=url+"&pcode="+str


    // branch for native XMLHttpRequest object
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      req_fifo.abort();
      req_fifo.onreadystatechange = GotReturnuser;
      req_fifo.open("GET", url, true);
      req_fifo.send(null);
    // branch for IE/Windows ActiveX version
    } else if (window.ActiveXObject) {
      req_fifo = new ActiveXObject("Microsoft.XMLHTTP");
      if (req_fifo) {
        req_fifo.abort();
        req_fifo.onreadystatechange = GotReturnuser;
        req_fifo.open("POST", url, true);
        req_fifo.send();
      }
    }
}
     function GotReturnuser() {
    // only if req_fifo shows "loaded"
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
      return;
    }

  var myRegExp = /Error in processing your request/;
var matchPos1 = (req_fifo.responseText).search(myRegExp);
if (matchPos1!=-1) {
 showDialog('Info','<br><br><center>An error report is sent to  Support Team  ......<br><br>Meaasge will be automatically clear in 05 seconds','error',5);
 } 
    document.getElementById("result_uuid").innerHTML="&nbsp;&nbsp;"+req_fifo.responseText+"&nbsp;&nbsp;"

//alert (req_fifo.responseText);
//if (req_fifo.responseText="<font color='red' size=2 face=arial>Sorry!..... UUID/Dataset is not available .") {
//alert('3');
//document.getElementById("doi_lpage").value='';
//alert("1");
//} else {
//alert('2');

//check_value1('<?echo $site;?>');

//}



setTimeout("cleardata1()", 3500);
    return;
  }
 
 function cleardata1(){
  document.getElementById("result_uuid").innerHTML=""
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
function showComment54()  {
 var tE  = document.getElementById("div_comment54");
 var obj = document.getElementById("expandButton54");
 if(tE.style.display!= "block"){
 tE.style.display="block";
 obj.src = "../images/retract.gif";
 } else {
 tE.style.display="none";
 obj.src = "../images/collapse.gif";
 }
 }
</script>


<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
<?include_once ($inc_path.check_includes_file_exist('title').".php");?>


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

<script>
function showComment8()  {

 var tE  = document.getElementById("div_comment8");
 var obj = document.getElementById("expandButton8");


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
function showComment9()  {

 var tE  = document.getElementById("div_comment9");
 var obj = document.getElementById("expandButton9");


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
function showComment10()  {

 var tE  = document.getElementById("div_comment10");
 var obj = document.getElementById("expandButton10");


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
function showComment11()  {

 var tE  = document.getElementById("div_comment11");
 var obj = document.getElementById("expandButton11");


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
function showComment12()  {

 var tE  = document.getElementById("div_comment12");
 var obj = document.getElementById("expandButton12");


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

<?   if (isset($_REQUEST['site'])) {
      $site=(valid_data($_REQUEST['site']));}?>



<script language="javascript" src="../includes/field_check.js"></script>

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
<?
$user_id= $_SESSION["uid_".session_id()];
?>
 

 <h1>DOI Minting &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size=3 face=tahoma  color=#800000>Minting DOI from ANDS Cite My Data Service</font></h1>
<br>

<table border=0 width="100%"><tr><td width="30%" align=left></td> <td wdith="70%" align=right><a href=""></a><a href="doi_minting_xml_test.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Upload XML Metadata</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="doi_minting_test.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Add DOI</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="search_doi.php"><image src="../images/search_icon.png">&nbsp;Search DOI</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../php/update_doi_test.php"><image src="../images/update_icon.png">&nbsp;Update DOI</a>&nbsp;&nbsp;


<?if ($user_id=='jbw900' or $user_id=='rkg900') {
?>|&nbsp;&nbsp;<a href="../php/modify_doi.php"><image src="../images/update_icon.png">&nbsp;Delete DOI</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?}?>

</td></tr></table>





<br>
<form name='selection' action="doi_minting_test.php"  method='GET'>

                                 <font size=2>Select your Project&nbsp;&nbsp; </font>
                                <select name="site" style="width:160px;" onChange="this.form.submit();"  class=form-field-drop>
<?
foreach ($_SESSION["group_id"] as $key => $value ) {
?>
<option value="<?echo $value;?>" <?= ($value ==$site)? 'selected' :''?>  > <?echo $value; ?></option>
<?}?>
                             </select>

                          </form>

</font><br> 

 <form method="POST" name="ldapInput" action="doi_minting_save_test.php" onSubmit="return validate_field()" ><br>
<a href="../php/datacite_doc.pdf" target="_blank">Datacite Schema Doc</a>
<div align=right>
<font face="tahoma" color="#800000" size=2>Note: Fields marked with * are required&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div>
</div>

<?/*?>
<table class='tborder' border=0 width="90%"    >
<tbody>
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=3 face='arial' color="#fff">&nbsp;DOI Minter Detail</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=3 face='arial' color="blue">&nbsp;Title</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<select name="doi_ttype" id="doi_ttype"   class=form-field   size="1" >
<option></option>
<option value="mr"> Mr</option>
<option value="miss"> Miss</option>
<option value="mrs"> Mrs</option>
<option value="ms"> Ms</option>
<option value="dr"> Dr</option>
<option value="professor"> Professor</option>
</select><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
</td>
</tr>


<tr class="row1" height=35  >
<td width="25%" align=left valign=top><font size=3 face='arial' color="blue">&nbsp;Name</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="doi_name" name="doi_name" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" onClick="showComment0();"><img id="expandButton0" border="0" src="../images/collapse.gif"> </a>
</font>
 <div id="div_comment0" style="display: none; width:700px">
<br>
&nbsp;&nbsp;<input type=text class=form-field  id="doi_name1" name="doi_name1" style="width:300px;">
<br><br>
&nbsp;&nbsp;<input type=text class=form-field  id="doi_name2" name="doi_name2" style="width:300px;">
 </div>
</td>
</tr>

</table><br>
<?*/?>


 <table id="input_fields" class='tborder' border=0 width="90%"    >
<tbody>
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%"  align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;DOI Dataset Detail</font> </td>
</td>
</tr>


<tr  class="row1" height=35  >
<td width="100%" align=left valign=middle>


<br><font size=2 face="arial" color="blue">&nbsp;Title Type</font>  &nbsp;&nbsp;&nbsp;&nbsp;
<select name="doi_ttype[]" id="doi_ttype[]"   class=form-field   size="1" >
<option value="Subtitle"> Subtitle</option>
<option value="AlternativeTitle"> Alternative Title</option>
<option value="TranslatedTitle"> Translated Title</option>
</select><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
<br><br>
<font size=2 face='arial' color="blue">&nbsp;Title</font> &nbsp;&nbsp;&nbsp;&nbsp;
 <input type=text class=form-field  id="doi_name[]" name="doi_name[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*&nbsp;
</font><br>
<a href="javascript:void(0)" onClick="showComment0();"><img id="expandButton0" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment0" style="display: none; width:700px">
<br>
<font size=2 face="arial" color="blue">&nbsp;Title Type</font>&nbsp;<select name="doi_ttype[]"    class=form-field   size="1" ><option></option><option value="Subtitle"> Subtitle</option><option value="AlternativeTitle"> Alternative Title</option><option value="TranslatedTitle"> Translated Title</option></select><font size=2 face="arial" color="blue">&nbsp;&nbsp;&nbsp;Title</font> &nbsp;<input type=text class=form-field   id="doi_name[]" name="doi_name[]" style="width:300px;"> 
<br><br>
<font size=2 face="arial" color="blue">&nbsp;Title Type</font>&nbsp;<select name="doi_ttype[]"    class=form-field   size="1" ><option></option><option value="Subtitle"> Subtitle</option><option value="AlternativeTitle"> Alternative Title</option><option value="TranslatedTitle"> Translated Title</option></select><font size=2 face="arial" color="blue">&nbsp;&nbsp;&nbsp;Title</font> &nbsp;<input type=text class=form-field   id="doi_name[]" name="doi_name[]" style="width:300px;">
<br><br></div>

</td></tr>

</table><br>









<script>
function check_value (str) {
var key = ldapInput.rtitle.selectedIndex;
var val = ldapInput.rtitle[key].value;
document.getElementById("doi_lpage").value="http://doi.nci.org.au?server=geonetwork.nci.org.au&uuid="+val;
}
</script>



<script>
function check_value1 (str) {
var val = ldapInput.rtitle1.value;
document.getElementById("doi_lpage").value="http://doi.nci.org.au?server=geonetwork"+str+".nci.org.au&uuid="+val;
}
</script>



<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Data</font> </td>
</td>
</tr>


<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Catalogue </font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<select name="rtitle" id="rtitle"   class=form-field   size="1"  onChange="check_value('<?echo $site;?>')">
<option></option>
<?
$result1=@MYSQL_query("Select file_identifier,datacollection_title from nci_data_management.data_mgmt order by datacollection_title ");
 while ($row1=@MYSQL_fetch_array($result1)){
   ?>
  <option value="<? echo $row1['file_identifier'];?>" > <? echo $row1['datacollection_title'];?></option>
  <?}?>
</select>
</td>
</tr>

<tr class="row1" height=15>
<td width="100%" align=center  colspan=2><font size=2 face='arial' color="blue">OR</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Metadata (file level dataset) &nbsp;UUID </font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="rtitle1" name="rtitle1" style="width:400px;" onChange="check_value1('<?echo $site;?>')">
&nbsp;&nbsp;<a href="javascript:void(0)" onclick="javascript:check_uuid('<?echo $site;?>');"><font size=2 face=tahoma>Check UUID &nbsp;&nbsp;>>> </font></a>
<br>					<br>
<div id="result_uuid">  </div><br>

<input type="hidden" name="pcode" value="<?echo $site;?>">

</td>
</tr>





<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Dataset Landing Page</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="doi_lpage" name="doi_lpage" style="width:450px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
</td>
</tr>

<tr class="row1" height=15>
<td width="100%" align=center  colspan=2><font size=2 face='arial' color="blue">OR</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Dataset Landing Page(Manual)</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="doi_lpage1" name="doi_lpage1" style="width:450px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
<br><br>
<font size=1>&nbsp;
must start with http://doi.nci.org.au?link=ext&server=.........  (..... represents your link)
<br> <br>&nbsp;(example - http://doi.nci.org.au?link=ext&server=geonetwork.nci.org.au&uuid=fxxxx_xxxx_xxxx_xxxx)</td>
</tr>


</table><br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Data Creator/ Author</font> </td>
</td>
</tr>


<tr  class="row1"  height=35  >
<td width="100%" align=left valign=top><font size=2 face='arial' color="blue"><br>&nbsp;Creator Name</font>
<input type=text class=form-field  id="doi_clname" name="doi_cname[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Creator Affiliation</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_aff[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_cni[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_nischeme[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Scheme URI</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_suri[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*



<br>
<a href="javascript:void(0)" onClick="showComment1();"><img id="expandButton1" border="0" src="../images/collapse.gif"> </a></font>
<br><br>

<div id="div_comment1" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue"><br>&nbsp;Creator Name</font>
<input type=text class=form-field  id="doi_clname" name="doi_cname[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Creator Affiliation</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_aff[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_cni[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_nischeme[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Scheme URI</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_suri[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*

<br><br>

<font size=2 face='arial' color="blue"><br>&nbsp;Creator Name</font>
<input type=text class=form-field  id="doi_clname" name="doi_cname[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Creator Affiliation</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_aff[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_cni[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_nischeme[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*
<br>
<font size=2 face='arial' color="blue">&nbsp;Scheme URI</font></font>
<input type=text class=form-field  id="doi_cfname" name="doi_suri[]" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*

<br><br>

</div>
</td>
</tr>




</table><br>












<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Publisher</font> </td>
</td>
</tr>


<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Publisher</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="doi_publisher" name="doi_publisher" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font>
</td>
</tr>


<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Publication Year</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="doi_pyear" name="doi_pyear" style="width:300px;"><font face="tahoma" color="#800000" size=2>&nbsp;*</font><font size=1>&nbsp;&nbsp;(Format : YYYY)</font>
</td>
</tr>

</table>




<br><br>
<a href="javascript:void(0)" onClick="showComment2();"><img id="expandButton2" border="0" src="../images/collapse.gif">&nbsp;<font size=2><u>Optional Metadata</font></u></a>
 <br><br><div id="div_comment2" style="display: none; width:1060px"><br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Subject</font> </td>
</td>
</tr>




<tr class="row1" height=35  >
<td width="100%" align=left valign=top>
<br><font size=2 face='arial' color="blue">&nbsp;Subject</font> 
<input type=text class=form-field  id="doi_subject[]" name="doi_subject[]" style="width:300px;">
<br><br>
<font size=2 face='arial' color="blue">&nbsp;Scheme</font>
<input type=text class=form-field  id="doi_subject_scheme[]" name="doi_subject_scheme[]" style="width:300px;">
<br><br>
<font size=2 face='arial' color="blue">&nbsp;Subject Scheme URI</font> 
<input type=text class=form-field  id="doi_subject_scheme_uri[]" name="doi_subject_scheme_uri[]" style="width:300px;">
<br><br>


<a href="javascript:void(0)" onClick="showComment3();"><img id="expandButton3" border="0" src="../images/collapse.gif"> </a>
</font>
<br>

 <div id="div_comment3" style="display: none; width:800px">
<br>
<font size=2 face='arial' color="blue">&nbsp;Subject</font>
<input type=text class=form-field  id="doi_subject[]" name="doi_subject[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Scheme</font>
<input type=text class=form-field  id="doi_subject_scheme[]" name="doi_subject_scheme[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Subject Scheme URI</font>
<input type=text class=form-field  id="doi_subject_scheme_uri[]" name="doi_subject_scheme_uri[]" style="width:300px;">
<br><br>
<font size=2 face='arial' color="blue">&nbsp;Subject</font>
<input type=text class=form-field  id="doi_subject[]" name="doi_subject[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Scheme</font>
<input type=text class=form-field  id="doi_subject_scheme[]" name="doi_subject_scheme[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Subject Scheme URI</font>
<input type=text class=form-field  id="doi_subject_scheme_uri[]" name="doi_subject_scheme_uri[]" style="width:300px;">

<br><br></div>


</td>
</tr>


</table>


<br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Contributor</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Contributor Name (Last,First)</font>
<input type=text class=form-field  id="contributor_name[]" name="contributor_name[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Contributor Type</font>
<select name="doi_contributor_type[]" id="doi_contributor_type[]"   class=form-field   size="1" >
<option></option>
<option value="ContactPerson"> Contact Person</option>
<option value="DataCollector"> Data Collector</option>
<option value="DataCurator"> Data Curator</option>
<option value="DataManager"> Data Manager</option>
<option value="Distributor"> Distributor</option>
<option value="Editor"> Editor</option>
<option value="Funder"> Funder</option>
<option value="Hostinginstitution"> Hostinginstitution</option>
<option value="Producer"> Producer</option>
<option value="ProjectLeader"> Project Leader</option>
<option value="ProjectManager"> Project Manager</option>
<option value="ProjectMember"> Project Member</option>
<option value="RegistrationAgency"> RegistrationAgency</option>
<option value="RegistrationAuthority"> RegistrationAuthority</option>
<option value="RelatedPerson"> RelatedPerson</option>
<option value="Researcher"> Researcher</option>
<option value="ResearchGroup"> ResearchGroup</option>
<option value="RightsHolder"> RightsHolder</option>
<option value="Sponsor"> Sponsor</option>
<option value="Supervisor"> Supervisor</option>
<option value="WorkPackageLeader"> WorkPackageLeader</option>
<option value="Other"> Other</option>
</select>
<br><br>


<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font>
<input type=text class=form-field  id="name_identifier[]" name="name_identifier[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font>
<select  id="name_scheme[]" name="name_scheme[]"   class=form-field   size="1" >
<option></option>
<option value="ORCID"> ORCID</option>
<option value="ISNI"> ISNI</option>
<option value="FundRef"> FundRef</option>
</select>
<br><br>


<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme URI</font>
<input type=text class=form-field  id="name_identifier_uri[]" name="name_identifier_uri[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment4();"><img id="expandButton4" border="0" src="../images/collapse.gif"> </a></font>
<br><br>

<div id="div_comment4" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Contributor Name (Last,First)</font>
<input type=text class=form-field  id="contributor_name[]" name="contributor_name[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Contributor Type</font>
<select name="doi_contributor_type[]" id="doi_contributor_type[]"   class=form-field   size="1" >
<option></option>
<option value="ContactPerson"> Contact Person</option>
<option value="DataCollector"> Data Collector</option>
<option value="DataCurator"> Data Curator</option>
<option value="DataManager"> Data Manager</option>
<option value="Distributor"> Distributor</option>
<option value="Editor"> Editor</option>
<option value="Funder"> Funder</option>
<option value="Hostinginstitution"> Hostinginstitution</option>
<option value="Producer"> Producer</option>
<option value="ProjectLeader"> Project Leader</option>
<option value="ProjectManager"> Project Manager</option>
<option value="ProjectMember"> Project Member</option>
<option value="RegistrationAgency"> RegistrationAgency</option>
<option value="RegistrationAuthority"> RegistrationAuthority</option>
<option value="RelatedPerson"> RelatedPerson</option>
<option value="Researcher"> Researcher</option>
<option value="ResearchGroup"> ResearchGroup</option>
<option value="RightsHolder"> RightsHolder</option>
<option value="Sponsor"> Sponsor</option>
<option value="Supervisor"> Supervisor</option>
<option value="WorkPackageLeader"> WorkPackageLeader</option>
<option value="Other"> Other</option>
</select>
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font>
<input type=text class=form-field  id="name_identifier[]" name="name_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font>
<select  id="name_scheme[]" name="name_scheme[]"   class=form-field   size="1" >
<option></option>
<option value="ORCID"> ORCID</option>
<option value="ISNI"> ISNI</option>
<option value="FundRef"> FundRef</option>
</select>
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme URI</font>
<input type=text class=form-field  id="name_identifier_uri[]" name="name_identifier_uri[]" style="width:300px;">

<br><br>
<font size=2 face='arial' color="blue">&nbsp;Contributor Name (Last,First)</font>
<input type=text class=form-field  id="contributor_name[]" name="contributor_name[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Contributor Type</font>
<select name="doi_contributor_type[]" id="doi_contributor_type[]"   class=form-field   size="1" >
<option></option>
<option value="ContactPerson"> Contact Person</option>
<option value="DataCollector"> Data Collector</option>
<option value="DataCurator"> Data Curator</option>
<option value="DataManager"> Data Manager</option>
<option value="Distributor"> Distributor</option>
<option value="Editor"> Editor</option>
<option value="Funder"> Funder</option>
<option value="Hostinginstitution"> Hostinginstitution</option>
<option value="Producer"> Producer</option>
<option value="ProjectLeader"> Project Leader</option>
<option value="ProjectManager"> Project Manager</option>
<option value="ProjectMember"> Project Member</option>
<option value="RegistrationAgency"> RegistrationAgency</option>
<option value="RegistrationAuthority"> RegistrationAuthority</option>
<option value="RelatedPerson"> RelatedPerson</option>
<option value="Researcher"> Researcher</option>
<option value="ResearchGroup"> ResearchGroup</option>
<option value="RightsHolder"> RightsHolder</option>
<option value="Sponsor"> Sponsor</option>
<option value="Supervisor"> Supervisor</option>
<option value="WorkPackageLeader"> WorkPackageLeader</option>
<option value="Other"> Other</option>
</select>
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier</font>
<input type=text class=form-field  id="name_identifier[]" name="name_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme</font>
<select  id="name_scheme[]" name="name_scheme[]"   class=form-field   size="1" >
<option></option>
<option value="ORCID"> ORCID</option>
<option value="ISNI"> ISNI</option>
<option value="FundRef"> FundRef</option>
</select>
<br>
<font size=2 face='arial' color="blue">&nbsp;Name Identifier Scheme URI</font>
<input type=text class=form-field  id="name_identifier_uri[]" name="name_identifier_uri[]" style="width:300px;">




</br><br></div>
</td></tr>

</table>









<br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Date</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Date</font>
<input type=text class=form-field  id="dt_date[]" name="dt_date[]" style="width:300px;"><font size=1>&nbsp;&nbsp;(Format : YYYY-mm-dd)</font>
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Date Type</font>
<select  id="dt_datetype[]" name="dt_datetype[]"   class=form-field   size="1" >
<option></option>
<option value="Accepted"> Accepted</option>
<option value="Available"> Available</option>
<option value="Copyrighted"> Copyrighted</option>
<option value="Collected"> Collected</option>
<option value="Created"> Created</option>
<option value="Issued"> Issued</option>
<option value="Submitted"> Submitted</option>
<option value="Updated"> Updated</option>
<option value="Valid"> Valid</option>
</select>

<br>
<a href="javascript:void(0)" onClick="showComment5();"><img id="expandButton5" border="0" src="../images/collapse.gif"> </a>
<br><br>


<div id="div_comment5" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Date</font>
<input type=text class=form-field  id="dt_date[]" name="dt_date[]" style="width:300px;"><font size=1>&nbsp;&nbsp;(Format : YYYY-mm-dd)</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Date Type</font>
<select  id="dt_datetype[]" name="dt_datetype[]"   class=form-field   size="1" >
<option></option>
<option value="Accepted"> Accepted</option>
<option value="Available"> Available</option>
<option value="Copyrighted"> Copyrighted</option>
<option value="Collected"> Collected</option>
<option value="Created"> Created</option>
<option value="Issued"> Issued</option>
<option value="Submitted"> Submitted</option>
<option value="Updated"> Updated</option>
<option value="Valid"> Valid</option>
</select>
<br>

<font size=2 face='arial' color="blue">&nbsp;Date</font>
<input type=text class=form-field  id="dt_date[]" name="dt_date[]" style="width:300px;"><font size=1>&nbsp;&nbsp;(Format : YYYY-mm-dd)</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Date Type</font>
<select  id="dt_datetype[]" name="dt_datetype[]"   class=form-field   size="1" >
<option></option>
<option value="Accepted"> Accepted</option>
<option value="Available"> Available</option>
<option value="Copyrighted"> Copyrighted</option>
<option value="Collected"> Collected</option>
<option value="Created"> Created</option>
<option value="Issued"> Issued</option>
<option value="Submitted"> Submitted</option>
<option value="Updated"> Updated</option>
<option value="Valid"> Valid</option>
</select>

<br><br></div>

</td>
</tr>

</table>











<br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Language</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="dt_language" name="dt_language" style="width:300px;"><font size=1>&nbsp;&nbsp;(Recommended 'en' for english)</font>
</td>
</tr>


<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Resource Type General</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<select  id="rt_general" name="rt_general"   class=form-field   size="1" >
<option></option>
<option value="Audiovisual"> Audiovisual</option>
<option value="Collection"> Collection</option>
<option value="Dataset"> Dataset</option>
<option value="Event"> Event</option>
<option value="Image"> Image</option>
<option value="InteractiveResource"> InteractiveResource</option>
<option value="Model"> Model</option>
<option value="PhysicalObject"> PhysicalObject</option>
<option value="Service"> Service</option>
<option value="Software"> Software</option>
<option value="Sound"> Sound</option>
<option value="Text"> Text</option>
<option value="Workflow"> Workflow</option>
<option value="Other"> Other</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'Image' )</font>
</td>
</tr>

<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Resource Type</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="r_type" name="r_type" style="width:300px;">
</td>
</tr>

</table>

<br>



<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Alternate Identifier</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Alternate Identifier</font> 
<input type=text class=form-field  id="a_identifier[]" name="a_identifier[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Alternate Identifier Type</font>
<input type=text class=form-field  id="a_identifiertype[]" name="a_identifiertype[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment6();"><img id="expandButton6" border="0" src="../images/collapse.gif"> </a>
<br><br>


<div id="div_comment6" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Alternate Identifier</font>
<input type=text class=form-field  id="a_identifier[]" name="a_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Alternate Identifier Type</font>
<input type=text class=form-field  id="a_identifiertype[]" name="a_identifiertype[]" style="width:300px;">

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Alternate Identifier</font>
<input type=text class=form-field  id="a_identifier[]" name="a_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Alternate Identifier Type</font>
<input type=text class=form-field  id="a_identifiertype[]" name="a_identifiertype[]" style="width:300px;">

<br><br></div>

</td>
</tr>

</table>

<br>




<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Related Identifier</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Related Identifier</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Related Identifier Type</font>
<select  id="r_identifiertype[]" name="r_identifiertype[]"   class=form-field   size="1" >
<option></option>
<option value="ARK"> ARK</option>
<option value="arXiv"> arXiv</option>
<option value="bibcode"> bibcode</option>
<option value="DOI"> DOI</option>
<option value="EAN13"> EAN13</option>
<option value="EISSN"> EISSN</option>
<option value="Handle"> Handle</option>
<option value="ISBN"> ISBN</option>
<option value="ISSN"> ISSN</option>
<option value="ISTC"> ISTC</option>
<option value="LISSN"> LISSN</option>
<option value="LSID"> LSID</option>
<option value="PMID"> PMID</option>
<option value="PURL"> PURL</option>
<option value="UPC"> UPC</option>
<option value="URL"> URL</option>
<option value="URN"> URN</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'DOI')</font>
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Relation Type</font>
<select  id="relation_type[]" name="relation_type[]"   class=form-field   size="1" >
<option></option>
<option value="isCitedBy"> isCitedBy</option>
<option value="Cites"> Cites</option>
<option value="IsSupplementTo"> IsSupplementTo</option>
<option value="IsSupplementedBy"> IsSupplementedBy</option>
<option value="IsContinuedBy"> IsContinuedBy</option>
<option value="Continues"> Continues</option>
<option value="HasMetadata"> HasMetadata</option>
<option value="IsMetadataFor"> IsMetadataFor</option>
<option value="IsNewVersionOf"> IsNewVersionOf</option>
<option value="IsPreviousVersionOf"> IsPreviousVersionOf</option>
<option value="IsPartOf"> IsPartOf</option>
<option value="HasPart"> HasPart</option>
<option value="IsReferencedBy"> IsReferencedBy</option>
<option value="References"> References</option>
<option value="IsDocumentedBy"> IsDocumentedBy</option>
<option value="Documents"> Documents</option>
<option value="IsCompiledBy"> IsCompiledBy</option>
<option value="Complies"> Complies</option>
<option value="IsVariantFormOf"> IsVariantFormOf</option>
<option value="IsOriginalFormOf"> IsOriginalFormOf</option>
<option value="IsIdenticalTo"> IsIdenticalTo</option>
<option value="IsReviewedBy"> IsReviewedBy</option>
<option value="Reviews"> Reviews</option>
<option value="IsDerivedFrom"> IsDerivedForm</option>
<option value="IsSourceOf"> IsSourceOf</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'IsPreviousVersionOf')</font>
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme</font>
<input type=text class=form-field  id="r_identifier_scheme[]" name="r_identifier_scheme[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme URI</font>
<input type=text class=form-field  id="r_identifier_suri[]" name="r_identifier_suri[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment7();"><img id="expandButton7" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment7" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Related Identifier</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Type</font>
<select  id="r_identifiertype[]" name="r_identifiertype[]"   class=form-field   size="1" >
<option></option>
<option value="ARK"> ARK</option>
<option value="arXiv"> arXiv</option>
<option value="bibcode"> bibcode</option>
<option value="DOI"> DOI</option>
<option value="EAN13"> EAN13</option>
<option value="EISSN"> EISSN</option>
<option value="Handle"> Handle</option>
<option value="ISBN"> ISBN</option>
<option value="ISSN"> ISSN</option>
<option value="ISTC"> ISTC</option>
<option value="LISSN"> LISSN</option>
<option value="LSID"> LSID</option>
<option value="PMID"> PMID</option>
<option value="PURL"> PURL</option>
<option value="UPC"> UPC</option>
<option value="URL"> URL</option>
<option value="URN"> URN</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'DOI')</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Relation Type</font>
<select  id="relation_type[]" name="relation_type[]"   class=form-field   size="1" >
<option></option>
<option value="isCitedBy"> isCitedBy</option>
<option value="Cites"> Cites</option>
<option value="IsSupplementTo"> IsSupplementTo</option>
<option value="IsSupplementedBy"> IsSupplementedBy</option>
<option value="IsContinuedBy"> IsContinuedBy</option>
<option value="Continues"> Continues</option>
<option value="HasMetadata"> HasMetadata</option>
<option value="IsMetadataFor"> IsMetadataFor</option>
<option value="IsNewVersionOf"> IsNewVersionOf</option>
<option value="IsPreviousVersionOf"> IsPreviousVersionOf</option>
<option value="IsPartOf"> IsPartOf</option>
<option value="HasPart"> HasPart</option>
<option value="IsReferencedBy"> IsReferencedBy</option>
<option value="References"> References</option>
<option value="IsDocumentedBy"> IsDocumentedBy</option>
<option value="Documents"> Documents</option>
<option value="IsCompiledBy"> IsCompiledBy</option>
<option value="Complies"> Complies</option>
<option value="IsVariantFormOf"> IsVariantFormOf</option>
<option value="IsOriginalFormOf"> IsOriginalFormOf</option>
<option value="IsIdenticalTo"> IsIdenticalTo</option>
<option value="IsReviewedBy"> IsReviewedBy</option>
<option value="Reviews"> Reviews</option>
<option value="IsDerivedFrom"> IsDerivedForm</option>
<option value="IsSourceOf"> IsSourceOf</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'IsPreviousVersionOf')</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier_scheme[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme URI</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier_suri[]" style="width:300px;">

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Related Identifier</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Type</font>
<select  id="r_identifiertype[]" name="r_identifiertype[]"   class=form-field   size="1" >
<option></option>
<option value="ARK"> ARK</option>
<option value="arXiv"> arXiv</option>
<option value="bibcode"> bibcode</option>
<option value="DOI"> DOI</option>
<option value="EAN13"> EAN13</option>
<option value="EISSN"> EISSN</option>
<option value="Handle"> Handle</option>
<option value="ISBN"> ISBN</option>
<option value="ISSN"> ISSN</option>
<option value="ISTC"> ISTC</option>
<option value="LISSN"> LISSN</option>
<option value="LSID"> LSID</option>
<option value="PMID"> PMID</option>
<option value="PURL"> PURL</option>
<option value="UPC"> UPC</option>
<option value="URL"> URL</option>
<option value="URN"> URN</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'DOI')</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Relation Type</font>
<select  id="relation_type[]" name="relation_type[]"   class=form-field   size="1" >
<option></option>
<option value="isCitedBy"> isCitedBy</option>
<option value="Cites"> Cites</option>
<option value="IsSupplementTo"> IsSupplementTo</option>
<option value="IsSupplementedBy"> IsSupplementedBy</option>
<option value="IsContinuedBy"> IsContinuedBy</option>
<option value="Continues"> Continues</option>
<option value="HasMetadata"> HasMetadata</option>
<option value="IsMetadataFor"> IsMetadataFor</option>
<option value="IsNewVersionOf"> IsNewVersionOf</option>
<option value="IsPreviousVersionOf"> IsPreviousVersionOf</option>
<option value="IsPartOf"> IsPartOf</option>
<option value="HasPart"> HasPart</option>
<option value="IsReferencedBy"> IsReferencedBy</option>
<option value="References"> References</option>
<option value="IsDocumentedBy"> IsDocumentedBy</option>
<option value="Documents"> Documents</option>
<option value="IsCompiledBy"> IsCompiledBy</option>
<option value="Complies"> Complies</option>
<option value="IsVariantFormOf"> IsVariantFormOf</option>
<option value="IsOriginalFormOf"> IsOriginalFormOf</option>
<option value="IsIdenticalTo"> IsIdenticalTo</option>
<option value="IsReviewedBy"> IsReviewedBy</option>
<option value="Reviews"> Reviews</option>
<option value="IsDerivedFrom"> IsDerivedForm</option>
<option value="IsSourceOf"> IsSourceOf</option>
</select><font size=1>&nbsp;&nbsp;(Recommended 'IsPreviousVersionOf')</font>
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier_scheme[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Related Identifier Scheme URI</font>
<input type=text class=form-field  id="r_identifier[]" name="r_identifier_suri[]" style="width:300px;">



<br><br></div>

</td></tr>

</table>
<br>




<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Sizes</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Size</font>
<input type=text class=form-field  id="fd_sizei[]" name="fd_size[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment8();"><img id="expandButton8" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment8" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Size</font>
<input type=text class=form-field  id="fd_sizei[]" name="fd_size[]" style="width:300px;">
<br><br>
<font size=2 face='arial' color="blue">&nbsp;Size</font>
<input type=text class=form-field  id="fd_sizei[]" name="fd_size[]" style="width:300px;">

<br><br></div>
</td>
</tr>
</table>
<br>





<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Format</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle><br>
<font size=2  face='arial' color="blue">&nbsp;Format</font>
<input type=text class=form-field  id="fd_format[]" name="fd_format[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment9();"><img id="expandButton9" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment9" style="display: none; width:700px">
<br>

<font size=2  face='arial' color="blue">&nbsp;Format</font>
<input type=text class=form-field  id="fd_format[]" name="fd_format[]" style="width:300px;">

<br><br>

<font size=2  face='arial' color="blue">&nbsp;Format</font>
<input type=text class=form-field  id="fd_format[]" name="fd_format[]" style="width:300px;">

<br><br></div>
</td>
</tr>

</table>
<br>






<table class='tborder' border=0 width="90%"    >
<tr class="row1" height=35  >
<td width="25%" align=left valign=middle><font size=2 face='arial' color="blue">&nbsp;Version</font> </td>
<td colspan=3 width="75%" align=left valign=middle>&nbsp;
<input type=text class=form-field  id="fd_version" name="fd_version" style="width:300px;">
</td>
</tr>
</table>

<br>

<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Rights List</font> </td>
</td>
</tr>
<tr class="row1" height=35  >
<td width="25%" align=left valign=middle>
<br>
<font size=2 face='arial' color="blue">&nbsp;Rights</font>
<input type=text class=form-field  id="fd_rights[]" name="fd_rights[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Rights URI</font> 
<input type=text class=form-field  id="fd_rights_uri[]" name="fd_rights_uri[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment10();"><img id="expandButton10" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment10" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Rights</font>
<input type=text class=form-field  id="fd_rights[]" name="fd_rights[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Rights URI</font>
<input type=text class=form-field  id="fd_rights_uri[]" name="fd_rights_uri[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Rights</font>
<input type=text class=form-field  id="fd_rights[]" name="fd_rights[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Rights URI</font>
<input type=text class=form-field  id="fd_rights_uri[]" name="fd_rights_uri[]" style="width:300px;">


<br><br></div>

</td>
</tr>
</table>
<br>







<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Description</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;Description</font>
<input type=text class=form-field  id="fd_description[]" name="fd_description[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;Description Type</font>
<select id="descp_type[]" name="descp_type[]"   class=form-field   size="1" >
<option></option>
<option value="Abstract"> Abstract</option>
<option value="Methods"> Methods</option>
<option value="Seriesinformation"> Seriesinformation</option>
<option value="TableOfContents"> TableOfContents</option>
<option value="Other"> Other</option>
</select>


<br>
<a href="javascript:void(0)" onClick="showComment11();"><img id="expandButton11" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment11" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;Description</font>
<input type=text class=form-field  id="fd_description[]" name="fd_description[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Description Type</font>
<select id="descp_type[]" name="descp_type[]"   class=form-field   size="1" >
<option></option>
<option value="Abstract"> Abstract</option>
<option value="Methods"> Methods</option>
<option value="Seriesinformation"> Seriesinformation</option>
<option value="TableOfContents"> TableOfContents</option>
<option value="Other"> Other</option>
</select>

<br><br>

<font size=2 face='arial' color="blue">&nbsp;Description</font>
<input type=text class=form-field  id="fd_description[]" name="fd_description[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;Description Type</font>
<select id="descp_type[]" name="descp_type[]"   class=form-field   size="1" >
<option></option>
<option value="Abstract"> Abstract</option>
<option value="Methods"> Methods</option>
<option value="Seriesinformation"> Seriesinformation</option>
<option value="TableOfContents"> TableOfContents</option>
<option value="Other"> Other</option>
</select>

<br><br></div>
</td>
</tr>


</table>

<br>



<table class='tborder' border=0 width="90%"    >
<tr class="row1" background="../images/blue1.jpg" height=15  >
<td width="100%" colspan=2 align=left valign=middle><font size=2 face='arial' color="#fff">&nbsp;Geo Location</font> </td>
</td>
</tr>

<tr class="row1" height=35  >
<td width="100%" align=left valign=middle>
<br><font size=2 face='arial' color="blue">&nbsp;geoLocation Point</font>
<input type=text class=form-field  id="geo_point[]" name="geo_point[]" style="width:300px;">
<br><br>

 <font size=2 face='arial' color="blue">&nbsp;geoLocation Box</font>
<input type=text class=form-field  id="geo_box[]" name="geo_box[]" style="width:300px;">
<br><br>

<font size=2 face='arial' color="blue">&nbsp;geoLocation Place</font>
<input type=text class=form-field  id="geo_place[]" name="geo_place[]" style="width:300px;">

<br>
<a href="javascript:void(0)" onClick="showComment12();"><img id="expandButton12" border="0" src="../images/collapse.gif"> </a>
<br><br>

</font>
 <div id="div_comment12" style="display: none; width:700px">
<br>

<font size=2 face='arial' color="blue">&nbsp;geoLocation Point</font>
<input type=text class=form-field  id="geo_point[]" name="geo_point[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;geoLocation Box</font>
<input type=text class=form-field  id="geo_box[]" name="geo_box[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;geoLocation Place</font>
<input type=text class=form-field  id="geo_place[]" name="geo_place[]" style="width:300px;">

<br><br>

<font size=2 face='arial' color="blue">&nbsp;geoLocation Point</font>
<input type=text class=form-field  id="geo_point[]" name="geo_point[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;geoLocation Box</font>
<input type=text class=form-field  id="geo_box[]" name="geo_box[]" style="width:300px;">
<br>
<font size=2 face='arial' color="blue">&nbsp;geoLocation Place</font>
<input type=text class=form-field  id="geo_place[]" name="geo_place[]" style="width:300px;">


<br><br></div>
</td>
</tr>


</table>













</div>




<br>

<?$sec_class->captcha_div();?>

<br><br>
<input type="hidden" name="nonce" value="<?php echo $nonce?>"/>






<br>
<div align=right>
<!--<input name="btnLogin" type="submit" id="btnLogin"  value="     Submit    " style="cursor:hand;" class="sbttn3" >-->
<input name="btnLogin" type="submit" id="btnLogin" value="     Submit    " style="cursor:hand;" class="sbttn3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>







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
