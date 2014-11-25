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
        </style>
    </head>
    
    <body>
        <div id="background">
            <div>
                <h1>Welcome to the Book Lender </h1>
                <div id="bar">
                    <table>
                        <tr>
                           <td>
                            <form method="link" action="browse.php">
                                <input type="submit" name="submit" value="browse"/>
                            </form>
                           </td> 
                           <td>
                               <form method="link" action="loginPage.php">
                                   <input type="submit" name="submit" value="login"/>
                               </form>
                           </td>
                           <td>
                               <form method="link" action="register.php">
                                   <input type="submit" name="submit" value="register"/>
                               </form>
                           </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
