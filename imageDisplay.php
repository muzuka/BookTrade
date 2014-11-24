<?php

/* 
 * 
 * 
 * 
 */

include 'dataConnect.php';

$bID = $_GET['bid'];

if (!isset($bID) || empty($bID))
{
    die("There is no image here!!");
}
else
{
    $pictureQuerty = "SELECT Picture FROM Picture WHERE bID = '$bID';";
    $picResult = mysqli_query($conn, $pictureQuery);
    $picRow = mysqli_fetch_assoc($picResult);
    $picture = $picRow['Picture'];

    header('Content-type: image/jpeg');
        echo $picture;
}
   
