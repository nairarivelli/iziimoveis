<?php

	$con = mysqli_connect("localhost","root","","iziimoveis");
	if (mysqli_connect_errno())
	{
		echo "Falha ao conectar o banco: " . mysqli_connect_error();
	}
	
?>
