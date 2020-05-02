<?php

require_once("db.php");

//mysql запросы
//базы данных
$show_databases = mysqli_query($link, "SHOW DATABASES");

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
        while($databases = mysqli_fetch_assoc($show_databases)) {
            print_r($databases);
            echo "<br>";
            echo "<br>";
        }
    ?>
</body>
</html>