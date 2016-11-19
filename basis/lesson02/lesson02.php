<?php
namespace basis\lesson02;
// 課題：PHP基礎Lesson02
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

for($i = 0; $i < count($datas) -1; $i++){
	$min_index = $i;//最小値のインデックス
	for($j = $i + 1; $j < count($datas); $j++){
		if($datas[$min_index] > $datas[$j]){
			// インデックスを入れ替え
			$min_index = $j;
		}
	}

	//対象値と最小値と入れ替え
	if($min_index != $i)  {
		$tmp = $datas[$i];
		$datas[$i] = $datas[$min_index];
		$datas[$min_index] = $tmp;

		echo "{$datas[$min_index]}と{$datas[$i]}を交換<br>";
	}
}

echo "ソート後：";
foreach($datas as $data){
	echo $data . " ";
}

?>