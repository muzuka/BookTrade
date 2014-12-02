<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is the page where individual books are shown
-->
<?php

    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        $loggedin = FALSE;
    }
    else {
        $loggedin = TRUE;
    }
    
    include "dataConnect.php";
    
    $bID = $_GET["id"];
    
    $bookQuery = "SELECT * FROM Book INNER JOIN User WHERE bID = '$bID' AND oID = UserID;";
    $bookResult = mysqli_query($conn, $bookQuery);
    
    $row = mysqli_fetch_assoc($bookResult);
    
    $bookID  = $row["bID"];
    $owner   = $row["oID"];
    $title   = $row["Title"];
    $author  = $row["Author"];
    $quality = $row["Quality"];
    $username = $row["Username"];
    $email    = $row["eMail"];
    
    $descQuery = "SELECT Description FROM Description INNER JOIN Book WHERE '$bookID' = Description.bID";
    $descResult = mysqli_query($conn, $descQuery);
    
    if($descResult) {
        $row = mysqli_fetch_assoc($descResult);
        $description = $row["Description"];
    }
    else {
        $description = "";
    }
    
    $imageQuery = "SELECT bID, pText FROM Picture WHERE bID='$bID'";
    $imageResult = mysqli_query($conn, $imageQuery);
    
    if($imageResult)
    {
        $imgRow = mysqli_fetch_assoc($imageResult);
        $pTxt = $imgRow['pText'];
    }
    else
    {
        $pTxt = "";
    }
    
?>

<html>
    <head>
        <title>The Book Lender | Book</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style='text-align: right; text-decoration-color: blue'>
            <?php
            if($loggedin) {
                echo "<a href='browse.php'>[Search]</a> <a href='userPage.php'>[Return to User Page]</a> <a href='logout.php'>[Logout]</a>";
            }
            else
            {
                echo "<a href='browse.php'>[Search]</a> <a href='index.php'>[Home]</a>";
            }
            ?>
        </div>
    </head>

    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1> <?php echo $title; ?> </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
            <div style="background-color: white; color:black; margin:10px; padding: 10px">
                <?php echo "<a href='imageDisplay.php?bid=$bID'>$pTxt</a>"; ?>
            </div>  
            <p></p>
            <div>Book information</div>
            <table style="padding: 10px">
                <tr>
                    <td>Owner:</td>
                    <td><?php echo $username; ?></td>
                </tr>
                <?php
                if ($loggedin)
                {
                    echo "<tr>
                    <td>Email:</td>
                    <td>$email</td>
                    </tr>";
                }
                ?>
                
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
                <tr>
                    <td>Description:</td>
                    <td><?php echo $description; ?></td>
                </tr>
            </table>
       </div>
    </body>
</html>

<?php mysqli_close($conn); ?>
