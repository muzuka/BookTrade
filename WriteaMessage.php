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
    
    
?>
<html>
    <head>
        <title>compose</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
    </head>
    

    <body>
         <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1></h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
                
                <div>
                    <table>
                        <tr>
                            <td>
                                <form method="link" action="sent.php">
                                <input type="submit" value="Send" name="send">
                                </form>
                            </td>
                            <td>
                                <form method="link" action="inbox.php">
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                            <td><input type="file" name="attach" id="fileUploaded"></td>
                        </tr>
                    </table>
                </div>
                <p>
                <div> subject </div>
                    <textarea name="subject" ROWS="1" cols="40"></textarea>
                </p>
                
                <p>
                <div> Message </div>
                    <textarea name="Message" ROWS="10" cols="40"></textarea>
                </p>
                <div> so i made a file sent page and a file not sent page i would like the send button to go to one or the other depending on if the user got the message.</div>
            </div>
    </body>
</html>
