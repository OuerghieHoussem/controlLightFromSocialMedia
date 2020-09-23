<?php  
	

/*
	serverName : sql7.freemysqlhosting.net	
	database username: sql7367101


*/
$hex = $_POST["color"];;
list($R, $G, $B) = sscanf($hex, "#%02x%02x%02x");
echo "$hex -> $R $G $B";

	require "connection.php";

	if(($mysqli->query("UPDATE lightVals SET `R` = '$R',`G`='$G',`B`='$B' WHERE 'lightId'=0;"))){
		//header("Location:../index.php");
		exit();
	}
?>
