<?php

session_start();
if(isset($_POST['do_login']))
    {
    // $host="localhost";
    // $username="root";
    // $password="";
    // $databasename="sample";
    // $connect=mysql_connect($host,$username,$password);
    // $db=mysql_select_db($databasename);

    $email=$_POST['email'];
    
    $pass=$_POST['password'];
    //$select_data=mysql_query("select * from user where email='$email' and password='$pass'");
    
    if(!empty($email))
        {
        $_SESSION['email']= $email;
        echo "success";
        }
    else
        {
        echo "fail";
        }

    exit();
    }
?>