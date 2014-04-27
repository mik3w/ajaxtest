<?php

function mySqlDBCon(){
	$con = mysqli_connect('localhost', 'username', 'password', 'db_name');
return $con;
}

?>