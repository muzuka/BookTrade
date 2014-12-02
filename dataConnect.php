<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is the function included in all pages that require sql access
-->

<?php

$conn = new mysqli('localhost', 'reader', 'jiMbly471jaMbly', 'BookTrade');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_select_db($conn, "BookTrade");

