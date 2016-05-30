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
		
		
 

 <h2>Disclaimer</h2>
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


<b>Material contained on this site is owned by The Australian National University (ANU) representing National Computational Infrastructure (NCI).
</b>

<br><br>
While the Australian National University has used all reasonable endeavours to ensure the information on this site is as accurate as possible, it gives no warranty or guarantee that the material, information or publication made accessible is accurate, complete, current, or fit for any use whatsoever. No reliance should be made by a user of the material, information or publication accessed via this site. The user should instead seek confirmation with the originating area/department or other body within the ANU before making use of the material, information or publication.
<br><br>
The ANU accepts no liability or responsibility for any loss or damage whatsoever suffered as a result of direct or indirect use or application of any material, publication or information made accessible via its web site.
<br><br>
The ANU provides links to companies/organisations and information external to the University. In providing such links, the ANU does not accept responsibility for, or endorse the content or condition of, any linked site.
<br><br>
The ANU reserves the right to vary the material, information or publication on this web site without notice.
<br><br>


</td>

</tr>

 
</table><br><br><br>
</form>
<br>
<br><br><br><br>
<br><br><br>
<br><br>
<br><br><br>





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
