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
    
    $userID = $_SESSION['sess_user_id'];
    
    $query = "SELECT Subject, TStamp, Viewed FROM Messages WHERE rID = $userID";
    
    $result = mysqli_query($conn, $query);
    
    if($result) {
        $numOfMessages = mysqli_num_rows($result);
    }
    else {
        $numOfMessages = 0;
    }

?>

<html>
    <head>
        <title>TInbox</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, th, td 
            {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td
            {
                padding-right:  400px
            }
        </style>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a>[log out]</a>
        </div>
    </head>


    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div>
                <h1>Inbox</h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p/>
                </div>
                <div style="background-color: lightgray; color:black; margin: 20px; padding: 20px">
                    <body>
                        <table>
                            
                            <?php
                            
                                if($numOfMessages == 0) {
                                    echo "You have no messages.";
                                }
                            
                                for($i = 0; $i < $numOfMessages; $i++) {
                                    
                                    $row = mysqli_fetch_assoc($result);
                                    
                                    $timeStamp = $row["TStamp"];
                                    $subject = $row["Subject"];
                                    $viewed = $row["Viewed"];
                                    
                                    echo "<tr><br/>";
                                    echo "<td> $subject </td>";
                                    echo "<td> $timeStamp</td>";
                                    echo "</tr>";
                                }
                            
                            ?>
                        </table>
                    </body>
                </div>
            </div>
        </div>
    </body>
</html>

<?php mysqli_close($conn); ?>