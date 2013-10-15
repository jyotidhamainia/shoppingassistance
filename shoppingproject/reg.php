<?php
$fname = $_REQUEST["fname"];
$sname = $_REQUEST["sname"];
$uname = $_REQUEST["uname"];
$pwd = $_REQUEST["pwd"];
$email = $_REQUEST["email"];

$tel = $_REQUEST["tel"];
$add = $_REQUEST["add"];
include("connect.php");
$query="insert into customer values('$fname','$sname','$uname','$pwd','$email','$tel','$add')";
 mysql_query($query);
header(location:'welcome.php');
?>