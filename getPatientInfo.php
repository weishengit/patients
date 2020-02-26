<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','dbhospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tblpatients");
$sql="SELECT * FROM tblpatients WHERE PID = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table>";
if($row = mysqli_fetch_array($result)) {
	echo "
		<h3>PATIENT INFORMATION:</h3>
		<p>PID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<strong>&nbsp&nbsp".$row['PID']."</strong></p>
		<p>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<strong>&nbsp&nbsp".$row['PName']."</strong></p>
		<p>Address&nbsp&nbsp:<strong>&nbsp&nbsp".$row['Address']."</strong></p>
		<p>Contact&nbsp&nbsp&nbsp:<strong>&nbsp&nbsp".$row['Contact']."</strong></p>
		<p>Time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<strong>&nbsp&nbsp".$row['Time']."</strong></p>";
}else{
	echo "<p>ERROR:Patient record not found!</p>";
}
echo "</table>";
mysqli_close($con);
?>