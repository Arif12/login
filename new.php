<?php
$username_login = ($_POST["username"]);
$password_login = ($_POST["password"]);


if ($username_login && $password_login) {
$connect = mysql_connect("localhost", "root", "lict@2") or die("Error connecting");
mysql_select_db("registration") or die("Could not find db");

$query2 = mysql_query("SELECT * FROM users WHERE username='$username_login'");
$numrow = mysql_num_rows($query2);

if ($numrow != 0) {
// LOGIN code
while ($row = mysql_fetch_assoc($query2)) {
$dbusername = $row['$username_login'];
$dbpassword = $row['$password_login'];
}

// Check to see if username and password match
if ($username_login==$dbusername && $password_login==$dbpassword) {
echo "You are in";
}
else {
echo "Sorry $username_login. Incorrect password!";
}
