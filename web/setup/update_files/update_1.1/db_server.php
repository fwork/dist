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
 
<style type="text/css">
	      
	      .tabs input[type=radio] {
	          position: absolute;
	          top: -9999px;
	          left: -9999px;
	      }
	      .tabs {
	        width: 1000px;
	        float: none;
	        list-style: none;
	        position: relative;
	        padding: 0;
	        margin: 20px auto;
	      }
	      .tabs li{
	        float: left;
	      }
	      .tabs label {
	          display: block;
	          padding: 10px 20px;
	          border-radius: 2px 2px 0 0;
	          color: #08C;
	          font-size: 14px;
	          font-weight: normal;
	          font-family: 'Tahoma', helveti;
	          background: #ececec;
	          cursor: pointer;
	          position: relative;
	          top: 3px;
	          -webkit-transition: all 0.2s ease-in-out;
	          -moz-transition: all 0.2s ease-in-out;
	          -o-transition: all 0.2s ease-in-out;
	          transition: all 0.2s ease-in-out;
	      }
	      .tabs label:hover {
	        background: #ececec;
	        top: 0;
	      }
	      
	      [id^=tab]:checked + label {
	        background: #08C;
	        color: white;
	        top: 0;
	      }
	      
	      [id^=tab]:checked ~ [id^=tab-content] {
	          display: block;
	      }
	      .tab-content{
	        z-index: 2;
	        display: none;
	        text-align: left;
	        width: 100%;
	        font-size: 20px;
	        line-height: 100%;
	        padding-top: 10px;
	        background: #ececec;
	        padding: 15px;
	        color: #000000;
	        position: absolute;
	        top: 53px;
	        left: 0;
	        box-sizing: border-box;
	        -webkit-animation-duration: 0.5s;
	        -o-animation-duration: 0.5s;
	        -moz-animation-duration: 0.5s;
	        animation-duration: 0.5s;
	      }
	    </style>
 
 
</head>

 <body   class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>

 
    <div class="content hentry">
	    		        
        <div class="entry-content">
	






<div class="main">
	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">Database Stats</label>
			          <div id="tab-content1" class="tab-content animated fadeIn">
			          <iframe src="../php/logs2.php" width="950" height=325" frameborder="0" ></iframe><br>
			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2">Server Stats</label>
			          <div id="tab-content2" class="tab-content animated fadeIn">
			          <iframe src="../php/logs4.php" width="950" height="325" frameborder="0"></iframe>
				</div>
			        </li>

			    </ul>
	      	</div>



	
		<script>
 		GetFind_Data1();</script>
 <script>
 		GetFind_Data2();</script>
 
 
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
