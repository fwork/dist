<?php

$source = "https://github.com/fwork/framework/first.txt";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSLVERSION,3);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
$data = curl_exec ($ch);
$error = curl_error($ch); 
curl_close ($ch);

$destination = "first.txt";
$file = fopen($destination, "w+");
fputs($file, $data);
fclose($file);

 

echo "here ...";
?>