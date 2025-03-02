<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="submit.php" method="post" class="survey-form">
            <fieldset>
                <legend>Please enter info so I can sell it.</legend>
                    <label for="name-input">What is your name?</label>
                    <input type="text" name="name" id="name-input">

                    <label for="email-input">What is your email?</label>
                    <input type="email" name="email" id="email-input">
            </fieldset>

            
            <fieldset>
                <legend>What is your favorite programming language?</legend>
                    <input type="radio" name="programming-language" id="PHP" value="php"> PHP
                    <input type="radio" name="programming-language" id="JavaScript" value="js"> JavaScript
                    <input type="radio" name="programming-language" id="None" value="none"> Neither of these
            </fieldset>

            <label for="number-languages">How many programming languages do you know?
            <select name="number-languages" id="number-languages">
                <optgroup label="Beginner">
                    <option value="0">None</option>
                    <option value="1">One</option>
                </optgroup>
                <optgroup label="Intermediate">
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </optgroup>
                <optgroup label="Advanced">
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six</option>
                    <option value="7">Seven or More</option>
                </optgroup>
            </select>

            <label for="opinion">Favorite exotic animal?</label>
            <textarea id="opinion">Tell me here</textarea>


            <button type="submit" name="submit-button" id="submit-button">Submit</button>
        </form>


    </body>
</html>