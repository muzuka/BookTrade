<?php

include "dataConnect.php";
session_start();
//Check whether the session variable SESS_USER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
    header("location: loginPage.php");
exit();
}


$subject = $_POST["subject"];
$message = $_POST["message"];

if($_POST["submit"] == "delete") {
    header("Location: inbox.php");
}
else {
    $recID = $_POST["recID"];
    $sendID = $_SESSION["sess_user_id"];
    
    $date = date("Y-m-d h:i:s");
    $message = mysqli_real_escape_string($conn, $message);
    $subject = mysqli_real_escape_string($conn, $subject);
    
    $query = "INSERT INTO Messages(mBody, rID, sID, Subject, TStamp, Viewed) VALUES ('$message', '$recID', '$sendID', '$subject', '$date', 0);";
    $result = mysqli_query($conn, $query);
    
    mysqli_close($conn);
    header("Location: inbox.php");
}