<?php
include "includes/includes_header.php";
include "includes/includes_home_navbar.php";
if(isset($_SESSION["user_id"])){
    header("Location: dashboard.php");
} else{
    
if(isset($_POST["submit"])&&isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["repeated_password"]))
{
    
    include "includes/conn.php";
    $username=mysqli_real_escape_string($conn,$_POST["username"]);

    $password=mysqli_real_escape_string($conn,$_POST["password"]);
    $rpassword=mysqli_real_escape_string($conn,$_POST["repeated_password"]);
if($password!=$rpassword){
    $_SESSION["message"]="Password and repeated password do not match";
}
else{
    $sql="select * from user where email='".$username."'";
  $res=mysqli_query($conn,$sql);
if($res->num_rows==0)
{
$sql="insert into user (email,password) values('".$username."','".$password."')";
mysqli_query($conn,$sql);
$_SESSION["message"]="Account registered successfully try logging in";
}else{
$_SESSION["message"]="Email id already registered try log in";

}


}

}

?>
<div class="login_form" style="height:600px">
<form action="signup.php" method="post">
    <h4 class="login_username_label">Enter your Email</h4>
<input class="login_username_field" type="text" name="username" placeholder="Enter username or email"><br>
<h4 class="login_password_label">Set your  password</h4>
<input class="login_password_field" type="password" name="password" ><br>
<h4 class="login_password_label">Repeat your  password</h4>
<input class="login_password_field" type="password" name="repeated_password"><br>
<input class="login_submit_btn" type="submit" value="Sign up" name="submit"><br>
<span class="login_btn">Login instead</span>
<div class="login_with_facebook">Login with Facebook</div>
<div class="login_with_google">Login with Google</div>

</form>

</div>

<?php
}
?>