<html>
    <head><title></title>
 <h1>CUSTOMER ACCOUNT AND THEIR LOAN AMOUNT</h1>
 <table border="1" bordercolor="blue">
     <tr>
         <th>Acc_no</th>
         <th>Acc_Names</th>
         <th>Loan amount</th>
         <th>Loan reason</th>
         <th>Duration</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","ikimina");
$select="select account.ACC_NO, account.ACC_NAMES,loan.loan, loan.reason, loan.Duration 
       from account INNER JOIN loan ON account.ACC_NO=loan.ACC_NO ";
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query)>0){
    while($data=mysqli_fetch_array($query)){
        $acc=$data['ACC_NO'];
        $name=$data['ACC_NAMES'];
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
</html>