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

function GetFind_Data2(str) {

 var url="find_vm_logs2.php?host="+str
    // branch for native XMLHttpRequest object
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      //req_fifo.overrideMimeType('text/xml');
      //req_fifo.abort();
      req_fifo.onreadystatechange = GotReturnFindData2;
      req_fifo.open("POST", url, true);
      req_fifo.send(null);

    } else if (window.ActiveXObject) {
      req_fifo = new ActiveXObject("Microsoft.XMLHTTP");
      if (req_fifo) {
        req_fifo.abort();
        req_fifo.onreadystatechange = GotReturnFindData2;
        req_fifo.open("POST", url, true);
        req_fifo.send();
      }
    }
  }
 
   function GotReturnFindData2() {
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
      return;
    }  
      //  page = eval('('+ req_fifo.responseText +')');
 
 
	 val2='<font size=2 color=blue face=tahoma>Postgres Log</font><br><table bgcolor="#ffffff" border="1" cellspacing=0 cellpadding=0 style="border-style: thin;" bordercolor="#e3e3e3"  width="99%" id="table1">';
	val2 +='<tr><td>';

	val2 +='<table bgcolor="#ffffff" border="0" cellspacing=0 cellpadding=0 style="border-style: thin;" bordercolor="#f0f0f0"  width="100%" id="table1">';
	 

 
       
	val2 +='<tr height="25">'+
		'<td align="left" width="100%" bgcolor="#F5FFFA" height="15"><font face="arial" size="1">'+req_fifo.responseText+'</font></td>'+
		' ';
		 	
	        val2 +='</tr>';


 
	        
         '</table>';

                        '</td></tr>'+
        '</table>';

 
 
                document.getElementById("div_first2").innerHTML ='';
                   document.getElementById("div_first2").innerHTML = val2;

 var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
  var month=(mydate.getMonth() )+1
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
dat=daym+"/"+month+"/"+year

var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()

var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12

 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds

myclock="<font    size=1  face='tahoma'>Last Updated: "+dat+"   "  +hours+":"+minutes+":"
 +seconds+" "+dn+"</b></font>"


document.getElementById("div_dt2").innerHTML ='';
 document.getElementById("div_dt2").innerHTML = myclock;
 
                 setInterval ( "GetFind_Data2();", 60000);   

                return;
  }

 
</script>






</head>


 <body>
<?$host=valid_data(decrypt($_REQUEST['host']));?>		
	 
 <script>
 		GetFind_Data2('<?echo $host;?>');</script>
 

  
   <div id="div_first2"></div>
 <div id="div_dt2"></div>
  
 </body></html>
