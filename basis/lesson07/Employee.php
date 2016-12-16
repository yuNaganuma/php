<?php
namespace basis\lesson07;
// 課題：PHP基礎Lesson07
// 作者：長沼 佑

// Employeeクラス
class Employee extends Person {
    private $setion;

    function __construct($name, $age, $section, $telephone) {
        $this->setName($name);
        $this->setAge($age);
        $this->setSection($section);
        $this->setTelephone($telephone);
    }
    // 出力メソッド
    public function printInfo(){
        echo "氏名:{$this->getName()}\n";
        echo "年齢:{$this->getAge()}\n";
        echo "所属部署名:{$this->getSection()}\n";
        echo "電話番号:{$this->getTelephone()}\n";
    }
    function setSection($section) {
        $this->section = $section;
    }
    function getSection() {
        return $this->section;
    }
}
?>