<?php
$con=mysqli_connect("localhost","root","");

if (!$con) {
	echo'could not connect:';
}
$sql=mysqli_select_db($con,"ikimina");
if(isset($_POST['sb'])){

$b=$_POST['nam'];
$c=$_POST['num'];
$d=$_POST['loc'];
$a=$_POST['id'];
$update="UPDATE account SET ACC_NAMES='$b',PHONE='$c',LOCATION='$d' WHERE ACC_NO='$a'";       
$query=mysqli_query($con,$update);                      
if ($query)
		  {
  
		echo 'record has been updated <br>';
		

	} 
	
	else{
		echo 'record does not inserted';
	}
} 		  
mysqli_close($con);
?>