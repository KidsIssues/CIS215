<?php 
     include 'dbconfig.php';
     $db = connectDB();
     $db->query("CREATE TABLE testing (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20));");

     $insert_data = $db->prepare("INSERT INTO trsting")
?>