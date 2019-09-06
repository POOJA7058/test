<?php
	$conn=mysqli_connect('localhost','root','','P_Raut');
	if(!$conn)
	{
		echo $conn->error;
	}
?>