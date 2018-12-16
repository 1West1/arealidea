<?php
	session_start();

	require $_SERVER['DOCUMENT_ROOT'] . "arealidea/config/db.php";

	$query = "SELECT * FROM content";
	$mysqli_query = mysqli_query(connect_db(), $query) or die("Ошибка вывода");

	while($row = mysqli_fetch_array($mysqli_query)) {	 
		if($_SESSION['token'] === $row['token']) {
			$name = $row['name'];
			$message = $row['text'];
			$token = $row['token'];
		}
	}

	if(isset($_POST['delete'])) {
		if(!empty($token)) {
			$query = "DELETE FROM content WHERE token = '$token'";
		}
		mysqli_query(connect_db(), $query) or die("Ошибка" . mysqli_error(connect_db()));
    	close_db(connect_db());

    	unset($name, $message);
	}

?>

<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap-grid-4.1.3.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header>
			
		</header>
		<div class="container">
			<div class="row">
				<div class="col">
					<p><span>Имя: </span><?php if(!empty($name)) echo $name; ?></p>
					<p><span>Сообщение: </span><?php if(!empty($message)) echo $message; ?></p>
					<form action="" method="POST">
						<p><button name="delete">Удаление информации</button></p>
					</form>
					<div class="btn">
						<a href="https://www.google.com/" target="_self">Уйти со страницы</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>