<?php
$num = array(array(3, 4, 5, 7), array(1, 2, 6, 8));
$sum = array($num[0][0] * $num[1][0], $num[0][1] * $num[1][1], $num[0][2] * $num[1][2], $num[0][3] * $num[1][3]);

echo $sum[2] . ", " . $sum[3] . ", " . $sum[0] . ", " . $sum[1];
?>