<?php
include("connect.php");
include("queryform.php");

$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telephone'] = $_POST['telephone'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['comment'] = $_POST['comments'];
$query="insert into details values('".$_SESSION['first_name']."','".$_SESSION['last_name']."','".$_SESSION['email']."','".$_SESSION['telephone']."','".$_SESSION['address']."','".$_SESSION['comments']."')";
 mysql_query($query);

header("location: html
_form_send.php");
?>