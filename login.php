
<html>
	<h1> LOG IN</h1>
    
    <form action="checkuser.php" method="post">
	<label>Username</label>
    <input type="text" name="username">

        session_start();
        echo $_SESSION['invalidusername'];
        session_unset();

    <br>
    <label> Password </label>
    <input type="text" name="password">
        <?php
        session_start();
        echo $_SESSION['invalidpassword'];
        session_unset();
        ?>
    <br>
    <button type="submit"> Log in</button>
    <a href="registration.html"> Registration</a>
</form>

<html>