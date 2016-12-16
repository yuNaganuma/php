<?php
namespace basis\lesson06;
// 課題：PHP基礎Lesson06
// 作者：長沼 佑
require "Person.php";
require "Engineer.php";
require "Employee.php";

// 情報登録
$taro = new Person("佐藤太郎", "東京都", 20, "0303123456");
$hanako = new Employee("山田花子", 80, "金融システム部", "0170123456");
$jiro = new Engineer("木村 次郎", "京都府", 38, "java", "0750123456");

// printメソッドを使って出力
$taro->printInfo();
echo "\n";
$hanako->printInfo();
echo "\n";
$jiro->printInfo();

?>