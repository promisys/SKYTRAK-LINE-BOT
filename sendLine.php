<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('12XlJdQJZPkrnkD02IyBprbTLci+ty02Kvou0Prf2SeDTzBaauwDxOq0/QNOtmHO9afLR0Kyj34wZ8brcmJ0EiyMo62FR10cg4Wgz5/s5bMIvjcAUiXj10BtKKLvH1HLXPeZc4Gi2OhKwdqXoV3JmAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '4ec5c6708242518667708cdd818c15d6']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('a.mathuros', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();