<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.bluedart.com/web/guest/trackdartresultthirdparty?trackFor=0&trackNo=77937279125');
//echo $html->find('ul' , 0)->innertext;

$table = $html->find('table', 3);
$tbody = $table->find('tbody', 0);
$tr = $tbody->find('tr');
// echo $tbody;die;
// $th = $tr->find('th');
//$data1 = array();
// foreach($tr as $key => $value){
//     $data1['Waybill No']=(strip_tags($value->find('td', 0)));
//     $data1['Pickup Date']=(strip_tags($value->find('td', 1)));
//     $data1['From']=(strip_tags($value->find('td', 2)));
//     $data1['To']=(strip_tags($value->find('td', 3)));
//     $data1['Status']=(strip_tags($value->find('td', 4)));
//     $data1['Date of Delivery']=(strip_tags($value->find('td', 5)));
//     $data1['Time of Delivery']=(strip_tags($value->find('td', 6)));
//     $data1['Recipient']=(strip_tags($value->find('td', 7)));
//     $data1['Reference No']=(strip_tags($value->find('td', 8)));
// }
//echo "<pre>";
// print_r($data1);
//echo $html->find('th',0)->innertext;

$data = array();
$data1 = array();
$a = 0;
foreach ($tr as $key => $value) {
    $date = str_replace('/', '-', trim(strip_tags($value->find('td', 2)))) . trim(strip_tags($value->find('td', 3)));
    $data[$a]['Location'] = trim(strip_tags($value->find('td', 0)));
    $data[$a]['Details'] = trim(strip_tags($value->find('td', 1)));
    $data[$a]['Date'] = date("Y-m-d", strtotime($date));
    $data[$a]['Time'] = date("Y-m-d H:i:s", strtotime($date));
    $a++;
}
$count = count($data) - 1;
for ($i = 0; $i < $count; $i++) {
    // print_r($data);die; 
    $data1['scan'][$i] = $data[$i];
}
echo '<pre>';
print_r($data1);
//$table = $html->find('table',2);
//echo $table;die;
//$data['piuckupdate'] = '';
//$data['destination'] = '';
//$data['oriign'] = '';
//$data['status'] = '';
//$data['recipient'] = '';
//echo $html->find('th',1)->innertext . $html->find('th',2)->innertext . $html->find('th',3)->innertext . $html->find('th',4)->innertext .  $html->find('th',5)->innertext . $html->find('th',6)->innertext . $html->find('th',7)->innertext . $html->find('th',8)->innertext;
//echo "<br>";
//echo $html->find('td',1)->innertext . $html->find('td',2)->innertext . $html->find('td',3)->innertext . $html->find('td',4)->innertext . $html->find('td',5)->innertext;
//echo "<br>";
//echo $html->find('th',9)->innertext . $html->find('th',10)->innertext . $html->find('th',11)->innertext . $html->find('th',12)->innertext;
//echo "<br>";
//echo $html->find('tbody,td',11)->innertext . $html->find('tbody,td',12)->innertext . $html->find('tbody,td',13)->innertext . $html->find('tbody,td',14)->innertext;
//echo "<br>";
//echo $html->find('tbody,td',15)->innertext . $html->find('tbody,td',16)->innertext . $html->find('tbody,td',17)->innertext . $html->find('tbody,td',18)->innertext;
//echo "<br>";
//echo $html->find('tbody,td',19)->innertext . $html->find('tbody,td',20)->innertext . $html->find('tbody,td',21)->innertext . $html->find('tbody,td',22)->innertext;
//echo "<br>";
//echo "<pre>";
//print_r($data1);
