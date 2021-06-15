<?php
$profpic = "maroon.jpg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
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
.group button {
  background-color: #00CC00; 
   border: 1px solid green; 
  border-radius: 25px;
  color: #FEFEFE; 
  padding: 12px 20px ; 
  cursor: pointer; 
  margin-left :40px

}
table{
	border-color:yellow;
}
td{
	padding:10px;
}
</style>
</head>
<body>
<h2>Student Details</h2>
<table border="5" >
  <tr>
   
    <th>Rollnumber</th>
    <th>Name</th>

    <th>Email</th>
    <th>Address</th>
    <th>Mobile no</th>

  </tr>
<?php 
include "dbconn.php"; // Using database connection file here
$id = $_GET['id'];
$records = mysqli_query($db,"select * from details where id='$id'");

$data = mysqli_fetch_array($records)

?>
  <tr>
   
  <td><?php echo $data['rollnumber']; ?></td>
    <td><?php echo $data['name']; ?></td>
	
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['address']; ?></td>
  <td><?php echo $data['phonenumber']; ?></td>
  </tr>	
<?php

?>
</table>

<div class="group">
<?php
// Next button 
$next = mysqli_query($db, "SELECT * FROM details WHERE id>$id order by id ASC");
if($data = mysqli_fetch_array($next))
{

  echo '<a href="emp.php?id='.$data['id'].'"><button type="button">Next</button></a>';  
} 


// Previous button 
$previous= mysqli_query($db, "SELECT * FROM details WHERE id<$id order by id DESC");

if($data = mysqli_fetch_array($previous))
{

  echo '<a href="emp.php?id='.$data['id'].'"><button type="button">Previous</button></a>';  
} 


?>
</div>

</body>
</html>