<html>
<?php

// 名前を取得
$name = "未入力";
if($_GET["name"] != ""){
	$name = $_GET["name"] . "さん";
}

// 年齢を取得
$age = "未入力";
if($_GET["age"] != ""){
	$age = $_GET["age"] . "歳";
}

// 住所を取得
$address = "未入力";
if($_GET["address"] != ""){
	$address = $_GET["address"];
}

// 問い1 回答結果を取得
$q1 = "未入力";
if(isset($_GET["q1"])){
	$q1 = $_GET["q1"];
}

// 問い2 回答結果を取得
$q2 = "未入力";
if(isset($_GET["q2"])){
	$q2 = $_GET["q2"];
}

// 問い3 回答結果を取得
$q3 = "未入力";
if(isset($_GET["q3"])){
	$q3 = $_GET["q3"];
}


?>
	<head>
		<title>送信結果</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="http://localhost/web/lesson01/css/wiki.css">
	</head>
	<body>
		<h1>アンケート結果</h1>
		<h2>基本情報</h2>
		<ul>
			<li>名前：<?php echo $name;?>
			<li>年齢：<?php echo $age;?>
			<li>住所：<?php echo $address;?>
		</ul>

		<h2>アンケート</h2>
		<ul>
			<li>毎日、朝食を食べていますか？&nbsp;&nbsp;回答：<?php echo $q1;?>
			<li>睡眠は6時間以上とっていますか？&nbsp;&nbsp;回答：<?php echo $q2;?>
			<li>週に1時間以上運動していますか？&nbsp;&nbsp;回答：<?php echo $q3;?>
		</ul>
	</body>
</html>
