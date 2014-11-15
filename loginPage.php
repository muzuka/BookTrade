<!DOCTYPE html>
<html>
    <head>
        <title>The Book Lender</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div style="background-color: beige; color:black; margin: 20px; padding: 20px">
            <h1 style="color: green"> The Book Lender </h1>
            <section class="container">
                <div class="login">
                  <div style="background-color:blue; color:white; margin:10px; padding:5px;text-align: center">
                    <h2>Login</h2>
                  </div>
                    
                <form id="form1" name="form1" method="post" action="login.php">
                    <table width="510" border="0" align="center">
                        <tr>
                            <td colspan="2">Login Form</td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" id="username" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" id="password" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="button" id="button" value="Submit" /></td>
                        </tr>
                    </table>
                </form>
                </div>
            </section>
        </div>
    </body>
</html>

