<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a new user registration dialogue
-->
<html>
<head>
        <title>The Book Lender | Register</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
// MySQL Connection
session_start();
include 'dataConnect.php';

$un = filter_input(INPUT_POST, 'username');
$em = filter_input(INPUT_POST, 'email');
$pw = filter_input(INPUT_POST, 'password');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUser = "INSERT INTO User(Username, eMail, Pword) VALUES ('$un', '$em', '$pw');";

    if ($conn->query($newUser) === TRUE) {
        $_SESSION['sess_new'] = 1;
        header('Location: loginPage.php');
    } else {
        echo "<b>The Username '" . $un . "' has been taken, choose another!</b>";
        //echo "Error: " . $newUser . "<br>" . $conn->error;
    } 
}

$conn->close();

?>

        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1>Register</h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <p></p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table width="350px" border="0px">
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" value="" /></td>
                    </tr>
                    <tr>
                        <td>E-Mail: </td>
                        <td><input type="email" name="email" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" value="" /></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
    </body>
</html>
