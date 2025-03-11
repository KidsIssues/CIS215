<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>



<form action="project1starter.php" method="post" class="survey-form"></form>



<?php
    $un_sanitized_email = $_POST["email-name"];
    $un_validated_password = $_POST["pw-name"];
    $un_validated_age = $_POST["age"];
    $un_validated_animal = $_POST["animal"];
    

    htmlspecialchars($un_sanitized_email);
    htmlspecialchars($un_validated_password);
    htmlspecialchars($un_validated_age);
    htmlspecialchars($un_validated_animal);


    function filter_emails ($un_sanitized_email) {
        $sanitized_email = filter_var($un_sanitized_email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "This (a) sanitized email address is considered valid.";
        } else {
            echo "This (b) sanitized email address is considered invalid.";
        } 
    }
    
    function filter_age ($un_validated_age) { 
    if (is_numeric($un_validated_age) && $un_validated_age > 0 && $un_validated_age < 128) {
        $validated_age = $un_validated_age;
        echo "This (a) validated age is considered valid.";
    } else {
        echo "This (b) validated age is considered invalid.";
    }
}

    function filter_animal ($un_validated_animal) {
        if (is_numeric($un_validated_animal)) {
            $validated_animal = $un_validated_animal;
        }
    }


    
    
?>

<?php 
include 'dbconfig.php';
$password = 'Diaphram';
$hashString = password_hash($password, PASSWORD_DEFAULT);
$Userpassword = $_POST['pw-name'];
echo $Userpassword;
$verified = password_verify($Userpassword, $hashString);






        if ($verified = True) {
            echo 'Welcome User';
            filter_emails($un_sanitized_email);
            filter_animal($un_validated_animal);
            filter_age($un_validated_age);
            
            $insert_data = $db->prepare("INSERT INTO Project2SQL (age) VALUES ($validated_age);");
            filter_age($un_validated_age);
            $insert_data->execute(array($validated_age));
    
            $insert_data = $db->prepare("INSERT INTO Project2SQL (email) VALUES ($validated_email);");
            filter_emails($un_sanitized_email);
            $insert_data->execute(array($sanitized_email));
    
            $insert_data = $db->prepare("INSERT INTO Project2SQL (petType) VALUES ($validated_animal);");
            filter_animal($un_validated_animal);
            $insert_data->execute(array($validated_animal));
        } else {
            echo "PASSWORD INCORRECT";
        }

        

       
?>

</body>
</html>