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
if (   ($_SESSION["uacat_".session_id()]=='1')  ) {
?>
<table class=tborder  width=80%" align=right cellspacing=01 cellpadding=03>
<tr bgcolor=#ededed>
<td width="13%" align=center><A   href="../php/logs.php" title="Logs" style="text-decoration: none"><image src="../images/logicon.png" width="15" height="15">&nbsp;<font size=2 face=arial>Logs</a></td>
<td width="13%" align=center><A   href="../php/history.php" title="History" style="text-decoration: none"><image src="../images/history_icon.png" width="15" height="15">&nbsp;<font size=2 face=arial>History Data</a></td>
<td width="18%" align=center><A   href="../php/project_mapping.php" title="User Mapping" style="text-decoration: none"><image src="../images/projecticon.png" width=15 height=15>&nbsp;<font size=2 face=arial>User Mapping</a></td>
<td width="14%" align=center><A   href="email_alert.php" title="Email Alert" style="text-decoration: none"><image src="../images/mail-icon.png"  width=15 height=15>&nbsp;<font size=2 face=arial>Email Alert</a></td>
<!--<td width="16%" align=center><A   href="db_stats.php" title="Database Stats" style="text-decoration: none"><image src="../images/servericon.png"  width=15 height=15>&nbsp;<font size=2 face=arial>Database Stats</a></td>
<td width="13%" align=center><A   href="server_stats.php" title="Server Stats" style="text-decoration: none"><image src="../images/server_icon.png"  width=15 height=15>&nbsp;<font size=2 face=arial>Server Stats</a></td>
--><td width="13%" align=center><A   href="reports.php" title="Reports" style="text-decoration: none"><image src="../images/reportsicon.png"  width=15 height=15>&nbsp;<font size=2 face=arial>Reports</a></td>
</tr>
<!--<tr height=30>
<td width="16%" align=center><A   href="https://datamgt.nci.org.au/phpMyAdmin/" target="_blank" title="phpMyAdmin" style="text-decoration: none"><image src="../images/pma_logo.png" ></a></td>
<td width="16%" align=center><A   href="https://datamgt.nci.org.au/phpPgAdmin/" target="_blank"  title="phpPgAdmin" style="text-decoration: none"><image src="../images/pga_logo.jpg" ></a></td>
<tr>
-->
</table>
<? } elseif (($_SESSION["uacat_".session_id()]=='2')  or ($_SESSION["uacat_".session_id()]=='3')) {
 ?>
<table class=tborder width="40%" align=center cellspacing=0 cellpadding=03>
<tr bgcolor=#ededed>
<td width="28%" align=center><A   href="../php/project_mapping.php" title="Group/Project/User Mapping" style="text-decoration: none"><image src="../images/projecticon.png" width=15 height=15>&nbsp;<font size=2 face=arial>Group/Project/User Mapping</a></td>
<!--
<td width="18%" align=center><A   href="reports.php" title="Reports" style="text-decoration: none"><image src="../images/reportsicon.png"  width=20 height=20>&nbsp;<font size=2>Reports</a></td>-->
</tr>
</table>
<?}?>
