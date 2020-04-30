<?php


function get_forums($mysql) {
    $sql = "SELECT * FROM forums";
    $result = @mysqli_query($mysql, $sql);

    $forums = @mysqli_fetch_all($result);

    return $forums;
}

$forums = get_forums($mysql);


?>