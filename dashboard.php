<?php
session_start();

if(array_key_exists("loggedin",$_SESSION) && !empty($_SESSION['loggedin'])){
echo "You are on Dashboard";
}else
    {
header('location:home.php');
    }

?>
<br>
<a href="logout.php">logout</a>