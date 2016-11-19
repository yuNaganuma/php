<?php
namespace basis\lesson06;
// 課題：PHP基礎Lesson06
// 作者：長沼 佑

// Engineerクラス
class Engineer extends Person{
    private $name;// 氏名
    private $address;// 住所
    private $age;// 年齢
    private $skill;// 保有技術
    private $telephone;// 電話番号

    // コンストラクタ
    function __construct($name, $address, $age, $skill, $telephone) {
        $this->setName($name);
        $this->setAddress($address);
        $this->setAge($age);
        $this->setSkill($skill);
        $this->setTelephone($telephone);
    }
    // 出力メソッド
    public function printInfo(){
        echo "氏名:{$this->getName()}<br>";
        echo "住所:{$this->getAddress()}<br>";
        echo "年齢:{$this->getAge()}<br>";
        echo "保有技術:{$this->getSkill()}<br>";
        echo "電話番号:{$this->getTelephone()}<br>";
    }
    function setSkill($skill) {
        $this->skill = $skill;
    }
    function getSkill() {
        return $this->skill;
    }
}
?>