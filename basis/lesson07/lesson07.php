<?php
namespace basis\lesson07;
// 課題：PHP基礎Lesson07
// 作者：長沼 佑
require "Person.php";
require "Engineer.php";
require "Employee.php";


$list = array();


// 情報追加
$taro = new Person("佐藤 太郎", "東京都", 20, "0303123456");
$hanako = new Employee("山田 花子", 80, "金融システム部", "0170123456");
$mura = new Employee("青木村", 18, "ＡＷＳ部", "0170123456");
$jiro = new Engineer("木村 次郎", "京都府", 38, "java", "0750123456");
$saburo = new Engineer("木村 三郎", "京都府", 37, "PHP", "0750869321");

array_push($list, $taro);
array_push($list, $hanako);
array_push($list, $mura);
array_push($list, $jiro);
array_push($list, $saburo);

// 一覧表示
foreach ($list as $data) {
    $data->printInfo();
}

echo "\n";

// 前方一致検索
$searchWord = "木村";
echo "前方一致検索をします\n";
echo "検索ワード：\"$searchWord\"\n";
$lineSep = "";
foreach ($list as $data) {
    if(strpos($data->getName(), $searchWord) === 0) {
        echo $lineSep;
        echo $data->getName();
        $lineSep = "\n";
    }

}

?>