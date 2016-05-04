<?include_once("autoload.php");?> 
<?$site_class->init();?>

  <?//include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>


<table border=0 width="100%">
<tr>
<td width="100%" valign=top>
		 
<form method="POST" name="ldapInput" id="ldapInput" action="<?='auth_user.php'?>"><br>
   <div id="login-box">
<H2>User Login</H2>
<br />
<?php
                                        if (isset($msg)) {
                                                echo "<font color='red' size=3>".($msg)."</font>"; 
                                        }  
                                  ?>
            <?//echo $mt;?>                      
<div id="login-box-name" style="margin-top:20px">User ID:</div><div id="login-box-field" style="margin-top:20px;"><input name="txtUid" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div> 

<div id="login-box-name">Password:</div><div id="login-box-field"><input name="txtUidPass" type="password" class="form-login" title="Password" value="" size="20" maxlength="2048" /></div>
<br />
 <br />
<br /><br /><br /><br /><br /><br /><br /><br /> 
 <input type="image"  alt="Submit" img src="../images/login-btn.png" width="103" height="42" style="margin-left:90px;" /> 
 <br><br><br>
Use your username and password from your  account
</div>
</form>

</td>


 </tr></table>

</form>
 <br><br>
	 
	  
 
  </body></html>
