<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a function to retrieve an image from the database and display it
-->

<?php


include 'dataConnect.php';
session_start();
$bID = $_GET['bid'];

if (!isset($bID) || empty($bID))
{
    die("There is no image here!!");
}
else
{
    $pictureQuery = "SELECT Picture FROM Picture WHERE bID = '$bID';";
    $picResult = mysqli_query($conn, $pictureQuery);
    $picRow = mysqli_fetch_assoc($picResult);
    $picture = $picRow['Picture'];

    //header('content-type: image/jpeg');
    //header('content-length: ' . strlen($picture));
        echo "<img src='data:image/jpeg;base64," . base64_encode($picture) . "'/>";
}
   
