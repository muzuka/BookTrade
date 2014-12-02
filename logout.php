<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
This is a logout function
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php


session_start();
session_unset();
session_destroy();

header('location: loginPage.php');
?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>The Book Lender | login</title>
    <style>
        p.serif {
            font-family: "Tahoma", Geneva, sans-serif;
        }

        p.sansserif {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['sess_new']) && ($_SESSION['sess_new']) == 1) {
    echo "<div align='center'><p /><font color='red'>New user created successfully!</font></div>";
    session_unset();
}
?>
    <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
        <h1 style="color: green"> The Book Lender | Login </h1>
        <section class="container">
            <div class="login">
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <h2>Login</h2>
            </div>

            <form id="loginForm" name="lform" method="post" action="login.php">
                <table width="510" border="0" align="center">
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" id="username" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="button" id="button" value="Submit" /></td>
                    </tr>
                </table>
            </form>
                <p></p>
                <div style="text-align: center">
                    not a member?
                   <a href="register.php" target="_self"> Create a Account</a>
                </div>

            </div>
        </section>
    </div>
</body>
</html>
