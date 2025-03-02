<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>



<form action="Processing.php" method="post" class="survey-form"></form>


<?php
    $un_sanitized_email = $_POST["email-name"];

    $sanitized_email = filter_var($un_sanitized_email, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
        echo "This (a) sanitized email address is considered valid.\n";
    } else {
        echo "This (b) sanitized email address is considered invalid.\n";
    }

?>

</body>
</html>