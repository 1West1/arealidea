<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap-grid-4.1.3.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<p>
						<button class="btn-generate">Сгенерировать пароль</button>
						<span class="generate"></span>
					</p>
				</div>
				<div class="col">
					<form action="link.php" method="POST">
						<p>Имя: <input type="text" name="name"></p>
						<p>Текст: <textarea name="message" id="" cols="30" rows="10"></textarea></p>

						<p>Пароль: <input type="text" id="password" minlength="6" name="password"></p>
						<p><input type="submit" id="submit"></p>
					</form>
				</div>
			</div>
		</div>
		<script src="js/js.js"></script>
	</body>
</html>

<?php






