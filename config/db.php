<?php

// Определяем константы для соединения с базой данных
define('DB_HOST', 'localhost'); // Имя хостинга
define('DB_NAME', 'arealidea');	// Имя базы данных
define('DB_USER', 'root'); // логин
define('DB_PASS', 'root'); // пароль

//  Открываем соединение с базой данных
function connect_db() {
	$mysqli_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
		or die("Ошибка соединения с базой данных! " . mysqli_error($mysqli_connect)); // Если подключения нет - выдаём ошибку
	mysqli_set_charset($mysqli_connect, 'utf8'); // Устанавливаем кодировку

	return $mysqli_connect;
}
//  Закрываем соединение с базой данных
function close_db($db_connect) { 
	mysqli_close($db_connect);
} 





