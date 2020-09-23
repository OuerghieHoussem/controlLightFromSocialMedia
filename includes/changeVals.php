<?php  
	



	$R=$_POST["R"];
	$G=$_POST["G"];
	$B=$_POST["B"];
/*
	serverName : sql7.freemysqlhosting.net	
	database username: sql7367101


*/


	require "connection.php";

	if(($mysqli->query("UPDATE lightVals SET `R` = '$R',`G`='$G',`B`='$B' WHERE 'lightId'=0;"))){
		exit();
	}
?>
