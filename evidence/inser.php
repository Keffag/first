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
$insert="insert into account(ACC_NO, ACC_NAMES, PHONE, LOCATION) 
values('','$b','$c','$d')";       
$query=mysqli_query($con,$insert);                      
if ($query)
		  {
  
		echo 'record has been inserted <br>';
		header("location:account.html");

	} 
	
	else{
		echo 'record does not inserted';
	}
} 		  
mysqli_close($con);
?>