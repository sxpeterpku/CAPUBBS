<?php
	include("../lib/mainfunc.php");
	$id=$_POST['id'];
	$result=mainfunc(array(
	"ask"=>"delattach",
	"id"=>$id));
	$result=$result[0];
	echo(json_encode($result));
?>