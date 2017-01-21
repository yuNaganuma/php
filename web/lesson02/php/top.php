<html>
<?php
// セッション開始
session_start();

if(!empty($_POST["id"]) && !empty($_POST["pw"])){
	// とりあえずid,pwが入力されていればログイン成功とする
	$_SESSION["id"] = $_POST["id"];
}

if(empty($_SESSION["id"])){
	// 未ログインの場合login.phpにリダイレクトする
	header('location: login.php');
	exit();
}
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>トップページ</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/web/lesson02/css/wiki.css">
	</head>
	<body>
		<h1>トップ</h1>
		<div class="header">
			<div>ようこそ、ログインID「<?php echo $_SESSION["id"];?>」さん</div>
			<form name="myForm" action="login.php" method="POST">
				<input type="submit" value="ログアウト">
				<input name="logout" type="hidden" value="logout">
			</form>
		</div>
	</body>
</html>
