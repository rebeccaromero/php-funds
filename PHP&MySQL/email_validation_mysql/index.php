<?php
 session_start();
 if (isset($_SESSION['errors']))
 {
     foreach($_SESSION['errors'] as $error)
     {
         echo "<p>". $error. "</p>";
     }
 }
?>
<html>
    <header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    </header>
    <body>
        <form action="process.php" method="post">
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">Please enter email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="enter here">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </form>
    </body>
</html>