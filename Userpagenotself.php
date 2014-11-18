<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

    include "dataConnect.php";
    
    session_start();
    
    $_SESSION["pageUser"] = $_GET["id"];
    
    $userID = $_SESSION["pageUser"];
    
    $query  = "SELECT * FROM User WHERE UserID = '$userID';";
    $result = mysqli_query($conn, $query);
    
    $firstRow = mysqli_fetch_assoc($result);
    
    if($result) {
        $username = $firstRow["Username"];
    }
    else {
        $username = "Missing User";
    }


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
            <h1> <?php echo $username . "'s profile"; ?> </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <table> 
                     <TD>
                        <form method="GET" action="WriteaMessage.php">
                            <input type="submit" value="send message">
                        </form>
                     </TD>
                </table>
            </div>
            <table style="column-count: 4; column-span: 300px;">
                <?php     
                    
                    $bookQuery = "SELECT Title, Author, bID FROM Book, User WHERE UserID = '$userID'";
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