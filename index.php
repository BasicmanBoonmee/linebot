<?php
	require_once __DIR__ . '/vendor/autoload.php';



    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('qHrTqVT/bSCXzWZxEoJKN3M/L3AFcc22bG/Nksp3GpJNJCqWJi8p8Z2XMmrgjoFEb97JF7R5kSAAprv7K4KGPyIRnsT/hJPdIvyBcOMHN6mw2fHr/45UCWB/HiR72oJst79wfFnoU9bg7nb+kSaGagdB04t89/1O/w1cDnyilFU=');
	$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'be68d4c33c85989848aca09ea9acb875']);
		
		//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
		$response = $bot->replyMessage('ทดสอบ', 'test');
		if ($response->isSucceeded()) {
			echo 'Succeeded!';
			return;
		}

		echo "<p>Test1</p>";
		
		// Failed
		echo $response->getHTTPStatus . ' ' . $response->getRawBody();
?>