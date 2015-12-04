<?php
session_start();
$debug = false;
include('CommonMethods.php');

	/* 	The following functions eliminate the need for all $_SESSION variables other
		than $_SESSION["userID"]. Each function returns a replacement for a session
		variable using the advisor's ID.
	*/


function getFirstName() {
	$COMMON = new Common($debug);
	$uID = $_SESSION["userID"];

	$sql = "select * from Proj2Advisors where `id` = '$uID'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);

	$name = $row[1];
	return $name;
}	

function getLastName() {
	$COMMON = new Common($debug);
	$uID = $_SESSION["userID"];

	$sql = "select * from Proj2Advisors where `id` = '$uID'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);

	$name = $row[2];
	return $name;
}	

function getUsername() {
	$COMMON = new Common($debug);
	$uID = $_SESSION["userID"];

	$sql = "select * from Proj2Advisors where `id` = '$uID'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);

	$name = $row[3];
	return $name;
}	
	
function getPassword() {
	$COMMON = new Common($debug);
	$uID = $_SESSION["userID"];

	$sql = "select * from Proj2Advisors where `id` = '$uID'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);

	$name = $row[4];
	return $name;
}	

?>