<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="css/loginpg.css">
        
    <title>Login</title>

    
    
</head>
<?php

session_start();

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;

include("connection.php");

   if($_POST){

    $email=$_POST['useremail'];
    $password=$_POST['userpassword'];
    $docmail='doctor@gmail.com';
    $docpassword='123';
    
    $error='<label for="promter" class="form-label"></label>';

    if($email == $docmail)
       
        {
            if ($email == $docmail && $password == $docpassword){


                header('location: doctor/dhome.php');

            }else{
                $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
            }

    }else{
        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
    }

    }else{
    $error='<label for="promter" class="form-label">&nbsp;</label>';
}

?>

<body>
    <center>
        <div class="container">
            <table border="0" style="margin: 0;padding: 0;width: 60%;">
                <tr>
                    <td>
                        <p class="header-text">WELCOME DOCTOR!</p>
                    </td>
                </tr>
            <div class="form-body">
                <tr>
                    <td>
                        <p class="sub-text">Login with your details to continue</p>
                    </td>
                </tr>
                <tr>
                    <form action="" method="POST" >
                    <td class="label-td">
                        <label for="useremail" class="form-label">Email </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="email" name="useremail" class="input-text" placeholder="Email Address" required>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td class="label-td">
                        <label for="userpassword" class="form-label">Password </label>
                    </td>
                </tr>
    
                <tr>
                    <td class="label-td">
                        <input type="Password" name="userpassword" class="input-text" placeholder="Password" required>
                    </td>
                </tr>
    
    
                <tr>
                    <td><br>
                    <?php echo $error ?>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        <input type="submit" value="Login" class="login-btn btn-primary btn">
                    </td>
                </tr>
            </div>
            </form>
            </table>
    
        </div>
    </center>
    </body>
    </html>