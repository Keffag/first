<html>
    <head><title></title>
    <center>
 <h1>CUSTOMER ACCOUNT AND THEIR LOCATION</h1>
 <table border="1" bordercolor="blue">
     <tr>
         <th>account number</th>
         <th>account names</th>
         <th>phone</th>
         <th>location</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","ikimina");
$select="select * from account";
$query=mysqli_query($conn,$select);
if(mysqli_num_rows($query)>0){
    while($data=mysqli_fetch_array($query)){
        $acc=$data['ACC_NO'];
        $name=$data['ACC_NAMES'];
        $tel=$data['PHONE'];
        $adress=$data['LOCATION'];

        echo "<tr>";
        echo "<td>$acc</td>";
        echo "<td>$name</td>";
        echo "<td>$tel</td>";
        echo "<td>$adress</td>";
        echo"</tr>";
    }
}
mysqli_close($conn);
?>
</table>
</body>
</center>
</html>