<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This function inserts a neew book record into the database
-->

<?php

session_start();
include 'dataConnect.php';

$title = mysqli_real_escape_string($conn, $_POST['title']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$quality = $_POST['quality'];
$description = mysqli_real_escape_string($conn, $_POST['description']);
$oid = $_SESSION['sess_user_id'];
$nbid = mysqli_query($conn, "SELECT UUID()");
$row = mysqli_fetch_assoc($nbid);
$nuid = $row['UUID()'];

$newBook = "INSERT INTO Book (bID, Title, Author, Quality, oID) VALUES ('$nuid', '$title', '$author', '$quality', '$oid');";
if ($conn->query($newBook) === TRUE) {
    $completion = "Book";
} else {
    echo "Error: " . $newBook . "<br>" . $conn->error;
} 

if(isset($description) && trim($description)!='')
{
    $desin = "INSERT INTO Description (bID, Description) VALUES ('$nuid', '$description');";
    mysqli_query($conn, $desin);
    $completion = $completion . ", Description";
}

// DO NOT UPLOAD AN IMAGE YET - It doesn't work
if(isset($_FILES['picture']) && $_FILES['picture']['size'] > 0)// && isset($_POST['ptext']) && trim($_POST['ptext'])!='')
{
    $tmpName = $_FILES['picture']['tmp_name'];
    
    $ptxt = mysqli_real_escape_string($conn, $_POST['ptext']);
    $fp = fopen($tmpName, 'r');
    $data = fread($fp, filesize($tmpName));
    $data = addslashes($data);
    fclose($fp);
    
    $imgin = "INSERT INTO Picture (bID, pText, Picture) VALUES ('$nuid', '$ptxt', '$data');";
    if($conn->query($imgin) === TRUE) {
        $completion = $completion . ", Picture";
    } else {
        echo "Error: " . $imgin . "<br>" . $conn->error;
    }
//    mysqli_query($conn, $imgin);  
}
echo $completion . " have been inserted successfully!";
mysqli_close($conn);
header("location: userPage.php");
