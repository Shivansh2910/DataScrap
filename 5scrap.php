<?php
include('simple_html_dom.php');

$json = file_get_contents('https://track.delhivery.com/api/status/packages/json/?waybill=27793210001455');
$json_data = json_decode($json, true)['ShipmentData'][0]['Shipment']['Scans'];
// $json_data = json_decode($json,true); 
echo '<pre>';
// print_r($json_data);  
$data = array();
$a = 0;
foreach ($json_data as $key => $value) {
  $data['scan'][$a]['Location'] = ($value['ScanDetail']['ScannedLocation']);
  $data['scan'][$a]['Details'] = ($value['ScanDetail']['Scan']);
  $data['scan'][$a]['Date'] = date("Y-m-d", strtotime($value['ScanDetail']['ScanDateTime']));
  $data['scan'][$a]['Time'] = date("Y-m-d H:i:s", strtotime($value['ScanDetail']['ScanDateTime']));
  $a++;
}
echo '<pre>';
print_r($data);
