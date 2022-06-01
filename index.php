<?php
session_start();
if(isset($_POST['logout']))
    {
    unset($_SESSION['email']);
    }
?>

<html>
    <body>
        <h2>Login Successful</h2>
        <br>
        <form method='post'>
            <input type='submit' name='logout' value='Logout'>
        </form>
    </body>
</html>

