<?php
include_once("../dbconn.php");
session_start();

$email = mysqli_escape_string($conn,$_POST['email']);
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    echo '<script>alert("User with entered email does not exist!")</script>';
    header("location: ./login.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    $password = $_POST['password'];
    $password = md5($password);
    if ( $password == $user['password'] ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: ../nemprofile.php");
    }
    else {
    echo '<script>alert("You have entered wrong password, try again!"")</script>';
	header("location: ./login.php");
    }
}
?>