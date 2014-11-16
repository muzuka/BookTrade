<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>available books</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div>
                <h1>Search </h1>
                <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <p> </p>
                </div>
                <form method="post" action="browse2.php">
                <p><input type="search" value="search" name="search">
                    <input type="submit" value="submit" name="Search"></p>
                </form>
            </div>
        </div>
    </body>
</html>
