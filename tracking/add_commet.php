
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "tracking_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		error_reporting(0);
		// Taking all 5 values from the form data(input)
        $Technicain_id = $_REQUEST['Technicain_id'];
		$Name = $_REQUEST['Name'];
		$Lab_Name = $_REQUEST['Lab_Name'];
		$Working_Products = $_REQUEST['Working_Products'];
        $Non_working_Products = $_REQUEST['Non_working_Products'];
	// Turn off all error reporting

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO comments VALUES ('$Technicain_id',
			'$Name','$Lab_Name','$Working_Products','$Non_working_Products')";
		
		if(mysqli_query($conn, $sql)){
			header("Location: index.php?page=comment");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>