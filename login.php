<?php
//ob_start();
session_start();
include 'dataConnect.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
//$username = mysqli_real_escape_string($username);
$query = "SELECT UserID, Username, eMail, Pword FROM User WHERE Username = '$username';";

$result = mysql_query($query);

if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
header('Location: loginPage.php');
}
 
$userData = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($password !== $userData['Pword']) // Incorrect password. So, redirect to login_form again.
{
header('Location: loginPage.php');
}else{ // Redirect to user page after successful login.
session_regenerate_id();
$_SESSION['sess_user_id'] = $userData['UserID'];
$_SESSION['sess_username'] = $userData['Username'];
$_SESSION['sess_email'] = $userData['eMail'];
\session_write_close();
//ob_end_flush();
header('Location: userPage.php');
}
