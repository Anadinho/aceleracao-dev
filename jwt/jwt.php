<?php
//key private
$key = "Ajhdkajsg665612AAA8]0";

$header = [
    'typ' => 'jwt',
    'alg' => 'HS256'
];

$payload = [
    'exp' => (new DateTime("now"))->getTimestamp(),
    'uid' => 1,
    'email' => 'gabriel@email.com',
    'nivelUsuario' => 'adm',
    'listaFavorito' => 'lista2',
];

//convert JSON
$header = json_encode($header);
$payload = json_encode($payload);

//encrypted base 64
$header = base64_encode($header);
$payload = base64_encode($payload);

//ass
$sign = hash_hmac('sha256', $header. "." . $payload, $key, true);
$sign = base64_encode($sign);

print $header . "." . $payload . "." . $sign;