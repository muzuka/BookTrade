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

$numOfRows = mysqli_num_rows($result);
// check result
if($numOfRows == 0) {
    echo mysqli_error($conn);
    echo "<br />";
    echo "No results found.";
}
else {
    // make table
    for($i = 0; $i < $numOfRows; $i++) {
        $currentRow = mysqli_fetch_assoc($result);
        echo $currentRow["Title"];
        echo "<br />";
        echo $currentRow["Author"];
        echo "<br />";
    }
    
    
    
    // fill table with results

    
}

?>