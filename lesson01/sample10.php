<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
date_default_timezone_set('Asia/Tokyo');
$week = date('w');
echo $week_name[$week];
?>