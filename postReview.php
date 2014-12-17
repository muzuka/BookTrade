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
echo "$raterID   ";
echo $ratedUserID;

$ratingQuery = "INSERT INTO Feedback (sID, rID, Body, Rating) VALUES ('$raterID', '$ratedUserID', '$ratingBody', $score)";

if($conn->query($ratingQuery) === TRUE )
{
    header("location: browse.php");
}
else
{
    echo "Error: " . $ratingQuery . "<br>" . $conn->error;
}

