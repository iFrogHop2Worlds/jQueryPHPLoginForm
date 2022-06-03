<?php
session_start();
if(isset($_POST['Logout']))
    {
    unset($_SESSION['email']);
    }
?>

<html>
    <script>alert("Successful Login");</script>
        <body>
            <h2>Login Successful</h2>
            
            <br>
            <form method='post'>
                <input type='submit' name='logout' value='Logout'>
            </form>
        </body>
</html>

