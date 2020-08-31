
<?php
 include "includes/includes_header.php";
 include "includes/includes_home_navbar.php";
if(isset($_SESSION["user_id"])){
    header("Location: dashboard.php");
} else{
    


if(isset($_POST["Login"])&&isset($_POST["username"])&&isset($_POST["password"])){

    include  "includes/conn.php";
    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);
    $sql="select * from user where email='".$username."' and password='".$password."'";
    $res=mysqli_query($conn,$sql);
    if($res->num_rows==1){
       $arr= mysqli_fetch_assoc($res);
     $_SESSION["message"]="You are successfully logged in";
     $_SESSION["user_id"]=$arr["user_id"];
     $_SESSION["email"]=$arr["email"];
     $_SESSION["profile_pic_src"]=$arr["profile_pic_src"];
     header("Location: dashboard.php");

    }else{
        $_SESSION["message"]="Login credentials are incorrect";
    }

}
?>

<div class="login_form">
<form action="login.php" method="post">
    <h4 class="login_username_label">Enter your Email</h4>
<input class="login_username_field" type="text" name="username" placeholder="Enter username or email"><br>
<h4 class="login_password_label">Enter password</h4>
<input class="login_password_field" type="password" name="password" ><br>
<input class="login_submit_btn" type="submit" value="Login" name="Login"><br>
<span class="forgot_password"><a href="forgotpassword.php">Forgot Password?</a> </span>
<span class="create_account"><a href="signup.php"> Create your account</a></span>
<br><br>
<div class="login_with_facebook">Login with Facebook</div>
<div class="login_with_google">Login with Google</div>

</form>

</div>

<?php

}
?>