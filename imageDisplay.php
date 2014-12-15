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

    
    $pictureQuery = "SELECT Picture FROM Picture WHERE bID = '" . $bID . "';";
    
    $picResult = mysqli_query($conn, $pictureQuery);
    if ($picResult)
    {
        $picRow = mysqli_fetch_assoc($picResult);
        $picture = $picRow['Picture'];
    }
    else
    {
        $picture = "";
    }
    
    if(strlen($picture)>0)
    {
        header('Content-type: image/jpg');        
        header('Content-length: ' . strlen($picture));
        echo $picture;
    }
    else
    {
        echo "There is no picture for this book.";
    }
        
}
   
