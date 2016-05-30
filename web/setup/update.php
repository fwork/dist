<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Framework Update</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome.min.css">
     <link rel="stylesheet" href="ionicons.min.css">
    <link rel="stylesheet" href="AdminLTE.min.css">
    <link rel="stylesheet" href="_all-skins.min.css">
<style>
#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}
 
#myBar {
  position: absolute;
  width: 10%;
  height: 100%;
  background-color: #4CAF50;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>

  <?php
@include_once("../php/autoload.php");
$site_class->init();
@include_once("../php/settings.php"); 

?>

<script>
var req_fifo;
 
function process_data()
{
     var url="get_updates.php"
     document.getElementById("result_quote1").innerHTML="<image src='../images/an.gif' width=20 height=20> <font color=#800000>  &nbsp;Please wait while updating the framework.....      "
var tE  = document.getElementById("myProgress"); 
tE.style.display="block";



    // branch for native XMLHttpRequest object
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      req_fifo.abort();
      req_fifo.onreadystatechange = GotReturnuser1;
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
     function GotReturnuser1() {
    // only if req_fifo shows "loaded"
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
      return;
    }

  var myRegExp = /Error in processing your request/;
var matchPos1 = (req_fifo.responseText).search(myRegExp);
if (matchPos1!=-1) {
 showDialog('Info','<br><br><center>An error report is sent to  Support Team  ......<br><br>Meaasge will be automatically clear in 05 seconds','error',5);
 }
     move( "&nbsp;&nbsp;<font color=#800000>"+req_fifo.responseText+"</font>&nbsp;&nbsp;");
  
setTimeout("cleardata31()", 553500);

   return;
  }

 function cleardata31(){
document.getElementById("result_quote1").innerHTML=""


}
</script>



<script>
var req_fifo;

function get_version()
{
     var url="get_version.php"
     document.getElementById("result_quotea").innerHTML="<center><image src='../images/an.gif' width=35 height=35> <font color=#800000>  &nbsp;Please Wait .....      "

    // branch for native XMLHttpRequest object
    if (window.XMLHttpRequest) {
      req_fifo = new XMLHttpRequest();
      req_fifo.abort();
      req_fifo.onreadystatechange = GotReturnuser3;
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
     function GotReturnuser3() {
    // only if req_fifo shows "loaded"
    if (req_fifo.readyState != 4 || req_fifo.status != 200) {
      return;
    }

  var myRegExp = /Error in processing your request/;
var matchPos1 = (req_fifo.responseText).search(myRegExp);
if (matchPos1!=-1) {
 showDialog('Info','<br><br><center>An error report is sent to  Support Team  ......<br><br>Meaasge will be automatically clear in 05 seconds','error',5);
 }
    
        document.getElementById("result_quotea").innerHTML=""

document.getElementById("result_quote").innerHTML="&nbsp;&nbsp;<font color=#800000>"+req_fifo.responseText+"</font>&nbsp;&nbsp;"




setTimeout("cleardata3()", 553500);

   return;
  }

 function cleardata3(){
document.getElementById("result_quote").innerHTML=""


}
</script>
 
    </head>
  <body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
 
      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!--<span class="logo-mini"><b>U</b>pdate</span>-->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Framework Update</b> </span>
        </a>
   
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
        
        
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Control Sidebar Toggle Button -->
             <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-cubes"> UI Elements</i></a>
              </li>-->
            </ul>
          </div>

        </nav>
      </header>
    
        <section class="content">   

      <!-- Main row -->
          <div class="row">               <div class="col-md-3"></div>
          
            <div class="col-md-6">
                            
<br><br><br>
                
               <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Update Framework</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                Your framework software is currently running version 
                 <?$up_doc_root=UP_DOC_ROOT;
if ($up_doc_root=='/') { $ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR; } else { $ROOT_PATH=$up_doc_root; };
echo file_get_contents($ROOT_PATH.'framework_version.txt');?>

<br><br> 
                                        
                                           <div id="result_quotea"></div><br><br>
                                           
                                           
                                        
                                        <center><button style="width:250px;" class="btn btn-block btn-warning btn-sm" onclick="javascript:get_version();">Check for Framework Update</button></center>
                                        
                                                                                <br><br>  <div id="result_quote"></div><br><br>
<br>
                                        
                                        
                                        
                                        
                                        
                                        <div id="result_quote1"></div><br>
                                    
                                    
                                    
<div id="myProgress" style="display: none;">
  <div id="myBar">
    <div id="label">10%</div>
  </div>
</div>
<br>

  
<script>
function move(str) {
  var elem = document.getElementById("myBar");   
  var width = 10;
  var id = setInterval(frame, 70);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
            document.getElementById("result_quote1").innerHTML=str;

    } else {
      width++; 
      elem.style.width = width + '%'; 
      document.getElementById("label").innerHTML = width * 1  + '%';
    }
  }

}

</script>
 
                   
                            <br><br><br>
              <br><br><br>
           <center> <strong><font color="white">&copy; 2016-17 All righst reserved.</font></strong> </center>

            </div><!-- /.col -->


             <div class="col-md-3"></div>
            

          </div><!-- /.row -->






             </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

 




 
             
             
      
         </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap.min.js"></script>
    
     <!-- AdminLTE App -->
    <script src="app.min.js"></script>
 
     
  
  </body>
</html>
