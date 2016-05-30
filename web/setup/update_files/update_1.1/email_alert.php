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
 var helpWindow = '';
  function showHelp(url) {
   w = screen.availWidth;
   h = screen.availHeight;
    var popW = 800, popH = 550;
var leftPos = (w-popW)/2, topPos = (h-popH)/2;
      helpWindow = window.open(url,'admin window','width=800,height=550,toolbar=no, location=no,directories=no,status=yes,menubar=no,scrollbars=yes,copyhistory=yes,resizable=no,top=' + topPos + ',left=' + leftPos);
  }
</script>


<script>
 function change_prod(str,str1)
{
if (document.getElementById(str).checked) {
var val1='on';}
else {
var val1='off';
}
var url="prod_save.php"
 url=url+"?val1="+val1
 url=url+"&tabid="+str1
// branch for native XMLHttpRequest object
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      req_fifo.abort();
      req_fifo.onreadystatechange = GotshortfallData;
      req_fifo.open("GET", url, true);
      req_fifo.send(null);
    // branch for IE/Windows ActiveX version
    } else if (window.ActiveXObject) {
      req_fifo = new ActiveXObject("Microsoft.XMLHTTP");
      if (req_fifo) {
        req_fifo.abort();
        req_fifo.onreadystatechange = GotshortfallData;
        req_fifo.open("GET", url, true);
        req_fifo.send();
      }
    }
  }

  function GotshortfallData() {
  // only if req_fifo shows "loaded"
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
      return;
    }
   alert(req_fifo.responseText);
    return;
  }
</script>


</head>

 <body   class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>

<?  
$user_id=@$_SESSION["uid_".session_id()] ; ?>

 <? include_once ($inc_path.check_includes_file_exist('get_user_privileges').".php");?>


    <div class="content hentry">
	    		        
	    <div class="entry-content">
	
 <h2>Email Alerts</h2>
	 
<br>
<br>
<br>


<?if ($_SESSION["uacat_".session_id()]=='1') {?>






<?
$res1=@pg_QUERY("select * from email_alert where userid='$user_id' and event='Data Management Plan - Addition'");
$row1=@pg_fetch_array($res1);
$echeck1=$row1['echeck'];
$tabid1=$row1['table_id'];
$res2=@pg_QUERY("select * from email_alert where userid='$user_id' and event='Data Management Plan - Updation'");
$row2=@pg_fetch_array($res2);
$echeck2=$row2['echeck'];
$tabid2=$row2['table_id'];
$res3=@pg_QUERY("select * from email_alert where userid='$user_id' and event='Admin - Server Status Check'");
$row3=@pg_fetch_array($res3);
$echeck3=$row3['echeck'];
$tabid3=$row3['table_id'];
$res4=@pg_QUERY("select * from email_alert where userid='$user_id' and event='Admin - Geonetwork Status Check'");
$row4=@pg_fetch_array($res4);
$echeck4=$row4['echeck'];
$tabid4=$row4['table_id'];
$res5=@pg_QUERY("select * from email_alert where userid='$user_id' and event='Admin - Harvesting Routine Check'");
$row5=@pg_fetch_array($res5);
$echeck5=$row5['echeck'];
$tabid5=$row5['table_id'];

$res6=@pg_QUERY("select * from email_alert where userid='$user_id' and event='DOI - Addition'");
$row6=@pg_fetch_array($res6);
$echeck6=$row6['echeck'];
$tabid6=$row6['table_id'];
$res7=@pg_QUERY("select * from email_alert where userid='$user_id' and event='DOI - Addition(Manual)'");
$row7=@pg_fetch_array($res7);
$echeck7=$row7['echeck'];
$tabid7=$row7['table_id'];


?>

<table class="tborder" border=0 width="70%"  >
<tr height=35 bgcolor="#ececec">

<td width="60%" align=left><font size=2 color=#800000>&nbsp;Event</font></td>
<td width="40%" align=center><font size=2 color=#800000>Selection</font></td>
<tr>


<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;Data Management Plan - Addition</td>
<td width="40%" align=center><font size=2>
<?if ($echeck1=='on') {?>
<input type="checkbox" id="check1" name="check1" onChange="change_prod('check1','<?echo $tabid1;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check1" name="check1" onChange="change_prod('check1','<?echo $tabid1;?>')" ></font>
<?}?>
</td>
</tr>

<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;Data Management Plan - Updation</td>
<td width="40%" align=center><font size=2>
<?if ($echeck2=='on') {?>
<input type="checkbox" id="check2" name="check2" onChange="change_prod('check2','<?echo $tabid2;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check2" name="check2" onChange="change_prod('check2','<?echo $tabid2;?>')" ></font>
<?}?>
</td>
</tr>

<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;Admin -  Server Status Check</td>
<td width="40%" align=center><font size=2>
<?if ($echeck3=='on') {?>
<input type="checkbox" id="check3" name="check3" onChange="change_prod('check3','<?echo $tabid3;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check3" name="check3" onChange="change_prod('check3','<?echo $tabid3;?>')" ></font>
<?}?>
</td>
</tr>

<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;Admin -  Geonetwork Status Check</td>
<td width="40%" align=center><font size=2>
<?if ($echeck4=='on') {?>
<input type="checkbox" id="check4" name="check4" onChange="change_prod('check4','<?echo $tabid4;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check4" name="check4" onChange="change_prod('check4','<?echo $tabid4;?>')" ></font>
<?}?>
</td>
</tr>

<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;Admin -  Harvesting Routine Check</td>
<td width="40%" align=center><font size=2>
<?if ($echeck5=='on') {?>
<input type="checkbox" id="check5" name="check5" onChange="change_prod('check5','<?echo $tabid5;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check5" name="check5" onChange="change_prod('check5','<?echo $tabid5;?>')" ></font>
<?}?>
</td>
</tr>


<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;DOI - Addition</td>
<td width="40%" align=center><font size=2>
<?if ($echeck6=='on') {?>
<input type="checkbox" id="check6" name="check6" onChange="change_prod('check6','<?echo $tabid6;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check6" name="check6" onChange="change_prod('check6','<?echo $tabid6;?>')" ></font>
<?}?>
</td>
</tr>


<tr height=25>
<td width="60%" align=left><font size=2 face=arial>&nbsp;DOI - Addition(Manual)</td>
<td width="40%" align=center><font size=2>
<?if ($echeck7=='on') {?>
<input type="checkbox" id="check7" name="check7" onChange="change_prod('check7','<?echo $tabid7;?>')"  checked="yes"></font>
<?}else{?>
<input type="checkbox" id="check7" name="check7" onChange="change_prod('check7','<?echo $tabid7;?>')" ></font>
<?}?>
</td>
</tr>




</table>
<br>
<font size=2 face=arial color=blue>Click on the checkbox to select or deselect the event.</font>

<br><br><br><br><br><br><br> 
<br><br><br><br>
<br><br>  

<?}?>
 
 <div class="printfooter">
 </div>
		</div>	
		
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('admin_sidebar').".php");?>
</div><!-- end of the sidebar -->
</center>



	 
 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 

</body></html>
