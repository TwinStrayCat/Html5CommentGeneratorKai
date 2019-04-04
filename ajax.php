<?php
if(isset($_GET['url']) && preg_match('/^https?:\/\/gyazo/', $_GET['url'])){
    $endpoint = "https\:\/\/api\.gyazo\.com\/api\/oembed";
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$endpoint."\?url\=".$_GET['url']);
    $res = curl_exec($curl);
    curl_close($curl);
    echo json_encode($res);
}
?>