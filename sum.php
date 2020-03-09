<?php

// 課題１

function double ($number) {
    $i = $number * 2;
    return $i;
}

echo double(3);
echo "\n";

// 課題２

function sum ($a, $b) {
    $i = $a + $b;
    return $i;
}

echo sum (3, 3);
echo "\n";

// 課題３

function a ($arr) {
    $value = 1;
    foreach ($arr as $b) {
        $value *= $b;
    }
    return $value;
}
$arr = array(1, 3, 5, 7, 9);
echo a ($arr);
echo "\n";

// 課題４

function max_array ($arr) {
    $arr = [10, 8, 6, 4, 2];
    $max_number = $arr[0];
    foreach ($arr as $a) {
    if ($max_number < $a) {
        $max_number = $a;
    }
    }
    
    return $max_number;
}
echo max_array ($arr);
echo "\n";

// 課題５

$html_body = "課題<br><p>課題</p><strong>課題</strong>";
$html_body = strip_tags($html_body);
echo $html_body;
echo "\n";

$fruits = ["apple", "orange", "melon",];
array_push($fruits, "banana", "pineapple");
print_r($fruits);
echo "\n;";

$country = ["JPN", "USA", "EU"];
$color = ["red", "blue", "yellow"];
$result = array_merge($country, $color);
print_r($result);
echo "\n";

echo mktime();
echo "\n";

$timestamp = mktime(21, 00, 10, 7, 15, 2019);
echo $timestamp;
echo "\n";

echo date('Y年m月d日 H時i日s秒', $timestamp);
echo "\n";