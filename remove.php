<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a function used for removing books
-->
<?php

    include "dataConnect.php";
    
    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        header("location: loginPage.php");
        exit();
    }
    
    $userID = $_SESSION['sess_user_id'];
    
    $userBookQuery = "SELECT Title, Author, bID FROM Book WHERE oID = '$userID';";
    $result = mysqli_query($conn, $userBookQuery);
    
    $numOfRows =  mysqli_num_rows($result);

?>

<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [Return to User Page]</a> <a href="logout.php">[Logout]</a>
        </div>    
    </head>
    
    <body>
        <form method="POST" action="removeScript.php">
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
          <h1> Remove books </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
              <table>
                 <TD>
                        <input type="submit" name="remove" value="delete">
                 </TD>
                 <td>
                         <input type="submit" name="remove" value="cancel">
                 </td>
              </table>
            </div>
          <table>
                <?php
              
                    if($numOfRows == 0) {
                        echo "<tr> You have no books. </tr>";
                    }
                    else {
                        
                        $userID = $_SESSION['sess_user_id'];

                        for($i = 0; $i < $numOfRows; $i++) {

                            $row = mysqli_fetch_assoc($result);
                            $title  = $row["Title"];
                            $author = $row["Author"];
                            $bookID = $row["bID"];

                            echo '<tr>';

                            echo "<td>";
                            echo "<input type='checkbox' name='toRemove[]' value='$bookID' />";
                            echo "</td>";
                            
                            echo "<td>";
                            echo "<p>$title<br/>$author</p>";
                            echo "</td>";

                            echo "</tr><br/>";
                        }
                    }
                    
                    mysqli_close($conn);
              
                ?>
          </table>
        </div>
        </form>  
    </body>
</html>
