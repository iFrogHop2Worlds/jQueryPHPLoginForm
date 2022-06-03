<?php

session_start();
if(isset($_POST['handle_login']))
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
    if (empty($_POST["email"])) {
        echo "fail";
        exit();
    } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "incorrect";
          exit();
        }
    }
    
    if($email == "hr@auphansoftware.com" && $pass == "hello")
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