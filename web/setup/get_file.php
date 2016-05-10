<?php

   
 $remote_file_url = 'https://github.com/fwork/dist/releases/download/1.1/plan.pdf.zip';
 
/* New file name and path for this file */
$local_file = 'plan.zip';
 
/* Copy the file from source url to server */
$copy = copy( $remote_file_url, $local_file );
 
/* Add notice for success/failure */
if( !$copy ) {
    echo "Doh! failed to copy $file...\n";
}
else{
    echo "WOOT! success to copy $file...\n";
}

echo "here ...";
?>