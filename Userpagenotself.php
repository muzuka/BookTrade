<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a user page for users who you are not logged in as.
-->

<?php

    include "dataConnect.php";
    
    session_start();
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        $loggedin = FALSE;
    }
    else {
        $loggedin = TRUE;
    }
    
    $userID = $_GET["id"];
    
    $query  = "SELECT * FROM User WHERE UserID = '$userID';";
    $result = mysqli_query($conn, $query);
    
    $firstRow = mysqli_fetch_assoc($result);
    
    if($result) {
        $username = $firstRow["Username"];
    }
    else {
        $username = "Missing User";
    }

    $ratingQuery = "SELECT AVG(Rating) FROM Feedback WHERE rID='$userID'";
    $getRating = mysqli_query($conn, $ratingQuery);
    $fetchRating = mysqli_fetch_array($getRating);
    $avgRating = $fetchRating[0];

?>

<html>
    <head>
        <title>The Book Lender | User Page</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style='text-align: right; text-decoration-color: blue'>
        <?php
            if($loggedin) {
                echo " <a href='userPage.php'> [Return to User Page]</a> <a href='logout.php'>[Logout]</a>";
            }
            else
            {
                echo "<a href='index.php'>[Home]</a>";
            }
        ?>
        </div>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1> <?php echo $username . "'s profile"; ?> </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <table>
                    <?php
                        if($loggedin) {
                            echo "<td><form method='POST' action='WriteaMessage.php'>"
                               ."<input type='hidden' name='id' value=$userID>"
                               ."<input type='submit' value='Send Message'> </form></td>
                     <td>
                                <form method='GET' action='rateMe.php'>
                                    <input type='hidden' name='eid' value='$userID' />
                                    <input type='hidden' name='uname' value='$username' />
                                    <input type='submit' value='Rate User' />
                                </form>";
                        }
                     ?>
                     </td>
                     <td>
                         <a style="color: white" href="userRating.php?rid=<?php echo $userID . '&rname=' . $username ?>"><b>Trader Rating: <?php echo $avgRating ?></b></a>
                     </td>
                </table>
            </div>
            <table style="column-count: 4; column-span: 300px;">
                <?php     
                    
                    $bookQuery = "SELECT Title, Author, bID FROM Book INNER JOIN User WHERE UserID = '$userID' AND oID = '$userID';";
                    $bookResult = mysqli_query($conn, $bookQuery);
                
                    for($i = 0; $i < mysqli_num_rows($bookResult); $i++) {
                        echo "<tr>";
                        
                        $row = mysqli_fetch_assoc($bookResult);
                        
                        $title  = $row["Title"];
                        $author = $row["Author"];
                        $bID    = $row["bID"];
                        
                        echo "<a href='bookPage.php?id=$bID'>$title</a>";
                        echo "<br/>";
                        echo "<a href='bookPage.php?id=$bID'>$author</a>";
                        echo "<br/>";
                        
                        echo "</tr><br/>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>

<?php mysqli_close($conn); ?>
