<?php

//адрес сервера
$host = "localhost";
//имя пользователя
$db_user = "root";
//пароль пользователя
$db_pass = "";
//имя базы данных
$db_name = "my_mysql";
//соединение с базой данных
$link = mysqli_connect($host, $db_user, $db_pass, $db_name);
$global_link = mysqli_connect($host, $db_user, $db_pass);

if(mysqli_connect_errno()) {
    printf("Соединение не удалось %s\n", mysqli_connect_errno());
    exit();
}


/*
$mysql = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

if ($mysql->connect_error) {
    die('Ошибка подключения ('. $mysql->conect_errno .') '. $mysql->connect_error);
}

echo 'соединение установлено... '. $mysql->host_info ."\n";

if(!@mysqli_select_db($dbname, $mysql)) {
    exit("База данных не доступна");
}

$mysql->close();
*/
?>