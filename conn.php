<?php
    
    $conn = new mysqli('localhost', 'root', '', 'vote1');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}


?>