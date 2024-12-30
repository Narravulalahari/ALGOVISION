<?php
session_start();
error_reporting(0);

$username  = $_POST["username"]; 
$name      = $_POST["name"];
$password  = $_POST["password"];
$pass      = $_POST["pass"];
$confirm   = $_POST["confirm"];
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$con=mysqli_connect('localhost','root',"",'mini');
$_SESSION["user"] = $username;
$_SESSION["pass"]=$password;

if (isset($_POST['signup'])) {
    $sql="select * from users where user='$username' ";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Username Already Exists !')</script>";
    }
    else{
        if($password==null){}
        elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
       { 
        echo "<script>alert('*Password should be at least 8 characters,one upper case letter, one digit,and one special character.') </script>";
       }
        else{
         if($confirm!=$password){
           echo "<script>alert('Enter Confirm password Correctly !')</script>"; 
        }
         else{
            $sql2= "insert into users values('$username','$password')";
            $res2 = mysqli_query($con,$sql2);
            if($res2){
                header("location:*");
            }
            else{
                echo "<script>alert('Database Error ! Try Again .')</script>";
            }
        }
        }
    }

}
elseif(isset($_POST['login'])) {
    $sql3="select * from users where user='$name' ";
    $res3 = mysqli_query($con,$sql3);
    if(mysqli_num_rows($res3) > 0){
        $data = mysqli_fetch_array($res3);
        $verify = $data['password'];
        if($pass == $verify){
            header("location:*");
        }     
        else{
            echo"<script>alert('Wrong Password')</script>";
        }
    }
    else{
        echo "<script>alert('Account Not Existed with this Username !')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up | Log In</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
       <div class="title-text">
        <div class="title signup">
            ALGOVISION
         </div>
          <div class="title login">
             ALGOVISION 
          </div>
       </div>
       <div class="form-container">
          <div class="slide-controls">  
             <input type="radio" name="slide" id="signup" checked>
             <input type="radio" name="slide" id="login" >
             <label for="signup" class="slide signup">SignUp</label>
             <label for="login" class="slide login">Login</label>
             <div class="slider-tab"></div>
          </div>
          <div class="form-inner">
             <form action="<?php $_PHP_SELF ?>" method="post" class="signup">
                <div class="field">
                   <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="field">
                   <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="field">
                   <input type="password" placeholder="Confirm Password" name="confirm" required>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" name="signup" value="SignUp">
                </div>
             </form>

             <form action="<?php $_PHP_SELF ?>" method="post" class="login">
                <div class="field">
                   <input type="text" placeholder="Username" name="name" required>
                </div>
                <div class="field">
                   <input type="password" placeholder="Password" name="pass" required>
                </div>
                <div class="pass-link">
                   <a href="#">Reset password?</a>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" name="login" value="Login">
                </div>
                <div class="signup-link">
                   Don't Have Account? <a href="">Create A New</a>
                </div>
             </form>
          </div>
       </div>
    </div>
    <script src="style2.js"></script>
  </body>
</html>