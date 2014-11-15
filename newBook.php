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
$oid = $_SESSION['sess_user_id'];
$nid = "SELECT UUID()";

$nbid = mysqli.query($conn, $nid);
$insert = "INSERT INTO Book(bID, Title, Author, Quality, oID) VALUES 'UUID(), $title', '$author', '$quality', '$nbid';";




