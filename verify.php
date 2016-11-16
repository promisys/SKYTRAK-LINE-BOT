<?php
$access_token = '12XlJdQJZPkrnkD02IyBprbTLci+ty02Kvou0Prf2SeDTzBaauwDxOq0/QNOtmHO9afLR0Kyj34wZ8brcmJ0EiyMo62FR10cg4Wgz5/s5bMIvjcAUiXj10BtKKLvH1HLXPeZc4Gi2OhKwdqXoV3JmAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;