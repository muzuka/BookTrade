<?php

/* 
 * Receives POST message from app and returns book data
 * 
 * Author: Sean Brown, Laura Berry, Andrew Lata
 */

include "dataConnect.php";

$bookID = $_POST['bID'];

$query = "SELECT * FROM Book INNER JOIN (Picture INNER JOIN Description) WHERE bID = '$bookID';";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

echo $row['Picture'] . ":" . $row['Description'] . ":" . $row['Title'] . ":";
echo $row['Author'] . ":" . $row['Quality'];