<?php



// ********* LDAP Module  ***************

function ldap_retireval ($host,$basedn,$user,$pass,$port) {

// usage : ldap_retireval ('ldaps://sfldap0.anu.edu.au','rkg900','xxxxxx',636);

$host = $host;
$ou = 'ou=people';
$baseDn = $basedn;
$uid = $user;
$uidPass = mysql_escape_string($pass); 
 
$port=$port;

/*ldap will bind anonymously, make sure we have some credentials*/
  $ldap = @ldap_connect($host,$port);


$ldap = @ldap_connect($host,$port);
  if ((isset($ldap) && $ldap != '')) {
    /* Set the LDAP protocol version to 3*/
    /*#ldap_set_option ($ldap, LDAP_OPT_REFERRALS, 0);*/
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    /* search for the uid dn anonymously first, this will tell us if the uid exists */
  $ldap_result = @ldap_search($ldap, $ou.','.$baseDn, "uid=".$uid);
    if ($ldap_result != 0) {
      $entries = @ldap_get_entries($ldap, $ldap_result);
      $user_dn = $entries[0]['dn'];
      if (isset($user_dn)) {
        /* start TLS for secure authentication */
        #ldap_start_tls($ldap);

        /* bind as this user */
      $actv_conn = "";
        if (ldap_bind($ldap, $user_dn, $uidPass)) {
          $actv_conn = $ldap;
        }


       $grp_search = @ldap_search($actv_conn, $baseDn, "memberUid=".$uid); 
	  $grp_search2 = @ldap_search($actv_conn, $baseDn, "uid=".$uid); 
	  $grp_entry = ldap_get_entries($actv_conn, $grp_search); 
	  $grp_entry2 = ldap_get_entries($actv_conn, $grp_search2); 
	  $grp_arr = array();
	  
	  
	  	  foreach ($grp_entry as $grp) {
	    $grp_name = $grp["cn"][0];
	   
	    if ($grp_name == '') continue;
	    $grp_arr[] = $grp_name;
	     
	  }
}}
}

print_r ($grp_arr);

}



// ********* Create PDF using mPDF  ***************


function create_pdf($str,$file_path,$filename) {

@include_once ($inc_path.'resources/php/mpdf/mpdf.php');
$mpdf=new mPDF('');
$mpdf->debug = true;
$mpdf->setFooter('{PAGENO}');
  
if (($_REQUEST['html'])) { echo $str; exit; }
if (($_REQUEST['source'])) {
$filename = __FILE__;
$filename='dmplan';
header("Content-Type: text/plain");
header("Content-Length: ". filesize($filename));
header("Content-Disposition: attachment; filename='".$file."'");
readfile($filename);
exit;
}

$mpdf->WriteHTML($str);
$mpdf->Output($file_path.$filename.'.pdf','F'); 
exit;
}




// ********* Create Sitemap  ***************


function create_sitemap($url) {

@include_once ($inc_path.'resources/php/class_sitemap.php');

$sitemap = new Sitemap();
$sitemap->hostUrl       = $url;
$projectDir             = "" ;

$filePath                       = "";
$sitemapXmlfile         = $sitemap->getXmlSiteMap($projectDir,$filePath);

echo " 'sitemap.xml ' file is created in your root folder .....";

}







// ********* XML to Array  ***************


function xml2array($contents, $get_attributes=1, $priority = 'tag') {
    if(!$contents) return array();

    if(!function_exists('xml_parser_create')) {
        //print "'xml_parser_create()' function not found!";
        return array();
    }

    //Get the XML parser of PHP - PHP must have this module for the parser to work
    $parser = xml_parser_create('');
    xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, trim($contents), $xml_values);
    xml_parser_free($parser);

    if(!$xml_values) return;//Hmm...

    //Initializations
    $xml_array = array();
    $parents = array();
    $opened_tags = array();
    $arr = array();

    $current = &$xml_array; //Refference

    //Go through the tags.
    $repeated_tag_index = array();//Multiple tags with same name will be turned into an array
    foreach($xml_values as $data) {
        unset($attributes,$value);//Remove existing values, or there will be trouble

        //This command will extract these variables into the foreach scope
        // tag(string), type(string), level(int), attributes(array).
        extract($data);//We could use the array by itself, but this cooler.

        $result = array();
        $attributes_data = array();
        
        if(isset($value)) {
            if($priority == 'tag') $result = $value;
            else $result['value'] = $value; //Put the value in a assoc array if we are in the 'Attribute' mode
        }

        //Set the attributes too.
        if(isset($attributes) and $get_attributes) {
            foreach($attributes as $attr => $val) {
                if($priority == 'tag') $attributes_data[$attr] = $val;
                else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr'
            }
        }

        //See tag status and do the needed.
        if($type == "open") {//The starting of the tag '<tag>'
            $parent[$level-1] = &$current;
            if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag
                $current[$tag] = $result;
                if($attributes_data) $current[$tag. '_attr'] = $attributes_data;
                $repeated_tag_index[$tag.'_'.$level] = 1;

                $current = &$current[$tag];

            } else { //There was another element with the same tag name

                if(isset($current[$tag][0])) {//If there is a 0th element it is already an array
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
                    $repeated_tag_index[$tag.'_'.$level]++;
                } else {//This section will make the value an array if multiple tags with the same name appear together
                    $current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array
                    $repeated_tag_index[$tag.'_'.$level] = 2;
                    
                    if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
                        $current[$tag]['0_attr'] = $current[$tag.'_attr'];
                        unset($current[$tag.'_attr']);
                    }

                }
                $last_item_index = $repeated_tag_index[$tag.'_'.$level]-1;
                $current = &$current[$tag][$last_item_index];
            }

        } elseif($type == "complete") { //Tags that ends in 1 line '<tag />'
            //See if the key is already taken.
            if(!isset($current[$tag])) { //New Key
                $current[$tag] = $result;
                $repeated_tag_index[$tag.'_'.$level] = 1;
                if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data;

            } else { //If taken, put all things inside a list(array)
                if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array...

                    // ...push the new element into that array.
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
                    
                    if($priority == 'tag' and $get_attributes and $attributes_data) {
                        $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
                    }
                    $repeated_tag_index[$tag.'_'.$level]++;

                } else { //If it is not an array...
                    $current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
                    $repeated_tag_index[$tag.'_'.$level] = 1;
                    if($priority == 'tag' and $get_attributes) {
                        if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
                            
                            $current[$tag]['0_attr'] = $current[$tag.'_attr'];
                            unset($current[$tag.'_attr']);
                        }
                        
                        if($attributes_data) {
                            $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
                        }
                    }
                    $repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken
                }
            }

        } elseif($type == 'close') { //End of tag '</tag>'
            $current = &$parent[$level-1];
        }
    }
    
    return($xml_array);
}  











?>