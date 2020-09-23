<?php
	$serverName="sql7.freemysqlhosting.net";
	$dbUserName="sql7367101";
	$dbPassword="Yv5kWVhjED";
	$dbDataBase='sql7367101';
	$mysqli=new mysqli($serverName,$dbUserName,$dbPassword,$dbDataBase);
	if($mysqli->connect_errno){
		echo "Failed to connect: ( ".$mysqli->connect_errno.") ".$mysqli->connect_error;
	}