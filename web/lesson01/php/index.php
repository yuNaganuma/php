<html>
	<head>
		<title>送信ページ</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="http://localhost/web/lesson01/css/wiki.css">
	</head>
	<body>
		<form name="myForm" action="result.php">
			<h1>アンケート内容の送信</h1>
			<h2>基本情報</h2>
			<ul>
				<li>名前：<input name="name" type="text" size="10" value="日本太郎"></li>
				<li>年齢：<input name="age" type="text" size="3" value="40"></li>
				<li>住所：<select name="address" ><option value="東京都">東京都</option><option value="神奈川県">神奈川県</option></select></li>
			</ul>

			<h2>アンケート</h2>
			<ul>
				<li>毎日、朝食を食べていますか？&nbsp;<input type="radio" name="q1" value="はい">はい <input type="radio" name="q1" value="いいえ">いいえ
				<li>睡眠は6時間以上とっていますか？&nbsp;<input type="radio" name="q2" value="はい">はい <input type="radio" name="q2" value="いいえ">いいえ
				<li>週に1時間以上運動していますか？&nbsp;<input type="radio" name="q3" value="はい">はい <input type="radio" name="q3" value="いいえ">いいえ
			</ul>
			<input type="submit" value="アンケート送信">
		</form>
	</body>
</html>
