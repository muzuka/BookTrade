<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Book Lender</title>
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
                <h1>Welcome to The Book Lender!</h1>
                <div id="bar"><center>
                    <table>
                        <tr>
                           <td>
                            <form method="link" action="browse.php">
                                <input type="submit" name="submit" value="Search"/>
                            </form>
                           </td> 
                           <td>
                               <form method="link" action="loginPage.php">
                                   <input type="submit" name="submit" value="Login"/>
                               </form>
                           </td>
                           <td>
                               <form method="link" action="register.php">
                                   <input type="submit" name="submit" value="Register"/>
                               </form>
                           </td>
                        </tr>
                    </table></center>
                </div>
            </div>
            <center><table width='80%'><tr><td>
            The Book Lender is a website in which users can coordinate trades of physical books.
            All of the team here at The Book Lender love having physical copies of books; it makes
            the books we love so much more cherishable than having them on e-Readers or tablets or phones.
            </td></tr></table></center>
        </div>
    </body>
</html>
