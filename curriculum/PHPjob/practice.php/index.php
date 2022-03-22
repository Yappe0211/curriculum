<?php
echo '<br>';
echo "hello" . "world";
$hello = "Hello";
$world = "World!!";
echo $hello.$world;

echo '<br>';
echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>';
$x = 1;
$x++;
echo $x;
echo '<br>';
$x = -1;
$x--;
echo $x;
echo'<br>';
$x = 0;
$x += 5;
echo $x;
echo '<br>';
$x *= 6;
echo $x;

?>


<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
// index.php
$message = "Hello World!";
var_dump($message);

$x = 8;
$y = 5.55;
echo '<br>';
var_dump($x);
echo '<br>';
var_dump($y);

$flag = true;
echo '<br>';
var_dump($flag);

$emp = null;
echo '<br>';
var_dump($emp);

$en_words = 'Hello World';
echo '<br>';
var_dump($en_words);
$ja_words = 'こんにちは';
echo '<br>';
var_dump($ja_words);

$a = "山田";
echo '<br>';
echo $a;
$name = '山田';
echo "こんにちは。$name さん";

echo '<br>';
$color = 'blue';
echo "Sky is ${color}color";

define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);
echo '<br>';
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;
?>

<?php
echo '<br>';
echo '<br>';

$country_1 = "America";
$country_2 = "Jaran";
$country_3 = "China";
$country_4 = "Koria";

echo $country_1;
echo $country_2;
echo $country_3;
echo $country_4;
?>