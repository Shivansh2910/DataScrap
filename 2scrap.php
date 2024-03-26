<?php
include('simple_html_dom.php');

$html = file_get_html('https://www.nbetlogistics.com:8081/trackconsignment.php?consignment_no=4019415');
$table = $html->find('table', 1);
$tbody = $html->find('tbody', 0);
$tr = $html->find('tr');

$data = array();
$a = 0;
foreach ($tr as $key => $value) {
    $data[$a]['date'] = trim(strip_tags($value->find('td', 0)));
    $data[$a]['time'] = trim(strip_tags($value->find('td', 1)));
    $data[$a]['location'] = trim(strip_tags($value->find('td', 2)));
    $data[$a]['status'] = trim(strip_tags($value->find('td', 3)));
    $a++;
}
echo "<pre>";
print_r($data);

//foreach($html->find('div') as $element)
//   echo $html->find('$element',1)->innertext;
//echo "<br>";
//echo $html->find('div,h4',1)->innertext;
