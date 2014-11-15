<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
    include "dataConnect.php";
    
    $bID = $_GET["id"];
    
    $query = "SELECT Title, Author FROM Book WHERE bID = '$bID'";
    
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_assoc($result);
    $title = $row["Title"];

?>

<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a>[log out]</a>
        </div>
    </head>

    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1> <?php echo "$title"; ?> </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p></p>
                </div>
            <div style="background-color: white; color:black; margin:150px; padding: 100px">
                this will be the jpeg
            </div>  
            <p></p>
            <div>this table needs php</div>
            <table>
                <tr>
                    <td>Book Name</td>
                    <td> "actual book name"</td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td>"author name"</td>
                </tr>
            </table>
       </div>
    </body>
</html>

<?php mysqli_close($conn); ?>
