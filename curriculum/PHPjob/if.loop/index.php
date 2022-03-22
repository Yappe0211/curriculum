<?php
$age = 18;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}

echo '<br>';
$is_student = true;

if ($is_student) {
    echo 'あなたは学生です。';
}

echo '<br>';
$age = 24;
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
}
echo '<br>';
?>

<?php
echo '<br>';
//if文
$blood = 'B';
if ($blood == 'A') {
    echo "A型です";
} elseif ($blood == 'B') {
    echo "B型です";
} elseif ($blood == 'O') {
    echo "O型です";
} elseif ($blood == 'AB') {
    echo "AB型です";
} else {
    echo "A/B/O/ABから選択してください";
}
?>

<?php
echo '<br>';
//switch文
$blood = 'B';
switch ($blood) {
    case 'A':
        print'A型です';
        break;
    case 'B':
        print'B型です';
        break;
    case 'O':
        print'O型です';
        break;    
    case 'AB':
        print'AB型です';
        break;    
    default:
        echo'A/B/O/ABから選択してください';
}

echo '<br>';
echo '<br>';

$name = "";
if ($name != "") {
    echo '名前を受け付けました';
} else {
    echo '名前を入力してください';
}
?>

<?php
echo '<br>';
$name = "";

echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';
?>

<?php
echo '<br>';

$string = '1';
$int = 1;

if (1 === $string) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}
echo '<br>';
if (1 === $int) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}

echo '<br>';
echo '<br>';
?>

<?php

$name = 'taro';
$password = 'pass';

if ($name == 'taro' && $password == 'pass') {
    echo 'ログイン成功です。';
} elseif ($name == 'taro') {
    echo 'パスワードが間違っています。';
} elseif ($password == 'pass') {
    echo '名前が間違っています。';
} else {
    echo '入力情報が間違っています。';
}
?>

<?php
echo '<br>';
echo '<br>';
//while文
$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
}

//do...while文
echo '<br>';
$num = 0;
do {
    echo $num;
    $num++;
} while ($num < 10);

//for文
echo '<br>';
$num = 0;
($num < 10);
$num++;
($num < 10);
$num++;
($num < 10);

for ($i=0;$i<10;$i++) { 
    echo $num;
}

//break文
echo '<br>';
$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
    if ($num == 5) {
        break;
    }
}

echo '<br>';
$num = 0;
while ($num <= 100) {
    echo $num;
    $num++;
    echo '<br>';
}
?>