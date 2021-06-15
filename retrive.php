<?php
$profpic = "maroon.jpg";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
font-family: Arial, Helvetica, sans-serif;
font-size:38px; 
color:white;
}
a{

font-family: Arial, Helvetica, sans-serif;
color:yellow;
}
</style>
</head>
<body>

<h2>Student Details</h2>

<table border="2">
  <tr>
   
	<td>id</td>
    <td>name</td>
	<td>view</td>
   

  </tr>

<?php
$profpic = "maroon.jpg";
include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from details"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
   
	<td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
	<td><a href="emp.php?id=<?php echo $data['id']; ?>">View</a></td>
	
    
  </tr>	
  
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>