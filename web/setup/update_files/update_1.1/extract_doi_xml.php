<?
@include_once("autoload.php");
$site_class->init();
$sec_class->check_login();
$sec_class->single_session();

$array =  xml2array(file_get_contents($file_url));

$data_value=array();
function clear_value($str) {
return ltrim(rtrim($str));
}






// *******   first level values *********

$doi_publisher=ltrim(rtrim($array['resource']['publisher']));
$doi_pyear=ltrim(rtrim($array['resource']['publicationYear']));
$dt_language=ltrim(rtrim($array['resource']['language']));
$r_type=ltrim(rtrim($array['resource']['resourceType']));
$rt_general=ltrim(rtrim($array['resource']['resourceType_attr']['resourceTypeGeneral']));
$version=ltrim(rtrim($array['resource']['version']));

$res3=@MYSQL_QUERY("select dm_id,datacollection_title from  nci_data_management.data_mgmt where file_identifier='$rtitle'");
     $row3=@MYSQL_fetch_array($res3);
     $dm_id = $row3["dm_id"];
     $dm_title = $row3["datacollection_title"];

     $res1=@MYSQL_QUERY("select max(minting_id) as cc  from nci_doi_main.nci_doi") ;
     $row=@MYSQL_fetch_array($res1);
     $max_id = $row["cc"];
     $max_id=$max_id+1;

$query=" Insert into nci_doi_main.nci_doi (`minting_id`,`user_id`, `date_post`,  `landing_page`,`publisher`, `publication_year`, `xml_data`, `doi`,  `version`, `language`, `resourcetype_general`, `resource_type`,`type`) values ($max_id, '$user_id','$date_post','$url','$doi_publisher','$doi_pyear','$strxml','$doi','$version','$dt_language','$rt_general','$r_type','$doi_type_main')";
$result=MYSQL_QUERY($query) ;


$minting_id=$max_id;







// *******   internal values ***********




foreach ($array as $key_main => $value_main) {

        foreach ($array[$key_main] as $keya => $valuea) {



// **  start creators division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='creators') {
        foreach ($array[$key_main][$keya]['creator'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['creator'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['creatorName']=($array[$key_main][$keya]['creator'][$i]['creatorName']);
        $data_value[$i]['nameIdentifier']=($array[$key_main][$keya]['creator'][$i]['nameIdentifier']);
        $data_value[$i]['affiliation']=($array[$key_main][$keya]['creator'][$i]['affiliation']);
        $attr="nameIdentifier_attr";
        foreach ($array[$key_main][$keya]['creator'][$i][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
        $query="insert into nci_doi_main.creators (`minting_id`, `creator_name`, `creator_ni_uri`, `creator_ni_scheme`, `creator_ni`, `creator_aff`) values ('".$minting_id."','".clear_value($data_value[$i]['creatorName'])."','".clear_value($data_value[$i]['schemeURI'])."','".clear_value($data_value[$i]['nameIdentifierScheme'])."','".clear_value($data_value[$i]['nameIdentifier'])."','".clear_value($data_value[$i]['affiliation'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.creators (`minting_id`, `creator_name`, `creator_ni_uri`, `creator_ni_scheme`, `creator_ni`, `creator_aff`) values ('".$minting_id."','".clear_value($data_value['creatorName'])."','".clear_value($data_value ['nameIdentifier_attr']['schemeURI'])."','".clear_value($data_value['nameIdentifier_attr']['nameIdentifierScheme'])."','".clear_value($data_value['nameIdentifier'])."','".clear_value($data_value['affiliation'])."')";
                $result=MYSQL_QUERY($query) ;



      }
// #end signle value

}
// #end creator division











// **  start titles division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='titles') {
        foreach ($array[$key_main][$keya]['title'] as $key => $value) {echo $key;if ($key=='0') {$multi_check=1;}
	}

if ($multi_check==1) {
		foreach ($array[$key_main][$keya]['title'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
		}

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['title']=($array[$key_main][$keya]['title'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['title'][$attr] as $keycc => $valuecc) {
	$data_value[$i][$keycc]=$valuecc;}
        $query="insert into nci_doi_main.titles (`minting_id`, `title`, `title_type`) values ('".$minting_id."','".clear_value($data_value[$i]['title'])."','".clear_value($data_value[$i]['titleType'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}
 


// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                $data_value[$key1]=$value1;
                		foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
				       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
				       }
                                       }
				}
				}
		}
		$query="insert into nci_doi_main.titles (`minting_id`, `title`, `title_type`) values ('".$minting_id."','".clear_value($data_value['title'])."','".clear_value($data_value['titleType'])."')";
                $result=MYSQL_QUERY($query) ;
     }
// #end signle value

}
// #end titles division 








// **  start subjects division **

$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='subjects') {
        foreach ($array[$key_main][$keya]['subject'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['subject'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['subject']=($array[$key_main][$keya]['subject'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['subject'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
	$query="insert into nci_doi_main.subjects (`minting_id`, `subject`, `subject_uri`, `subject_scheme`) values ('".$minting_id."','".clear_value($data_value[$i]['subject'])."','".clear_value($data_value[$i]['schemeURI'])."','".clear_value($data_value[$i]['subjectScheme'])."')";
        $result=MYSQL_QUERY($query) ;

// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.subjects (`minting_id`, `subject`, `subject_uri`, `subject_scheme`) values ('".$minting_id."','".clear_value($data_value['subject'])."','".clear_value($data_value['schemeURI'])."','".clear_value($data_value['subjectScheme'])."')";
        $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end subjects division








// **  start contributor division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='contributors') {
        foreach ($array[$key_main][$keya]['contributor'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }


if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['contributor'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }
for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['contributorName']=($array[$key_main][$keya]['contributor'][$i]['contributorName']);
        $data_value[$i]['nameIdentifier']=($array[$key_main][$keya]['contributor'][$i]['nameIdentifier']);
        $data_value[$i]['affiliation']=($array[$key_main][$keya]['contributor'][$i]['affiliation']);
        $data_value[$i]['schemeURI']=($array[$key_main][$keya]['contributor'][$i]['nameIdentifier_attr']['schemeURI']);
        $data_value[$i]['nameIdentifiersScheme']=($array[$key_main][$keya]['contributor'][$i]['nameIdentifier_attr']['nameIdentifierScheme']);
	$attr=$i."_attr";
	foreach ($array[$key_main][$keya]['contributor'][$attr] as $keycc => $valuecc) {
	$data_value[$i][$keycc]=$valuecc;}
	$query="insert into nci_doi_main.contributors (`minting_id`, `contributor_name`, `contributor_ni_uri`, `contributor_ni_scheme`, `contributor_ni`, `contributor_aff`,`contributor_type`) values ('".$minting_id."','".clear_value($data_value[$i]['contributorName'])."','".clear_value($data_value[$i]['schemeURI'])."','".clear_value($data_value[$i]['nameIdentifiersScheme'])."','".clear_value($data_value[$i]['nameIdentifier'])."','".clear_value($data_value[$i]['affiliation'])."','".clear_value($data_value[$i]['contributorType'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
		$query="insert into nci_doi_main.contributors (`minting_id`, `contributor_name`, `contributor_ni_uri`, `contributor_ni_scheme`, `contributor_ni`, `contributor_aff`,`contributor_type`) values ('".$minting_id."','".clear_value($data_value['contributorName'])."','".clear_value($data_value['schemeURI'])."','".clear_value($data_value['nameIdentifierScheme'])."','".clear_value($data_value['nameIdentifier'])."','".clear_value($data_value['affiliation'])."','".clear_value($data_value['contributorType'])."')";
		$result=MYSQL_QUERY($query) ;
      }
// #end signle value

}
// #end contributor division










// **  start date division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='dates') {
        foreach ($array[$key_main][$keya]['date'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }


if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['date'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }
for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['date']=($array[$key_main][$keya]['date'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['date'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
	$query="insert into nci_doi_main.dates (`minting_id`, `date`, `date_type`) values ('".$minting_id."','".clear_value($data_value[$i]['date'])."','".clear_value($data_value[$i]['dateType'])."' )";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
      		$query="insert into nci_doi_main.dates (`minting_id`, `date`, `date_type`) values ('".$minting_id."','".clear_value($data_value['date'])."','".clear_value($data_value['dateType'])."' )";
                $result=MYSQL_QUERY($query) ;	
      }
// #end signle value

}
// #end date division




// **  start format division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='formats') {
        foreach ($array[$key_main][$keya]['format'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }


if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['format'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }
for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['format']=($array[$key_main][$keya]['format'][$i]);
	$query="insert into nci_doi_main.format (`minting_id`, `format`) values ('".$minting_id."','".clear_value($data_value[$i]['format'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
	        $query="insert into nci_doi_main.format (`minting_id`, `format`) values ('".$minting_id."','".clear_value($data_value['format'])."')";
		$result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end format division






// **  start sizes division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='sizes') {
        foreach ($array[$key_main][$keya]['size'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }


if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['size'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }
for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['size']=($array[$key_main][$keya]['size'][$i]);
        $query="insert into nci_doi_main.sizes (`minting_id`, `size`) values ('".$minting_id."','".clear_value($data_value[$i]['size'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.sizes (`minting_id`, `size`) values ('".$minting_id."','".clear_value($data_value['size'])."')";
                $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end sizes division










// **  start descriptions division **

$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='descriptions') {
        foreach ($array[$key_main][$keya]['description'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['description'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['description']=($array[$key_main][$keya]['description'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['description'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
	$query="insert into nci_doi_main.description (`minting_id`, `description`, `description_type`) values ('".$minting_id."','".clear_value($data_value[$i]['description'])."','".clear_value($data_value[$i]['descriptionType'])."')";
        $result=MYSQL_QUERY($query) ;

// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.description (`minting_id`, `description`, `description_type`) values ('".$minting_id."','".clear_value($data_value['description'])."','".clear_value($data_value['descriptionType'])."')";
        $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end description division







// **  start rightsList division **

$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='rightsList') {
        foreach ($array[$key_main][$keya]['rights'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['rights'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['rights']=($array[$key_main][$keya]['rights'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['rights'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
        $query="insert into nci_doi_main.rights (`minting_id`, `rights`, `rights_uri`) values ('".$minting_id."','".clear_value($data_value[$i]['rights'])."','".clear_value($data_value[$i]['rightsURI'])."')";

        $result=MYSQL_QUERY($query) ;

// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.rights (`minting_id`, `rights`, `rights_uri`) values ('".$minting_id."','".clear_value($data_value['rights'])."','".clear_value($data_value['rightsURI'])."')";
        $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end rightlist division








// **  start geolocation division **
$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='geoLocations') {
        foreach ($array[$key_main][$keya]['geoLocation'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }


if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['geoLocation'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }
for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['geoLocationPoint']=($array[$key_main][$keya]['geoLocation'][$i]['geoLocationPoint']);
        $data_value[$i]['geoLocationBox']=($array[$key_main][$keya]['geoLocation'][$i]['geoLocationBox']);
        $data_value[$i]['geoLocationPlace']=($array[$key_main][$keya]['geoLocation'][$i]['geoLocationPlace']);
        $query="insert into nci_doi_main.geolocation (`minting_id`, `geol_point`, `geol_box`, `geol_place`) values ('".$minting_id."','".clear_value($data_value[$i]['geoLocationPoint'])."','".clear_value($data_value[$i]['geoLocationBox'])."','".clear_value($data_value[$i]['geoLocationPlace'])."')";
        $result=MYSQL_QUERY($query) ;
// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key1][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
		$query="insert into nci_doi_main.geolocation (`minting_id`, `geol_point`, `geol_box`, `geol_place`) values ('".$minting_id."','".clear_value($data_value['geoLocationPoint'])."','".clear_value($data_value['geoLocationBox'])."','".clear_value($data_value['geoLocationPlace'])."')";
                $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end geolocation division










// **  start alternateIdentifers division **

$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='alternateIdentifiers') {
        foreach ($array[$key_main][$keya]['alternateIdentifier'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['alternateIdentifier'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['alternateIdentifier']=($array[$key_main][$keya]['alternateIdentifier'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['alternateIdentifier'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
        $query="insert into nci_doi_main.alternate_identifier (`minting_id`, `altidentifier`, `altidentifier_type`) values ('".$minting_id."','".clear_value($data_value[$i]['alternateIdentifier'])."','".clear_value($data_value[$i]['alternateIdentifierType'])."')";
        $result=MYSQL_QUERY($query) ;

// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.alternate_identifier (`minting_id`, `altidentifier`, `altidentifier_type`) values ('".$minting_id."','".clear_value($data_value['alternateIdentifier'])."','".clear_value($data_value['alternateIdentifierType'])."')";
                $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end alternateIdentifiers division







// **  start relatedIdentifers division **

$data_value='';
$array_cycle='';
$multi_check=0;

if ($keya=='relatedIdentifiers') {
        foreach ($array[$key_main][$keya]['relatedIdentifier'] as $key => $value) {if ($key=='0') {$multi_check=1;}
        }

if ($multi_check==1) {
                foreach ($array[$key_main][$keya]['relatedIdentifier'] as $key1 => $value1) {
                if (strpos($key1, '_attr') == false) {$array_cycle[]=$key1;}
                }

for ($i = 0; $i < count($array_cycle); $i++) {
        $data_value[$i]['relatedIdentifier']=($array[$key_main][$keya]['relatedIdentifier'][$i]);
        $attr=$i."_attr";
        foreach ($array[$key_main][$keya]['relatedIdentifier'][$attr] as $keycc => $valuecc) {
        $data_value[$i][$keycc]=$valuecc;}
        $query="insert into nci_doi_main.related_identifier (`minting_id`, `ridentifier_type`, `relation_type`, `ridentifier_scheme`, `ridentifier_uri`, `ridentifier_name`) values ('".$minting_id."','".clear_value($data_value[$i]['relatedIdentifierType'])."','".clear_value($data_value[$i]['relationType'])."','".clear_value($data_value[$i]['relatedMetadataScheme'])."','".clear_value($data_value[$i]['schemeURI'])."','".clear_value($data_value[$i]['relatedIdentifier'])."')";
        $result=MYSQL_QUERY($query) ;

// #end for loop
}



// #end multi check
}

// #signle value
else {
                foreach ($array[$key_main][$keya] as $key1 => $value1) {
                if (contains_array($array[$key_main][$keya][$key1])==0){
                $data_value[$key1]=$value1;
                } else {
                                foreach ($array[$key_main][$keya][$key1] as $key2 => $value2) {
                                if (contains_array($array[$key_main][$keya][$key1][$key2])==0){
                                $data_value[$key2]=$value2;
                                } else {
                                       foreach ($array[$key_main][$keya][$key2] as $key3 => $value3) {
                                       if (contains_array($array[$key_main][$keya][$key1][$key2][$key3])==0){
                                       $data_value[$key3]=$value3;
                                       } else {
                                       }
                                       }
                                }
                                }
                }
                }
                $query="insert into nci_doi_main.related_identifier (`minting_id`, `ridentifier_type`, `relation_type`, `ridentifier_scheme`, `ridentifier_uri`, `ridentifier_name`) values ('".$minting_id."','".clear_value($data_value['relatedIdentifierType'])."','".clear_value($data_value['relationType'])."','".clear_value($data_value['relatedMetadataScheme'])."','".clear_value($data_value['schemeURI'])."','".clear_value($data_value['relatedIdentifier'])."')";
                $result=MYSQL_QUERY($query) ;

      }
// #end signle value

}
// #end relatedIdentifiers division







	}
}



?>
