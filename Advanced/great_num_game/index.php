<?php
    session_start();
    if (!isset($_SESSION['random_int'])){
        $_SESSION['random_int'] = rand(1, 100);
    }
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <h1>Welcome to the Great Number Game!</h1>
        <p>I am thinking of a number between 1 and 100</p>
        <p>Take a guess!</p>
        <?
            if(isset($_SESSION['guess'])){
                if ($_SESSION['guess'] < $_SESSION['random_int']){
                    echo "<div class='result wrong'>
                            <h1>Too low!</h1>
                        </div>";
                } else if ($_SESSION['guess'] > $_SESSION['random_int']){
                    echo "<div class='result wrong'>
                            <h1>Too high!</h1>
                        </div>";
                } else if ($_SESSION['guess'] == $_SESSION['random_int']){
                    echo "<div class='result correct'>
                            <h1> " .$_SESSION['random_int'] ." was the right number!</h1>
                            <form action='process.php' method='POST'>
                                <input type='hidden' name='submit_type' value='reset'>
                                <input type='submit' value='play again'>
                            </form>
                        </div>";
                }
            }
        ?>
        <form action="process.php" method="POST">
            <input type="hidden" name="submit_type" value="play">
            <input type="text" name="guess">
            <input type="submit" value="submit">
        </form>
    </body>
</html>