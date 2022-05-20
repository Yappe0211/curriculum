<?php
$my_number = $_GET['my_number'];

// print($my_number);
// $str = $my_number;
// print($str);
$split = str_split($my_number,1);
// print_r($split);
// echo '<br>';

// var_dump($split);

$my_number = array_rand($split, 1);
echo '<br>';

// print($my_number);
$my_number = $split[$my_number];
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