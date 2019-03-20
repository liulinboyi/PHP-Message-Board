<?php
include_once("connect.php");
 

if (mysqli_connect_errno()) {

	echo "连接错误";
	exit;
}
$title = $_POST["title"];
$content = $_POST["content"];
$auther = $_POST["auther"];
// echo $title;
$sql = "INSERT INTO syk (id,title,content,作者)
VALUES ('', '".$title."', '".$content."','".$auther."')";
if (mysqli_query($link, $sql)) {
	// echo "<script>alert('发布成功，返回新闻列表');location.href='title_item.php'</script>";
	// echo '<div class="out"><div class="biaoti"><span>留言标题：</span><span>'. $title .'</span></div><div class="auther-item"><span>留言作者：</span><span>'. $auther .'</span></div><div class="con"><span>留言内容：</span><span>'. $content .'</span></div></div>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
// $sql1 = "SELECT id,title,content,作者 FROM syk";
$sql1 = "select * from syk order by id DESC limit 1";
$result1 = mysqli_query($link, $sql1);
if(mysqli_num_rows($result1) > 0){
	while($row = mysqli_fetch_assoc($result1)) {
		?>
		<div class="out">
		<div class="biaoti">
		<span>留言标题：</span><span><?php echo $row['title']?></span>
		</div>
		<div class="auther-item">
		<span>留言作者：</span><span><?php echo $row['作者']?></span>
		</div>
		<div class="con">
		<span>留言内容：</span><span><?php echo $row['content']?></span>
			<div class="xiugai">
			<span id="change"><a id="<?php echo $row['id']?>">修改</a></span><span id="del"><a id="<?php echo $row['id']?>">删除</a></span>
			</div>
		</div>
	</div>
	<?php
    }
}
// echo '<div class="out"><div class="biaoti"><span>留言标题：</span><span>'. $title .'</span></div><div class="auther-item"><span>留言作者：</span><span>'. $auther .'</span></div><div class="con"><span>留言内容：</span><span>'. $content .'</span></div></div>';



mysqli_close($link);
?>
