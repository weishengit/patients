<?php
$pid = $_GET['pid'];
$pname = $_GET['pname'];
$padd = $_GET['address'];
$pcon = $_GET['contact'];
$ptime = $_GET['time'];

$con = mysqli_connect('localhost','root','','dbhospital');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tblpatients");

$sql="INSERT INTO tblpatients (`PID`,`PName`,`Address`,`Contact`,`Time`) VALUE ('".$pid."','".$pname."','".$padd."','".$pcon."','".$ptime."')";
$result = mysqli_query($con,$sql);

$sql1="SELECT * FROM tblpatients";
$result1 = mysqli_query($con,$sql1);
	echo "<table class='ptable'>
	  <tr><td><strong>PID</strong></td><td><strong>Name</strong></td><td><strong>Address</strong></td><td><strong>Contact No.</strong></td><td><strong>Time</strong></td></tr>";
while($row = mysqli_fetch_array($result1)) {
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