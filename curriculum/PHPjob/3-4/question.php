<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$number = array(80,22,20,21);
$language = array("PHP","Python","JAVA","HTML");
$command = array("join","select","insert","update");
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer = $number[2];
$answer = $language[0];
$answer = $command[0];
?>
<link rel="stylesheet" href="css/style.css">

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
    <h2>①ネットワークのポート番号は何番？</h2>
    <?php 
    $number = [80,22,20,21];
    foreach ($number as $value) { ?> 
        <input type="radio" name="number" value=<?php echo $value; ?> />
        <?php echo $value; ?>
    <?php } ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <?php
    $language = ["PHP","Python","JAVA","HTML"];
    foreach ($language as $value) { ?>
        <input type="radio" name="language" value="<?php echo $value; ?>"/>
        <?php echo $value; ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php
    $command = ["join","select","insert","update"];
    foreach ($command as $value) { ?>
        <input type="radio" name="command" value="<?php echo $value; ?>"/>
        <?php echo $value; ?>
    <?php } ?>
    <br>
    <input type="submit" value="回答する" />
</form>

<!-- 問題の正解の変数と名前の変数を[answer.php]に送る -->