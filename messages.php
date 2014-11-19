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
    
   $senderID = $_GET["sid"];
   $recID = $_GET["rid"];
   $timeStamp = $_GET["time"];
   
   $query = "SELECT * FROM Messages WHERE sID = '$recID' AND rID = '$senderID' AND TStamp = '$timeStamp';";
   $result = mysqli_query($conn, $query);
   
   if($result) {
       
       $message = mysqli_fetch_assoc($result);
       
       $subject = $message["Subject"];
       $sender = $_GET["sender"];
       $body   = $message["mBody"];
   }

?>
<html>
    <head>
        <title>messages</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div><h1>Message</h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <table>
                       <tr>
                           <td>reply</td><td>delete</td>
                       </tr>
                    </table>
                </div>
                <div style="background-color: lightgray; color:black; margin: 20px; padding: 20px">
                    <table border="3px solid black" width="100%">
                        <tr>
                            <td><?php echo $subject; ?></td><td style="width: 300px"><?php echo $timeStamp;  ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $sender; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $body; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
         </div>
    </body>
</html>
