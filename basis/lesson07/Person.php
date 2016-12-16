<?php
namespace basis\lesson07;
// 課題：PHP基礎Lesson07
// 作者：長沼 佑

// Personクラス
class Person{
    private $name;//氏名
    private $address;//住所
    private $age;//年齢
    private $telephone;//電話番号

    // コンストラクタ
    public function __construct($name, $address, $age, $telephone){
        $this->setName($name);
        $this->setAddress($address);
        $this->setAge($age);
        $this->setTelephone($telephone);
    }

    // 出力メソッド
    public function printInfo(){
        echo "氏名:{$this->getName()}\n";
        echo "住所:{$this->getAddress()}\n";
        echo "年齢:{$this->getAge()}\n";
        echo "電話番号:{$this->getTelephone()}\n";
    }
    
    function setName($name) {
        $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    function setAddress($address) {
        $this->address = $address;
    }
    function getAddress() {
        return $this->address;
    }
    function setAge($age) {
        $this->age = $age;
    }
    function getAge() {
        return $this->age;
    }
    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    function getTelephone() {
        return $this->telephone;
    }
}
?>