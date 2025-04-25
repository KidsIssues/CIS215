<!DOCTYPE html>
    <html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Survey: Dogs</title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



<form action="homework6.js" method="post" class="survey-form" id="animalsForm">



<div class = "form-group">
    <fieldset>
        <legend>Enter your email: </legend>
            <input class="form-control" type="email" name="email" id="email" minlength="5" required>
            <div id="email-msg" class="text-info"></div>
            <div id="email-length" class="text-info"></div>
    </fieldset>
</div>




<div class = "form-group">
    <fieldset>
        <legend>Enter your password: </legend>
            <input class="form-control" type="password" name="pw-name" id="pw-id" minlength="8" required>
            <div id="password-msg" class="text-info"></div>
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


<div class="form-group">
  <fieldset>
    <legend>Do you currently own a dog/cat?</legend>

    <input type="radio" name="animal" value="dog" id="dog">
    <label for="dog">Dog</label>

    <input type="radio" name="animal" value="cat" id="cat">
    <label for="cat">Cat</label>

    <input type="radio" name="animal" value="both" id="both">
    <label for="both">Both</label>

    <input type="radio" name="animal" value="other" id="other">
    <label for="other">Other</label> 

    <div><p id="Radio-Clicked"></p></div>

</fieldset>
</div>


<div>
    <fieldset>
        <legend>What year did you get your pet?</legend>
        <input type="month" name="date" id="date" min="2000-01" >
    </fieldset>
</div>


<div class = "form-group">
    <button type="submit" name="submit-button" id="submit-button"><h6>Submit</h6></button>
</div>

</form>
<form action="Display.php" method="post" class="survey-form">

    <div class = "form-group">
        <button type="submit" name="display-button" id="display-button"><h6>Display List</h6></button>
    </div>
</form>

<div>
  <input type="color" id="body" name="body" value="#ffffff" />
  <label for="body">Body</label>
  
</div>

        <script src="homework6.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
