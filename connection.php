<?php
	try
	{
	 $dsn = "mysql:host=mysli.oamk.fi;dbname=opisk_t8hoko00";
	 $db = new PDO ($dsn, "t8hoko00", "1234");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
