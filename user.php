<?php
session_start();
        $con=mysqli_connect("localhost","root","","registration");
        $query=mysqli_query("select from users where username='".$_POST['username']."' and password='".$_POST['password']."'");
    if(mysqli_num_rows($con,$query)==1)

{ 
echo "session start";
  //set session data here
  //redirect user to where you want
} 
?>