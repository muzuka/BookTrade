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
    
    if(isset($_POST["id"])) {
        $recID = $_POST["id"];
    }
    
    
    
?>
<html>
    <head>
        <title>compose</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [Return to User Page]</a> <a href="logout.php">[Logout]</a>
        </div>
    </head>
    

    <body>
         <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1>Compose Message</h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
            <form method="POST" action="send.php">
                <div>
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="recID" value=<?php echo $recID; ?>>
                                <input type='submit' value="send" name="submit">
                            </td>
                            <td>
                                <input type="submit" value="delete" name="submit">
                            </td>
                        </tr>
                    </table>
                </div>
                <p>
                    <div> Subject </div>
                    <input type="text" name="subject" value="Subject" />
                </p>
                
                <p>
                    <div> Message </div>
                    <textarea name="message" ROWS="10" cols="40"></textarea>
                </p>
            </form>
    </body>
</html>
