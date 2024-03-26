<?php
include('simple_html_dom.php');

$json = file_get_contents('https://dummyjson.com/products/1');
$json_data = json_decode($json, true);
echo "<pre>";
print_r($json_data);            
$data = array();
$data['scan']['Awd.no'] = ($json_data['id']);
$data['scan']['Title'] = ($json_data['title']);
$data['scan']['About'] = ($json_data['description']);
$data['scan']['Pricing'] = ($json_data['price']);
$data['scan']['Discount'] = ($json_data['discountPercentage']);
$data['scan']['Product Rating'] = ($json_data['rating']);
$data['scan']['In Stock'] = ($json_data['stock']);
$data['scan']['Brand Name'] = ($json_data['brand']);
$data['scan']['Category'] = ($json_data['category']);
$data['scan']['Details URL'] = ($json_data['thumbnail']);

$data['Awd.no'] = ($json_data['id']);
$data['Title'] = ($json_data['title']);
$data['About'] = ($json_data['description']);
$data['Pricing'] = ($json_data['price']);

echo '<pre>';
print_r($data);
?>