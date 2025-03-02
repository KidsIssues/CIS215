<!-- This code promts the user with six questions to answer and then brings them to the result page with the submit button
each chunk of code is one question with up to 7 options for them to choose from in a dropdown menu
Author: Luke Boardman | lboardma@genesee.edu
-->
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="Homework4Results.php" method="post" class="survey-form">

        <h1>General Awareness Test</h1>

        <div>
        <label for="Question-One">How many feet do dogs have?</label>
            <select name="Question-One" id="Question-One">
                    <option value="0">Answer Here</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six+</option>
            </select>
            </div>

            <div>
            <label for="Question-Two">How many wings do parrots with 4 wings have?</label>
            <select name="Question-Two" id="Question-Two">
                    <option value="0">Answer Here</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six+</option>
            </select>
            </div>

            <div>
            <label for="Question-Three">How many invisible people are in the room with you right now?</label>
            <select name="Question-Three" id="Question-Three">
                    <option value="0">Answer Here</option>
                    <option value="1">None</option>
                    <option value="2">One</option>
                    <option value="3">Three and a half</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six+</option>
            </select>
            </div>

            <div>
            <label for="Question-Four">What color is the Sun at night?</label>
            <select name="Question-Four" id="Question-Four">
                    <option value="0">Answer Here</option>
                    <option value="1">White</option>
                    <option value="2">The same as the daytime</option>
                    <option value="3">Sunny</option>
                    <option value="4">(252, 150, 1)</option>
                    <option value="5">#FFE484</option>
                    <option value="6">Yellow</option>
            </select>
            </div>

            <div>
            <label for="Question-Five">How many toes does the one handed man have?</label>
            <select name="Question-Five" id="Question-Five">
                    <option value="0">Answer Here</option>
                    <option value="1">Two-Three</option>
                    <option value="2">Four-Five</option>
                    <option value="3">Six-Seven</option>
                    <option value="4">Eight-Nine</option>
                    <option value="5">Ten-Eleven</option>
                    <option value="6">Twelve+</option>
            </select>
            </div>

            <div>
            <label for="Question-Six">How many questions are there on this page?</label>
            <select name="Question-Six" id="Question-Six">
                    <option value="0">Answer Here</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six+</option>
            </select>
            </div>

        <div>
        <button type="submit" name="submit-button" id="submit-button">Submit</button>
        </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>