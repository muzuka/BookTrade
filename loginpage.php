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
                    
                  <form style="text-align:center" method="post" action="userpage.php">
                    <p><input type="text" name="login" value="" placeholder="Email"></p>
                    <p><input type="password" name="password" value="" placeholder="Password"></p>
                    <p class="remember_me">
                      <label>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        Remember me on this computer
                      </label>
                    </p>
                    <p class="submit"><input type="submit" name="commit" value="Login"></p>
                    <p> </p>
                    Not a Member?
                    <p> <a href="register.php" target="_self"> Create an Account</p>
                  </form>
                </div>
            </section>
        </div>
    </body>
</html>

