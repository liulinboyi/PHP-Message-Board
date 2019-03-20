<?php
	header("content-type:text/html;charset=utf8");
	$id=$_GET["id"];

	include_once("connect.php");
	// $conn=mysqli_connect("localhost","root","root","news");

	mysqli_set_charset($conn,'utf8');//设定字符集
	if($conn){
		$sql="select * from syk where id='$id'";
		$que=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($que);
	}
?>
	