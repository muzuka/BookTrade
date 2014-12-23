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

if(isset($row['Picture'])) {
    echo ":" . $row['Picture'] . ":";
}
else {
    echo ":None:";
}
echo $row['Title'] . ":" . $row['Author'] . ":";
echo $row['Quality'] . ":" . $row['Description'];