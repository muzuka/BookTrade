<!DOCTYPE html>
<!--
Displays a particular message
Can reply to sender and delete the message from this page.
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
        <title>Messages</title>
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
                               <td>
                                   <form method="POST" action="WriteaMessage.php">
                                       <input type="hidden" name="id" value=<?php echo $recID; ?>/>
                                        <input type="submit" value="reply"/>
                                   </form>
                               </td>
                               
                               <td>
                                   <form method="POST" action="deleteMessage.php">
                                        <input type="submit" value="delete"/>
                                   </form>
                               </td>
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
