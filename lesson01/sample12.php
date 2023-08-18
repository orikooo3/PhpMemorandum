<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 9) : ?>
    <p>※ 営業時間外です</p>
<?php else : ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php
$s = 'アイウエオ';
if($s): // $s !== ''と同じ
    echo '$sには文字が入っています' . '<br>';
endif;
?>

<?php
$x = 0;
if($x): //$s !== 0と同じ
    echo '$xは0ではありません' . '<br>';
endif;
?>

<?php
$s = '';
if(!$s): // $s === ''と同じ
    echo '$sには文字が入っていません' . '<br>';
endif;
?>

<?php
$x = 0;
if(!$x): //$s === 0と同じ
    echo '$xは0です' . '<br>';
endif;
?>