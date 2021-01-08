<?php
include("config.php");

function connect() {
	global $HOST, $DTBS, $USER, $PASS, $PORT;
	return new \PDO("pgsql:dbname=$DTBS;host=$HOST;port=$PORT", $USER, $PASS);
}

?>
