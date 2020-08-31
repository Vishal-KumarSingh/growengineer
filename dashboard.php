<?php
 include "includes/includes_header.php";
include "includes/includes_dashboard_navbar.php";
if(isset($_SESSION["user_id"])){
   


    include "includes/conn.php";

   //retrieving artricles from database
$sql="select * from articles";
$res=mysqli_query($conn,$sql);
$output="<div class='panel_row'>";
while($row=mysqli_fetch_assoc($res))
{
$output.="<div class='panel_element'>".$row["title"]."<br>".$row["content"]."</div>";

}

$output.="</div>";
echo $output;
//retrieving posts from database

   $sql="select * from posts";
   $res=mysqli_query($conn,$sql);
   $out="<div class='panel_row'>";
   while($row=mysqli_fetch_assoc($res))
   {
   $out.="<div class='panel_element'>".$row["title"]."<br>".$row["content"]."</div>";
   
   }
   
   $out.="</div>";
   echo $out;

}else{

    $_SESSION["message"]="Sign in is required before visiting dashboard";
    header("Location: login.php");

}
?>