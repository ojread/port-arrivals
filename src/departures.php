<?php

$url = getenv('DEPARTURES_URL');
if (empty($url)) die('DEPARTURES_URL not set');

$ch = curl_init();
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PORT, 8183);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$html = curl_exec($ch);
curl_close($ch);

echo $html;

?>