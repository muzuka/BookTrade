<?php

/* 
 * Search backend
 */

include "dataConnect.php";

$search_term = $_POST["search"];

$search_term = mysql_real_escape_string($search_term);
// query database
$query = "SELECT Author, Title FROM Book WHERE Author = '$search_term' OR Title = '$search_term';";

// get result
$result = mysql_query($query);

// check result
if(mysql_num_rows($result) == 0) {
    echo mysql_error();
    echo "<br />";
    echo "No results found.";
}
else {
    // make table

    
    
    // fill table with results

    
}

?>