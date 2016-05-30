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
                margin: 30px auto;
              }
              .tabs li{
                float: left;
              }
              .tabs label {
                  display: block;
                  padding: 10px 20px;
                  border-radius: 2px 2px 0 0;
                  color: #08C;
                  font-size: 12px;
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
                width: 102%;
                font-size: 20px;
                line-height: 140%;
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

 <body class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>

    
        <div class="entry-content">
		
		
 

 <h2>About NCI</h2>
 


<div class="main">
                        <ul class="tabs">
                                <li>
                                  <input type="radio" checked name="tabs" id="tab1">
                                  <label for="tab1">About NCI</label>
                                  <div id="tab-content1" class="tab-content animated fadeIn">
                                 
<table  border=0 width="100%"    >
<thead>
<tr>
<td width="100%" align=left ><font size=1 face='tahoma'>  NCI, as Australia's national research computing service, provides world-class, high-end services to Australia's researchers, the primary objectives of which are to raise the ambition, impact, and outcomes Australian research through access to advanced, computational and data-intensive methods, support, and high-performance infrastructure.
<br><br>

As an operating unit of the Australian National University (ANU), NCI can trace its lineage back to the ANU Supercomputing Facility, established in the late 1980s, and to the Australian Partnership for Advanced Computing (APAC), which provided the first national services from 2000-2007. Today, NCI operates as a formal Collaboration of the ANU-the national research university; the Commonwealth Scientific and Industrial Research Organisation (CSIRO)-the national research agency; the Australian Bureau of Meteorology (BoM)-the national meteorological agency; Geoscience Australia- the national geosciences agency; together with partnerships with a number of research-intensive universities, supported by the Australian Research Council.
<br><br>

NCI offers comprehensive and integrated high-performance services that cover the gamut of computationally-based research, but with a focus in the environment, and in climate and earth system science in particular. The infrastructure investments, which total in excess of $80M since 2007, have been provided by the Australian Government under its National Collaborative Research Infrastructure Strategy (NCRIS) and Super Science Initiatives, and include a new 1.2 petaflop HPC system, a 3,200 core high-performance compute cloud, persistent disk storage of more than 10 PBytes (as at July 2013, and growing), and a new purpose-built data centre. Paralleling this is the considerable co-investment by the collaborating partners that collectively provide for all of the recurrent costs of the facility, the value of which exceeds the annualised value of the infrastructure.
<br><br>

What truly distinguishes NCI, however, is the depth of its engagement with research communities and research organisations, and the collaborative development of research environments/digital laboratories to enhance research ambition and outcomes in areas of international significance and national benefit-all of which is built around an expert team acknowledged for its innovation and well-run services.
<br><br>

Access to NCI services is available through:
<br><br>

    Shares for the co-investing partner organisations (ANU, CSIRO, Australian Bureau of Meteorology, Geoscience Australia, Intersect Australia, Queensland Cyberinfrastructure Foundation, and a consortium of universities including ANU, Monash University, the University of Adelaide, the University of NSW, the University of Queensland, and the University of Sydney;
<br><br>    The National Computational Merit Allocation Scheme, for researchers at publicly funded research agencies, and Australian higher education institutions that are eligible to receive funding from the Australian Research Council-based on research merit and computational suitability;
    <br><br>The NCI Flagship Scheme for those projects that have been granted access to support under this scheme;
    <br><br>Commercial and Industry Access Scheme

  </td>
</tr>
</table>
</div>
                                </li>
                                <li>
                                  <input type="radio" name="tabs" id="tab2">
                                  <label for="tab2">About NCI Web Portal</label>
                                  <div id="tab-content2" class="tab-content animated fadeIn">
<table  border=0 width="100%"    >
<thead>
<tr>
<td width="100%" align=left ><font size=1 face='tahoma'>
NCI Web portal software is designed for metadata collection and publishing of metadata into Geonetwork for various projects (GA, AusCover, eMAST). The utility will provide both insertion of single metadata and also bulk insertion. There are predefined metadata profiles setup as well a general metadata profile setup which is totally customizable according to your needs. All metadata will pass through a validation tool before inserting data into the Geonetwork server. The utility aims to automate the whole process of data insertion so the user don't have to do anything manually. 
<br><br>
The NCI metadata creation web portal minimizes the workload for
managing metadata records and exposing through the NCI catalogue service.It is critical to manage our
catalogue system to enable real-time updates, synchronization and capture the changes along the time.
To ensure we can do this, we build this infrastructure under OpenStack DevOps framework so that we
can easily recover the system if a node or server is down.
<br><br>
For each dataset, we generate a large number of detailed attributes. For datasets, these records are
stored within dedicated GeoNetwork servers. The record for the dataset will provide the search term
for all dataset records and their associated attributes. If a user wishes to find specific attributes of data
(e.g., sea-surface temperature) they can make a search on the relevant dataset attribute on the
GeoNetwork server. The relevant link will appear in the main GeoNetwork catalogue for the data and
will have the form of http://geonetwork<collection>.nci.org.au.
<br><br>
Access privilege system is based on LDAP authentication and also inbuilt user or project validation. The metadata is recorded both in Geonetwork default database as well as NCI metadata database to provide a centralized search utility. The software will also monitor all the routines and records all usage statistics based on every user or project. 
<br><br>
The quality of the metadata and data content is the joint responsibility of NCI and the individual
collection data managers, with NCI ensuring the overall quality and management of the service.
<br><br>
Data citation implementation. With the agreement with ANDS, NCI has the capacity of minting
Digital Objective Identifiers (DOIs) for the data products published through NCI data repository. Part
of the data management portal deliverable was to enable an initial DOI minting self-service.
<br>
</td>
</tr></table>
                                </div>
                                </li>
                                <li>
                                  <input type="radio" name="tabs" id="tab3">
                                  <label for="tab3">Development Timeline</label>
                                  <div id="tab-content3" class="tab-content animated fadeIn">
<table  border=0 width="100%"    >
<thead>
<tr>
<td width="100%" align=left ><font size=1 face='tahoma'>
&nbsp;Timeline of NCI Web Portal<br><br>
&nbsp;.&nbsp;&nbsp;2015-07-13 New Data Mangement Plan Form/PDF Creation routine Completed <br>
&nbsp;.&nbsp;&nbsp;2015-07-12 Data Mangement Plan new form has been setup with new metadata elements <br>
&nbsp;.&nbsp;&nbsp;2015-07-12 DOI Minting using production account from ANDS is implemented now <br>
&nbsp;.&nbsp;&nbsp;2015-07-06 DOI Minting using manually uploaded xml routine has been setup<br>
&nbsp;.&nbsp;&nbsp;2015-07-01 DOI Minting with optional metadata has been setup  <br>
&nbsp;.&nbsp;&nbsp;2015-06-25 Email Alert page has been setup  <br>
&nbsp;.&nbsp;&nbsp;2015-06-24 Setup email alert in Admin Section  <br>
&nbsp;.&nbsp;&nbsp;2015-06-24 Setup harvesting routine check in Admin section  <br>
&nbsp;.&nbsp;&nbsp;2015-06-24 Redesign of Email Template  <br>
&nbsp;.&nbsp;&nbsp;2015-06-22 Addition of metadata class images in publishing metadata section  <br>
&nbsp;.&nbsp;&nbsp;2015-06-22 Setup logs in vocabulary section <br>
&nbsp;.&nbsp;&nbsp;2015-06-22 Redesign of various portal pages <br>
&nbsp;.&nbsp;&nbsp;2015-06-20 Add NCI Social Media Links <br>
&nbsp;.&nbsp;&nbsp;2015-06-20 Add Disclaimer, Privacy and Copyright information <br>
&nbsp;.&nbsp;&nbsp;2015-05-30 Release of NCI Web Portal 1.0<br>
</td>
</tr></table>                                  
</div>
                                </li>
				<li>
                                  <input type="radio" name="tabs" id="tab4">
                                  <label for="tab4">Roadmap</label>
                                  <div id="tab-content4" class="tab-content animated fadeIn">
<table  border=0 width="100%"    >
<thead>
<tr>
<td width="100%" align=left ><font size=1 face='tahoma'>
&nbsp;Roadmap for future development<br><br>
&nbsp;1.&nbsp;&nbsp;Incorporation of ISO 19115-2015 standards<br>
<!--&nbsp;2.&nbsp;&nbsp;Integration of elastic search with Geonetwork<br>
-->
&nbsp;2.&nbsp;&nbsp;Implementation of Geonetwork (3.0) or latest version<br>
&nbsp;3.&nbsp;&nbsp;Implementation of new DMP w.r.t ISO19115-2015 version<br>
&nbsp;4.&nbsp;&nbsp;Implementation of new Metadata Publishing Tool w.r.t ISO19115-2015 version<br>
&nbsp;5.&nbsp;&nbsp;Add NetCDF format for bulk metadata upload<br>
<!--&nbsp;7.&nbsp;&nbsp;Setup a routine to Add/Edit/Del metadata in your Geonetwork from Web Portal<br>
-->
&nbsp;7.&nbsp;&nbsp;Release of NCI Web Portal Technical and User Manual<br>
</td>
</tr></table>                                  
</div>
                                </li>
                            </ul>
                </div>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
