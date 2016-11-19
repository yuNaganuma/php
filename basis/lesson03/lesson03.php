<?php
namespace basis\lesson03;
// 課題：PHP基礎Lesson03
// 作者：長沼 佑

// 配列初期化
$datas = range(1,10);
// 配列ランダム並び替え
shuffle($datas);

echo "ソート前：";
foreach($datas as $data){
    echo $data . " ";
}
echo "<br>";

for($i = 0; $i < count($datas); $i++){
    for($j = 0; $j < count($datas) - $i - 1; $j++){
        if($datas[$j] > $datas[$j + 1]){
            // $datas[$j] > $datas[$j + 1]の場合、値を入れ替え
            $tmp = $datas[$j];
            $datas[$j] = $datas[$j + 1];
            $datas[$j + 1] = $tmp;
            echo "{$datas[$j + 1]}と{$datas[$j]}を交換<br>";
        }

    }
}

echo "ソート後：";
foreach($datas as $data){
    echo $data . " ";
}

?>