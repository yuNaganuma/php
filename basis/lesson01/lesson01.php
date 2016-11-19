<?php
namespace basis\lesson01;
// 課題：PHP基礎Lesson01
// 作者：長沼 佑

// 1～100まで繰り返し、3の倍数、または、3の付く数字の場合、出力する
for ($i = 1; $i <= 100;$i++){
    if($i % 3 == 0 || strpos($i,"3") !== false){
        echo $i . " ";
    }
}

?>