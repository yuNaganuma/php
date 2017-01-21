<html>
<?php
// セッション開始
session_start();

if(isset($_POST["logout"])) {
	// ログアウト処理
	unset($_SESSION["id"]);
}

if(isset($_SESSION["id"])) {
	// ログイン済みであればtopページにリダイレクト
	header('location: top.php');
	exit();
}
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>ログインページ</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/web/lesson03/css/wiki.css">
	</head>
	<body>
		<form name="myForm" action="top.php" method="POST">
			<h1>ログイン</h1>
			<div class="center">
				<font color="red">ログインされていません。ログインしてください。</font>
				<table cellspacing="10" class="center">
					<tr>
						<td>ログインID：</td>
						<td><input name="id" type="text" size="20" required></td>
					</tr>
					<tr>
						<td>パスワード：</td>
						<td><input name="pw" type="password" size="15" required></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="ログイン"></td>
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>
