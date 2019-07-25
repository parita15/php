<?php

if(isset($_POST['submit']))
{
	if(($_POST['username']=="admin") && ($_POST['password']=='abc123'))
	{
		header("Location:prog1_1.php");
	}
	else
	{
		echo "Username or password incorrect";
	}

}
?>
<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Username  : <input type="text" name="username"><br>
	Password : <input type="password" name="password"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>