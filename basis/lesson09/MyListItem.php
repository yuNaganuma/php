<?php
// �ۑ�FPHP��bLesson09
// ��ҁF���� �C
class MyListItem {

    /**
     * next�ł�.
     */
    private $next;
    /**
     * item�ł�.
     */
    private $item;

    /**
     * �R���X�g���N�^.
     */
    function __construct() {
    }
    
    /**
     * next���擾���܂�.
     */
    function getNext() {
        return $this->next;
    }
    
    /**
     * �����Ŏw��̃I�u�W�F�N�g��next�ɐݒ肵�܂�.
     */
    function setNext($next) {
        $this->next = $next;
    }
    
    /**
     * item���擾���܂�.
     */
    function getItem() {
        return $this->item;
    }
    
    /**
     * �����Ŏw��̃I�u�W�F�N�g��item�ɐݒ肵�܂�.
     */
    function setItem($item) {
        $this->item = $item;
    }
}
?>