<?php
include('simple_html_dom.php');

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.gati.com/track-by-docket/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'docket_id=109042909&g-recaptcha-response=03AFcWeA7aoowuAR4igMgR0zHk-DyMVM_rK0rLCbgYLFgKDSOf4tKk5KXL92yQs9-qM8qtKNnQyuDRgyUM00ogUdcAjfXrHGVBgSzWifMRMOE-yqWraLw6VKwAGU2vytgEoDKHDb4trvVVnpRxZpzprLxz70TMwtSlX632hkHDxuSiFf4R1t9sxIqrH-af0r5hMJfprfzfDw3j15gb5aIJ-X4QPiPBriqhbLp8gcnPPqAT1oM1itaUbaptU_LTtDc6vIQLQ1N4kqQEbcOouqRsWCp14uj4jMtrQfdzE9ECt9OneyjtxWiew8Lxo3DzsQoicCYS0NfKUAk2KFxdoC5VmGoMPJ_B7L5yv2aZA-W9RPHqF-LaX980KREigYC5_xivaQJVqfR8VPy9VcTXOuYRagvsYPZCyRx54imtHwMoJG6ApaBVR9njJLhO2LapzLIXsZSI_AFTZMucOQfh2AhSASkLeijTyzKZRrEKrxCijys0qo7EHeVSN_vX8Me6jcjMreJxnCHGkq_wyaw9neyRjCKuHJmD0o5uoFnwjlrAsYhVMMYR-rP9rVd4ldFslQyTZHQb36Fpe5NljBc27Xo85-IhGuL412w_HYsgCjzg9VkWnd1J-v4e6CkG4WlMmCi1IND84ND0o6zx',
    CURLOPT_HTTPHEADER => array(
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Content-Type:  application/x-www-form-urlencoded',
        'Cookie:  MXCookie; _gcl_au=1.1.165767883.1710929440; _gid=GA1.2.1800530077.1710929441; _fbp=fb.1.1710929441486.1013251414; TS00000000076=08e7941eb6ab2800fc2248c6b296968fded77cd165e9c9e21616ed7a54d5ba1682fec4ad63dd7e759db882c34f8c6c25087a270e3209d00059c28b5c2bd391a8f8d5689fcccadf4727e5beeca54e3d46d66b432c0802ef08b1dec784e3ccacbb76735be86018a6c0483db2ade0948f85182a0c7873f18c28364def6088073243afc839419d75439239f63fd9291a94927e6a4f4f93a32c5c63bc8ce725f98107bcb2a423e56208f7976f23ca45e3b3d903beb8286c966c7616200d963ab24b95e9e7facd7ae9497c465183ad9791dea807dc33a9b247533d076c38c913a38b4ccacaeb2440e27e4af981776279b978ad63663746f1ee693d736af652441d46f634766a6aac6dfe02; TSPD_101_DID=08e7941eb6ab2800fc2248c6b296968fded77cd165e9c9e21616ed7a54d5ba1682fec4ad63dd7e759db882c34f8c6c25087a270e32063800a490385da9f3beccc62bae61616b6308cce50228bbac2125f23eacafcde14dfc2511c6e9c2b096113f58b42913a541a556e6a0cc2d25665c; TS01b2f5e1=014bf76bf96ee53386882463402a5ec8916682019408e189b73b5fcc5669a4569107ae400becef66aa1a9d162423416a77b765bbf9; TSPD_101=08e7941eb6ab2800340432e9cd6f6e225e396f486aff003122681a644dffa344c0049712211b3c3eb238f7823d3f40f2088737a5cd05180094fd673d20d37f8ffe6c990fab6d99d1f359a072bccc9c7c; _ga=GA1.1.1210026633.1710929441; _ga_S93CF11FE6=GS1.1.1710929441.1.1.1710929461.40.0.0; _ga_ZTJSESZXJH=GS1.2.1710929441.1.1.1710929461.0.0.0; TSd56f81f2077=08e7941eb6ab2800673e06146494d3c63b9983cd3db1557f86a9c1025f2ec54a80ee7e497d27cfdc0b41d5893f97b60108902aeed9172000344d33193bb5505501aa45a104681e6d12f6ec225bfefd39f672d595199eb8f6; TSd56f81f2029=08e7941eb6ab28003d843f64c7e76d6fe446477699990f1ab8e191cfd9faa36c82a6cce03089e185934a33f3158c78d5; TS6d28637e027=08e7941eb6ab20005a5e18c37cec70d0f07c34d481b02a7ce782d32cfd3403427f52b60f59e0174408f10b433e1130005c7655426a4fd05cc25eb5b619b97b669eb51463ffddd1f43100e1a5a2ea202b21941eb124a851245333fb3fca47d631; TS01b2f5e1=014bf76bf9ce0e9b623d0f4c64a2c76a58b7e6370a4459e5a24c6efe19735b5fb4e53cd686918e0275ca1ac1141c30892bee3c505e; TS6d28637e027=08e7941eb6ab20003a8b87fa1db55ccb1f00a53f67599856a6ae3b070de836989c98dbb938904a880888659a5d113000b7d2078cdffd5d1bc3d165e36b0fa7a6abfef5b64cbc068a130c81fc118d91b85aa4649caab0818ec4c41177c83dc02a; TSd56f81f2029=08e7941eb6ab280061ba527405e8981dcf70451a6332e62bd6cbc3f257e12045288b4f3157860789b211f937d8001c36',
        'Host:  www.gati.com',
        'Origin:  https://www.gati.com',
        'Referer:  https://www.gati.com/track-by-docket/',
        'Upgrade-Insecure-Requests:  1',
        'User-Agent:  Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0',
        'sec-ch-ua:  "Chromium";v="122", "Not(A:Brand";v="24", "Microsoft Edge";v="122"',
        'sec-ch-ua-mobile:  ?0',
        'sec-ch-ua-platform:  "Windows"'
    ),
));
//curl_close($curl);
//echo $response;
$html = curl_exec($curl);
$html = str_get_html($html);
$table = $html->find('table', 1);
$tbody = $table->find('tbody', 0);
$tr = $tbody->find('tr');
$data = array();
$a = 0;
foreach ($tr as $key => $value) {
    $data[$a]['date'] = trim($value->find('td', 0));
    $data[$a]['time'] = trim($value->find('td', 0));
    $data[$a]['location'] = trim($value->find('td', 2));
    $data[$a]['status'] = trim($value->find('td', 1));
    $a++;
}
echo '<pre>';
print_r($data);
