<?php
// 課題：PHP基礎Lesson08
// 作者：長沼 佑

// 数値のリスト
$list = array();

// 引数をリストに格納
for($i = 1; $i < count($argv); $i++) {
    try {
        if(!is_numeric($argv[$i])){
            throw new InvalidArgumentException("\"$argv[$i]\"は数値ではありません\n");
        }
        array_push($list, (int) $argv[$i]);
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

// バブルソート
for($i = 0; $i < count($list); $i++){
    for($j = 0; $j < count($list) - $i - 1; $j++){
        if($list[$j] > $list[$j + 1]){
            // $list[$j] > $list[$j + 1]の場合、値を入れ替え
            $tmp = $list[$j];
            $list[$j] = $list[$j + 1];
            $list[$j + 1] = $tmp;
        }

    }
}

echo "数値の引数をソートしました：";
$sep = "";
foreach($list as $data){
    echo $sep . $data;
    $sep = " ";
}

?>