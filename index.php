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
            <center><table width='80%'>
                    <tr>
                        <td>
                            <p />The Book Lender was created as a project for a computer science class on Database 
                            technologies at the University of Calgary. It was designed and implemented here by a 
                            group of three: (in alphabetical order) Andrew Lata, Laura Berry, and Sean Brown.
                            <p />We chose this as the topic of our project because, put simply, we love books. We love 
                            the stories that they tell and the thoughts that they provoke. Nowadays, as with all things, 
                            technology is beginning to replace a medium that we all grew up with and came to love: the 
                            physical copy of a good book. 
                            <p />With this in mind we, The Book Trader Team, would like to take the time to nurture a love 
                            of books for all people. We feel that a book is something that should be shared, that the insights 
                            and opinions that that story alludes to deserve to and should be discussed. And through this 
                            understanding of a good story through discussion and debate everyone is able, as the Greek aphorism 
                            goes, to "Know thyself". And with this knowledge you are equipped to venture through life and know 
                            the world around you.
                        </td>
                    </tr>
            </table></center>
        </div>
    </body>
</html>
