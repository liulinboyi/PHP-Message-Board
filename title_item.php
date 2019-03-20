<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Message Board List</title>
	</head>
	<style type="text/css">
		body{
			background-color: #f6f6f6;
			background:url(img/bg2.png);
		}
		div>h3 {
			color: #46B8DA;
			text-align: center;
		}
		
		.content-item {
			/*text-align: center;*/
			/*border: 1px #f7f7f7 solid;
    		background-color: #f7f7f7;*/
    		/*text-align: center;*/
		    /* border: 1px #dfdfdf solid;
		    background-color: #dfdfdf; */
			text-align: center;
			margin-top: 50px;
		}
		
		form {
			padding: 20px;
			border: 1px whitesmoke solid;
			background-color: whitesmoke;
		}
		
		input[type=text] {
			width: 300px;
			height: 25px;
			cursor: pointer;
			disabled="disabled";
		}
		
		textarea {
			width: 300px;
			height: 150px;
			cursor: pointer;
			disabled="disabled";
		}
		
		.neirong span:nth-of-type(2) {
			margin-right: 10px;
		}
		
		.title {
			display: flex;
			justify-content-item: center;
			margin-bottom: 20px;
			/*line-height: 31px;*/
		}
		.title>div{
			    background-color: antiquewhite;
				width:85px;
		}
		.title>span{
			width: 150px;
		    /* height: 20px; */
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    overflow: hidden;
		}
		
		.neirong {
			display: flex;
			justify-content-item: center;
			margin-bottom: 20px;
			/*line-height: 156px;*/
		}
		.neirong>div{
			/* background-color: lightgrey; */
		}
		.neirong span:nth-of-type(1){
			    /* display: block; */
    overflow: hidden;
    /* width: 200px; */
	width:auto;
    /* height: 24px; */
    text-overflow: ellipsis;
    white-space: nowrap;
	background-color: beige;
		}
		.all{
			display: flex;
			justify-content-item: center;
			padding: 0 23%;
		}
		#change{
			width: auto;
			height: auto;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			background-color: red;
			border: 1px solid red;
			border-radius: 8px;
			padding: 2px 5px;
			
		}
		#change a{
			text-decoration: none;
			color: white;
		}
		#del{
			width: auto;
			height: auto;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			background-color: red;
			border: 1px solid red;
			border-radius: 8px;
			margin-left: 10px;
			padding: 2px 5px;
		}
		#del a{
			text-decoration: none;
			color: white;
		}
		.out{
			border:1px solid #ccc;
			border-radius: 20px;
    		background: linear-gradient(-90deg,#f5f5f5,#a5d6de);
			/* width:300px; */
			width: 254px;
    		display: inline-block;
		}
		.biaoti{
			margin:15px 5px;
			text-align: justify;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			width: 244px;
		}
		.auther{
			margin:15px 5px;
			text-align: justify;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			width: 244px;
		}
		.con{
			margin:15px 5px;
			text-align: justify;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			width: 244px;
		}
		.xiugai{
			margin: 15px 10px;
			text-align: center;
		}
		h3{
			color: #46B8DA;
    		text-align: center;
		}
		span{
			color:#3a3a3a;
		}
	</style>

	<body>
		<h3>留言列表</h3>
		<div class="content-item">

			
	
				
				<?php
include_once("connect.php");
 

if (mysqli_connect_errno()) {
	# code...
	echo "连接错误";
	exit;
}
$sql = "SELECT id,title,content,作者 FROM syk";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
?>
				
				<div class="out">
					<div class="biaoti">
					<span>留言标题：</span><span><?php echo $row["title"] ?></span>
					</div>
					<div class="auther">
					<span>留言作者：</span><span><?php echo $row["作者"] ?></span>
					</div>
					<div class="con">
					<span>留言内容：</span><span><?php echo $row["content"] ?></span>
						<div class="xiugai">
						<span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span>
						</div>
					</div>
				</div>
				
        	
 <?php    	
    }
} else {
    echo "<span style='color: #46B8DA;'>没有留言</span>";
}

mysqli_close($link);
?>

		
		</div>
	</body>

</html>







