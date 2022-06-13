<html><center>
    <head><title></title>
 <h1>CUSTOMER LOAN AND THEIR AMOUNT</h1>
 <table border="1" bordercolor="blue">
     <tr>
         <th>Loan id</th>
         <th>Acc number</th>
         <th>Loan amount</th>
         <th>Loan reason</th>
         <th>Duration</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","ikimina");
$select="select * from loan";
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query)>0){
    while($data=mysqli_fetch_array($query)){
        $acc=$data['loan_id'];
        $name=$data['ACC_NO'];
        $tel=$data['loan'];
        $adress=$data['reason'];
        $dur=$data['Duration'];

        echo "<tr>";
        echo "<td>$acc</td>";
        echo "<td>$name</td>";
        echo "<td>$tel</td>";
        echo "<td>$adress</td>";
        echo "<td>$dur</td>";
        echo"</tr>";
    }
}
mysqli_close($conn);
?>
</table>
</body>
<a href="Ikimina.html">Back to home</a>
</center>
</html>