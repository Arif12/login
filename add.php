<?php
	//print_r ($_POST);
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$link= mysqli_connect("localhost", "root", "lict@2", "registration");
	
	$query="INSERT INTO `registration`.`users` (`id`, `fullname`, `email`, `username`, `password`,`created`,`modified`) VALUES ('NULL', '$fullname', '$email', '$username', '$password',NOW(),NOW())"; 

$a=mysqli_query($link,$query);
if ($a==true){
	echo "registration successful";
	}
	else
	{
		echo "error";
		};
	
	
	
	?>