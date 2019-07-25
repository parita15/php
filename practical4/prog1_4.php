<?php
function isMagic($n) 
{ 
    $sum = 0; 
    while ($n > 0 || $sum > 9) 
    { 
        if ($n == 0) 
        { 
            $n = $sum; 
            $sum = 0; 
        } 
        $sum += $n % 10; 
        $n /= 10; 
    } 
    return ($sum == 1); 
} 
if(isset($_GET['submit']))
{
	$num=$_GET['number'];
	if(isMagic($num))
		echo "$num is magic number";
	else
		echo "$num is not magic number";

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