<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$number = $_POST['number'];
if ($number == 80) {
    '正解！';
}else {
    '残念・・・';
}
$language = $_POST['language'];
if ($language == "PHP") {
    '正解！';
}else {
    '残念・・・';
}
$command = $_POST['command'];
if ($command == "select") {
    '正解！';
}else {
    '残念・・・';
}
?>

<link rel="stylesheet" href="css/style.css">

<p><?php echo $my_name; ?><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php 
$number = $_POST['number'];
if ($number == 80) {
    echo '正解！';
}else {
    echo '残念・・・';
}
?></p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php 
$language = $_POST['language'];
if ($language == "PHP") {
    echo '正解！';
}else {
    echo '残念・・・';
}
?></p>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php
$command = $_POST['command'];
if ($command == "select") {
    echo '正解！';
}else {
    echo '残念・・・';
}
?></p>