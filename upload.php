<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Upload</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1>Upload</h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <p></p>
            </div>
                <div style="background-color: lightgray; color:black; margin: 20px; padding: 20px">
                <div>
                    <form style="text-align:center" method="post" action="index.php">
                        <p><input type="text" name="Book Title" value="" placeholder="Title"></p>
                        <p><input type="text" name="Author" value="" placeholder="Author"</p>
                        <p><input type="text" name="Publisher" value="" placeholder="Publisher"></p>
                        <p><input type="text" name="condition of book" value="" placeholder="condition"></p>
                        <p><input type="file" name="picture of book" id="fileUploaded"></p>
                        <p></p>
                    </form>
                        <form  style="text-align: center"method="link" action="uploaded.php">
                            <p><input type="submit" value="submit" name="submit"></p>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>
