<?php

require_once("db.php");

/** дабовляет столбец в таблицу */
//$added = mysqli_query($link, "ALTER TABLE forums ADD test INT AFTER rule");

/**переименование столбца
 * $rename = mysqli_query($link, "ALTER TABLE forums CHANGE new_test my_text TEXT");
 */

 // изментить тип столбца
 //$type_name = mysqli_query($link, "ALTER TABLE forums CHANGE my_text my_text TINYTEXT");

 // удаление столбца
 //$delete_td = mysqli_query($link, "ALTER TABLE forums DROP my_text");

 // удаление таблицы
 //$delete_tbl = mysqli_query($link, "DROP TABLE tbl");

if($delete_tbl !== FALSE) {
    echo "Ok";
}
else {
    echo "None";
}

//$view = mysqli_query($link "DESCRIBE forums");

?>