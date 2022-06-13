<?php
$con=mysqli_connect("localhost","root","");

if (!$con) {
	echo'could not connect:';
}
$sql=mysqli_select_db($con,"ikimina");
if(isset($_POST['sb'])){
$a= $_POST['lid'];
$b= $_POST['acc'];
$c= $_POST['lon'];
$d= $_POST['re'];
$e=$_POST['dur'];
$insert="insert into loan(loan_id,ACC_NO,loan,reason,Duration) 
values('$a','$b','$c','$d','$e')";       
$query=mysqli_query($con,$insert);                      
if ($query)
		  {
  
		echo 'record has been inserted <br>';
		header("location:loan.html");

	} 
	
	else{
		echo 'record does not inserted';
	}
} 		  
mysqli_close($con);
?>