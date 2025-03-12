<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>



<form action="project1Corrections.php" method="post" class="survey-form"></form>



<?php
include 'dbconfig.php';
$db = connectDB($db);

    $un_sanitized_email = $_POST["email-name"];
    $un_validated_password = $_POST["pw-name"];
    $un_validated_age = $_POST["age"];
    $un_validated_animal = $_POST["animal"];
    $un_validated_gender = $_POST["Gender"];

    echo $un_validated_gender;
    

    $un_sanitized_email = htmlspecialchars($un_sanitized_email);
    $validated_password = htmlspecialchars($un_validated_password);
    $un_validated_age = htmlspecialchars($un_validated_age);
    $un_validated_animal = htmlspecialchars($un_validated_animal);


    function filter_emails ($un_sanitized_email) {
        $sanitized_email = filter_var($un_sanitized_email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "  This (a) sanitized email address is considered valid.      ";
        } else {
            echo "  This (b) sanitized email address is considered invalid.      ";
        } 
    }
    
    function filter_age ($un_validated_age) { 
    if (is_numeric($un_validated_age)) {
        $validated_age = $un_validated_age;
        echo "  This (a) validated age is considered valid.    ";
    } else {
        echo "  This (b) validated age is considered invalid.   ";
    }
}

    function filter_animal ($un_validated_animal) {
        if (is_numeric($un_validated_animal)) {
            $validated_animal = $un_validated_animal;
        }
    }


        filter_age($un_validated_age);
        filter_emails($un_sanitized_email);
        filter_animal($un_validated_animal);

    


$sql = "SELECT Password FROM Project2SQL";
echo $sql;

$password = 'Diaphram';
$hashString = password_hash($password, PASSWORD_DEFAULT);
$Userpassword = $validated_password;
echo $Userpassword;
$verified = password_verify($Userpassword, $hashString);       
?>

</body>
</html>