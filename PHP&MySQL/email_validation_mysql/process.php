<?php
// require_once('connection.php');
session_start();
if(isset($_POST['action']) && $_POST['action'] == 'process.php')
{
     $errors = array();
     //empty array to collect errors
     if(empty($_POST['email']))
     {
         $errors[] = "Please enter an email";
     }
     if(strlen($_POST['email']) < 7)
     {
         $errors[] = "Please enter valid email";
     } 
     if(count($errors) > 0)
     {
         //if there are errors, assign the session variable!
         $_SESSION['errors'] = $errors;
         //redirect your user back using header('location: ')
         header('Location: index.php');
         exit;
     }
     else
     {
         $_SESSION['success'] = "Email was valid and submitted to the database!";
         //redirect your user to the next part of the site!;
         header('Location: success.php');
         exit;
     }
}
?>