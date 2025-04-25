<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="SQLTable.php" method="post" class="survey-form"></form>

<?php
global $validated_age; global $validated_gender; global $sanitized_email; global $validated_year; global $validated_animals; global $db;
include 'dbconfig.php';
$db = connectDB();

    //pulling info from Form
    $un_sanitized_email = $_POST["email-name"];
    $un_validated_password = $_POST["pw-name"];
    $un_validated_age = $_POST["age"];
    $un_validated_animal = $_POST["animal"];
    $un_validated_gender = $_POST["gender"];
    $un_validated_year = $_POST["date"];


    //Sanitize text my converting special characters
    $un_sanitized_email = htmlspecialchars($un_sanitized_email);
    $validated_password = htmlspecialchars($un_validated_password);
    $un_validated_age = htmlspecialchars($un_validated_age);

    //Arrays for genders and animals
    $validAnimals = ['dog', 'cat', 'both', 'other'];
    $validGenders = ['male', 'female', 'nonbinary', 'genderfluid', 'agender', 'other'];

        //  filter genders
    function filter_genders($un_validated_gender) { 
        global $validated_gender;
        global $validGenders;
        if (in_array($un_validated_gender, $validGenders)) {
            echo"--This gender is valid--";
            $validated_gender = $un_validated_gender;
        } else {
            echo"--This gender is valid--";
        }
    }
    
        //  filter emails
    function filter_emails ($un_sanitized_email) {
        global $sanitized_email;
        $sanitized_email = filter_var($un_sanitized_email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "--This email is valid--";
        } else {
            echo "--This email is invalid--";
        } 
    }
        //  filter age
    function filter_age ($un_validated_age) { 
        global $validated_age;
    if (is_numeric($un_validated_age)) {
        $validated_age = $un_validated_age;
        echo "--This age is valid--";
    } else {
        echo "--This age is invalid--";
    }
}
        // filter animals
        function filter_animal($un_validated_animal) { 
            global $validated_animals;
            global $validAnimals;
            if (in_array($un_validated_animal, $validAnimals)) {
                $validated_animals = $un_validated_animal;
                echo"--This animal is valid--";
            } else {
                echo"--This animal is invalid--";
            }
        }

        // filter dates
        function filter_date ($un_validated_year) {
            $un_validated_year = date('d/m/y');
            htmlspecialchars($un_validated_year);
            global $validated_year;
            $validated_year = $un_validated_year; 
            echo '--This date is valid--';
        
        }

        //run functions
        filter_age($un_validated_age);
        filter_emails($un_sanitized_email);
        filter_animal($un_validated_animal);
        filter_genders($un_validated_gender);
        filter_date($un_validated_year);


//Password verification

$hashString = '$2y$10$.oDyPlmjZC00P6sUIIRnxeD1CBTMPXfH0JshahCEuVsDNDxSSWfRy';
$Userpassword = $validated_password;        

            if (password_verify($Userpassword, $hashString)) {
                echo "--this password is valid--";
                $prepared_stat = $db->prepare("INSERT INTO Project2SQL (email, age, gender, petType, petAge) VALUES (?, ?, ?, ?, ?);");
                echo "PREPARED";
                $prepared_stat->execute(array($sanitized_email, $validated_age, $validated_gender, $validated_animals, $validated_year));
                echo "SENT";
                } else {
                    echo "--This password is invalid--";
                }
?>
        <form action="Display.php" method="post" class="survey-form">

            <div class = "form-group">
                <button type="submit" name="display-button" id="display-button"><h6>Display List</h6></button>
            </div>
        </form>
    </body>
</html>   
           
