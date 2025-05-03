<!DOCTYPE html>
<html>
    <head>
        <title>Survey: PHP Questions</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
<body>



<!--Password HTML opening section for form below-->
<div id="password-section">
    <form id="password-form">
        <input type="password" name ="pw-name" id="pw-id" placeholder="Enter your Password" required>
        <button type="submit">Submit</button>
    </form>
</div>


<!--Where form actually starts, everything under is hidden until pass entered-->
<form action="project1submit.php" method="post" class="survey" id="survey-form" hidden>


<div class = "form-group">
    <fieldset>
        <legend>Enter your email: </legend>
            <input class ="form-control" type="email" name="email-name" id="email-id" required>
            <div id="email-msg" class="text-info"></div>
    </fieldset>
</div>



<div>
<label>What age are you? </label>
<div>
<label> <input type="radio" name="age" id="age-0" value="0" required>
0-12 </label>
</div>
<?php

for($i=13;$i<65;$i=$i + 5){
    $j = $i + 4;
    print("<div><label><input type='radio' name='age' id='age-$i'value='$i'>
    $i-$j </label></div>");
}

?>
<div>
<label> <input type="radio" name="age" id="age-68" value="68">
68+ </label>
</div>
</div>

<div>
<select name="gender" id="gender">
    <option value="">--Please select your gender--</option>
    <option value="ma">Male</option>
    <option value="fe">Female</option>
    <option value="nb">Nonbinary</option>
    <option value="gf">Genderfluid</option>
    <option value="ag">Agender</option>
    <option value="ot">Choose not to say/Other</option>
</select>
</div>

<div>
    <label><p>What version of PHP do you use? (only include the main version number)</p><input type="number" name="version" id="version" min="1" max="9" required> </label>
</div>

<div>
    <div>
        <p>Please answer in 120 characters or fewer.</p>
    </div>
    <label><p>What is your favorite part of PHP?</p>    
    <input type=text name="favorite" id="favorite" maxlength="120" required></label>
</div>

<button type="submit" name="button-submit-form" id = "button-submit-form-id">Submit</button>

<div>
  <input type="color" id="body" name="body" value="#ffffff" />
  <label for="body">Change Background Color</label>
</div>

<div>
  <input type="color" id="text-color" name="text-color" value="#000000" />
  <label for="text-color">Change Text Color</label>
</div>

</form>
<div>
    <a href='Project1Data.php'><p>View data page here</p></a>
</div>


    <script src="project1events.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body></html>