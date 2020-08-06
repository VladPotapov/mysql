<?php
//функции для запроса к базе данных
function request_one($link, $sql) {
    return mysqli_query($link, $sql);
}

function request_two($link, $tab, $sql)  {
    return mysqli_query($link, $sql);
}

function view($arr) {
    while($tables = mysqli_fetch_assoc($arr)) {
        print_r($tables);
        echo "<br>";
        echo "<br>";
    }
}

function view2($arr) {
    if($arr == "hello") {
        echo "Hello Roman";
    }
}
?>