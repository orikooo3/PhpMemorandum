<?php
$xmlTree = simplexml_load_file('rss.xml');

echo $xmlTree->channel;