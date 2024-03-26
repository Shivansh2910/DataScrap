<?php
include('simple_html_dom.php');

$json = file_get_contents('https://gmsglobe.com/webapi/get-consignment.php?cnno=435194226');
//$json_data = json_decode($json, true)['Order']['@attributes']['trackingNo']['Scans'];
$json_data = json_decode($json, true);
//echo '<pre>';
//print_r($json_data);
$json_data = $json_data['Order']['Scans']['ScanDetail'];
//echo '<pre>';
//print_r($json_data);
$data = array();
$a = 0;
//foreach ($json_data as $key => $value) {
//  //$date=$date = str_replace('/', '-', trim(strip_tags($value['Scans']['ScanDetail']['ScanDate'])) . trim(strip_tags(($value['Scans']['ScanDetail']['ScanTime']))));
//  $data['scan'][$a]['Location'] = ($value['Scan']);
//  $data['scan'][$a]['status'] = ($value['Cnstatus']);
//  $data['scan'][$a]['Date'] = date("Y-m-d", strtotime($value['ScanDate']));
//  $data['scan'][$a]['Time'] = date("Y-m-d H:i:s", strtotime($value['ScanTime']));
//  $a++;
//}
//echo '<pre>';
//print_r($data);
foreach ($json_data as $key => $value) {
    $date = str_replace('/', '-', $value['ScanDate']) . $value['ScanTime'];
    $data['scan'][$a]['destination'] = ($value['Cnstatus']);
    $data['scan'][$a]['status'] = ($value['Cnstatus']);
    $data['scan'][$a]['piuckupdate'] = date("Y-m-d H:i:s", strtotime($date));
    $data['scan'][$a]['origin'] = ($value['Scan']);
    //$data['scan'][$a]['Time'] = date("Y-m-d H:i:s", strtotime($value['ScanTime']));
    $a++;
}
echo '<pre>';
print_r($data);
//  $data1 = array();
//  foreach ($json_data as $key => $value) {
//    $date = str_replace('/', '-', $value['ScanDate']) . $value['ScanTime'];
//    $data1['destination'] = ($value['Cnstatus']);
//    $data1['status'] = ($value['Cnstatus']);
//    $data1['piuckupdate'] =date("Y-m-d H:i:s", strtotime($date));
//    $data1['origin'] = ($value['Scan']);
//
//}
//echo "<pre>";
//print_r($data1);
