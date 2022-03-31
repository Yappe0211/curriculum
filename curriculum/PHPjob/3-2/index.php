<?php
$fruits = ["りんご", "みかん", "桃"];
var_dump($fruits);

echo '<br>';
#step1
foreach($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}
#step2
function Total($price, $number) {
    $total = $price * $number;
    print $total."円です。";
    echo '<br>';
}
Total (150,2);
Total (50,3);
Total (500,6);

#step3
$fruits = ["りんご" => "は300円です。", "みかん" => "は150円です。", "桃" => "は3000円です。"];
foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}

echo '<br>';



















#step3
$fruits = ["りんご", "みかん", "桃"];
$fruit_price = ["りんご" => 100 , "みかん" => 200, "桃" => 300 ];
$fruit_number = ["りんご" => 1 , "みかん" => 5, "桃" => 10 ];
foreach($fruits as $key => $value) {
    $price=$fruit_price[$value];
    $number=$fruit_number[$value];

    // echo '<br>';
    // echo $value;
    // echo '<br>';
    // echo $price;
    // echo '<br>';
    // echo $number;
    //$t=Total($price, $number);
    // echo '<br>';
    // print($t);
  // print ($value . "は" . $t . "円です。<br>");
}



// $fruit = [ "apple" => "りんご" , "orange" => "オレンジ", "grape" => "ぶどう" ];
// $fruit_prices = ["apple" => 100 , "orange" => 200, "grape" => 300 ];

// function Total2($fruit, $fruit_prices){
//     foreach($fruit as $key => $value){
//     $fruit_prices[$key];

//     print $value . "は英語で書くと" . $key . "です(価格：" . $fruit_prices[$key] . ")<br>";
// }
// }
// Total2($fruit, $fruit_prices);




?>