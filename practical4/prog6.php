<?php
	if(isset($_POST['submit']))
	{
		$total=$_POST['m1']+$_POST['m2']+$_POST['m3']+$_POST['m4']+$_POST['m5'];
		echo "Total : ".$total;
		$per=$total/5;
		echo "Percentage : ".$per;
	}
?>
<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		C : <input type="text" name="m1"><br>
		C++ : <input type="text" name="m2"><br>
		JAVA : <input type="text" name="m3"><br>
		PYTHON : <input type="text" name="m4"><br>
		ISP : <input type="text" name="m5"><br>


	<input type="submit" name="submit" value="Result">
</form>
</body>
</html>