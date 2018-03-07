<?php
    session_start();
    if ($_POST['submit_type'] == 'play'){
        $_SESSION['guess'] = $_POST['guess'];
    } else if ($_POST['submit_type'] == 'reset') {
        $_SESSION['random_int'] = rand(1, 100);
        unset($_SESSION['guess']);
    }

    header('Location: index.php');
?>