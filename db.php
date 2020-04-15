<?php

//адрес сервера
$dblocation = "localhost";
//имя базы данных
$dbname = "test";
//имя пользователя
$dbuser = "root";
//пароль пользователя
$dbpasswd = "";
//соединение с базой данных
$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_error) {
    die('Ошибка подключения ('. $mysqli->conect_errno .') '. $mysqli->connect_error);
}

echo 'соединение установлено... '. $mysqli->host_info ."\n";

$mysqli->close();

?>