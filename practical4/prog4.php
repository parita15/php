<?php
	if(isset($_POST['sum']))
	{
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		echo "Sum = ",$n1+$n2;
	}
	elseif (isset($_POST['sub'])) {
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		echo "Sum = ",$n1-$n2;
	}
	elseif (isset($_POST['mul'])) {
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		echo "Sum = ",$n1*$n2;
	}
	elseif (isset($_POST['div'])) {
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		echo "Sum = ",$n1/$n2;
	}
?>
<!DOCTYPE html>
<html>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Number1 : <input type="text" name="n1"><br>
	Number1 : <input type="text" name="n2"><br>
	<input type="submit" name="sum" value="+"> 
	<input type="submit" name="sub" value="-"> 
	<input type="submit" name="mul" value="*"> 
	<input type="submit" name="div" value="/"> 
</form>
</body>
</html>