<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    include "dataConnect.php";
    
    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        header("location: loginPage.php");
        exit();
    }
    
    $username = $_SESSION['sess_user_id'];
    
    $userBookQuery = "SELECT Title, Author FROM Book WHERE oID = '$username';";
    $result = mysqli_query($conn, $userBookQuery);
    
    $numOfRows =  mysqli_num_rows($result);

?>

<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>    
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
          <h1> Remove books </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
              <table>
                 <TD>
                     <form method="link" action="removed.php">
                        <input type="submit" value="delete">
                    </form>
                 </TD>
                 <td>
                     <form method="link" action="userpage.php">
                         <input type="submit" value="cancel">
                     </form>
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

                            echo '<tr>';

                            echo "<p>$title</p>";
                            echo "<p>$author</p>";
                            echo "<br/>";

                            echo "</tr><br/>";
                        }
                    }
              
                ?>
          </table>
        </div>
    </body>
</html>
