<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>



<form action="dbconfig.php" method="post" class="survey-form"></form>



<?php
include 'dbconfig.php';
$db = connectDB();

    //pulling info from Form
    $un_sanitized_email = $_POST["email-name"];
    $un_validated_password = $_POST["pw-name"];
    $un_validated_age = $_POST["age"];
    $un_validated_animal = $_POST["animal"];
    $un_validated_gender = $_POST["gender"];
    $un_validated_date = $_POST["year"];


    //Sanitize text my converting special characters
    $un_sanitized_email = htmlspecialchars($un_sanitized_email);
    $validated_password = htmlspecialchars($un_validated_password);
    $un_validated_age = htmlspecialchars($un_validated_age);

    //Arrays for genders and animals
    $validAnimals = ['dog', 'cat', 'both', 'other'];
    $validGenders = ['male', 'female', 'nonbinary', 'genderfluid', 'agender', 'other'];

        //  filter genders
    function filter_genders($un_validated_gender) { 
        global $validGenders;
        if (in_array($un_validated_gender, $validGenders)) {
            echo"--This gender is valid--";
        } else {
            echo"--This gender is valid--";
        }
    }
    
        //  filter emails
    function filter_emails ($un_sanitized_email) {
        $sanitized_email = filter_var($un_sanitized_email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "--This email is valid--";
        } else {
            echo "--This email is invalid--";
        } 
    }
        //  filter age
    function filter_age ($un_validated_age) { 
    if (is_numeric($un_validated_age)) {
        $validated_age = $un_validated_age;
        echo "--This age is valid--";
    } else {
        echo "--This age is invalid--";
    }
}
        // filter animals
        function filter_animal($un_validated_animal) { 
            global $validAnimals;
            if (in_array($un_validated_animal, $validAnimals)) {
                echo"--This animal is valid--";
            } else {
                echo"--This animal is invalid--";
            }
        }

        // filter dates
        function filter_date ($un_validated_year, $format = 'Y-m-d') { 
           $date = DateTime::createFromFormat($format, $un_validated_year);
           $validated_date = $date && $date->format($format) == $un_validated_year;
           echo '--This date is valid--';
        }

        //run functions
        filter_age($un_validated_age);
        filter_emails($un_sanitized_email);
        filter_animal($un_validated_animal);
        filter_genders($un_validated_gender);
        filter_date('$un_validated_date', 'Y-m-d');

    



//Password verification

$hashString = '$2y$10$.oDyPlmjZC00P6sUIIRnxeD1CBTMPXfH0JshahCEuVsDNDxSSWfRy';
$Userpassword = $validated_password;        


if (password_verify($Userpassword, $hashString)) {
    echo "--this password is valid--";
} else {
    echo "--This password is invalid--";
}


?>

</body>
</html>