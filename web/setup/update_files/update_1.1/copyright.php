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


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

 <h2>Copyright</h2>
<br>
<br>
<?
$user_id= $_SESSION["uid_".session_id()];
?>
<table class=tborder style="background-color:#ececec;"  border=0 width="85%"    >

<tr>

<td width="100%">
<font size=1>
<br>
<b>National Computational Infrastructure 2009
</b>
<br><br>
Copyright of material contained on this site is owned by The Australian National University (ANU) representing National Computational Infrastructure (NCI).
<br><br>
You may download, display, distribute, print and reproduce any material at this website, in unaltered form only, for your personal use, educational use, or non-commercial use within your organisation, provided the copyright to such material is attributed to the National Computational Infrastructure.
<br><br>
Except as permitted above you must not copy, adapt, publish distribute or commercialise any material contained on this site without NCI?s permission.
<br><br>
Requests and inquiries for authorisation concerning reproduction and rights of any material should be directed to nci@nci.org.au
<br><br>
OR<br>
National Computational Infrastructure<br>
CSIT Building 108<br>
North Road<br>
The Australian National University<br>
Canberra ACT 0200<br>
<br><br>
For further information, please refer to the Copyright Act 1968 (Commonwealth).
<br><br>
Please note that the copyright in the materials appearing at Internet sites which are liked from this site, rest with the author of those materials, or the author?s licensee (subject to the operation of the Copyrights Act 1968). National Computational Infrastructure recommends that you refer to the copyright statements on those sites before making use of the materials.
<br><br>

</td>

</tr>

 
</table><br><br><br>
</form>
<br>


<br><br>






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
