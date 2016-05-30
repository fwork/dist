 <?php
@include_once("../php/autoload.php");
$site_class->init();
@include_once("../php/settings.php"); 

?>
<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Setup</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="font-awesome.min.css">
     <link rel="stylesheet" href="ionicons.min.css">
    <link rel="stylesheet" href="AdminLTE.min.css">
    <link rel="stylesheet" href="_all-skins.min.css">
<style>


	.modalWindow {
		position: fixed;
		font-family: arial;
		font-size:80%;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.2);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}
	.modalHeader h2 { color: #189CDA; border-bottom: 2px groove #efefef; }
	.modalWindow:target {
		opacity:1;
		pointer-events: auto;
	}
	.modalWindow > div {
		width: 800px;
		position: relative;
		margin: 10% auto;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		background: #fff;
	}
	.modalWindow .modalHeader  {	padding: 5px 20px 0px 20px;	}
	.modalWindow .modalContent {	padding: 0px 20px 5px 20px;	}
	.modalWindow .modalFooter  {	padding: 8px 20px 8px 20px;	}
	.modalFooter {
		background: #F1F1F1;
		border-top: 1px solid #999;
		-moz-box-shadow: inset 0px 13px 12px -14px #888;
		-webkit-box-shadow: inset 0px 13px 12px -14px #888;
		box-shadow: inset 0px 13px 12px -14px #888;
	}
	.modalFooter p {
		color:#D4482D;
		text-align:right;
		margin:0;
		padding: 5px;
	}
	.ok, .close, .cancel {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		text-align: center;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}
	.close {
		position: absolute;
		right: 5px;
		top: 5px;
		width: 22px;
		height: 22px;
		font-size: 10px;

	}
	.ok, .cancel {
		width:80px;
		float:right;
		margin-left:20px;
	}
	.ok:hover { background: #189CDA; }
	.close:hover, .cancel:hover { background: #D4482D; }
	.clear { float:none; clear: both; }
	


</style>



     </head>
  <body class="hold-transition skin-blue sidebar-mini">
 


  <div class="wrapper">
 
  
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>etup</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Setup</b> </span>
        </a>
   
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        
          <!-- Navbar Right Menu -->
         
         
         <!--
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
               <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-cubes"> UI Elements</i></a>
              </li>
            </ul>
          </div>
          -->




        </nav>
      </header>
      
      
      
      
      
      
      
      
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           
      
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Project Configuration</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
                </li>
            
           
           <!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Modules</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> OpenSearch Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Elsatic Search Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Bootstrap Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Documentation Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Database Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Performance Monitor Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> ACL Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Email Alert Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Log Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Newsletter Subscription Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Backup Module</a></li>
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Reports Module</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Google Custom Search Engine</a></li>
              </ul>
            </li>
            -->
            
             <!--
             <li class="header">Links</li>
             <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Source Code Protection</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Security Structure</span></a></li>
             -->      
              
              <!--     
              <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>PHP Utilities</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> LDAP Module</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> XML Module</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Create Sitemap.xml</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Sample Login Pages</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> SMS Utility</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> mPDF</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> pChart</a></li>
                
              </ul>
            </li>
             -->
             
             <!--
              <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Javascript Utilities</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Alert Boxes</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Modal Windows</a></li>
               <li ><a href="index.html"><i class="fa fa-circle-o"></i> Progress Bars</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Lightbox</a></li>
               <li ><a href="index.html"><i class="fa fa-circle-o"></i> Image Slideshow</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Image Gallery</a></li>
               <li ><a href="index.html"><i class="fa fa-circle-o"></i> Image Compression</a></li>
                                                                                
              </ul>
            </li>
            -->
            
            
             <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>General Utilities</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.html"><i class="fa fa-circle-o"></i> Fonts Collection</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Icon Collection</a></li>
                <li ><a href="index2.html"><i class="fa fa-circle-o"></i> Error Pages Template</a></li>
             
              </ul>
            </li>

           <li><a href="#openModal2"><i class="fa fa-circle-o text-yellow"></i> <span>Copyright</span></a></li>
           <li><a href="#openModal"><i class="fa fa-circle-o text-aqua"></i> <span>Privacy Policy</span></a></li>
           <li><a href="#openModal1"><i class="fa fa-circle-o text-red"></i> <span>Dislcaimer</span></a></li>
          </ul>
          
          
        </section>-->
        <!-- /.sidebar -->
      </aside>


 



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
 



        <section class="content">   

        <!-- START CUSTOM TABS -->
           <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Title Text</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Project Meta Information</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Email</a></li>
                 <li><a href="#tab_4" data-toggle="tab">Site - Include Files</a></li>
                  <li><a href="#tab_5" data-toggle="tab">Site - Main Files</a></li>
                 <li><a href="#tab_6" data-toggle="tab">Site License</a></li>
                  <li><a href="#tab_7" data-toggle="tab">General Settings</a></li>
            
            
                             </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  
                  
                  
                    <b>How to use:</b>
                    <p>Exactly like the original bootstrap tabs except you should use
                      the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                                    </div><!-- /.tab-pane -->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                     </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      </div><!-- /.tab-pane -->
                       <div class="tab-pane" id="tab_5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      </div><!-- /.tab-pane -->
                       <div class="tab-pane" id="tab_6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      </div><!-- /.tab-pane -->
                       <div class="tab-pane" id="tab_7">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                      </div><!-- /.tab-pane -->
                    
               
               
               
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

 
          </div> <!-- /.row -->
          <!-- END CUSTOM TABS -->






             </section><!-- /.content -->
      </div><!-- /.content-wrapper -->








      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>     
        </div>
        <strong>(C) 2016-17 All righst reserved.</strong> 
      </footer>

             
      
      
      
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          
<br><br>

     <table border=0> <tr> <td> side bar panel</td></tr></table>      
        
        </div>
      </aside><!-- /.control-sidebar -->
      
      
 
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap.min.js"></script>
    
     <!-- AdminLTE App -->
    <script src="app.min.js"></script>
 
     
     
 <div id="openModal" style="overflow: auto;" class="modalWindow">
<div>
<div class="modalHeader">
<h2>Privacy Policy</h2>
<a href="#close" title="Close" class="close">X</a>
</div>
<div class="modalContent">
<p><font face="Trebuchet MS" size="2">We consider our relationship with our customers as one of our most valuable assets. We are committed to protecting your privacy and realize that our success depends upon our ability to maintain your trust.&nbsp;<br><br>

                    </font><u><font face="tahoma" size="2">OUR PLEDGE TO

                    OUR CUSTOMERS</font></u><font face="Trebuchet MS" size="2"><br>

We are committed to protecting your privacy. The information that we collect is only used to facilitate your transactions on our site and to enhance your overall experience with us. We may share your information with trusted third parties, but only if you allow us to do so.<br><br>

                    </font><u><font face="tahoma" size="2">WHY DO WE

                    COLLECT INFORMATION AND HOW DO WE USE IT?</font></u><font face="Trebuchet MS" size="2"><br>

When you use our site actively (to place an ad), we may need to know your name, address, phone number, e-mail address and payment information. This allows us to process  and fulfill your transaction and to notify you of the status of your order.<br>
If you ask to be informed of future services and site enhancements, we will need your e-mail address in order to send you the information you requested<br>
We may also occasionally use the information we collect to notify you about important changes in the functioning of our web sites, new services and special offers that we think you will find useful.<br>
We might occasionally ask you to tell us about your experience with us. These short surveys will be completely optional. None of this data is associated with any individual's name. We then work with this anonymous data to tailor our future offers to your needs and to the needs of our future customers.<br> <br>

                    </font><u><font face="tahoma" size="2">WHAT ABOUT

                    COOKIES?</font></u><font face="Trebuchet MS" size="2"><br>

Cookies are small pieces of information that are stored by your browser on your computer's hard drive. Cookies enable us to recognize your logons and passwords when you return to our site. The use of cookies actually saves you time because you will not be asked to re-enter information every time you log onto your site. Most web sites use cookies for the same purpose and most web browsers automatically accept cookies although you can choose to disable this feature.<br> <br>

                    </font><u><font face="tahoma" size="2">YOUR CONSENT</font></u><font face="Trebuchet MS" size="2"><br>

By using our web site, you consent to the collection and use of this information by us. If we decide to change our  privacy policy, we will post those changes on this page so that you are always aware of what information we collect,  how we use it and under what circumstances we disclose it.&nbsp;<br> <br>

                    </font><u><font face="tahoma" size="2">IMPORTANT</font></u><font face="Trebuchet MS" size="2"><br>

Should you have any concerns about our use of your information please contact us at info@techscapesolutions.com and we will do our best to address your concerns, explain our processing or where requested amend our practices with respect to your personal data.</p>
 
</div>
<div class="modalFooter">
<a href="#close" title="Close" class="cancel">Close</a>
  <div class="clear"></div>
</div>
</div>
</div>


<div id="openModal1" class="modalWindow">
<div>
<div class="modalHeader">
<h2>Disclaimer</h2>
<a href="#close" title="Close" class="close">X</a>
</div>
<div class="modalContent">
<p>Any advice or recommendations contained within this website are given in good faith, but TechScape Solutions its related entities and personnel will not be held responsible or liable for any loss or damage incurred by any person relying on this information and recommends that clients seek independent professional legal advice on such related matters.</p>
 
</div>
<div class="modalFooter">
<a href="#close" title="Close" class="cancel">Close</a>
  <div class="clear"></div>
</div>
</div>
</div>

<div id="openModal2" class="modalWindow">
<div>
<div class="modalHeader">
<h2>Copyright</h2>
<a href="#close" title="Close" class="close">X</a>
</div>
<div class="modalContent">
<p>Copyright of material contained on this site is owned by  TechScape Solutions.
<br><br>
You may download, display, distribute, print and reproduce any material at this website, in unaltered form only, for your personal use, educational use, or non-commercial use within your organisation, provided the copyright to such material is attributed to the TechScape Solutions.
<br><br>
Except as permitted above you must not copy, adapt, publish distribute or commercialise any material contained on this site without TechScape's permission.
<br><br>
Requests and inquiries for authorisation concerning reproduction and rights of any material should be directed to info@techscapesolutions.com
 
</p>
</div>
<div class="modalFooter">
<a href="#close" title="Close" class="cancel">Close</a>
  <div class="clear"></div>
</div>
</div>
</div>



  
  </body>
</html>
