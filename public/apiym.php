<?php

$url = "http://market.apisystem.biz/v2/search/?text=Смартфон%20Apple%20iPhone%207%20128GB&fields=OFFER_ACTIVE_FILTERS&api_key=0d80d29f01657d7b2346ea43e0f60b968668dd";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$data = curl_exec($ch);
curl_close($ch);
?><pre><?php
print_r(json_decode($data));

?>
</pre>
