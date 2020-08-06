<?php

require_once("db.php");
require_once("functions.php");

//mysql запросы
//базы данных
$request_one = mysqli_query($link, "SHOW DATABASES");
$table = "my_mysql";
$show = request_one($link, "SHOW DATABASES");
$show_tab = request_two($link, $table, "SHOW TABLES FROM $table");
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>запросы mysql</h2>
    <form action="functions.php" method="post">
        <button>базы данных</button>
    </form>
    <?php
        while($show_view = mysqli_fetch_assoc($show)) {
            print_r($show_view);
            echo "<br>";
            echo "<br>";
        }
        
        echo "<h3>имена существующих таблиц в бд</h3>";
        /*while($tables = mysqli_fetch_assoc($show_tab)) {
            print_r($tables);
            echo "<br>";
            echo "<br>";
        }*/
    ?>
</body>
</html>