<?php
include('access/db.php');
$getquery = mysqli_query($con, "SELECT * FROM tours");

?>
<html>
<body>
<table border>
<tr>
<th> tour name </th>
<th> price </th>
<th>  </th> 
<tr>
<?php while($getdata=mysqli_fetch_assoc($getquery)) { ?>
<tr>
<td><?php echo $getdata['tname']; ?></td>
<td><?php echo $getdata['tprice']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>