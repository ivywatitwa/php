<?php 
// connect to the database
	$conn = mysqli_connect('localhost', 'Ivy', '1234', 'ninja_pizzas');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
    ?>