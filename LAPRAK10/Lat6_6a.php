<?php
session_start();
if (isset($_SESSION['username']) == "admin" && $_SESSION['password'] == "admin") {
    $_SESSION['state'] = 1;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Order Form</title>
    </head>

    <body>
        <form action="Lat6_6b.php" method="post">
            <p> Order CD, amount:
                <input type="text" name="cd_order" value="0" size="2" maxlength="2">
            </p>
            <p> Order DVD, amount:
                <input type="text" name="dvd_order" value="0" size="2" maxlength="2">
            </p>
            <input type="submit" value="Add To Cart" name="submit">
        </form>
    </body>

    </html>
<?php } else {
    $_SESSION['state'] = 0;
    echo "Silahkan melakukan Login<br>
<form action='Lat6_Login.php' name='login'>
<input type='submit' value='Login' name='login'>
</form>
";
} ?>
