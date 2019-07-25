<?php
function sumofdigit($num)
{
	$sum=0;
	
	while($num != 0)
	{
		$r=$num%10;
		$sum=$sum+($r *$r *$r );
		$num=(int)$num/10;
	}
	return $sum;

}

if(isset($_GET['submit']))
{
	$num=$_GET['number'];
	if(sumofdigit($num)==$num)
		echo "$num is armstrong number";
	else
		echo "$num is not armstrong number";

}
?>
<!DOCTYPE html>
<html>

<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Number : <input type="text" name="number"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>