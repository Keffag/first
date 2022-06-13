<html>
    <head>
        <title>Their loan update</title>
     <style>
       input{
           font-size: 30;
           border: 22;
           border-color: blanchedalmond;
           text-decoration-color: rgb(85, 168, 206);
           color: blue;
           border-top: 0cm;
           border-right: 0cm;
           border-style: groove;
       }  
     </style>   
    </head>
    <center>
        <h1>Update information about your loan</h1>
    <body style="background-color: rgb(1000, 160, 95); text-align: center;">
        <form action="loanupdate.php" method="POST">
           
            <input type="number" name="id" placeholder=" Enter loan id" required><br>
            <input type="number" name="accno" placeholder=" Enter Account id" required><br>
            <input type="number" name="lone" placeholder="Update loan amount" required><br>
            <input type="text" name="amount" placeholder="Update loan reason" required><br>
            <input type="text" name="duratn" placeholder="Update loan duration" required><br>
            <input type="submit" name="sb" value="Update" required>
			<a href="webpage.html"><p font-size="40">Back to home</p></a> 
        </form>
    </body>
</center>
</html>

<?php
$con=mysqli_connect("localhost","root","");

if (!$con) {
	echo'could not connect:';
}
$sql=mysqli_select_db($con,"ikimina");
if(isset($_POST['sb'])){

$a=$_POST['id'];
$b=$_POST['accno'];
$c=$_POST['lone'];
$d=$_POST['amount'];
$e=$_POST['duratn'];
$update="UPDATE loan SET ACC_NO='$b',loan='$c',reason='$d', Duration='$e' WHERE loan_id='$a'";       
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
<html>
<a href="Ikimina.html">Back to home</a>
</html>