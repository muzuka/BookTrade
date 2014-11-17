<?php

/* 
 * Search backend
 */

include "dataConnect.php";

$search_term = $_POST["search"];
$search_term = mysqli_escape_string($conn, $search_term);

// query database
$query = "SELECT bID, Author, Title, UserID, Username FROM Book, User WHERE (Author LIKE '%$search_term%' OR Title LIKE '%$search_term%') AND oID = UserID;";

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
    echo "<table>";
    for($i = 0; $i < $numOfRows; $i++) {
        echo "<tr>";
        $currentRow = mysqli_fetch_assoc($result);
        
        $bID   = $currentRow["bID"];
        $title = $currentRow["Title"];
        $author = $currentRow["Author"];
        $username = $currentRow["Username"];
        $userID = $currentRow["UserID"];
        
        
        echo "<a href='Userpagenotself.php?id=$userID'>$username</a>";
        echo "<br/>";
        echo "<a href='bookPage.php?id=$bID'>$title</a>";
        echo "<br/>";
        echo "<a href='bookPage.php?id=$bID'>$author</a>";
        echo "<br/>";
        echo "</tr>";
        echo"<br/>";
    }
    echo "</table>";
    
    
    
    // fill table with results

    
}

mysqli_close($conn);

?>