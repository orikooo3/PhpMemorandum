<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);

echo $json->title;
?>