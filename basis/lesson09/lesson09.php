<?php
// ‰Û‘èFPHPŠî‘bLesson09
// ìŽÒF’·À —C

require "MyListManager.php";

$list = new MyListManager();
$list->addtoLast(1);
$list->printItems();
$list->addtoLast(2);
$list->printItems();
$list->addtoLast(3);
$list->printItems();
$list->remove(0);
$list->printItems();
$list->remove(1);
$list->printItems();
$list->remove(0);
$list->printItems();

$list->addtoIndexPosition(3, 0);
$list->printItems();
$list->addtoIndexPosition(1, 0);
$list->printItems();
$list->addtoIndexPosition(2, 1);
$list->printItems();


?>