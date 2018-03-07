<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action='process.php' method='post'>
        <div class="field">
            <label>Your Name:</label>
            <input class="input" type='text' name='name'>
        </div>
        <div class="field">
            <label>Dojo Location:</label>
            <select class="input" name="location">
                <option value="Los Angeles">Los Angeles</option>
                <option value="Seattle">Seattle</option>
                <option value="Mountain View">Mountain View</option>
                <option value="San Diego">San Diego</option>
            </select>
        </div>
        <div class="field">
            <label>Favorite Language:</label>
            <select class="input" name="language">
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Ruby">Ruby</option>
            </select>
        </div>
        <div>
            <label>Comment (optional):</label>
            <textarea class="comment" type='textarea' name='comment'></textarea>
        </div>
        <button class="submit" type='submit' value='Submit'>Submit</button>
    </form>
</body>
<?php
?>
</html>