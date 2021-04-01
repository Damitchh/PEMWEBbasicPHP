<!DOCTYPE html>
<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <form action="login_process.php" method ="POST">
            <label>
                Username:
                <input type="text" name="id" required>
            </label>
            <br>
            <label>
                Password:
                <input type="password" name="pass" required>
            </label>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>