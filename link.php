<?php

require $_SERVER['DOCUMENT_ROOT'] . "arealidea/config/db.php";

$token = md5(microtime());

if(!isset($_POST['submit'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$password = md5($_POST['password']);

	$query = "INSERT INTO content SET name='$name', text='$message', password='$password', token='$token'";
	mysqli_query(connect_db(), $query) or die("Ошибка отправления");

}

/**
  *	strrpos — Возвращает позицию последнего вхождения подстроки в строке
  * substr — Возвращает подстроку
  */
// для локального сервера
$path = substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], "/"));

echo "<p>Ваша ссылка для перехода:</p>";

echo "<a href='http://".$_SERVER['HTTP_HOST'].$path."/get_file.php?token=".$token."'>http://".$_SERVER['HTTP_HOST'].$path."/get_file.php?token=".$token."</a>";
// для локального сервера
// echo "<a href='".$path."/get_file.php?token=".$token."'>".$path."/get_file.php?token=".$token."</a>";




