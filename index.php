<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Book Lender | Available Books</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            td
            {
                margin: 10px
            }
            #background
            {
                background-color: beige;
                color: black;
                margin: 20px;
                padding: 20px;
            }
            #bar
            {
                background-color: blue;
                color:white;
                margin:10px;
                padding:5px;
                text-align: center;
            }
            #login
            {
                margin-right: 10px;
                margin-left: 20%;
                background-color: lightgrey;
                float: left;
                width: 30%;
            }
            #register
            {
                margin-left: 10px;
                background-color: lightgrey;
                float: left;
                width: 30%;
            }
        </style>
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
                echo "Error: " . $newUser . "<br>" . $conn->error;
            } 
        }

        $conn->close();

        ?>
        <div id="background">
            <div>
                <h1>Welcome to the Book Lender </h1>
                <div id="bar">
                    <p> </p>
                </div>
                <div id="login">
                    <h2 align="center"> Log in </h2>
                    <form id="loginForm" name="lform" method="post" action="login.php">
                        <table width="350px" border="0" align="left">
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
                </div>
                <div id="register">
                    <h2 align="center"> Register </h2>
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
                        <input type="submit" name="submit" value="Register"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
