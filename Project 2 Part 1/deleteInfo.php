<?php 
    require 'dbconfig.php';
    $db = connectDB();


    $email = filter_var($_POST["delete-email-name"], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "invalid";
        exit;
    }


    //delete the row that has the email, then check if the email is still there.
    global $db;
    $stmt = $db->prepare("DELETE FROM project_data WHERE email = :email");

    $stmt->bindParam(":email", $email);
    $stmt->execute();


    //checks to see if email is there, responds if it is or isnt.
    $check = $db->prepare("SELECT count(email) FROM project_data WHERE email = :email");

    $check->bindParam(":email", $email);
    $check->execute();

    //PROBLEM IS DEFINITELY HERE
    if( $stmt->rowCount() > 0){
        echo "deleted";
    } else {
        echo "notFound";
    }

    
?>