<?php

/* 
 * 
 * 
 * 
 */

include 'dataConnect.php';
session_start();
$bID = $_GET['bid'];

if (!isset($bID) || empty($bID))
{
    die("There is no image here!!");
}
else
{
    $pictureQuery = "SELECT Picture FROM Picture WHERE bID = '" . $bID . "';";
    $picResult = mysqli_query($conn, $pictureQuery);
    $picRow = mysqli_fetch_assoc($picResult);
    $picture = $picRow['Picture'];

    header('content-type: image/jpg');
    header('content-length: ' . strlen($picture));
        echo $picture;
}
   
