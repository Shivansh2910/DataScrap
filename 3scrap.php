<?php
include('simple_html_dom.php');

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.vxpress.in/sx_trackapi.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'iTrackingNumber=7600787564&isTrace=1',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'
  ),
));
$html = curl_exec($curl);
// echo $html;
$html = str_get_html($html);
$table = $html->find('table', 1);
$tbody = $table->find('tbody', 0);
$tbody1 = $tbody->find('tbody', 0);
$tr = $tbody1->find('tr');
// print_r(trim($tbody1->find('tr', 0)));die;
$data = array();
$a = 0;
function trim_value($tr)
{
  $tr = strip_tags(trim($tr));
  return $tr;
}
foreach ($tr as $key => $value) {
  // /echo $value;die;
  // /echo $value->find('td', 0);
  // /echo $value->find('td', 1);
  //echo $value->find('td', 2);
  $data[$a]['date'] = trim_value($value->find('td', 0));
  $data[$a]['details'] = trim_value($value->find('td', 1));
  $data[$a]['location'] = trim_value($value->find('td', 2));
  $a++;
}
echo '<pre>';
print_r($data);
