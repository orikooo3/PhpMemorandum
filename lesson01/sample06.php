<?php
$num = 100 + 1050 * 2;
$num += 100;
echo $num;
?>
<p>合計金額は、<?php echo $num; ?>円です</p>
<p>税込金額は、<?php echo $num * 1.1; ?>円です</p>