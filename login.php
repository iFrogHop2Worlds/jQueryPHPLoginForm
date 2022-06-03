
<html>
    <head>
    <link href="login_style.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        function enter_login()
        {
            var email=$("#emailid").val();
            var pass=$("#password").val();
            if(email!="" && pass!="") {
                //$("#loading_spinner").css({"display":"block"});
                $.ajax({
                    type:'post',
                    url:'handle_login.php',
                    data:{
                    handle_login:"handle_login",
                    email:email,
                    password:pass
                    },
                    success: function(response) {
                        console.log(response);
                        if(response=="success")
                            {
                                window.location.href="index.php";
                            }
                        else if(response=="fail")
                            {
                                $("#loading_spinner").css({"display":"none"});
                                alert("Incorrect Username/Password");
                            }
                        else if(response=="incorrect")
                        {
                            alert("invalid email format")
                        }
                    }
                });
            } else {
                alert("Please Fill All The Details");
            }
            return false;
        }
    </script>
    </head>
    <body>
    <div id="wrapper">
    
    <div id="login_form">
     <h1>LOGIN</h1>
     <p id="login_label">Email : user@email.com | Password</p>
     <form method="post" action="handle_login.php" onsubmit="return enter_login();">
      <input type="text" name="emailid" id="emailid" placeholder="Enter Email">
      <br>
      <input type="password" name="password" id="password" placeholder="***********">
      <br>
      <input type="submit" name="login" value="LOGIN" id="login_button">
     </form>
     <!-- <p id="loading_spinner"><img src="images/loader.gif"></p> -->
    </div>
    
    </div>
    </body>
    </html>
    
