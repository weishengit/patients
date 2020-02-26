<html>
<head>
<title>Diego Clinic</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script>
function saveRegistration() {
	pid = document.forms["registrationform"]["pid"].value;
	pname = document.forms["registrationform"]["pname"].value;
	address = document.forms["registrationform"]["address"].value;
	contact = document.forms["registrationform"]["contact"].value;
	time = document.forms["registrationform"]["time"].value;
    if (pid.length == 0 || pname.length == 0) { 
        document.getElementById("divPatients").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("divPatients").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "saveregistration.php?pid=" + pid + "&pname=" + pname + "&address=" + address + "&contact=" + contact + "&time=" + time, true);
        xmlhttp.send();
    }
}
function loadRegistrants() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("divPatients").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "loadRegistrants.php", true);
	xmlhttp.send();
}
function searchRegistrants(str) {

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("divPatients").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "searchregistrants.php?q=" + str, true);
	xmlhttp.send();
}

function showPatientInfo(str) {
	
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("divInfo").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getPatientInfo.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
</head>
<body onload="loadRegistrants()">
<div class="appoint">
<h1>Appointments</h1>
<table>
<form id="registrationform">
	<tr>
		<td>PID</td>
		<td><input type="text" name="pid" id="pid"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="pname" id="pname"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" id="address"></td>
	</tr>
	<tr>
		<td>Contact No.</td>
		<td><input type="text" name="contact" id="contact"></td>
	</tr>
	<tr>
		<td>Time</td>
		<td><input type="text" name="time" id="time"></td>
	</tr>
	<tr>
		<td></td><td><input type="button" value="Save" onclick="saveRegistration()"></td>
	</tr>
</form>
</table>
</div>
<div>
<form> 
<h3>Filter by Patient Name: <input type="text" onkeyup="searchRegistrants(this.value)"></h3>
</form>
</div>
<div class="doubled">
<div id="divPatients"></div>
<div id="divInfo"></div>
</div>
</body>
</html>