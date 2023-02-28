<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
	<style>
		.header {
  color: #007fff; /* Replace with the color code of your choice */
}

		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #333;
			font-size: 2.5em;
			margin-top: 30px;
		}
		form {
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			width: 400px;
		}
		label {
			display: block;
			font-size: 1.1em;
			margin-bottom: 5px;
		}
		input[type="text"] {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 1.1em;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 4px;
			color: #fff;
			cursor: pointer;
			font-size: 1.1em;
			margin-top: 10px;
			padding: 10px;
			width: 100%;
		}
	</style>
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1 class='header'>Technician Components Working Report</h1>
		<form action="add_commet.php" method="post">
			
<p>
			<label for="Technicain_id">Technician id:</label>
			<input type="text" name="Technicain_id" id="Technicain_id">
			</p>

			
<p>
			<label for="Name">Name:</label>
			<input type="text" name="Name" id="Name">
			</p>

			
<p>
			<label for="Lab_Name">Lab Name:</label>
			<input type="text" name="Lab_Name" id="Lab_Name">
			</p>

			
<p>
			<label for="Working_Products">Working Products:</label>
			<input type="text" name="Working_Products" id="Working_Products">
			</p>
            <p>
			<label for="Non_working_Products">Non Working Products:</label>
			<input type="text" name="Non_working_Products" id="Non_working_Products">
			</p>

			
<p>
		
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>


