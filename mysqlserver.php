<?php
	$servername="localhost";
	$sqlname="root";
	$sqlpwd="AzazeL2003";
	$dbname="db";
	error_reporting(0);
	$conn=new mysqli($servername,$sqlname,$sqlpwd,$dbname,3306);
	if($conn->connet_error)
	{
		die("链接失败:".$conn->connet_error);
	}

?>