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
    </head>
    
    <body>
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
          <h1> Remove books </h1>
            <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
              <table>
                 <TD>
                     <form method="link" action="removed.php">
                        <input type="submit" value="delete">
                    </form>
                 </TD>
                 <td>
                     <form method="link" action="userpage.php">
                         <input type="submit" value="cancel">
                     </form>
                 </td>
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
          <div> what i want here is to be able to highlight the books and then hit the delet button to remove them.</div>
        </div>
    </body>
</html>
