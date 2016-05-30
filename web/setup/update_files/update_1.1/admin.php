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
 
 
</head>

 <body   class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
	    		        
        <div class="entry-content">
<? /*include ("../php/admin_top_bar.php");*/?>
		
 <h2>Admin</h2>
<br>



	 
<center>
<table border=0  width="99%" align=center cellspacing=0 cellpadding=0>
<tr>
<td width="80%" valign=top>

Geonetwork Nodes<br>
<table class='tborder' border=1 width="98%">
<tr class="row1">
<td width="20%" align=center><font color=#800000>Host</font></td>
<td width="14%" align=center><font color=#800000>Database Size</font></td>
<td width="14%" align=center><font color=#800000>Connections</font></td>
<td width="26%" align=center><font color=#800000>Shared Filesystem Storage</font></td>
</tr>
<tr class="row1">
<td width="20%" align=center><font color=#800000></font></td>
<td width="14%" align=center><font color=blue></font>GB</td>
<td width="14%" align=center><font color=#800000></font></td>
<td width="26%" align=center><font color=blue>Total&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Used&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Avail&nbsp; </font></td>
</tr>

<tr height=20>
<td colspan=4></td></tr>

<?$result2 = @pg_query("select * from system_status where host_name='datamgt.nci.org.au' order by fetch_time desc limit 1");
$row2 = @pg_fetch_array($result2);
$rft=$row2['rfs_space_total'];
$rfu=$row2['rfs_space_used'];
$rfa=$row2['rfs_space_available'];
?><tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=datamgt.nci.org.au"><u>datamgt.nci.org.au</a></u></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="26%" align=center><font size=1 color=#000000><?echo $rft;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfu;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfa;?></font></td>
</tr>
<?$result2 = @pg_query("select * from system_status where host_name='datamgtdev.nci.org.au' order by fetch_time desc limit 1");
$row2 = @pg_fetch_array($result2);
$rft=$row2['rfs_space_total'];
$rfu=$row2['rfs_space_used'];
$rfa=$row2['rfs_space_available'];
?><tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=datamgtdev.nci.org.au"><u>datamgtdev.nci.org.au</a></u></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="26%" align=center><font size=1 color=#000000><?echo $rft;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfu;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfa;?></font></td>
</tr>
<?$result2 = @pg_query("select * from system_status where host_name='doi.nci.org.au' order by fetch_time desc limit 1");
$row2 = @pg_fetch_array($result2);
$rft=$row2['rfs_space_total'];
$rfu=$row2['rfs_space_used'];
$rfa=$row2['rfs_space_available'];
?><tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=doi.nci.org.au"><u>doi.nci.org.au</a></u></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="26%" align=center><font size=1 color=#000000><?echo $rft;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfu;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfa;?></font></td>
</tr>
<?$result2 = @pg_query("select * from system_status where host_name='genome-catalogue.nci.org.au' order by fetch_time desc limit 1");
$row2 = @pg_fetch_array($result2);
$rft=$row2['rfs_space_total'];
$rfu=$row2['rfs_space_used'];
$rfa=$row2['rfs_space_available'];
?><tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=genome-catalogue.nci.org.au"><u>genome-catalogue.nci.org.au</a></u></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="14%" align=center><font size=1 color=#000000></font></td>
<td width="26%" align=center><font size=1 color=#000000><?echo $rft;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfu;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?echo $rfa;?></font></td>
</tr>



<?
$qry = "select * from server where host_name!='geonetwork'";
$result = pg_query($qry);
while ($row = @pg_fetch_array($result)) {
$hname=$row['host_name'];

$result1 = @pg_query("select * from db_stats where host_name='$hname' order by fetch_time desc limit 1");
$row1 = @pg_fetch_array($result1);
$dbconn=$row1['db_connections'];
$dbsize=round($row1['db_size']/(1024*1024*1024),2);

$result2 = @pg_query("select * from system_status where host_name='$hname' order by fetch_time desc limit 1");
$row2 = @pg_fetch_array($result2);
$rft=round($row2['rfs_space_total']/(1024*1024),2);
$rfu=round($row2['rfs_space_used']/(1024*1024),2);
$rfa=round($row2['rfs_space_available']/(1024*1024),2);

$lft=round($row2['lfs_space_total']/(1024*1024),2);
$lfu=round($row2['lfs_space_used']/(1024*1024),2);
$lfa=round($row2['lfs_space_available']/(1024*1024),2);

?>

<tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=<?echo $hname;?>"><u><?echo $hname;?></a></u></font></td>
<td width="14%" align=center><font size=1 color=#000000><?echo $dbsize;?></font></td>
<td width="14%" align=center><font size=1 color=#000000><?echo $dbconn;?></font></td>
<td width="26%" align=center><font size=1 color=#000000></td>
</tr>

<?}?>

</table>









<br><br>
Services
<br><font size=1><i>Last Run</i></font><br>

<table class='tborder' border=1 width="98%">
<tr class="row1">
<td width="20%" align=center><font color=#800000>Host</font></td>
<td width="16%" align=center><font color=#800000>Local Backup</font></td>
<td width="16%" align=center><font color=#800000>Replication</font></td>
<td width="16%" align=center><font color=#800000>System Stats</font></td>
</tr>
<tr height=20>
<td colspan=4></td></tr>

<?
$fromdate=date('d/m/y H:i:s',mktime(date("H")-0, date("i")-0, date("s")-0, date("m")-0, date("d")-(2),  date("Y")));


$qry = "select * from server where host_name!='geonetwork'";
$result = @pg_query($qry);
while ($row = @pg_fetch_array($result)) {
$hname=$row['host_name'];

$result1 = @pg_query("select to_char((fetch_time), 'DD/MM/YY &nbsp;  HH24:MI:SS TZ')  as cc from master_backup_log where host_name='$hname' order by table_id desc");
$row1 = @pg_fetch_array($result1);
$dbftime=$row1['cc'];

$result2 = @pg_query("select to_char((fetch_time), 'DD/MM/YY &nbsp;  HH24:MI:SS TZ')  as cc from db_stats where host_name='$hname'  order by table_id desc");
$row2 = @pg_fetch_array($result2);
$ssftime=$row2['cc'];



$result4 = @pg_query("select to_char((fetch_time), 'DD/MM/YY &nbsp;  HH24:MI:SS TZ')  as cc from replication_log where host_name='$hname'  order by table_id desc");
$row4 = @pg_fetch_array($result4);
$repftime=$row4['cc'];

if ($dbftime<$fromdate) { $col1='#FFB5B5';$col4='#FFB5B5'; } else { $col1='#FFffff';$col4='#FFffff';}
if ($ssftime<$fromdate) { $col5='#FFB5B5'; } else { $col5='#FFffff';}
if ($plftime<$fromdate) { $col2='#FFB5B5'; } else { $col2='#FFffff';}
if ($repftime<$fromdate) { $col3='#FFB5B5'; } else { $col3='#FFffff';}

?>

<tr>
<td width="20%" align=left><font size=1 color=#000000><a href="../php/show_stats.php?type=2&host=<?echo $hname;?>"><u><?echo $hname;?></a></u></font></td>
<td width="16%" align=center bgcolor='<?echo $col1;?>'><font size=1 color=#000000><?echo $dbftime;?></font></td>
<td width="16%" align=center bgcolor='<?echo $col3;?>'><font size=1 color=#000000><?echo $repftime;?></font></td>
<td width="16%" align=center bgcolor='<?echo $col5;?>'><font size=1 color=#000000><?echo $ssftime;?></font></td>

</tr>

<?}?>

</table>









</td>
<td width="20%" valign=top>
  


<?include ('sstatus.php');?>

 </td>
</tr></table>
<br> 
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
