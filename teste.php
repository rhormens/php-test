<?php
$access_token = "ZWRnZQ:a69eae6fd011a65645df5f6ec0c61fac41c9154294bda05bfae7a223825ced6d";
$header = array();
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: Bearer ' . $access_token;

$service_url = 'https://portalgruponc-pilot.csod.com/services/api/x/organizations/v1/ous?typeId=4&includeInactive=true';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);

var_export($decoded);
//var_export($curl_response);
