<?php

require_once ("db.php");
//require_once("functions.php");
$result = mysqli_query($link, "SHOW DATABASES");
while($forum_programmists = mysqli_fetch_assoc($result)) {
    print_r($forum_programmists);
    echo "<br>";
    echo "<br>";
}
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<p><?php echo $forums['id_forum']; ?></p>-->
</body>
</html>