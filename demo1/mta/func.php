<?php
header("Access-Control-Allow-Origin:*");

function sendRequest($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko)");
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");//加入gzip解析
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}

function getSign($params){
    $secret_key = '3c25e779e6b4fbbd33bfa6cfdb43233c';
    ksort($params);
    foreach ($params as $key => $value) {
    $secret_key.= $key.'='.$value;
    }
    $sign = md5($secret_key);
    return $sign;
}