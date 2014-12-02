<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This shows all current ratings for the selected user
-->
<?php
session_start();
include "dataConnect.php";

$ratedID = $_GET['rid'];
$ratedUsername = $_GET['rname'];

$averageRatingQuery = "SELECT AVG(Rating) FROM Feedback WHERE rID='$ratedID'";
$getAverage = mysqli_query($conn, $averageRatingQuery);
$fetchAverage = mysqli_fetch_array($getAverage);
$avgRating = $fetchAverage[0];

$ratingQuery = "SELECT f.Body, f.Rating, s.Username FROM Feedback AS f INNER JOIN User AS s ON f.sID=s.UserID WHERE f.rID='$ratedID';";
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
                <h1>User Ratings for "<?php echo $ratedUsername ?>"</h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p /><b> Average Rating: <?php echo $avgRating ?></b>
                </div>
                <center>
                <table>
                    <tr>
                        <td>| <b>Sent By</b> |</td>
                        <td>| <b>Rating</b> |</td>
                        <td>| <b>Comments</b> |</td>
                    </tr>
                    <?php
                    
                    // Rating query results will be looped and displayed here
                    if($ratingCount==0)
                    {
                        echo '<tr><td>This User has not yet been rated.</td></tr>';
                    }
                    else
                    {
                        for ($i=0; $i<$ratingCount; $i++)
                        {
                            echo '<tr>';                       
                            $currRow=mysqli_fetch_assoc($ratingResult);
                            
                            $ratingBody = $currRow["Body"];
                            $ratingValue = $currRow["Rating"];
                            $sentUser = $currRow["Username"];
                           
                            echo "<td> $sentUser </td>";
                            echo "<td> $ratingValue </td>";
                            echo "<td> $ratingBody </td>";
                            
                            echo "</tr>";
                        }

                        
                    }
                    ?>
                </table>
                </center>
                <div style="font-size: 20px; font-style: oblique; text-align: center">
                </div>
            </div>
         </div>
     </body>
</html>