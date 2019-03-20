<?php
	// 删除新闻
	header("content-type:text/html;charset=utf8");
	include_once("connect.php");
	// $conn=mysqli_connect("localhost","root","root","lb");
	$id=$_POST["id"];
	if($conn){
		$sql="delete from syk where id='$id' ";//通过指定条件删除表中的行
		$que=mysqli_query($conn,$sql);
		if($que){
			// echo "<script>alert('删除成功！');location.href='title_item.php';</script>";
			echo "<script>alert('删除成功！');location.href='index.php';</script>";
		}else{
			echo "<script>alert('删除失败，请检查。');localtion='".$_SERVER['HTTP_REFERER']."';</script>";
			exit;
		}
	}
	die("数据库连接失败".mysqli_connect_errno());
?>