<?php

// 問題１
$name = "Kazuya";
if ($name =="Kazuya") {
    echo "私はあなたの名前です";
}else {
   echo "あなたの名前ではありません";
}
echo "\n";

// 問題２

$total = 0;

for ($i = 1; $i <= 10000; $i++){
    $total += $i;
}

echo $total;
echo"\n";

// 問題３

$fruits = array("apple", "banana", "strawberry", "pear", "pineapple");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題４

$start = 1;

$end = 100;

for ($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
echo "\n";

