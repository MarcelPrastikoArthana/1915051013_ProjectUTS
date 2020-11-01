<?php
	$host = "localhost";
		$user = "mprastikoa";
			$password = "mprastikoa2179";
				$database_name = "db_Pemrograman_Web_Dasar_Marcel";
			$verlipdo=new PDO("mysql:host=$host;dbname=$database_name",$user,$password,array(
		PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	?>
