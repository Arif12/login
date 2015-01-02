<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if(($_SERVER['REQUEST_METHOD'])=="GET"){
    header('location:login.php');

} if (isset($username) && (empty($username)))  {

    $_SESSION['invalidusername']='inavalid username';
    header('location:login.php');

    }

if(isset($_POST['password']) && (empty($_POST['password']))) {
    $_SESSION['invalidpassword']='Invalid Password';
    header('location:login.php');


}
mysqli_connect("localhost","root","lict@2","registration");

$sql="SELECT * FROM users WHERE `username`=$username, `password`='$password'";
var_dump($sql);
$row=mysql_query(query);