<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
session_start();
//Check whether the session variable SESS_USER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
    header("location: loginPage.php");
exit();
}
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
            <a href="logout.php">[log out]</a>
        </div>
    </head>
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
          <h1> <?php echo $_SESSION["sess_username"] ?> </h1>
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
                           <input type="submit" value="Browse">
                        </form>
                    </td>

                     <td width="25%" align="center">
                        <form method="link" action="inbox.php">
                            <input type="submit" value="messages">
                         </form>
                    </td>
                </tr>
              </table>
            </div>
          <table>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book jpeg </a></td>
              </tr>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book title </a></td>
              </tr>
          </table>
        </div>
    </body>
</html>
