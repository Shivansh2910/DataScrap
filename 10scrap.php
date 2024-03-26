<?php
include('simple_html_dom.php');

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://api.shared-tp.stage.oorjaa.tech:8083/piekart/gateway/order?awbNumber=AWB00000058126',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'x-visibility-scope: 11',
        'Authorization: Basic c2hpcHdheTppZnlobnZndDc4'
    ),
));

//echo $response;
$html = curl_exec($curl);
$json_data = json_decode($html, true);
echo '<pre>';
print_r($json_data);

$data = array();
$a = 0;
$orderStatusHistory = $json_data['orderStatusHistory'];
foreach ($orderStatusHistory as $key => $value) {
    $data['scan'][$a]['destination'] = ($value['dcName']);
    $data['scan'][$a]['status'] = $value['dcName'];
    $data['scan'][$a]['pickupdate'] = $value['status'];
    $data['scan'][$a]['origin'] = $value['statusUpdateTime'];
    $a++;
}
$data['destination'] = $json_data['orderPickUpSlot']['locationName'];
$data['status'] = $json_data['status'];
$data['piuckupdate'] = $json_data['pickupDate'];
$data['origin'] = $json_data['sourceLocation']['city'];
echo '<pre>';
print_r($data);
