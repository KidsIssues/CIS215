<!--deletes info out of database-->
<?php 
    require ('dbconfig.php');
    $db = connectDB();

    $email = filter_var($_POST["delete-email-name"], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "invalid";
        exit;
    }


    
    $email_pieces = explode("@", $email);
    $front = $email_pieces[0] . "%";
    $back = "%" . $email_pieces[1];



    //delete the row that has the email, then check if the email is still there.
    global $db;
    $stmt = $db->prepare("DELETE FROM project_data WHERE email email = :email");

    $stmt->bindParam(":email", $email);
    $stmt->execute();



    //checks to see if email is there, responds if it is or isnt.
    $stmt = $db->prepare("SELECT count(email) FROM project_data WHERE email email = :email");

    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $email_count = $stmt->fetchColumn();
    if( $email_count > 0){
        echo "sorry, couldnt delete email.";
    } else {
        echo "successfully Deleted!";
    }

    
?>