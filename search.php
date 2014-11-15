<?php

/* 
 * Search backend
 */

include "dataConnect.php";

$search_term = $_POST["search"];
$search_term = mysqli_escape_string($conn, $search_term);

// query database
$query = "SELECT bID, Author, Title FROM Book WHERE Author LIKE '%$search_term%' OR Title LIKE '%$search_term%';";

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
        
        $bID   = $currentRow["bID"];
        $title = $currentRow["Title"];
        $author = $currentRow["Author"];
        
        echo "<a href='bookPage.php?id=$bID'>$title</a>";
        echo "<br />";
        echo "<a href='bookPage.php?id=$bID'>$title</a>";
        echo "<br />";
    }
    
    
    
    // fill table with results

    
}

mysqli_close($conn);

?>