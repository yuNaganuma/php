<?php
namespace basis\lesson06;
// 課題：PHP基礎Lesson06
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
        echo "氏名:{$this->getName()}<br>";
        echo "年齢:{$this->getAge()}<br>";
        echo "所属部署名:{$this->getSection()}<br>";
        echo "電話番号:{$this->getTelephone()}<br>";
    }
    function setSection($section) {
        $this->section = $section;
    }
    function getSection() {
        return $this->section;
    }
}
?>