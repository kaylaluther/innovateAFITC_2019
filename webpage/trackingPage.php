<!DOCTYPE html>
<html>
<head>
	<title>Tracking Page</title>
	<link href="mainstyles.css" rel="stylesheet" />
</head>
<body>
<h3 align="center">Location of High Valued Assets </h3>

<div align="left"><h3>View Locations on a Map </h3>
<a href="location.html"> Map Tracking Information</a>
</div>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tracking_assets");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM assets";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Last Update Time</th>";
                echo "<th>Last User</th>";
                echo "<th>Last Update Manner</th>";
				echo "<th>Location</th>";
				echo "<th>Power Level</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['last_update_time'] . "</td>";
                echo "<td>" . $row['last_user'] . "</td>";
                echo "<td>" . $row['last_update_manner'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['power_level'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
<footer>
    <br> </br>
	<br> </br>
	<br> </br>
	<br> </br>
    <br> </br>
    <br> </br>
    <h1 id="title" align="middle">This project was innovated by The AUMelettes: Kayla Luther, Adam Rodriquez, Riley Taylor, Rebecca Hogue, and David Whyte at innovateAFITC 2019 </h1>
</footer>
</html>