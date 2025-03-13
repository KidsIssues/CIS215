<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Survey: Dogs</title>  
</head>
<body>



<form action="Processing.php" method="post" class="survey-form">

<div class = "form-group">
    <fieldset>
        <legend>Enter your email: </legend>
            <input class="form-control" type="email" name="email-name" id="email-id" minlength="5" required>
    </fieldset>
</div>

<div class = "form-group">
    <fieldset>
        <legend>Enter your password: </legend>
            <input class="form-control" type="password" name="pw-name" id="pw-id" minlength="8" required>
    </fieldset>
</div>

<div class = "form-group">
    <fieldset>
        <legend>What age are you?</legend>
            <input class="form-control" type="number" name="age" id="age" min="5" max="127" required>
    </fieldset>
</div>

<div class = "form-group">
    <fieldset>
        <legend>What is your Gender?</legend>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="nonbinary">Nonbinary</option>
                <option value="genderfluid">Genderfluid</option>
                <option value="agender">Agender</option>
                <option value="other">Choose not to say/Other</option>
            </select>
    </fieldset>
</div>

<div class = "form-group">
    <fieldset>
        <legend>Do you currently own a dog/cat?</legend>
        <input type="checkbox" name="animal" value="dog">
        <label for="dog">Dog</label>

        <input type="checkbox" name="animal" value="cat">
        <label for="cat">Cat</label>

        <input type="checkbox" name="animal" value="both">
        <label for="both">Both</label>

        <input type="checkbox" name="animal" value="other">
        <label for="other">Other</label>
    </fieldset>
</div>

<div class = "form-group">
    <fieldset>
        <legend>What year did you get your pet?</legend>
        <input type="date" name="year" id="year" min="2000-01-01" max="2025-3-31">
    </fieldset>
</div>


<div class = "form-group">
    <button type="submit" name="submit-button" id="submit-button"><h6>Submit</h6></button>
</div>

</form>


<!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>