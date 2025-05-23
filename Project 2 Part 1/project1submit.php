<!DOCTYPE html>
<html>
    <head>
        <title>PHP Questions: Submit</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
<body>

<?php
/**
 * Note: I created my SQL table in PuTTY using the following command:
 * 
 * CREATE TABLE project_data (id INT PRIMARY KEY AUTO_INCREMENT, email VARCHAR(320), age INT, gender CHAR(2), version INT, favorite VARCHAR(120));
 */

# Retrieved the hashed password as discussed in classes.
# Password: CIS215php!
$hashed_pass = '$2y$10$ViIleDzZvM5nXXfScjwGz.D4GH.CqNabTJ9uoIqydR5.SjmzWuxNi';
require ('dbconfig.php');
$db = connectDB();

/**
 * Validate returns an empty string if there were no errors, and a message about the worst error if there was one in validation.
 */
function validate(){
    
    # Next, let's make sure everything was filled in:
    if(($_POST["email-name"] == NULL) or ($_POST["age"] == NULL) or ($_POST["gender"] == "") or ($_POST["version"] == NULL) or ($_POST["favorite"] == NULL)){
        return "Error: You have not filled in all questions.";
    }
    # Now, let's make sure the results make sense.



    # Email
    if(!filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL)){
        return "Please enter a valid email address.";
    }


    $email = strtolower(filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL));
    

    $email_pieces = explode("@", $email);
    $front = $email_pieces[0] . "%";
    $back = "%" . $email_pieces[1];

    global $db;
    $stmt = $db->prepare("SELECT count(email) FROM project_data WHERE email LIKE :front AND email LIKE :back");
    
    $stmt->bindParam(":front", $front);
    $stmt->bindParam(":back", $back);

    $stmt->execute();
    $email_count = $stmt->fetchColumn();

    # This is getting the size of the array, because all we care about is if it's empty or not
    if( $email_count > 0){
        return "Only one entry per email.";
    }


    
    # Age
    $age_list = ["0"];
    for($i=13;$i<65;$i=$i + 5){
        $age_list []= $i;
    }
    $age_list []= "68";
    if(!in_array($_POST["age"], $age_list)){
        return "Please select one of the radio buttons to indicate your age.";
    }

    # Gender
    if(strlen($_POST["gender"]) != 2){
        return "Please select a gender from the gender dropdown.";
    }

    # Version
    if(!is_numeric($_POST["version"])){
        return "Please enter a number for Version.";
    } else if($_POST["version"] < 0 || $_POST["version"] > 8){
        return "Please enter a valid PHP Version.";
    }

    # Favorite
    if(strlen($_POST["favorite"]) > 120){
        return "Please keep your character count below 120 for your favorite part of PHP.";
    }
    return "";
}

/**
 * Sanitize returns sanitized data in the form of an array
 */
function sanitize(){
    $email = filter_var($_POST["email-name"], FILTER_VALIDATE_EMAIL);
    $age = (int)$_POST["age"];
    $gender = htmlentities($_POST["gender"]);
    $version = (int)$_POST["version"];
    $favorite = htmlentities($_POST["favorite"]);

    return array($email, $age, $gender, $version, $favorite);
}

/**
 * Add Data adds sanitized data into SQL safely
 */
function add_data(){
    global $db;
    $prep_insert = $db->prepare("INSERT INTO project_data (email, age, gender, version, favorite) values (?,?,?,?,?)");
    $prep_insert->execute(sanitize());
}


if(validate()==""){
    print("<div>Thanks for your submission!</div>");
    print("<div><a href='Project1Data.php'>View data page here</a></div>");
    add_data();
} else{
    print("<div>We could not take your data at this time</div>");
    print(validate());
    print("<div><a href='project1sol.php'>Try submitting again here</a></div>");
}

?>

<div>
  <input type="color" id="body" name="body" value="#ffffff" />
  <label for="body">Change Background Color</label>
</div>

<div>
  <input type="color" id="text-color" name="text-color" value="#000000" />
  <label for="text-color">Change Text Color</label>
</div>

<script src="project1events.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</body></html>