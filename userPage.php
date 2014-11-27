<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php

    include "dataConnect.php";

    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        header("location: loginPage.php");
        exit();
    }
    else
    {
        $currID = $_SESSION['sess_user_id'];
    }
    
    $ratingQuery = "SELECT AVG(Rating) FROM Feedback WHERE rID='$currID'";
    $getRating = mysqli_query($conn, $ratingQuery);
    $fetchRating = mysqli_fetch_array($getRating);
    $avgRating = $fetchRating[0];
?>
    <head>
        <title> The Book Lender - User Home</title>
        <style>
            table, th, td 
            {
                border-collapse: collapse;
            }
        </style>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="logout.php">[Logout]</a>
        </div>
    </head>
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
          <h1> <?php echo $_SESSION["sess_username"] . "'s Profile"; ?> </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <table width="100%">
                <tr>
                    <td width="25%" align="center">
                        <form method="link" action="upload.php">
                           <input type="submit" value="Upload">
                       </form>
                    </td>
                    <td width="25%" align="center">
                        <form method="link" action="remove.php">
                            <input type="submit" value="Remove Books">
                        </form>
                    </td>

                    <td width="25%" align="center">
                        <form method="link" action="browse.php">
                           <input type="submit" value="Search">
                        </form>
                    </td>

                     <td width="25%" align="center">
                        <form method="link" action="inbox.php">
                            <input type="submit" value="Messages">
                         </form>
                    </td>
                    <td>
                        <a href="userRating.php?rid=<?php echo $currID ?>">Rating: <?php echo $avgRating ?></a>
                    </td>
                </tr>
              </table>
            </div>
          <p style="font-size: 25px">Your Books</p>
          <table>
              <?php
              
                $userID = $_SESSION['sess_user_id'];
              
                $query = "SELECT bID, Title, Author FROM Book WHERE oID = '$userID'";
                $result = mysqli_query($conn, $query);
              
                if(!$result) {
                    echo "<tr> You have no books. </tr>";
                }
                
                for($i = 0; $i < mysqli_num_rows($result); $i++) {
                   
                    $row = mysqli_fetch_assoc($result);
                    
                    $bID    = $row["bID"];
                    $title  = $row["Title"];
                    $author = $row["Author"];
                    
                    echo "<tr>";
                
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
