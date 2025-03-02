<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Survey: Dogs</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
</head>
<body>


<!-- TODO: Fix all bugs/poor practice in the form -->
<form action="Project2.php" method="post" class="survey">

<div>
    <fieldset>
        <legend>What is your email?</legend>
            <label>Enter your email: </label>
            <input type="email" name="email-name" id="email-id">
    </fieldset>
</div>

<div>
    <fieldset>
        <legend>What is your password?</legend>
            <label>Enter your password: </label>
            <input type="text" name="pw-name" id="pw-id">
    </fieldset>
</div>

<div>
    <fieldset>
        <legend>What is your age?</legend>
        <label>What age are you? </label>
            <input type="radio" name="0-12" id="0">
            <label>0-12 </label>

            <input type="radio" name="13-17" id="1">
            <label>13-17 </label>

            <input type="radio" name="18-22" id="2">
            <label>18-22 </label>

            <input type="radio" name="23-27" id="3">
            <label>23-27 </label>

            <input type="radio" name="28-32" id="4">
            <label>28-32 </label>

            <input type="radio" name="33-37" id="5">
            <label>33-37 </label>

            <input type="radio" name="38-42" id="6">
            <label>38-42 </label>

            <input type="radio" name="43-47" id="7">
            <label>43-47 </label>

            <input type="radio" name="48-52" id="8">
            <label>48-52 </label>

            <input type="radio" name="53-57" id="9">
            <label>53-57 </label>

            <input type="radio" name="58-62" id="10">
            <label>58-62 </label>

            <input type="radio" name="63-67" id="11">
            <label>63-67 </label>

            <input type="radio" name="68+" id="12">
            <label>68+ </label>
    </fieldset>
</div>

<div>
    <fieldset>
        <legend>What is your Gender?</legend>
            <select name="gender" id="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="nb">Nonbinary</option>
            <option value="gf">Genderfluid</option>
            <option value="a">Agender</option>
            <option value="o">Choose not to say/Other</option>
            </select>
    </fieldset>
</div>


<!-- TODO: Add your own survey questions -->
<div>
    <button type="submit" name="submit-button" id="submit-button"><h6>Submit</h6></button>
</div>

</form>

<?php 
include 'dbconfig.php';
$db = connectDB();
$db -> query("CREATE TABLE phptest (idtest INT PRIMARY KEY AUTO_INCREMENT, Success VARCHAR(20));")
?>

<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>