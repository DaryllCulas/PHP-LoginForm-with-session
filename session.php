session.php

<?php
session_start();
function pathTo($destination) {
    echo "<script> window.location.href = './$destination.php'</script>";
}

/* Displaying data of session variables here */
echo 'Session: '.$_SESSION['status'];
echo '<br>';
echo 'Username: '.$_SESSION['userName'];
echo '<br>';

# For not allowing the user to access the homepage or vice versa when he/she doesn't input the login form

    if($_SESSION['status'] == 'Invalid' || empty($_SESSION['status'])) {

        # Set Default Invalid
        $_SESSION['status'] = 'Invalid';

        # Unset user's data
        unset($_SESSION['userName']);

        # Redirect to Login Page
        //echo "<script> window.location.href = './login.php'</script>";
        pathTo('login');
    }
?>