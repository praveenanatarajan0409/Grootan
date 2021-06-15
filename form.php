<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "register");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 5 values from the form data(input)
		$rollnumber = $_REQUEST['rno'];
        $name = $_REQUEST['name'];
		
		
		$email = $_REQUEST['email'];
		$address = $_REQUEST['add'];
		$phonenumber = $_REQUEST['mobileNo'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO details VALUES ('','$rollnumber',
			'$name' ,'$email','$address','$phonenumber')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Details stored in a database successfully."
				. " Please click retrive"
				. " to view the updated data</h3>";

			//echo nl2br("\n$username\n $password\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
