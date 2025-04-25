<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Homework 3</title>
    </head>
    <body>
        <?php
            for ($i = 1; $i <= 30; $i++) {
                if ($i % 2 == 0 || $i % 3 == 0) {
                    echo $i . "<br>";
                }
            }
        ?>

        <?php
            $names=["Guy1","Person2","Human3"];
            if (strlen($names[0]) > 5) echo $names[0] . "<br>";
            if (strlen($names[1]) > 5) echo $names[1] . "<br>";
            if (strlen($names[2]) > 5) echo $names[2] . "<br>";
        ?>

<?php 
include 'dbconfig.php';
$db = connectDB();
$db->query("CREATE TABLE testing (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20));");
?>

    </body>
</html>