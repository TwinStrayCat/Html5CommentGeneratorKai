<?php
if(isset($_GET['url']) && preg_match('/^https?:\/\/gyazo/', $_GET['url'])){
    $endpoint = "https\:\/\/api\.gyazo\.com\/api\/oembed";
    echo file_get_contents($endpoint."\?url\=".$_GET['url']);
}
?>
