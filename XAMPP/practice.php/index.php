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

echo '<br>';
?>
<?php
$countries = ["America", "Japan", "China", "Koria"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
var_dump($countries);
echo '<br>';
/*array(4) {
    [0]=> string(7) "America",
    [1]=> string(5) "Japan"
    [2]=> string(5) "China"
    [3]=> string(5) "Koria"
}*/

echo '<br>';

$fruits = ["りんご", "みかん", "ぶどう"];
// 0番目のりんごを出力
echo $fruits[0];
echo '<br />';
// 1番目のみかんの出力
echo $fruits[1];
echo '<br />';
// 2番目のぶどうの出力
echo $fruits[2];
echo '<br />';
// 配列全体の出力
var_dump($fruits);
echo '<br>';
echo '<br>';
?>
<?php
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
// りんごの出力
echo $fruits["apple"];
// みかんの出力
echo $fruits["orange"];
// ぶどうの出力
echo $fruits["grape"];
echo '<br>';
var_dump($fruits);
echo '<br>';

// 追加 0、１、２、番目はもう使われているのでつぎは3番目
$fruits[3] = "もも";
$fruits[] = "もも";
var_dump($fruits);
echo '<br>';
echo '<br>';
?>
<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);
echo '<br>';
$colors[3] = "黄色";
$colors[] = "黄色";
var_dump($colors);
?>

<?php
echo '<br>';
echo '<br>';
$fruits = ["りんご", "みかん", "もも"];

echo $fruits[0];
echo $fruits[1];
echo $fruits[2];

echo '<br>';

foreach ($fruits as $value) {
    echo $value;
}
echo '<br>';

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
}

echo '<br>';
echo '<br>';
?>

<?php
$fruits = ["apple" => "といったらりんご", "orange" => "といったらみかん", "peach" => "といったらもも"];

foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}
?>

<?php
// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;
// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;
// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;

echo '<br>';

function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}

getTriangleArea(10,5);
getTriangleArea(15,8);
getTriangleArea(8,6);

echo '<br>';
?>

<?php
$myname = "ruby";

function sayHi($name = "goto"){
    //関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi!".$name." from ".$myname;
}

echo sayHi();
echo '<br>';
echo $myname;

echo '<br>';
echo '<br>';
?>

<?php
function getVolume($depth, $width, $height) {
    $area = $depth * $width * $height;
    print "直方体の体積は".$area."だよ。";
}
getVolume(5,10,8);
echo '<br>';
?>