<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','dbhospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tblpatients");
$sql="SELECT * FROM tblpatients WHERE PName LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);
	echo "<table class='ptable'>
	  <tr><td><strong>PID</strong></td><td><strong>Name</strong></td><td><strong>Address</strong></td><td><strong>Contact No.</strong></td><td><strong>Time</strong></td></tr>";
while($row = mysqli_fetch_array($result)) {
	echo "
	<tr>
	<td><strong onclick=showPatientInfo(".$row['PID'].")>".$row['PID']."</a></strong></td>
	<td><strong>".$row['PName']."</strong></td>
	<td><strong>".$row['Address']."</strong></td>
	<td><strong>".$row['Contact']."</strong></td>
	<td><strong>".$row['Time']."</strong></td>
	</tr>";
}
echo "</table>";
mysqli_close($con);
?>