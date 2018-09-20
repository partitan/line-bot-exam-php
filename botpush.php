<?php



require "vendor/autoload.php";


$access_token = 'CEdTKiv9KD/q/C4xWu9hEUbI/RxXH026qprWmcyqgGwuFz6fXfXPuo+ND2WPBNiGDgjSRjtXHiZDaKp62GfpwKjm5/GBdcI4LuvzkB1rFfTzSBtkLaN6/xxE9EU8A0/Mf4+rQb4ZiMOH9eij2kFeFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e75e3b8c53e2943ed4f419fe5a7688bc';

$pushID = 'ea6d242edcb346d6b7bc7b5068e25a93';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







