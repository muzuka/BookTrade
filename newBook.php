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
$quality = $POST['quality'];
$description = $_POST['description'];
$oid = $_SESSION['sess_user_id'];
$nbid = mysqli_query($conn, "SELECT UUID()");

$insert = "INSERT INTO Book (bID, Title, Author, Quality, oID) VALUES '$nbid', '$title', '$author', '$quality', '$oid';";
if(mysqli_query($conn, $insert) == TRUE)
{
    $desin = "INSERT INTO Description (bID, Description) VALUES '$nbid', '$description'";
    mysql_query($conn, $desin);
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
                $pins = "INSERT INTO Picture (bID, pText, Picture) VALUES '$nbid', '$ptxt', '$image';";
                mysqli_query($conn, $pins);
            }     
        }
    } catch (Exception $ex) {
        echo '<h4>'.$ex->getMessage().'</h4>';
    }
}