<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a function for posting user reviews
-->
<?php
include 'dataConnect.php';

$raterID = $_POST['raterID'];
$ratedUserID = $_POST['getRatings'];
$score = $_POST['numRating'];
$ratingBody = $_POST['ratingText'];
$ratingBody = mysqli_real_escape_string($conn, $ratingBody);
//echo "$raterID   ";
//echo $ratedUserID;

$checkQuery = "SELECT (sID, rID) FROM Feedback WHERE sID='$raterID' AND rID='$ratedUserID'";
$ratingQuery = "INSERT INTO Feedback (sID, rID, Body, Rating) VALUES ('$raterID', '$ratedUserID', '$ratingBody', $score)";
$ratingUpdate = "UPDATE Feedback SET Body='$ratingBody', Rating=$score WHERE sID='$raterID' AND rID='$ratedUserID'";

$isThere = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($isThere) > 0)
{
    if($conn->query($ratingQuery) === TRUE )
    {
        header("location: browse.php");
    }   
}
else
{
    if($conn->query($ratingUpdate) === TRUE)
    {
        header("location: browse.php");
    }
    //echo "Error: " . $ratingQuery . "<br>" . $conn->error;
}

