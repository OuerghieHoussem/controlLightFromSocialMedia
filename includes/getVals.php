<?php 
	require "connection.php";
	if(!$res=$mysqli->query("SELECT * from lightVals WHERE 'lightId'=0")){
				echo("selecting error($mysqli->errno)$mysqli->error");
				header('Location: ../'.$link.'?lerror=sqlError');
				exit();
			}else{
				$res->data_seek(0);
				while($row=$res->fetch_assoc()){
					$R=$row["R"];
					$G=$row["G"];
					$B=$row["B"];
				}
			}
	echo ($R."/".$G."/".$B);
?>