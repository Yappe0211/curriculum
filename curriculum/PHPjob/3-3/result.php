<?php
$my_number = $_GET['my_number'];
//$str = strlen($my_number);

$my_number_list = array(
    0,1,2,3,4,5,6,7,8,9
);

$my_number = $my_number_list[mt_rand(0,9)];

?>

<p><?php echo date("Y年m月d日", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $my_number; ?></p>
<p><?php 
if ($my_number == 0) {
    echo "凶";
} elseif ($my_number <= 3) {
    echo "小吉";
} elseif ($my_number <= 6) {
    echo "中吉";
} elseif ($my_number <= 8) {
    echo "吉";
} else {
    echo "大吉";
}?></p>