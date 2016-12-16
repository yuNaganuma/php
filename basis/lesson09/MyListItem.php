<?php
// 課題：PHP基礎Lesson09
// 作者：長沼 佑
class MyListItem {

    /**
     * nextです.
     */
    private $next;
    /**
     * itemです.
     */
    private $item;

    /**
     * コンストラクタ.
     */
    function __construct() {
    }
    
    /**
     * nextを取得します.
     */
    function getNext() {
        return $this->next;
    }
    
    /**
     * 引数で指定のオブジェクトをnextに設定します.
     */
    function setNext($next) {
        $this->next = $next;
    }
    
    /**
     * itemを取得します.
     */
    function getItem() {
        return $this->item;
    }
    
    /**
     * 引数で指定のオブジェクトをitemに設定します.
     */
    function setItem($item) {
        $this->item = $item;
    }
}
?>