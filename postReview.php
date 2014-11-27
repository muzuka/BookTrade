<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// session_start();
include 'dataConnect.php';

$raterID = $_POST['raterID'];
$ratedUserID = $_POST['getRatings'];
$score = $_POST['numRating'];
$ratingBody = $_POST['ratingText'];

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

