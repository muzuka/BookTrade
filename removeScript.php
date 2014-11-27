<?php

session_start();
//Check whether the session variable SESS_USER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
    header("location: loginPage.php");
    exit();
}

$button = $_POST["remove"];

if($button == "cancel") {
    
    header("location: userPage.php");   
}
else {
    if(!empty($_POST["toRemove"])) {
    include "dataConnect.php";
    
    $userID = $_SESSION['sess_user_id'];
    
    foreach ($_POST["toRemove"] as $selected) {
        $query = "DELETE FROM Book WHERE bID = '$selected';";
            
        mysqli_query($conn, $query);
    }
    }
    mysqli_close($conn);
    header("location: userPage.php");
}