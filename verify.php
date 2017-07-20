<?php
$access_token = '5Z3kXvKm30Y8/yTuLMscjyC8T1ZBuxFq11s1y+SFBHtiR57fIuawD2D3Ee+8X2MnXqAvf0lOAtZhPguI7RWpdasaiqM/w+fqoar3NJvviArthB3JcZDQNqA4cBCNCMlJ2JJ7qDHrvi67AZRSAMZGZAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
