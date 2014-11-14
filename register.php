<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
        <title>Register</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.html"> [return to user page]</a> <a>[log out]</a>
        </div>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1>Upload</h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <p></p>
            </div>
            <form style="text-align:center" method="post" action="index.php">
                <p><input type="text" name="user" value="" placeholder="User Name"></p>
                <p><input type="text" name="login" value="" placeholder="Email"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
                <p>confirm Password </p>
                <p><input type="password" name="compare" value="" placeholder="password"</p>
                <p class="submit"><input type="submit" name="commit" value="Submit"></p>
           </form>
        </div>
    </body>
</html>
