<?php

//узнать имена существующих бд
function show_databases($link, $sql) {
    return mysqli_query($link, $sql);
}

//узнать таблицы бд
function show_tables($link, $tab, $sql)  {
    return mysqli_query($link, $sql);
}

//показать структуру таблицы
function show_describe($link, $sql) {
    return mysqli_query($link, $sql);
}
?>