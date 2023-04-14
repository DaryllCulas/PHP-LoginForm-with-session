<?php
/* Set Session for reusable of session global variables */
session_start();
function pathTo($destination) {
    echo "<script> window.location.href = './$destination.php'</script>";
}

/* Set status to Invalid*/
$_SESSION['status'] = 'Invalid';

/* Unset user data */
unset($_SESSION['username']);


/* Redirect to Login.php */
//echo "<script>window.location.href = './login.php'</script>";
    pathTo('login');
?>