<?php
	require_once __DIR__ . '/vendor/autoload.php';

    $access_token = 'qHrTqVT/bSCXzWZxEoJKN3M/L3AFcc22bG/Nksp3GpJNJCqWJi8p8Z2XMmrgjoFEb97JF7R5kSAAprv7K4KGPyIRnsT/hJPdIvyBcOMHN6mw2fHr/45UCWB/HiR72oJst79wfFnoU9bg7nb+kSaGagdB04t89/1O/w1cDnyilFU=';

    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'be68d4c33c85989848aca09ea9acb875']);

    $content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);

    if (!is_null($events['events'])) {
        foreach ($events['events'] as $event) {
            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
            $response = $bot->replyMessage($event['replyToken'], $textMessageBuilder);
        }
    }

    /*$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'be68d4c33c85989848aca09ea9acb875']);

    echo "TEST";
    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');

    //$response = $bot->replyMessage('<reply token>', $textMessageBuilder);
    $response = $bot->pushMessage("@jpz2894z",$textMessageBuilder);
    if ($response->isSucceeded()) {
        echo 'Succeeded!';
        return;
    }*/

    // Failed
    //echo $response->getHTTPStatus . ' ' . $response->getRawBody();



// Get POST body content
/*$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
    // Loop through each event
    foreach ($events['events'] as $event) {
        // Reply only when message sent is in 'text' format
        if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
            // Get text sent
            $text = $event['message']['text'];
            // Get replyToken
            $replyToken = $event['replyToken'];

            // Build message to reply back
            $messages = [
                'type' => 'text',
                'text' => "TEST"
            ];

            // Make a POST Request to Messaging API to reply to sender
            $url = 'https://api.line.me/v2/bot/message/reply';
            $data = [
                'replyToken' => $replyToken,
                'messages' => [$messages],
            ];
            $post = json_encode($data);
            $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $result = curl_exec($ch);
            curl_close($ch);

            echo $result . "\r\n";
        }
    }
}
echo "OK";*/

?>