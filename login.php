<?php
include 'dataConnect.php';
ob_start();
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$username = mysql_real_escape_string($username);
$query = "SELECT UserID, Username, eMail, Pword FROM User WHERE username = '$username';";
 
$result = mysql_query($query);
 
if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
header('Location: loginForm.php');
}
 
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
 
if($pasword != $userData['Pword']) // Incorrect password. So, redirect to login_form again.
{
header('Location: loginForm.php');
}else{ // Redirect to home page after successful login.
session_regenerate_id();
$_SESSION['sess_user_id'] = $userData['UserID'];
$_SESSION['sess_username'] = $userData['Username'];
$_SESSION['sess_email'] = $userData['eMail'];
session_write_close();
header('Location: userPage.php');
}
