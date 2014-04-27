<?php

if (isset($_GET['q'])){
	$q = intval($_GET['q']);
	
	require_once('database_connection.php.sens');
	$con = mySqlDBCon();
	if (!$con)
	  {
	  die('Could not connect: ' . mysqli_error($con));
	  }
	
	mysqli_select_db($con, "familyguy");
	$sql="SELECT * FROM cast WHERE id = '".$q."'";
	
	$result = mysqli_query($con, $sql);
	
	echo 
	"<table border='1'>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Age</th>
			<th>Hometown</th>
			<th>Job</th>
		</tr>";
	
	while( $row = mysqli_fetch_array($result) ) {
	  echo "<tr>";
		  echo "<td>" . $row['firstname'] . "</td>";
		  echo "<td>" . $row['lastname'] . "</td>";
		  echo "<td>" . $row['age'] . "</td>";
		  echo "<td>" . $row['hometown'] . "</td>";
		  echo "<td>" . $row['job'] . "</td>";
	  echo "</tr>";
	  }
	echo "</table>";
	
	mysqli_close($con);
} else{
	
	print_r($_GET);
	
}
?>