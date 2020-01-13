<?php
include('access/db.php');
$getquery = mysqli_query($con, "SELECT * FROM user");

?>
<html>
<body>
<table border>
<tr>
<th> Username </th>
<th> Email </th>
<th> password </th>
<th> 
<tr>
<?php while($getdata=mysqli_fetch_assoc($getquery)) { ?>
<tr>
<td><?php echo $getdata['uname']; ?></td>
<td><?php echo $getdata['email']; ?></td>
<td><?php echo $getdata['pwd']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>