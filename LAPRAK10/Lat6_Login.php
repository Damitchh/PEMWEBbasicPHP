<?php
session_start();
if (isset($_SESSION['state']) && $_SESSION['state'] == 1) {
    header("Location:Lat6_6a.php");
} else {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>LOGIN</title>
    </head>

    <body>
    <form action="Lat6_6d.php" method="post">
        <h2>Login</h2>
      <label>Username = <input type="text" name="username" value="" required></label><br><br>
      <label>Password =  <input type="password" name="password" value="" required></label><br><br>
      <input type="submit" value="Login" name="login">
    </form>

    </body>

    </html>
<?php
} ?>
