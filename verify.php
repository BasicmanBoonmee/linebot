<?php
$access_token = 'qHrTqVT/bSCXzWZxEoJKN3M/L3AFcc22bG/Nksp3GpJNJCqWJi8p8Z2XMmrgjoFEb97JF7R5kSAAprv7K4KGPyIRnsT/hJPdIvyBcOMHN6mw2fHr/45UCWB/HiR72oJst79wfFnoU9bg7nb+kSaGagdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;