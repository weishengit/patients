<?php

$con = mysqli_connect('localhost','root','','db_au_canteen');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tblusers");
$sql="SELECT * FROM tblusers";
$result = mysqli_query($con,$sql);
	echo "<table>
	  <tr><td><strong>User ID</strong></td><td><strong>Username</strong></td><td><strong>Password</strong></td><td><strong>Email</strong></td><td><strong>User Type</strong></td></tr>";
while($row = mysqli_fetch_array($result)) {
	echo "
	<tr onclick=showAccountInfo(".$row['uid'].")>
	<td><strong >".$row['uid']."</a></strong></td>
	<td><strong>".$row['username']."</strong></td>
	<td><strong>".$row['password']."</strong></td>
	<td><strong>".$row['email']."</strong></td>
	<td><strong>".$row['usertype']."</strong></td>
	</tr>";
}
echo "</table>";
mysqli_close($con);
?>