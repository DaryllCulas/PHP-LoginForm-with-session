<?php 
require('./database.php'); # To access its properties from database.php

# initializing session variable
# Set Session for reusable of session global variables 
session_start();

function pathTo($destination) {
    echo "<script> window.location.href = './$destination.php'</script>";
}

/* Initializing global variables of form as we click the SUBMIT button*/
if(isset($_POST['login'])) {
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];


    /* If the user's input has whitespace or unfilled in login form then it cannot be redirected to another page*/
        if(empty($userName) || empty($passWord)) {
            echo "<script>alert('Please Fill up all fields')</script>";
        }
        else {
        # when the user's input is correct then the data between page and database will be validating on it.
            $queryValidate = "SELECT * FROM login_session WHERE userName = '$userName' AND passWord = md5('$passWord')";
            $sqlValidate = mysqli_query($connection, $queryValidate); # database connection and query statement
            $row_Validate = mysqli_fetch_array($sqlValidate); # Fetching data of sqlValidate

                # Fetching data from database and query when the condition is true
                if(mysqli_num_rows($sqlValidate) > 0) {
                    # echo 'Valid data';
                    $_SESSION['status'] = 'Valid'; 
                    $_SESSION['userName'] = $row_Validate['userName'];
                    // echo "<script> window.location.href ='./home.php' </script>"; # --> redirecting to home.php
                    pathTo('home'); #---> redirecting to home.php -. function invoke type
                }
                else {
                    $_SESSION['status'] = 'Invalid';
                    echo 'Invalid data';
                }
        }
}

# SESSION PART
if($_SESSION['status'] == 'Invalid' || empty($_SESSION['status'])) {

    # Set Default Invalid
    $_SESSION['status'] = 'Invalid';
}
if($_SESSION['status'] =='Valid') {
/* When the user tries to redirect in another page or go back, then
the user won't allow the current page to be redirected to another one since the session is valid */


    pathTo('home'); # function-invoke type
    // echo "<script> window.location.href = './home.php'</script>"; 
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
    body {
        margin-top: 60px;
    }
</style>

<body>
    <center>
        <form action="./login.php" method="post">

        <label>Username</label>
            <input type="text" name="userName" placeholder ="Username"/>
        <label>Password</label>
            <input type="text" name="passWord" placeholder="Password"/>
        <input type="submit" name = "login" value="LOGIN">
        </form>
    </center>
</body>
</html>