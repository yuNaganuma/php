<?php
// �ۑ�FPHP��bLesson08
// ��ҁF���� �C

// ���l�̃��X�g
$list = array();

// ���������X�g�Ɋi�[
for($i = 1; $i < count($argv); $i++) {
    try {
        if(!is_numeric($argv[$i])){
            throw new InvalidArgumentException("\"$argv[$i]\"�͐��l�ł͂���܂���\n");
        }
        array_push($list, (int) $argv[$i]);
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}

// �o�u���\�[�g
for($i = 0; $i < count($list); $i++){
    for($j = 0; $j < count($list) - $i - 1; $j++){
        if($list[$j] > $list[$j + 1]){
            // $list[$j] > $list[$j + 1]�̏ꍇ�A�l�����ւ�
            $tmp = $list[$j];
            $list[$j] = $list[$j + 1];
            $list[$j + 1] = $tmp;
        }

    }
}

echo "���l�̈������\�[�g���܂����F";
$sep = "";
foreach($list as $data){
    echo $sep . $data;
    $sep = " ";
}

?>