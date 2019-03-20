<?php
	// 接受从new_ed.php页面传过来的数据，将新修改的数据保存到数据库
	header("content-type:text/html;charset=utf8");
	$title=$_POST["title"];
	$content=$_POST["content"];
	$auther=$_POST["auther"];
	$id=$_POST["id"];
	// $time=date("H-m-d H:i:s");
	// $conn=mysqli_connect("localhost","root","","news");
	include_once("connect.php");
	mysqli_set_charset($conn,'utf8');
	if($conn){
		//修改更新数据表中的数据
		$sql="update syk set title='$title',content='$content',作者='$auther' where id='$id'";
		$que=mysqli_query($conn,$sql);
		if($que){
			// echo "<script>alert('修改成功！');location.href='title_item.php';</script>";
			// echo "<script>alert('修改成功！');</script>";
			echo "修改成功";

		}else{
			echo "<script>alert('修改失败，请检查错误');location.href='title_item.php';</script>";
		}
	}
?>