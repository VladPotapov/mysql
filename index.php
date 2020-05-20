<?php

require_once("db.php");
require_once("functions.php");

//mysql запросы
//базы данных
//$show_databases = mysqli_query($link, "SHOW DATABASES");
$table = "my_mysql";
$show = show_databases($link, "SHOW DATABASES");
$show_tab = show_tables($link, $table, "SHOW TABLES FROM $table");
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
    <?php
        /*while($databases = mysqli_fetch_assoc($show_databases)) {
            print_r($databases);
            echo "<br>";
            echo "<br>";
        }*/
        echo "<h3>имена существующих бд</h3>";
        while($databases = mysqli_fetch_assoc($show)) {
            print_r($databases);
            echo "<br>";
            echo "<br>";
        }
        echo "<br>";
        echo "<h3>имена существующих бд</h3>";
        while($tables = mysqli_fetch_assoc($show_tab)) {
            print_r($tables);
            echo "<br>";
            echo "<br>";
        }
    ?>
</body>
</html>