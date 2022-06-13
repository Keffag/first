<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		a{text-decoration: none;}
	</style>
</head>
<body bgcolor="kandidi">
	<center>
	<table>	
<form action="accountdelete.php" method="POST">
	<tr>
	<td>Loan Id:</td><td><input type="number" name="id" placeholder="Enter account id" /><br></td>
	</tr>
	<tr>
	<td>Delete Loan:</td><td><input type="submit" name="delete" value="delete" /></td>
	</tr>
</form>
</table>
</center>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ikimina");
if (isset($_POST['delete'])) {
	$a=$_POST['id'];
$sql="DELETE FROM loan WHERE loan_id='$a'";
$result=mysqli_query($con,$sql);
if ($result) {
	echo'data has been deleted';
}
else
{
	echo'data has not deleted';
}
}
?>
<html>
<a href="Ikimina.html">Back to home</a>
</html>