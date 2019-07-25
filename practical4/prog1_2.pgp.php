<?php
	if(isset($_POST['submit']))
	{
		$cnum=$num = $_POST['number'];
		$revnum = 0;
		echo $num;
		while ($num != 0)
		{
			$revnum = $revnum * 10 + $num % 10;
		
			$num = (int)($num / 10); 
		}
		
		if($cnum == $revnum)
				echo " is palidogram";
		else
				echo " is not palindogram";
	}

?>
<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Number : <input type="text" name="number"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>