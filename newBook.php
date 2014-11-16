<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'dataConnect.php';

$title = $_POST['title'];
$author = $_POST['author'];
$quality = $_POST['quality'];
$description = $_POST['description'];
$oid = $_SESSION['sess_user_id'];
$nbid = mysqli_query($conn, "SELECT UUID()");
$row = mysqli_fetch_assoc($nbid);
$nuid = $row['UUID()'];

$newBook = "INSERT INTO Book (bID, Title, Author, Quality, oID) VALUES ('$nuid', '$title', '$author', '$quality', '$oid');";
if ($conn->query($newBook) === TRUE) {
    header('Location: userPage.php');
} else {
    echo "Error: " . $newBook . "<br>" . $conn->error;
} 

if(isset($description) && trim($description)!='')
{
    $desin = "INSERT INTO Description (bID, Description) VALUES '$nuid', '$description'";
    mysqli_query($conn, $desin);
}

// DO NOT UPLOAD AN IMAGE YET - It doesn't work
if(isset($_FILES['picture']) && trim(isset($_POST['ptext'])))
{
    try
    {
        if(is_uploaded_file($_FILES['picture'] && getimagesize($_FILES['picture']) != FALSE))
        {
            $size = getimagesize($_FILES['picture']);
            $image = fopen($_FILES['picture'], "r");
            $ptxt = $_POST['ptext'];
            $maxsize = 16777215;
            if($image < $maxsize)
            {
                $pins = "INSERT INTO Picture (bID, pText, Picture) VALUES '$nuid', '$ptxt', '$image';";
                mysqli_query($conn, $pins);
            }     
        }
    } catch (Exception $ex) {
        echo '<h4>'.$ex->getMessage().'</h4>';
    }
}
