<?php
namespace basis\lesson05;
// 課題：PHP基礎Lesson05
// 作者：長沼 佑
require "Person.php";
use basis\lesson05\Person;

// Person情報を配列に登録する
$arr = array();
array_push($arr, $taro = new Person("佐藤太郎","東京都","20","030123456"));
array_push($arr, $hanako = new Person("山田花子","青森県","80","0170123456"));
array_push($arr, $jiro = new Person("木村 次郎","京都府","38","0750123456"));

// 出力
foreach($arr as $data){
    $data->printInfo();
    echo "\n";
}  

?>
