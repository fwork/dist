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
       var uuid=document.f11.rtitle1.value;
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

<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>

 <body class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

<h1>DOI Minting &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size=3 face=tahoma  color=#800000>Minting DOI from ANDS Cite My Data Service</font></h1>
<br>

<table border=0 width="100%"><tr><td width="30%" align=left></td> <td wdith="70%" align=right><a href=""></a><a href="doi_minting_xml_test.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Upload XML Metadata</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="doi_minting_test.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Add DOI</a>&nbsp;&nbsp;
</td></tr></table>


<?
$user_id= $_SESSION["uid_".session_id()];
?>




<?
if (isset($_POST['submit'])){              
	
$site=$_POST['site'];
$doi_lpage=$_POST['doi_lpage'];
	
$sec_class->captcha_check();

    // connect to the database
    $maxfilesize=150000000;
if ($_FILES['userfile']['size'] > $maxfilesize) {
  $error = "file is too large";
       echo"<center><br><br> Your Image file exceeded the limit of 50MB ..........</font> <br><br><font size=3 face=arial>Try Again..</font><br></center><br><br>";
} else {



$path2=$upload_path;

  $filename=$_FILES['userfile']['name'];
  $file_url=$path2.$filename;

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
  move_uploaded_file($_FILES['userfile']['tmp_name'], $path2.$filename); }
   echo"<font face=verdana color=#800000 size=3><br><br><img src='../images/gtick.jpg' width=30 height=30>&nbsp;&nbsp;Input Data File successfully uploaded ..........</font><br><br> </center> ";

echo "<form name='f21' method='post' action='doi_minting_xml_action_test.php' >  ";   
echo "<input type='hidden' name='filename' value=$filename>";
echo "<INPUT TYPE='hidden' name='site' value='".$site."'>";
echo "<input  type='hidden' value='".$doi_lpage."' name='doi_lpage'><br>";
echo " <table    border=0 width='80%'>";
echo "<tr height=50><td width='100%' colspan=3 align=left><input type='submit' value='Mint DOI'></td></tr></table>"; 
 echo "</form>";
?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>

<?
}



} else {
?>



<script>
function check_value (str) {
var key = f11.rtitle.selectedIndex;
var val = f11.rtitle[key].value;
document.getElementById("doi_lpage").value="http://doi.nci.org.au?server=geonetwork.nci.org.au&uuid="+val;
}
</script>



<script>
function check_value1 (str) {
var val = f11.rtitle1.value;
document.getElementById("doi_lpage").value="http://doi.nci.org.au?server=geonetwork"+str+".nci.org.au&uuid="+val;
}
</script>




</center>
  <a href="../images/simple_template.png" target="_blank">Sample DOI XML Template</a><br>
  <a href="../images/optional_template.png" target="_blank">Sample DOI XML Template(with optional fields)</a><br>
 
<br>

<?   if (isset($_REQUEST['site'])) {
      $site=valid_data($_REQUEST['site']);}?>

<br>
<form name='selection' action="doi_minting_xml_test.php"  method='GET'>

                                 <font size=2>Select your Project&nbsp;&nbsp; </font>
                                <select name="site" style="width:160px;" onChange="this.form.submit();"  class=form-field-drop>
<?
foreach ($_SESSION["group_id"] as $key => $value ) {
?>
<option value="<?echo $value;?>" <?= ($value ==$site)? 'selected' :''?>  > <?echo $value; ?></option>
<?}?>
                             </select>

                          </form>
<br>
<form name="f11"   method="post" action="../php/doi_minting_xml_test.php" enctype="multipart/form-data" >

<table class='tborder' border=0 width="90%"    >

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
<br>                                    <br>
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
</table><br>


This form allows you to upload an xml file to the server.  <br>
<br><br>
 <font face='arial' size='2' color="blue">Select Data File to upload : &nbsp;&nbsp;&nbsp;&nbsp;<input class=sbttn3 type="file" name="userfile" maxlength="80" size="35">&nbsp;&nbsp;&nbsp;&nbsp;<br>
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="84000000">
<INPUT TYPE="hidden" name="site" value="<?echo $site;?>">
<br>

<?$sec_class->captcha_div();?>


<br><br>
 <br><input type="hidden" name="nonce" value="<?php echo $nonce?>"/>

<input class=sbttn3 type="submit" name="submit" value=" UPLOAD ">
</form> <br><br>
  <?
}
?>





















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
