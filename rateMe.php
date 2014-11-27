<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

$ratedUserID = $_GET["eid"];
$ratedUserName = $_GET["uname"];
$raterID = $_SESSION["sess_user_id"];
?>                     
<html>
    <head>
        <title> The Book Lender - User Rating</title>
        <style>
            table, th, td 
            {
                border-collapse: collapse;
            }
        </style>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="index.php">[Home]</a> <a href='userPage.php'> [Return to User Page]</a> <a href="logout.php">[Logout]</a>
        </div>
    </head>
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1> <?php echo "Rating:" . $ratedUserName; ?> </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
            <form method="post" action="postReview.php">
                <table>
                    <tr>
                        <td>Rating: </td>
                        <td><select name="numRating">
                             <option value='0'> 0 </option>
                             <option value='1'> 1 </option>
                             <option value='2'> 2 </option>
                             <option value='3'> 3 </option>
                             <option value='4'> 4 </option>
                             <option value='5'> 5 </option>
                             <option value='6'> 6 </option>
                             <option value='7'> 7 </option>
                             <option value='8'> 8 </option>
                             <option value='9'> 9 </option>
                             <option value='10'> 10 </option>
                         </select></td>
                    </tr>
                    <tr>
                        <td>Feedback Body:</td>
                        <td><textarea wrap="physical" rows="5" cols="40" name="ratingText"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php echo "<input type='hidden' name='raterID' value='$raterID' />"
                                    . "<input type='hidden' name'ratedID' value='$ratedUserID' />" ?>
                            <input type="submit" value="Rate" name="rate" />
                        </td>
                    </tr>
                </table>
            </form>
       </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
