<?php
/** Данные пользователя БД */
$serverName = "localhost";
$dbUsername = "phpstorm";
$dbPassword = "phpstorm";
$database = "phpstorm";

/** Создание соединения */
$connection = new mysqli($serverName, $db_username, $db_password, $database);

/** Проверка соединения */
if ($connection->connect_error) {
	die("Ошибка соединения: " . $connection->connect_error);
}
echo "Соединение установлено";

/** Получение данных из формы */
if(isset($_GET['login']) && isset($_GET['password'])) {
	$formUsername = $_GET['login'];
	$formPassword = $_GET['password'];
}

/** Создаем подготавливаемый запрос
	на получение пароля из таблицы */
if ($stmt = $mysqli->prepare("SELECT password FROM users WHERE username=?")) {
	$stmt->bind_param( 's', $username);
	$stmt->execute();
	$stmt->bind_result( $password);
	$stmt->fetch();

	/** Теперь сравниваниваем пароли */
	if ( $password === $formPassword ) {
		/** ответ JS или PHP? */
	} else {
		/** ответ нет */
	}
	$stmt->close();


}
?>