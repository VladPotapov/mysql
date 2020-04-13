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
$dbcnx = @mysqli_connect($dblocation, $dbuser, $dbpasswd);

if (!$dbcnx) {
    exit ("<p>Сервер не доступен</p>");
}
else {
    echo "<p>Сервер подключён</p>";
}

if (!@mysqli_select_db($dbname, $dbcnx)) {
    exit ("<p> База данных не доступна </p>");
}
else {
    echo "<p> База данных подключена </p>";
}

?>