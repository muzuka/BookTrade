<?php

/* 
 * Search backend
 */

include "dataConnect.php";

$search_term = $_POST["search"];

// query database
$query = "SELECT Author, Title FROM Book WHERE Author = '$search_term' OR Title = '$search_term';";

// get result
$result = mysqli_query($conn, $query);

// check result
if(mysqli_num_rows($result) == 0) {
    echo mysqli_error($conn);
    echo "<br />";
    echo "No results found.";
}
else {
    // make table

    
    
    // fill table with results

    
}

?>