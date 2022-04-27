<!-- 書き込み -->
<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    
    echo "writable!!";
    echo '<br>';

    $fp = fopen($testFile, "a");
    fwrite($fp, $contents);
    fclose($fp);
    echo "finish writing!!";
} else {
    echo "not writable!";
    exit;
}
?>
<!-- 読み込み -->
<?php
echo '<br>';
$test_file = "test2.txt";


if (is_readable($test_file)) {
    $fp = fopen($test_file, "r");
    while ($line = fgets($fp)) {
        echo $line.'<br>';
    }
    fclose($fp);
} else {
    echo "not readable!";
    exit;
}

?>