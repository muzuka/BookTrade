<!DOCTYPE html>
<!--
BookTrade Website
Authored by: Sean Brown, Andrew Lata, and Laura Berry
Message sent confirmation
-->
<html>
    <head>
        <title>TInbox</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, th, td 
            {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td
            {
                padding-right:  400px
            }
        </style>
        <div style=" text-align: right; text-decoration-color: blue">
            <a href="userpage.php"> [return to user page]</a> <a href="logout.php">[log out]</a>
        </div>
    </head>
    

    <body>
    <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div style="; background-color: lightgreen; margin: 30px; padding: auto; text-align: center">
                <h1>Message Sent!</h1>
            </div>
            
            <h2>Inbox</h2>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                <p></p>
            </div>
            
            <div style="background-color: lightgray; color:black; margin: 20px; padding: 20px">
                    <table>
                        <tr>
                            <td><a href="WriteaMessage.php" target="_self">user who sent message (note: this is a link, it will go to a page that will display the message)</a></td>
                        <td>date message was sent</td>
                        </tr>
                        <tr>
                            <td> as many rows as messages.</td>
                        </tr>
                    </table>
            </div>
        </div>
   </body>
</html>
