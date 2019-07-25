<?php
	if(isset($_GET['number']))
	{
		$n=$_GET['number'];
		echo "Multiplication table of $n<br>";
		for($i=1;$i<=10;$i++)
		{
			echo $n." * ".$i."=".$i*$n."<br>";
		}
	}
?>