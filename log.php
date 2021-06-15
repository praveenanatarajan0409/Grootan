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
.group {
  background-color: #00CC00; 
   border: 1px solid green; 
  border-radius: 25px;
  color: #FEFEFE; 
  padding: 12px 20px ; 
  cursor: pointer; 
  margin-left :40px

}
</style>
</head>
<body>
<?php

include "dbconn.php"; // Using database connection file here
$name = $_REQUEST['name'];
$psw = $_REQUEST['psw'];
$varname = "admin";
$varpsw = "admin123";
if($name == $varname and $psw == $varpsw )
{
	echo "Login Successful";
?>
<form action="http://localhost/grootan/retrive.php" method="post" ;>
	<button type="submit" class="group">Retrive</button>
</form>	
<?php
}
else
{
	echo "Login Failure";
?>
<form action="http://localhost/grootan/test1.html" method="post" ;>
	<button type="submit" class="group">Back</button>
</form>	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>

</body>
</html>