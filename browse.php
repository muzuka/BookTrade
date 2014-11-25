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
        $loggedin = FALSE;
    }
    else {
        $loggedin = TRUE;
    }

?>

<html>
    <head>
        <title>The Book Lender | Available Books</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <?php
                if($loggedin) {
                    echo "<a href='userPage.php'> [return to user page]</a> <a href='logout.php'>[log out]</a>";
                }
            ?>
        </div>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div>
                <h1>Search </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p> </p>
                </div>
                <form method="post" action="browse.php">
                    <p><input type="search" name="search" placeholder="search">
                    <input type="submit" value="submit" name="Search"></p>
                </form>
                <?php
                    if(isset($_POST["search"])) {
                        include "search.php";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
