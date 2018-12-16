<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . "arealidea/config/db.php";

$token = $_GET['token'];

$query = "SELECT * FROM content";

$mysqli_query = mysqli_query(connect_db(), $query) or die("Ошибка вывода");

while($row = mysqli_fetch_array($mysqli_query)) {

	if($token === $row['token']) {
		$password_db = $row['password'];
	} 
}


if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	if(md5($password) === $password_db) {
		$_SESSION['token'] = $token;
		header("Location: /arealidea/content.php");
	}
	else {
		echo "<p style='color: red; text-align: center;'>Не правильный пароль</p>";
	}
}


?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap-grid-4.1.3.min.css">
		<style>
			form {
				text-align: center;
			}
			.btn {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<form action="" method="POST">
						<p>Пароль: <input type="text" name="password"></p>
						<p><input type="submit" name="submit" value="Подтвердить"></p>
					</form>
					<div class="btn">
						<a href="https://www.google.com/" target="_self">Уйти со страницы</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>