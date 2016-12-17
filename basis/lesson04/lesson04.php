<?php
namespace basis\lesson04;
// 課題：PHP基礎Lesson04
// 作者：長沼 佑
require "Person.php";
use basis\lesson04\Person;

// Person情報登録
$taro = new Person("佐藤太郎","東京都","20","030123456");

$hanako = new Person("山田花子","青森県","80","0170123456");

$jiro = new Person("木村 次郎","京都府","38","0750123456");

// printメソッドを使って出力
$taro->printInfo();
echo "\n";
$hanako->printInfo();
echo "\n";
$jiro->printInfo();

?>
