<?php

require_once("db.php");
//mysql запрос
$result = mysqli_query($global_link, "CREATE DATABASE test");
$add = mysqli_fetch_all($result);

?>