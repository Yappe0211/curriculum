<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$number = $_POST['number'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->