<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        header("location: loginPage.php");
        exit();
    }
    
    include "dataConnect.php";
    
    $bID = $_GET["id"];
    
    $bookQuery = "SELECT * FROM Book WHERE bID = '$bID'";
    $bookResult = mysqli_query($conn, $bookQuery);
    
    $row = mysqli_fetch_assoc($bookResult);
    
    $owner   = $row["oID"];
    $title   = $row["Title"];
    $author  = $row["Author"];
    $quality = $row["Quality"];
    
    $userQuery = "SELECT * FROM User WHERE UserID = '$owner';";
    $userResult = mysqli_query($conn, $userQuery);
    
    $row = mysqli_fetch_assoc($userResult);
    
    $username = $row["Username"];
    $email    = $row["eMail"];

?>

<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a >[log out]</a>
        </div>
    </head>

    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1> <?php echo $title; ?> </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
            <div style="background-color: white; color:black; margin:150px; padding: 100px">
                this will be the jpeg
            </div>  
            <p></p>
            <div>Book information</div>
            <table style="padding: 10px">
                <tr>
                    <td>Owner:</td>
                    <td><?php echo $username; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Book Title:</td>
                    <td><?php echo $title; ?></td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td><?php echo $author; ?></td>
                </tr>
                <tr>
                    <td>Condition:</td>
                    <td><?php echo $quality; ?></td>
                </tr>
            </table>
       </div>
    </body>
</html>

<?php mysqli_close($conn); ?>
