<?php
//index.php
$x = 5.2;
echo ceil($x); //※切り上げ
echo '<br>';
echo floor($x); //※切り捨て
echo '<br>';
echo round($x); //※四捨五入
echo '<br>';
?>
<?php
// ※pi (円周率)
echo pi();
echo '<br>';

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
// 半径が2の円の面積の計算
circleArea(2);
echo '<br>';
?>
<?php
// ※乱数 ランダムで価を1つ出力
echo mt_rand(1, 100);
echo '<br>';
?>
<?php
// ※strlen 文字列の長さ
$str = "hogehoge";
echo strlen($str);
echo '<br>';

// ※strpos 検索
$str = "moriguchi";
echo strpos($str, "c");
// => 6と出力されるはず
echo '<br>';

// ※substr 文字列の切り取り
$str = "moriguchi";
echo substr($str, -2, 2);
// => hiと出力されるはず
// substr(対象の文字列, 開始位置, 文字数)
echo '<br>';

// ※str_replace 置換
$str = "moriguchi";
echo str_replace("rigu", "RIGU", $str);
// str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
echo '<br>';
$str = "I am moriguchi";
echo str_replace(" ", "", $str);
echo '<br>';
?>
<?php
$str = "あいうえお";
echo strlen($str);
// => 15 日本語はマルチバイト文字列
echo '<br>';
echo mb_strlen($str);
// => 5 mbはマルチバイトの略
echo '<br>';
?>

<?php
// ※printf フォーマット化した文字列を出力
$name = "森口さん";
$limit_number = 31;
$limit_time = 40;
$price = 4000;
echo $name."の残り時間はあと".$limit_number."です。";
echo '<br>';
printf("%sの残り時間はあと%dです。", $name, $limit_number);
// %記法 %s…文字列、%d…数値
echo '<br>';
printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
echo '<br>';
$limit_hour = 3;
$limit_minute = 1;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
// 桁数を2桁にしたいとき%02dと入力すると指定できる
echo '<br>';
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo '<br>';
?>

<?php
// 便利な関数 (配列)
// ※count 要素の数を数える
$members = ["moriguchi", "yamanaka", "hasimoto", "ishikura", "kawai"];
echo count($members);// => 5
echo '<br>';
// ※sort 要素の並べ替え
sort($members);
var_dump($members);
echo '<br>';
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo '<br>';
// ※in_array 配列に中にある要素が存在しているか
var_dump(in_array("moriguchi", $members));
echo '<br>';
/* in_array(調べたい文字もしくは数値, 対象の配列)
論理値が結果として返る => bool(true)*/
if (in_array("moriguchi", $members)) {
    echo "森口さんがいるよ！";
} else {
    echo "森口さんはいないよ！";
}
echo '<br>';
// ※implode 配列を結合して文字列に変換
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';
$atstr = implode($members);
var_dump($atstr);
echo '<br>';
// ※explode 文字列を指定の区切りで配列にする
$re_members = explode("@", $atstr);
var_dump($re_members);
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
?>

<?php
echo '<br>';
echo time();
/*現在時刻は1970/1/1 0:00:00 から
これは「1970/1/1 00:00:00からの経過秒数」のこと*/
var_dump(time());
echo '<br>';
// ※date タイムスタンプから日付を戻す
echo date("Y-m-d H:i:s", time());
echo date("Y年m月d日 H時i分s秒", time());
echo '<br>';
// ※strtotime 特定日付のタイムスタンプを取得
echo strtotime("2017/2/16 11:25:00");
echo '<br>';
// 先週の日曜日
echo strtotime("last Sunday");
echo '<br>';
// 2日後
echo strtotime("+2 day");

echo "<br>";
echo "<br>";
?>

<?php
function devide($int1,$int2) {
    try {
        if($int2 == 0) {
            throw new Exception('0で割ることはできません。');
        }
        return $int1 / $int2;
    } catch(Exception $e) {
        echo "例外処理が発生しました";
        echo "<br>";
        echo $e->getMessage();
    }
}

echo devide(5, 0);

echo "<br>";
?>

<?php
class Taiyaki {
    public $content;

    public function __construct($nakami) {
        $this->content = $nakami;
    }

    public function whatIsContent() {
        echo '中身は'.$this->content.'だよ。';
    }
}
//あんこのたい焼き
$taiyaki_anko = new Taiyaki("あんこ");
$taiyaki_anko->whatIsContent();
//クリームのたい焼き
$taiyaki_cream = new Taiyaki("クリーム");
$taiyaki_cream->whatIsContent();

echo "<br>";
?>
<?php
echo "<br>";

class Enemy {
    public $name;
    public $stamina;
    public $attack;
    public static $count = 0;

    public function __construct($name, $stamina = 100, $attack = 10) {
        $this->name = $name;
        $this->stamina = $stamina;
        $this->attack = $attack;
        Self::$count += 1;
    }

    public static function getEnemyCount() {
        echo Self::$count.'体の敵を作りました！';
    }

    public function sayMyName() {
        echo $this->name.'があらわれた！</br>';
    }
    public function powerUp() {
        $this->attack += 10;
        echo '攻撃力が'.$this->attack.'になった。</br>';
    }    
}
class Boss extends Enemy {
    public function sayMyName() {
        echo 'ボスの'.$this->name.'があらわれた！';
    }
    public function specialAttack() {
        echo 'すごい強い一撃！</br>';
    }
}
Enemy::getEnemyCount();
$slime_A = new Enemy('スライム');
$slime_B = new Enemy('スライム');
$slime_C = new Enemy('スライム');
$slime_D = new Enemy('スライム');
Enemy::getEnemyCount();
//Enemyクラスからのスライムを作る
$slime = new Enemy('スライム');
$slime->sayMyName();

$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();
$slime->powerUp();

echo $slime->stamina;
echo $slime->attack;

echo '</br>';

$kuribo = new Enemy('クリボー', 200, 10);
echo $kuribo->stamina;
echo $kuribo->attack;

echo '</br>';

$boss = new Boss('竜王');
$boss->sayMyName();
$boss->specialAttack();

?>