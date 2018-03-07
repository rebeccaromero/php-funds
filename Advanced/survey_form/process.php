<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="form-results">
            <h1>Submitted Information</h1>
            <p>Name: <?php echo $_POST['name']; ?></p>
            <p>Dojo Location: <?php echo $_POST['location']; ?></p>
            <p>Favorite Language: <?php echo $_POST['language']; ?></p>
            <p>Comment: <?php echo $_POST['comment']; ?></p>
            <button onClick="window.location.href='http://localhost:8888/Advanced/survey_form/survey_form.php'">Go Back</button>
        </div>

    </body>
</html>