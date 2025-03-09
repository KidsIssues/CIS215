<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>



<form action="Processing.php" method="post" class="survey-form"></form>



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
        if (strcasecmp($un_validated_animal,"dog") == 0) {
            echo "DOG SELECTED";
            $validated_animal = $un_validated_animal;
        } elseif (strcasecmp($un_validated_animal,"cat") == 0) {
            echo "CAT SELECTED";
            $validated_animal = $un_validated_animal;
        } elseif (strcasecmp($un_validated_animal,"other") == 0 ) {
            echo "OTHER SELECTED";
            $validated_animal = $un_validated_animal;
        } else {
            echo "ANIMAL NOT CORRECT";
        }
    }



    filter_age($un_validated_age);
    filter_emails($un_sanitized_email);
    filter_animal($un_validated_animal);

?>

</body>
</html>