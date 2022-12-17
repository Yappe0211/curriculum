<?php
session_start();
require_once("getData.php");
connect();
$data=new getData();
$user_data=$data->getUserData();
$post_data=$data->getPostData();
?>


<!doctype html>
<html>
    <head>
        <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="header">
        <div class="logo">
            <img src="Y&I Group Inc_logo.png" alt="ロゴ">
        </div>
        <div class="users">
            <div class="name">ようこそ<?php echo $user_data['last_name'].$user_data['first_name'];
            ?>さん</div>
            <div class="login">最終ログイン日：
                <?PHP echo $user_data['last_login'];
                ?></div>
        </div>
    </div>
    <table>
        <tr class="title">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($post_data as $post){?>
        <tr class="content">    
            <td><?PHP echo $post['id'];?></td>
            <td><?PHP echo $post['title'];?></td>
            <td><?PHP if($post['category_no']==1){
                echo "食事";
            } elseif($post['category_no']==2){
                echo "旅行";
            } else {
                echo "その他";
            }?></td>
            <td><?PHP echo $post['comment'];?></td>
            <td><?PHP echo $post['created'];?></td>
        </tr>
        <?php }?>

    </table>
    </body>
    <footer>Y&I group.inc</footer>
</html>
