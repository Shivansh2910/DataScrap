<?php
include('simple_html_dom.php');




//Simple way to Scrap ANYTHING by URL
/*
$html = file_get_html('https://www.nbetlogistics.com:8081/trackconsignment.php?consignment_no=4019415');
echo $html;
*/

$html = file_get_html('https://www.nbetlogistics.com:8081/trackconsignment.php?consignment_no=4019415');
// $html->load('<html><body>$response</body></html>');
$tables = $html->find('table', 1);
$tbody = $tables->find("tbody", 0);
$tr = $tbody->find("tr");
// print_r(trim($td));die;
// print_r(trim($tr));
$arrayVar = array();
$i = 0;
foreach ($tr as $key => $value) {
    $date = str_replace('/', '-', trim(strip_tags($value->find('td', 0)))) . trim(strip_tags($value->find('td', 1)));
    $arrayVar[$i]['date'] = date("Y-m-d", strtotime($date));
    $arrayVar[$i]['time'] = date("Y-m-d H:i:s", strtotime($date));
    $arrayVar[$i]['location'] = trim($value->find('td', 2));
    $arrayVar[$i]['details'] = trim($value->find('td', 3));
    $i++;
}
echo "<pre>";
print_r($arrayVar);

/*
echo $html->find('th',1)->innertext . $html->find('th',2)->innertext . $html->find('th',3)->innertext . $html->find('th',4)->innertext .  $html->find('th',5)->innertext . $html->find('th',6)->innertext . $html->find('th',7)->innertext . $html->find('th',8)->innertext;
echo "<br>";
echo $html->find('td',1)->innertext . $html->find('td',2)->innertext . $html->find('td',3)->innertext . $html->find('td',4)->innertext . $html->find('td',5)->innertext;
echo "<br>";
echo $html->find('th',9)->innertext . $html->find('th',10)->innertext . $html->find('th',11)->innertext . $html->find('th',12)->innertext;
echo "<br>";
echo $html->find('tbody,td',11)->innertext . $html->find('tbody,td',12)->innertext . $html->find('tbody,td',13)->innertext . $html->find('tbody,td',14)->innertext;
echo "<br>";
echo $html->find('tbody,td',15)->innertext . $html->find('tbody,td',16)->innertext . $html->find('tbody,td',17)->innertext . $html->find('tbody,td',18)->innertext;
echo "<br>";
echo $html->find('tbody,td',19)->innertext . $html->find('tbody,td',20)->innertext . $html->find('tbody,td',21)->innertext . $html->find('tbody,td',22)->innertext;
echo "<br>";
echo $html->find('tbody,td',23)->innertext . $html->find('tbody,td',24)->innertext . $html->find('tbody,td',25)->innertext . $html->find('tbody,td',26)->innertext;
echo "<br>";
echo $html->find('tbody,td',27)->innertext . $html->find('tbody,td',28)->innertext . $html->find('tbody,td',29)->innertext . $html->find('tbody,td',30)->innertext;
echo "<br>";
echo $html->find('tbody,td',31)->innertext . $html->find('tbody,td',32)->innertext . $html->find('tbody,td',33)->innertext . $html->find('tbody,td',34)->innertext;
/*
echo $html->find('thead,Status',1)->innertext;
echo "<br>";
$data = array($html);
echo $html;
*/
