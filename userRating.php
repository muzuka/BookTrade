<?php
session_start();
include "dataConnect.php";

$ratedID = $_GET['rid'];

$ratingQuery = "SELECT f.Body, f.Rating, s.Username FROM Feedback AS f INNER JOIN User AS s ON f.sID=s.UserID WHERE f.rID=$ratedID;";
$ratingResult = mysqli_query($conn, $ratingQuery);
$ratingCount = mysqli_num_rows($ratingResult);





?>
<html>
    <head>
        <title>The Book Lender | User Reviews</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
        </div>
     </head>
     <body>
         <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div>
                <h1>User Ratings for <?php echo $ratingCount ?></h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p /> Average Rating for user here
                </div>
                <table>
                    <?php
                    
                    // Rating query results will be looped and displayed here
                    
                    ?>
                </table>
                <div style="font-size: 20px; font-style: oblique; text-align: center">
                </div>
            </div>
         </div>
     </body>
</html>