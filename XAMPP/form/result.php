<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];
//Svar_dump($_GET);
//method=getなので、 GET通信 送信したデータの値を見ることができるのがGETの特徴
/*method属性をpost POST通信 パスワードなど、見られたくない情報もありますよね？
そういうときに使用するのが POST です*/
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<p>メールアドレスは、<?php echo $email; ?></p>

<?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    ?>
    <p>私の名前は<?php echo $my_name; ?>です。</p>
    <p>パスワードは<?php echo $password; ?>です。</p>
    <p>性別は<?php echo $sex; ?>です。</p>
    <p>性別は<?php echo $hidden_param; ?>です。</p>

<?php
$my_name = $_GET['my_name'];
$goods = $_GET['goods'];
$number = $_GET['number'];
?>
<p>お名前：<?php echo $my_name; ?></p>
<p>ご希望景品<?php echo $goods; ?></p>
<p>個数：<?php echo $number; ?></p>