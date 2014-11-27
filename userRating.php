<?php
session_start();
include "dataConnect.php";

$ratedID = $_GET['rid'];

$ratingQuery = "SELECT (s.Username, f.Body, f.Rating) FROM Feedback AS f JOIN User AS s WHERE f.rID=$ratedID AND s.UserID=f.sID;";
$ratingResult = mysqli_query($conn, $ratingQuery);

$numRating = mysqli_num_rows($ratingResult);
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
                <h1>Search </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p> </p>
                </div>
                <table>
                    <tr>
                        <td> rateing here </td> <td>user who gave rateing here</td>
                    </tr>
                    <tr>
                        <td> as many rows as need be>
                    </tr>
                </table>
                <div style="font-size: 200px; font-style: oblique; text-align: center">
                    overall average rateing here.
                </div>
            </div>
         </div>
     </body>
</html>