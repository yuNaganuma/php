<?php
// �ۑ�FPHP��bLesson09
// ��ҁF���� �C

require "MyListItem.php";

class MyListManager {
    /**
     * firstItem�ł�.
     */
    private $firstItem;
    
    /**
     * �R���X�g���N�^.
     */
    function __construct() {
        $this->firstItem = new MyListItem();
    }

    /**
     * �����Ŏw�肳�ꂽ�I�u�W�F�N�g�����X�g�̖����ɒǉ����܂�.
     */
    function addtoLast($num) {
        $position = $this->firstItem;
        // ���X�g�̖����܂ňړ�����
        while($position->getNext() != null) {
            $position = $position->getNext();
        }
        // �����ɗv�f��ǉ�����
        $myListItem = new MyListItem();
        $myListItem->setItem($num);
        $position->setNext($myListItem);
    }
    
    /**
     * �����Ŏw�肳�ꂽ�I�u�W�F�N�g�������Ŏw�肳�ꂽ�ʒu�ɒǉ����܂�.
     */
    function addToIndexPosition($num, $index) {
    
        // �w��ʒu��0�����̏ꍇ�͗�O���X���[
        if ($index < 0) {
            throw new OutOfBoundsException("�w�肳�ꂽ�ʒu�ɒǉ��ł��܂���i�ʒu=$index�j");
        }
        
        // �w��ʒu�܂ňړ�����
        $position = $this->firstItem;
        for($i = 0; $i < $index; $i++) {
            if($position->getNext() != null) {
                $position = $position->getNext();
            } else {
                // �w��ʒu�����X�g�T�C�Y�𒴂��Ă���ꍇ�A��O���X���[����
                throw new OutOfBoundsException("�w�肳�ꂽ�ʒu�ɒǉ��ł��܂���i�ʒu=$index�j");
            }
        }
        
        // �w��ʒu�ɗv�f��ǉ�����
        $item = new MyListItem();
        $item->setItem($num);
        $item->setNext($position->getNext());
        $position->setNext($item);
    }
    
    /**
     * �����Ŏw�肳�ꂽ�ʒu�̃I�u�W�F�N�g���폜���܂�.
     */
    function remove($index) {

        // �w��ʒu��0�����̏ꍇ�͗�O���X���[
        if ($index < 0) {
            throw new OutOfBoundsException("�w�肳�ꂽ�ʒu�͍폜�ł��܂���i�ʒu=$index�j");
        }
        
        // �w��ʒu�܂ňړ�����
        $position = $this->firstItem;
        for($i = 0; $i < $index; $i++) {
            if($position->getNext() != null) {
                $position = $position->getNext();
            } else {
                throw new OutOfBoundsException("�w�肳�ꂽ�ʒu�͍폜�ł��܂���i�ʒu=$index�j");
            }
        }
        
        // �w��ʒu�����X�g����O��
        $position->setNext($position->getNext()->getNext());
    }
    
    /**
     * �ێ����Ă��邷�ׂẴf�[�^��擪���珇�ɏo�͂��܂�.
     */
    function printItems() {
        $position = $this->firstItem->getNext();
        if($position != null) {
            while($position != null) {
                echo "{$position->getItem()}\n";
                $position = $position->getNext();
            }
        } else {
            echo "���X�g�Ƀf�[�^���o�^����Ă��܂���";
        }
        echo "\n";
    }
}
