<?php
	if(isset($_GET['number']))
	{
		$n1=0;
		$n2=1;
		echo $n1."  ".$n2;
		$sum=$n1+$n2;
		while($sum<=$_GET['number'])
		{
			
			echo " ".$sum;
			$n1=$n2;
			$n2=$sum;
			$sum=$n1+$n2;
		}
	}
?>