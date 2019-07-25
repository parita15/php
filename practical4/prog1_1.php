<?php
	if(isset($_POST['submit']))
	{
		$number=$_POST['number'];
	
		$sum=0;
		for($i=1;$i<$number;$i++)
		{
			if($number%$i==0)
					$sum+=$i;
		}
		if($number==$sum)
				echo "Number $number is perfect";
		else
				echo "Number is $number not perfect";
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