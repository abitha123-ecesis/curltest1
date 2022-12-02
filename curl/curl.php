<?php

echo("welcome to curl<br><br><br><br>");

$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL,'http://localhost/curltest2/curl/example_json.php');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch, CURLOPT_URL,'https://www.amazon.in/');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$server_response=curl_exec($ch);

curl_close($ch);
echo"<pre>";
print_r($server_response);
echo "</pre>";

?>