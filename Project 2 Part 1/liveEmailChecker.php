<!--checks to see whether emails are in the database-->
<?php 
    require ('dbconfig.php');
    $db = connectDB();

    $email = filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "invalid";
        exit;
    }


    $email_pieces = explode("@", $email);
    $front = $email_pieces[0] . "%";
    $back = "%" . $email_pieces[1];


    //prepare and execute statement to project_data, count all emails like the one we sent
    global $db;
    $stmt = $db->prepare("SELECT count(email) FROM project_data WHERE email LIKE :front AND email LIKE :back");

    $stmt->bindParam(":front", $front);
    $stmt->bindParam(":back", $back);
    
    $stmt->execute();
    $email_count = $stmt->fetchColumn();

    if( $email_count > 0){
        echo "Only one entry per email.";
        exit;
    }
?>