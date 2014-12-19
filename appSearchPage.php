<?php

/* 
 * Receives POST messages from app and responds with results of query
 * Author: Sean Brown, Laura Berry, Andrew Lata
 */

include "dataConnect.php";

$postQuery = $_POST['query'];

$query = "SELECT Username, Title, Author FROM User INNER JOIN Book WHERE (Author LIKE '%$postQuery%') OR (Title LIKE '%$postQuery%');";

$result = mysqli_query($conn, $query);

$rows = mysqli_fetch_array($result);

for($i = 0; $i < mysqli_num_rows($result); $i++) {
    echo $rows[$i];
}