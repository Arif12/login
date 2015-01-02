<?php

session_start();

$username=$_POST['username'];

$password=$_POST['password'];

$link=mysqli_connect("localhost","root","","registration");
$query="SELECT * FROM `users` WHERE `username`='".$username."' AND `password`='".$password."'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
print_r($row);


?>