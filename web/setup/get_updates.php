<?php
$up_doc_root=UP_DOC_ROOT;
if ($up_doc_root=='/') { $ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR; } else { $ROOT_PATH=$up_doc_root; }
$db_path=$ROOT_PATH."db/";
$inc_path=$ROOT_PATH."includes/";
$upload_path=$ROOT_PATH."uploads/";
$license_path=$ROOT_PATH."license/";
$temp_path=$ROOT_PATH."temp/";
$log_path=$ROOT_PATH."logs/";
$docs_path=$ROOT_PATH."docs/";
$apps_path=$ROOT_PATH."apps/";
$conf_path=$ROOT_PATH."conf/";
 
$remote_file_url ='https://raw.githubusercontent.com/fwork/dist/master/version.txt'; 
$array = explode("\n", file_get_contents($remote_file_url));
$remote_file_url=($array[3]);
$update_file_url=($array[1]);



// **** creating a folder

  $folder_name='update_files/Archive';
 if (!file_exists($folder_name)) {
    mkdir($folder_name, 0777, true);
}

// **** copy downloaded zip file in the newly created folder

$local_file =$folder_name.'/Archive.zip';
$copy = copy( $remote_file_url, $local_file );
 
 
 // **** Unziping the new file
 
$file = $local_file;
$path = pathinfo( realpath( $file ), PATHINFO_DIRNAME );
$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
    $zip->extractTo( $path );
    $zip->close();
 }
 
 
// **** Getting Update information from the main repository

$db = MYSQL_connect("localhost", "techs308_update", "Upd_33#90Tu");
MYSQL_select_db("techs308_techscape_main");
 $res1a=@MYSQL_QUERY("select *  from techs308_techscape_main.update_detail where update_file='$update_file_url'") ;
while ($rowa=@MYSQL_fetch_array($res1a)) {
$fname=$rowa['file_name'];
$cto=$rowa['copy_to'];
$file1=$folder_name.'/'.$fname;
$newfile1 = $temp_path.$fname;
 copy($file1, $newfile1) ;
}

// **** remove folder

deltree($folder_name);
    
 if( !$copy ) {
    echo "Error !.  failed to update ...\n";
}
else{
    echo "Update successfully completed  ...\n";
}  




// **** function to delete a folder

function deltree($f) {
  if (is_dir($f)) {
    foreach(glob($f.'/*') as $sf) {
      if (is_dir($sf) && !is_link($sf)) {
        @deltree($sf);
        @rmdir($sf);
         
      } else {
        @unlink($sf);
      }  
    }  
  }

  @rmdir($f);
}





 ?>