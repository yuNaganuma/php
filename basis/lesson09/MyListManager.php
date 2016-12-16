<?php
// 課題：PHP基礎Lesson09
// 作者：長沼 佑

require "MyListItem.php";

class MyListManager {
    /**
     * firstItemです.
     */
    private $firstItem;
    
    /**
     * コンストラクタ.
     */
    function __construct() {
        $this->firstItem = new MyListItem();
    }

    /**
     * 引数で指定されたオブジェクトをリストの末尾に追加します.
     */
    function addtoLast($num) {
        $position = $this->firstItem;
        // リストの末尾まで移動する
        while($position->getNext() != null) {
            $position = $position->getNext();
        }
        // 末尾に要素を追加する
        $myListItem = new MyListItem();
        $myListItem->setItem($num);
        $position->setNext($myListItem);
    }
    
    /**
     * 引数で指定されたオブジェクトを引数で指定された位置に追加します.
     */
    function addToIndexPosition($num, $index) {
    
        // 指定位置が0未満の場合は例外をスロー
        if ($index < 0) {
            throw new OutOfBoundsException("指定された位置に追加できません（位置=$index）");
        }
        
        // 指定位置まで移動する
        $position = $this->firstItem;
        for($i = 0; $i < $index; $i++) {
            if($position->getNext() != null) {
                $position = $position->getNext();
            } else {
                // 指定位置がリストサイズを超えている場合、例外をスローする
                throw new OutOfBoundsException("指定された位置に追加できません（位置=$index）");
            }
        }
        
        // 指定位置に要素を追加する
        $item = new MyListItem();
        $item->setItem($num);
        $item->setNext($position->getNext());
        $position->setNext($item);
    }
    
    /**
     * 引数で指定された位置のオブジェクトを削除します.
     */
    function remove($index) {

        // 指定位置が0未満の場合は例外をスロー
        if ($index < 0) {
            throw new OutOfBoundsException("指定された位置は削除できません（位置=$index）");
        }
        
        // 指定位置まで移動する
        $position = $this->firstItem;
        for($i = 0; $i < $index; $i++) {
            if($position->getNext() != null) {
                $position = $position->getNext();
            } else {
                throw new OutOfBoundsException("指定された位置は削除できません（位置=$index）");
            }
        }
        
        // 指定位置をリストから外す
        $position->setNext($position->getNext()->getNext());
    }
    
    /**
     * 保持しているすべてのデータを先頭から順に出力します.
     */
    function printItems() {
        $position = $this->firstItem->getNext();
        if($position != null) {
            while($position != null) {
                echo "{$position->getItem()}\n";
                $position = $position->getNext();
            }
        } else {
            echo "リストにデータが登録されていません";
        }
        echo "\n";
    }
}
