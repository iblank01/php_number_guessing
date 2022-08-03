<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Guess a Number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>

<div class="p-5 text-center">
    <h1 class="mb-3">Number Guessing Game</h1>
</div>

<body class="container">
<div id = "change">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $randNum = rand(1, 10);


            if ($randNum == $_POST["num"]) {
                echo "<p class='userCorrect'>Correct!</p>";
            } else if ($randNum > $_POST["num"]) {
                echo "<p class = 'userLow'>Too low; please try again! </p>";
            } else if ($randNum < $_POST["num"]) {
                echo "<p class = 'userHigh'>Too high; please try again!</p>";
            }
    }
    ?>


    <form method="post">
    <div class="text-center" id="margin">
    <p>I'm thinking of a number between 1 and 10.</p>
        <p>Guess a number (1-10):
        <label>
            <input type="number" name="num" min="1" max="10" autofocus>
        </label></p>
    </div>
    <input type="submit" value="Guess" class="button">


</form>
</div>
</body>
</html>