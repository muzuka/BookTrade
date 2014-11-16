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
            table, th, td 
            {
                border-collapse: collapse;
            }
            th, td
            {
                padding-right:  300px
            }
        </style>
    <div style=" text-align: right; text-decoration-color: blue">
        <a href="logout.php">[log out]</a>
    </div>
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <div style="background-color: orange; color: black; margin:30px; padding:20px;">
                <form style="text-align: center">
                 <h1> There was a problem, Upload failed</h1>
                 <a href="upload.php" target="self"> try again?</a>
                </form>
            </div>
            
            <h2> Username </h2>
            
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
              <table>
                 <TD>
                     <form method="link" action="upload.php">
                        <input type="submit" value="Upload">
                    </form>
                 </TD>
                 <td>
                     <form method="link" action="remove.php">
                         <input type="submit" value="Remove Books">
                     </form>
                 </td>

                 <TD>
                     <form method="link" action="browse.php">
                        <input type="submit" value="Browse">
                     </form>
                 </TD>

                 <TD>
                     <form method="link" action="inbox.php">
                         <input type="submit" value="messages">
                      </form>
                 </TD>
              </table>
            </div>
            
          <table>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book jpeg </a></td>
              </tr>
              <tr>
                  <td> <a href="bookPage.php" target="_self">book title </a></td>
              </tr>
          </table> 
        </div>
    </body>
</html>