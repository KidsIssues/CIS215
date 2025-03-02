<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="Homework4.php" method="post" class="survey-form">
        <?php
            $Question1 = $_POST["Question-One"]; $Question2 = $_POST["Question-Two"]; $Question3 = $_POST["Question-Three"]; $Question4 = $_POST["Question-Four"]; $Question5 = $_POST["Question-Five"]; $Question6 = $_POST["Question-Six"];
        
            $AnswersCorrect = 0;

            if ($Question1 == 4) { $AnswersCorrect++; }
            if ($Question2 == 4) { $AnswersCorrect++; }
            if ($Question3 == 1) { $AnswersCorrect++; }
            if ($Question4 == 2) { $AnswersCorrect++; }
            if ($Question5 == 5) { $AnswersCorrect++; }
            if ($Question6 == 6) { $AnswersCorrect++; }

                if ($AnswersCorrect < 3) {
                Echo ("less than half. Not the best score. . . we can try again though!");
            } elseif ($AnswersCorrect < 4) {
                Echo ("half isnt that bad!");
            } elseif ($AnswersCorrect < 5) {
                Echo ("more than half! much better this time!");
            } elseif ($AnswersCorrect = 6) {
                Echo ("The full six! Very good!");
            } else {
                Echo ("Whoops! Looks like you somehow broke this! Please try again or return to the questions page!");
            }
        ?>
        <div>
        <button type="submit" name="submit-button" id="submit-button"><h6>Back To Form</h6></button>
        </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>