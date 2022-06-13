<?php
$con=mysqli_connect("localhost","root","");

if (!$con) {
	echo'could not connect:';
}
$sql=mysqli_select_db($con,"ikimina");
if ($sql) {
	echo "database connected";
}
else
{
	echo "not inserted.";
}
if(isset($_POST['sb'])){

$a=$_POST['num'];
$b=$_POST['num'];
$c=$_POST['nam'];
$d=$_POST['num'];
$insert="insert into loan(loan_id, loan, reasn, Duration, ACC_NO) 
values('$a','$b','$c','$d','')";       
$query=mysqli_query($con,$insert);                      
if ($query)
		  {
  
		echo 'record has been inserted';

	} 
	
	else{
		echo 'record does not inserted';
	}
} 		  
mysqli_close($con);
?>