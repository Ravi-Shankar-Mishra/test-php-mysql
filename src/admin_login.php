<?php
    require './header.php';
    require './connection.php';

    if(isset($_POST['Admin Login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin` WHERE Email = '$email' AND Password = '$password'";

        $result = mysqli_query($conn, $sql);

        if ($result)
        {
            echo "<script>Login successful! Welcome back.</script>";
            // header('location:admin_dashboard.php');
        }
        else
        {
            echo "Invalid email or password.";
        }
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .login-bodypart
            {
                width: 1344;
                /* height: 1200px; */
                border-style: groove;
                margin-top: 5px;
                background-color: #F0FBF8;
            }
            .login-bodypart .login
            {
                width: 35%;
                margin: 50px auto 0px;
                color: white;
                /* background: rgb(0,94,78); */
                background: rgb(10,100,198);
                text-align: center;
                border:1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
            }
            .login-bodypart .input-group label
            {
                display: block;
                text-align: left;
                margin: 3px;
            }

            .login-bodypart .input-group input
            {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .login-bodypart .btn
            {
                width: 98%;
                height: 50px;
                font-size: 15px;
                color: white;
                background: rgb(10,100,198);
                border: none;
                border-radius: 5px;
                text-align: center;        
            }
            .login-bodypart .input-group select
            {
                height: 30px;
                height: 30px;
                height: 30px;
                width: 98%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
    </style>
    </head>
    <body>
    <div class="login-bodypart">

<center>
    
    <div class="login">
    <h1>Admin Login</h1>
    </div>
</center>




        <form action="admin_dashboard.php" method="post"  style="border-radius: 0px 0px 10px 10px;padding: 20px;
            width: 35%;	margin: 0px auto;	background: white;	border:1px solid #B0C4DE;" >
                
                
                <div class="input-group">
                    <label"><b>Email or Mobile</b></label>
                    <input type="text" name="email" id="email" placeholder="abc@mail.com or Mobile Number" required="">
                </div><br>
                

                <div class="input-group">
                    <label><b>Password</b></label>	
                    <input type="password" name="password" id="password" placeholder="**********" required="">
                    <br><br>
                
                
                <div class="btn">
                        
                        <a href='admin_display.php'><button type='submit' name='Admin Login' class='btn'><b>Login</b></button></a>                           
                        <!-- <a href='display.php'><button type='submit' name='Login' class='btn'><b>Login</b></button></a>; -->
                        
                
                
                </div></br>
                <div class="btn">
                    <button type="reset" name ="reset"class="btn"><b>Reset</b></button>
                </div>
            <p>
                <h2>Already a member ? <a href="signupform.php">Sign Up</a></h2>
            </p>

        </form>
    </body>
</html>