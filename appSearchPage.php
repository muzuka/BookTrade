<?php

/* 
 * Receives POST messages from app and responds with results of query
 * Author: Sean Brown, Laura Berry, Andrew Lata
 */

include "dataConnect.php";

$postQuery = $_POST['query'];

$query = "SELECT Username, Title, Author, bID FROM User INNER JOIN Book WHERE (Author LIKE '%$postQuery%') OR (Title LIKE '%$postQuery%') AND oID = UserID;";

$result = mysqli_query($conn, $query);

for($i = 0; $i < mysqli_num_rows($result); $i++) {
    $row = mysqli_fetch_assoc($result);
    
    echo "::" . $row['Title'] . ":" . $row['Author'] . ":" . $row['Username'] . ":" . $row['bID'] . "::";
}