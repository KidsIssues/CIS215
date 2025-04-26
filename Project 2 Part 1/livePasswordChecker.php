<?php
    header('Content-Type: application/json');
    $hashed_pass = '$2y$10$ViIleDzZvM5nXXfScjwGz.D4GH.CqNabTJ9uoIqydR5.SjmzWuxNi';

    if (password_verify($_POST['password'], $hashed_pass)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Incorect"]);
    }
?>