<form action="result.php" method="post">
    名前：<input type="text" name="my_name" />
    <br>
    メールアドレス：<input type="text" name="email" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    <input type="submit" value="送信" />
</form>

<form action="result.php" method="post">
    お名前：<input type="text" name="my_name" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
    <br>
    <input type="hidden" name="hidden_param" value="隠しパラメータから" />
    <br>
    年齢：
    <select name="age">
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
    </select>
    <br>
    <select name="number">
        <?php for ($i=1; $i<=10; $i++) { ?>
            <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
        <?php } ?>
    </select>
    <input type="submit" value="送信するよ！" />
</form>

<form action="result.php" method="get">
    お名前：<input type="text" name="my_name" />
    <br>
    ご希望商品：
    <input type="radio" name="goods" value="A賞">A賞
    <input type="radio" name="goods" value="B賞">B賞
    <input type="radio" name="goods" value="C賞">C賞
    <br>
    個数：<select name="number">
        <?php for ($i=1; $i <=10 ; $i++) {  ?>
            <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込" />
</form>