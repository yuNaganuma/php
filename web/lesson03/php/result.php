<html>
<?php
// セッション開始
session_start();

if(empty($_SESSION["id"])) {
	// 未ログインの場合login.phpにリダイレクトする
	header('location: login.php');
	exit();
}

try {

	// データベースに接続
	$pdo = new PDO(
		'mysql:dbname=my_database;host=localhost;charset=utf8',
		'my_user',
		'my_password',
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]
	);
	
	$tableInfo = "指定されたテーブルにはデータが登録されていません。";
	if(isset($_POST["item_buttom"])) {
		// itemテーブル全情報取得
		$stmt = $pdo->query('SELECT * FROM item');
		
		if(count($stmt) > 0) {
			// html形式に整形
			$tableInfo = "<table class=\"table_span center\"><tr><th>item_no</th><th>item_name</th><th>price</th><th>item_detail</th></tr>";
			while ($row = $stmt->fetch()) {
				$tableInfo .= "<tr>";
				$tableInfo .= "<td>{$row["item_no"]}</td>";
				$tableInfo .= "<td>{$row["item_name"]}</td>";
				$tableInfo .= "<td>{$row["price"]}</td>";
				$tableInfo .= "<td>{$row["item_detail"]}</td>";
				$tableInfo .= "</tr>";
			}
			$tableInfo .= "</table>";
		}
	} else if (isset($_POST["item_order_buttom"])) {
		// item_orderテーブル全情報取得
		$stmt = $pdo->query('SELECT * FROM item_order');
		
		if(count($stmt) > 0) {
			// html形式に整形
			$tableInfo = "<table class=\"table_span center\"><tr><th>order_no</th><th>item_no</th><th>quantity</th><th>staff_no</th><th>order_date</th></tr>";
			while ($row = $stmt->fetch()) {
				$tableInfo .= "<tr>";
				$tableInfo .= "<td>{$row["order_no"]}</td>";
				$tableInfo .= "<td>{$row["item_no"]}</td>";
				$tableInfo .= "<td>{$row["quantity"]}</td>";
				$tableInfo .= "<td>{$row["staff_no"]}</td>";
				$tableInfo .= "<td>{$row["order_date"]}</td>";
				$tableInfo .= "</tr>";
			}
			$tableInfo .= "</table>";
		}
	}
} catch (PDOException $e) {
	// 接続エラーのためMock表示
	$tableInfo = "エラーですが本当ならこんな感じで表示されます。";
	$tableInfo .= "<table class=\"table_span center\"><tr><th>item_no</th><th>item_name</th><th>price</th><th>item_detail</th></tr>";
	$tableInfo .= "<tr><td>0001</td><td>ボールペン</td><td>1000</td><td>10色</td></tr>";
	$tableInfo .= "<tr><td>0002</td><td>筆ペン</td><td>300</td><td></td></tr>";
	$tableInfo .= "<tr><td>0003</td><td>鉛筆</td><td>80</td><td>HB</td></tr>";
	$tableInfo .= "</table>";
	// exit($e->getMessage()); 

}

?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>トップページ</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/web/lesson03/css/wiki.css">
	</head>
	<body>
		<h1>結果</h1>
		<div class="header">
			<div>ようこそ、ログインID「<?php echo $_SESSION["id"];?>」さん</div>
			<form name="myForm" action="login.php" method="POST">
				<input type="submit" value="ログアウト">
				<input name="logout" type="hidden" value="logout">
			</form>
		</div>
		<div class="center">
			<?php echo $tableInfo ?>
		</div>
		<div class="footer">
			<a href="top.php">topへ戻る</a>
		</div>
	</body>
</html>
