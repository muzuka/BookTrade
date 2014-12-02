<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is the new book upload dialogue
-->
<html>
<?php
    session_start();
    //Check whether the session variable SESS_USER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) === '')) {
        header("location: loginPage.php");
    exit();
    }
?>
    <head>
        <title> The Book Lender | Upload </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userPage.php"> [Return to User Page]</a> <a href="logout.php">[Logout]</a>
        </div>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1>Upload</h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <p></p>
        </div>
            <div style="background-color: lightgray; color:black; margin: 20px; padding: 20px">
                <table align="Center">
                <form enctype="multipart/form-data" id="new" method="post" action="newBook.php">
                    <tr>
                        <td>Title: </td><td><input type="text" name="title" value="" placeholder="Title" /></td>
                    </tr>
                    <tr>
                        <td>Author: </td><td><input type="text" name="author" value="" placeholder="Author" /></td>
                    </tr>
                    <tr>
                        <td>Quality: </td>
                        <td><select name="quality" width="160px">
                            <option value="pristine"> Pristine </option>
                            <option value="good"> Good </option>
                            <option value="used" selected> Used </option>
                            <option value="worn"> Worn </option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Description: </td><td><textarea wrap="physical" rows="5" cols="40" name="description" onfocus="if(this.value=='Describe your book here.'){this.value=''}; return false;">Describe your book here.</textarea> </td>
                    </tr>
                    <!--<hr />http://localhost/project/BookTrade/imageDisplay.php?bid=a9e5b1f0-741f-11e4-9a3c-74f06d7aba9f -->
                    <tr>
                        <td>Image: </td>
                        <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="167772154" />
                            <input type="file" accept="image/jpeg" name="picture" id="picture" />
                        </td>
                    </tr>
                    <tr>
                        <td>Image Text: </td>
                        <td><input type="text" name="ptext" value="" placeholder="Image Description"</td>
                    </tr>
                    <tr align="Center">
                        <td colspan="2"><p /><input type="submit" value="Upload" name="submit" /></td>
                    </tr>
                </form>
                </table>
            </div>
        </div>
    </body>
</html>
