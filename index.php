<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Message Board</title>
</head>
<style type="text/css">
html{
	/* overflow: hidden; */
}
	html,body{
		height: 100%;
	}
	body {
		background: url(img/bg2.png);
		/* overflow: hidden !important; */
		margin: 0;
	}

	div>h3 {
		color: #46B8DA;
	}

	.content {
		height: 100%;
    	width: 100%;
		text-align: center;
		position: relative;
	}

	form {
		padding: 20px;
		border: 1px whitesmoke solid;
		/* background-color: whitesmoke; */
		width: 320px;
		margin: 0px auto;
		border-radius: 20px;
		background: linear-gradient(-90deg, #f5f5f5, #a5d6de);
		position: relative;
		top: 100px;
	}

	input[type=text] {
		z-index: 2;
		width: 300px;
		height: 25px;
		/* cursor: pointer; */
		border-radius: 10px;
		border-style: none;
		outline: none;
	}

	input[type=text]:focus {
		/* border: 1px solid #cccc; */
		border-color: #03a9f4;
		border-radius: 10px;
		box-shadow: 0px 0px 10px 2px #03a9f4;
	}

	textarea {
		z-index: 2;;
		width: 300px;
		height: 150px;
		/* cursor: pointer; */
		border-radius: 10px;
		border-style: none;
		outline: none;
	}

	textarea:focus {
		/* border: 1px solid #cccc; */
		border-color: #03a9f4;
		border-radius: 10px;
		box-shadow: 0px 0px 10px 2px #03a9f4;
	}

	span:nth-of-type(2) {}

	.title {
		display: flex;
		justify-content: center;
		margin-bottom: 20px;
		line-height: 31px;
	}

	.neirong {
		display: flex;
		justify-content: center;
		margin-bottom: 20px;
		line-height: 156px;
	}

	.auther {
		display: flex;
		justify-content: center;
		margin-bottom: 20px;
		/* line-height: 156px; */
	}

	input[type=submit] {
		position: relative;
		z-index: 2;
		color: #ffffff;
		background-color: #aad7df;
		border-style: none;
		cursor: pointer;
		padding: 5px 10px;
	}

	#owl-login {
		width: 211px;
		height: 108px;
		background-image: url(img/owl-login.png);
		position: absolute;
		top: -100px;
		left: 50%;
		margin-left: -111px;
	}

	.hand {
		width: 34px;
		height: 34px;
		-webkit-border-radius: 40px;
		border-radius: 40px;
		background-color: #472d20;
		-webkit-transform: scaleY(0.6);
		-moz-transform: scaleY(0.6);
		-o-transform: scaleY(0.6);
		-ms-transform: scaleY(0.6);
		transform: scaleY(0.6);
		-webkit-transition: 0.3s ease-out;
		-moz-transition: 0.3s ease-out;
		-o-transition: 0.3s ease-out;
		-ms-transition: 0.3s ease-out;
		transition: 0.3s ease-out;
		position: absolute;
		left: 14px;
		bottom: -8px;
	}

	.hand-r {
		left: 170px;
	}

	.arms {
		top: 58px;
		position: absolute;
		width: 100%;
		height: 41px;
		overflow: hidden;
	}

	.arm {
		width: 40px;
		height: 65px;
		position: absolute;
		left: 20px;
		top: 40px;
		background-image: url(img/owl-login-arm.png);
		-webkit-transition: 0.3s ease-out;
		-moz-transition: 0.3s ease-out;
		-o-transition: 0.3s ease-out;
		-ms-transition: 0.3s ease-out;
		transition: 0.3s ease-out;
		-webkit-transform: rotate(-20deg);
		-moz-transform: rotate(-20deg);
		-o-transform: rotate(-20deg);
		-ms-transform: rotate(-20deg);
		transform: rotate(-20deg);
	}

	.arm-r {
		transform: rotate(20deg) scaleX(-1);
		left: 158px;
	}

	.password .arms .arm {
		-webkit-transform: translateY(-40px) translateX(40px);
		-moz-transform: translateY(-40px) translateX(40px);
		-o-transform: translateY(-40px) translateX(40px);
		-ms-transform: translateY(-40px) translateX(40px);
		transform: translateY(-40px) translateX(40px);
	}

	.password .arms .arm.arm-r {
		-webkit-transform: translateY(-40px) translateX(-40px) scaleX(-1);
		-moz-transform: translateY(-40px) translateX(-40px) scaleX(-1);
		-o-transform: translateY(-40px) translateX(-40px) scaleX(-1);
		-ms-transform: translateY(-40px) translateX(-40px) scaleX(-1);
		transform: translateY(-40px) translateX(-40px) scaleX(-1);
	}

	.password .hand {
		-webkit-transform: translateX(42px) translateY(-15px) scale(0.7);
		-moz-transform: translateX(42px) translateY(-15px) scale(0.7);
		-o-transform: translateX(42px) translateY(-15px) scale(0.7);
		-ms-transform: translateX(42px) translateY(-15px) scale(0.7);
		transform: translateX(42px) translateY(-15px) scale(0.7);
	}

	.password .hand.hand-r {
		-webkit-transform: translateX(-42px) translateY(-15px) scale(0.7);
		-moz-transform: translateX(-42px) translateY(-15px) scale(0.7);
		-o-transform: translateX(-42px) translateY(-15px) scale(0.7);
		-ms-transform: translateX(-42px) translateY(-15px) scale(0.7);
		transform: translateX(-42px) translateY(-15px) scale(0.7);
	}

	/* 雪 */
	#snow_ctnr {
    z-index: 1;
}
#snow_ctnr {
	min-height: 400px;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
    overflow: hidden;
    opacity: 0;
}
.fader {
    -webkit-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out;
    opacity: 0;
}


.snow_dom_slice {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 600px;
}
.snow_fall {
    -webkit-transform-origin: 0% 0%;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    transform-origin: 0% 0%;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}
.snow_drifter {
    background-image: url(img/snow.png);
}
.drift_01 {
    background-position: 10% 20%;
}
.snow_drifter {
    width: 100%;
    height: 100%;
    background-repeat: repeat;
}
.snow_01 {
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
    -webkit-animation-duration: 50s;
    animation-duration: 50s;
    height: 100%;
    -webkit-animation-name: snow_falling_fore;
    animation-name: snow_falling_fore;
    top: -100%;
}
.snow_02 {
    -webkit-animation-delay: 25s;
    animation-delay: 25s;
    -webkit-animation-duration: 50s;
    animation-duration: 50s;
    -webkit-animation-name: snow_falling_fore;
    animation-name: snow_falling_fore;
    top: -100%;
    height: 100%;
}
.drift_02 {
    background-position: 40% 60%;
}
.snow_03 {
    -webkit-animation-delay: 0s;
    -webkit-animation-duration: 70s;
    animation-delay: 0s;
    animation-duration: 70s;
    opacity: .5;
    -webkit-animation-name: snow_falling_mid;
    animation-name: snow_falling_mid;
    top: -100%;
    height: 100%;
}
.drift_03 {
    background-position: 90% 10%;
}
.snow_04 {
    -webkit-animation-delay: 35s;
    -webkit-animation-duration: 70s;
    animation-delay: 35s;
    animation-duration: 70s;
    opacity: .5;
    -webkit-animation-name: snow_falling_mid;
    animation-name: snow_falling_mid;
    top: -100%;
    height: 100%;
}
.drift_04 {
    background-position: 50% 15%;
}

@-webkit-keyframes snow_falling_fore {
                0% {
                    top: -100%;
                    opacity: 0
                }

                1% {
                    top: -100%;
                    opacity: 1
                }

                99.8% {
                    top: 100%;
                    opacity: 1
                }

                99.9% {
                    opacity: 0
                }

                100% {
                    top: -100%;
                    opacity: 0
                }
            }

            @keyframes snow_falling_fore {
                0% {
                    top: -100%;
                    opacity: 0
                }

                1% {
                    top: -100%;
                    opacity: 1
                }

                99.8% {
                    top: 100%;
                    opacity: 1
                }

                99.9% {
                    opacity: 0
                }

                100% {
                    top: -100%;
                    opacity: 0
                }
            }

            @-webkit-keyframes snow_falling_mid {
                0% {
                    top: -100%;
                    opacity: 0
                }

                1% {
                    top: -100%;
                    opacity: 1
                }

                99.8% {
                    top: 100%;
                    opacity: 1
                }

                99.9% {
                    opacity: 0
                }

                100% {
                    top: -100%;
                    opacity: 0
                }
            }

            @keyframes snow_falling_mid {
                0% {
                    top: -100%;
                    opacity: 0
                }

                1% {
                    top: -100%;
                    opacity: 1
                }

                99.8% {
                    top: 100%;
                    opacity: 1
                }

                99.9% {
                    opacity: 0
                }

                100% {
                    top: -100%;
                    opacity: 0
                }
            }






			.content-item {
			/*text-align: center;*/
			/*border: 1px #f7f7f7 solid;
    		background-color: #f7f7f7;*/
    		/*text-align: center;*/
		    /* border: 1px #dfdfdf solid;
		    background-color: #dfdfdf; */
			text-align: center;
			margin: 140px 0 40px 0;
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
			position: relative;
    		z-index: 3;
			width: auto;
			height: auto;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			background-color: red;
			border: 1px solid red;
			border-radius: 8px;
			padding: 2px 5px;
			cursor: pointer;
			
		}
		#change a{
			text-decoration: none;
			color: white;
		}
		#del{
			position: relative;
    		z-index: 3;
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
			cursor: pointer;
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
			/* margin-left: 10px; */
		}
		.biaoti{
			margin:15px 5px;
			text-align: justify;
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden;
			width: 244px;
		}
		.auther-item{
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
		.success{
			display:none;
			position: absolute;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
			width: 90px;
			height: 30px;
			line-height: 30px;
			background-color: #f88;
			text-align: center;
			top: 46%;
			z-index: 4;
			border-radius: 10px;
			
		}
		.delsuccess{
			display:none;
			position: absolute;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
			width: 90px;
			height: 30px;
			line-height: 30px;
			background-color: #f88;
			text-align: center;
			top: 46%;
			z-index: 4;
			border-radius: 10px;
		}
		.xiugaisuccess{
			display:none;
			position: absolute;
			left: 0;
			right: 0;
			margin-left: auto;
			margin-right: auto;
			width: 100px;
			width: 90px;
			height: 30px;
			line-height: 30px;
			background-color: #f88;
			text-align: center;
			top: 46%;
			z-index: 4;
			border-radius: 10px;
		}

		#inputxiugai{
			display:none;
		}
		#inputback{
			display:none;
		}

		#del:hover{
			box-shadow: inset 10px 10px 8px 18px #f45aa8;
		}
		#change:hover{
			box-shadow: inset 10px 10px 8px 18px #f45aa8;
		}
		#inputliuyan:hover{
			box-shadow: inset 10px 10px 8px 18px #66c1cf;
		}
		#inputxiugai:hover{
			box-shadow: inset 10px 10px 8px 18px #66c1cf;
		}
		#inputback:hover{
			box-shadow: inset 10px 10px 8px 18px #66c1cf;
		}

</style>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function () {

		$('input,textarea').focus(function () {
			// console.log("focus");
			$('#owl-login').addClass('password');
		}).blur(function () {
			$('#owl-login').removeClass('password');
		});
	});
	function foo() {
		// if(myform.title.value==""){
		// 	alert("请您填写留言标题");
		// 	// 该方法表示将输入焦点移至对象上
		// 	myform.title.focus();
		// 	// return false一般是用来取消默认动作的。
		// 	// 比如你单击一个链接除了触发你的onclick事件，如果return false的话，就会阻止跳转
		// 	return false;
		// }
		// if (myform.content.value==""){
		// 	alert("留言内容不能为空！");
		// 	myform.content.focus();
		// 	return false;
		// }

		if ($("input[name='title']").val() == "") {
			alert("请您填写留言标题");
			// 该方法表示将输入焦点移至对象上
			myform.title.focus();
			return false;
		}
		if ($("input[name='作者']").val() == "") {
			alert("请您填写留言作者");
			// 该方法表示将输入焦点移至对象上
			myform.作者.focus();
			return false;
		}
		if ($("textarea[name='content']").val() == "") {
			alert("请您填写留言内容");
			// 该方法表示将输入焦点移至对象上
			myform.content.focus();
			return false;
		}
	}
</script>

<body>
	<div class="success"><span>发布成功</span></div>
	<div class="delsuccess"><span>删除成功</span></div>
	<div class="xiugaisuccess"><span>修改成功</span></div>
	<div class="content">

		<h3>留言板</h3>
		<!-- <div class="owl">
			<div id="owl-login" class="">
				<div class="hand"></div>
				<div class="hand hand-r"></div>
				<div class="arms">
					<div class="arm"></div>
					<div class="arm arm-r"></div>
				</div>
			</div>
			</div> -->
			<!-- form表单部分 -->
		<form action="index.php" onsubmit="return false" method="post" name="myform">

			<div class="owl">
				<div id="owl-login" class="">
					<div class="hand"></div>
					<div class="hand hand-r"></div>
					<div class="arms">
						<div class="arm"></div>
						<div class="arm arm-r"></div>
					</div>
				</div>
			</div>

			<div class="title">
				<!-- <div>留言标题：</div> -->
				<input placeholder="在这里填写留言标题" type="text" name="title" id="" value="" />
			</div>
			<div class="auther">
				<!-- <div>留言作者：</div> -->
				<input placeholder="在这里填写作者" type="text" name="作者" id="" value="" />
			</div>
			<div class="neirong">
				<!-- <div>留言内容：</div> -->
				<textarea name="content" value="" placeholder="在这里填写想说的话"></textarea></div>
			<div class="submit">
					<input id="inputliuyan" type="submit" value="留言" onclick="foo()" />
					<input id="inputxiugai" type="submit" value="修改" onclick="foo()" />
					<input id="inputback" type="submit" value="返回" />
			</div>
			
		</form>

		

		<div id="snow_ctnr" class="fader" data-bm="52" style="opacity: 1;">
			<div class="snow_dom_slice snow_fall snow_01">
				<div class="snow_drifter drift_01"></div>
			</div>
			<div class="snow_dom_slice snow_fall snow_02">
				<div class="snow_drifter drift_02"></div>
			</div>
			<div class="snow_dom_slice snow_fall snow_03">
				<div class="snow_drifter drift_03"></div>
			</div>
			<div class="snow_dom_slice snow_fall snow_04">
				<div class="snow_drifter drift_04"></div>
			</div>
		</div>
	<!-- 留言部分 -->
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
					<div class="auther-item">
					<span>留言作者：</span><span><?php echo $row["作者"] ?></span>
					</div>
					<div class="con">
					<span>留言内容：</span><span><?php echo $row["content"] ?></span>
						<div class="xiugai">
						<span id="change"><a id="<?php echo $row['id']?>">修改</a></span><span id="del"><a id="<?php echo $row['id']?>">删除</a></span>
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

	</div>
	
	<script>
		$(function () {
			var liuyanid = "";
			var change = "";
			$("#inputliuyan").click(function () {
				if ($("input[name='title']").val() == "" || $("input[name='作者']").val() == "" || $("textarea[name='content']").val() == "") {
					console.log("没有输入完整")
				} else {
					console.log("输入完整")

					var title = $("input[name='title']").val();
					var auther = $("input[name='作者']").val();
					var content = $("textarea[name='content']").val();
					console.log(content)
					$.ajax({
						type: "post",
						url: "new_post.php",
						data: { title: title, auther: auther, content: content },
						async: true,
						dataType: 'text',
						success: function (res) {
							console.log(res);
							//		$("#poll").append(res);
							// $("#poll").html(res);
							console.log("ok");
							$(".success").fadeIn(1000).fadeOut(5000);
							// $list = $('<div class="out"><div class="biaoti"><span>留言标题：</span><span>'+ myform.title.value +'</span></div><div class="auther-item"><span>留言作者：</span><span>'+ myform.作者.value +'</span></div><div class="con"><span>留言内容：</span><span>'+ myform.content.value +'</span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>');
							// console.log(#)
							// if(!$(".out")){
							// 	$(".out").last().after(res);
							// }else{
								$(".content-item").append(res);
								$(".content-item>span").remove();
							// }
							
							myform.title.value = "";
							myform.content.value = "";
							myform.作者.value = "";
							// alert('发布成功');
							// $list = $("<div class="out"><div class="biaoti"><span>留言标题：</span><span><?php echo $row["title"] ?></span></div><div class="auther-item"><span>留言作者：</span><span><?php echo $row["作者"] ?></span></div><div class="con"><span>留言内容：</span><span><?php echo $row["content"] ?></span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>");
							// location.href = 'title_item.php';
						}
					});

					// })

				}//else
			});

			//删除
			$(".content-item").on("click","#del",function(){
				var outlength = $(".out").length;
				console.log('外部',outlength);
				var del = $(this);
				// del.css({
				// 	"box-shadow": "inset 10px 10px 8px 18px #f45aa8",
				// })
				console.log("点击了");
				$.ajax({
						type: "post",
						url: "new_del.php",
						data: { id: del.children().attr("id") },
						async: true,
						dataType: 'text',
						error: function () {
							// del.removeAttr("style");
						},
						success: function (res) {
							// console.log(res);
							//		$("#poll").append(res);
							// $("#poll").html(res);
							console.log("del ok");
							console.log(del.parent().parent().parent());
							del.parent().parent().parent().remove();
							$(".delsuccess").fadeIn(1000).fadeOut(5000);
							// if ($(".out").length = 0){
							// 	console.log("?");
							// 	$(".comtent-item").append("<span style='color: #46B8DA;'>没有留言</span>");
							// }
							console.log("outlength",outlength)
							outlength <= 1 ? $(".content-item").append("<span style='color: #46B8DA;'>没有留言</span>") : console.log("outlength",outlength);
							console.log('异步',$(".out").length);
							// alert("删除成功");
							// $list = $('<div class="out"><div class="biaoti"><span>留言标题：</span><span>'+ myform.title.value +'</span></div><div class="auther-item"><span>留言作者：</span><span>'+ myform.作者.value +'</span></div><div class="con"><span>留言内容：</span><span>'+ myform.content.value +'</span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>');
							// console.log(#)
							// $(".out").last().after(res);
							// myform.title.value = "";
							// myform.content.value = "";
							// myform.作者.value = "";
							// alert('发布成功，返回新闻列表');
							// $list = $("<div class="out"><div class="biaoti"><span>留言标题：</span><span><?php echo $row["title"] ?></span></div><div class="auther-item"><span>留言作者：</span><span><?php echo $row["作者"] ?></span></div><div class="con"><span>留言内容：</span><span><?php echo $row["content"] ?></span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>");
							// location.href = 'title_item.php';
						}
					});
					// return false;
			});
			// 点击留言条修改
			$(".content-item").on("click","#change",function(){
				change = $(this);
				$("#inputliuyan").hide();
				$("#inputxiugai").fadeIn();
				$("#inputback").fadeIn();
				liuyanid = change.children().attr("id");
				console.log($(this));
				console.log(change.parent().parent().siblings(".biaoti").children().eq(1).text());
				myform.title.value = change.parent().parent().siblings(".biaoti").children().eq(1).text();
				myform.content.value = change.parent().parent().children().eq(1).text();
				myform.作者.value = change.parent().parent().siblings(".auther-item").children().eq(1).text();
			})
			$("#inputback").on("click",function(){
				$("#inputxiugai").hide();
				$("#inputback").hide();
				$("#inputliuyan").fadeIn();
				myform.title.value = "";
				myform.content.value = "";
				myform.作者.value = "";
			});
			$("#inputxiugai").on("click",function(){
				inputxiugai = $(this);
				// .children().attr("id")
				console.log(liuyanid);
				if ($("input[name='title']").val() == "" || $("input[name='作者']").val() == "" || $("textarea[name='content']").val() == "") {
					console.log("没有输入完整")
				} else {
					console.log("输入完整")

					var title = $("input[name='title']").val();
					var auther = $("input[name='作者']").val();
					var content = $("textarea[name='content']").val();
					console.log(content)
					$.ajax({
						type: "post",
						url: "new_upd.php",
						data: { title: title, auther: auther, content: content, id: liuyanid },
						async: true,
						dataType: 'text',
						success: function (res) {
							console.log(res);
							//		$("#poll").append(res);
							// $("#poll").html(res);
							console.log("ok");
							// $(".success").fadeIn(1000).fadeOut(5000);
							// $list = $('<div class="out"><div class="biaoti"><span>留言标题：</span><span>'+ myform.title.value +'</span></div><div class="auther-item"><span>留言作者：</span><span>'+ myform.作者.value +'</span></div><div class="con"><span>留言内容：</span><span>'+ myform.content.value +'</span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>');
							// console.log(#)
							// if(!$(".out")){
							// 	$(".out").last().after(res);
							// }else{
								// $(".content-item").append(res);
								// $(".content-item>span").remove();
							// }
							console.log(change);
							console.log(title,content,auther);
							console.log(title,change.parent().parent().siblings(".biaoti").children().eq(1).text())
							//title 修改
							change.parent().parent().siblings(".biaoti").children().eq(1).remove();
							change.parent().parent().siblings(".biaoti").children().eq(0).after($("<span>"+ title +"<span>"));
							// change.parent().parent().children().eq(1).text() = myform.content.value;
							// change.parent().parent().siblings(".auther-item").children().eq(1).text() = myform.作者.value;
							//auther 修改
							change.parent().parent().siblings(".auther-item").children().eq(1).remove();
							change.parent().parent().siblings(".auther-item").children().eq(0).after($("<span>"+ auther +"<span>"))
							//content 修改
							change.parent().parent().children().eq(1).remove();
							change.parent().parent().children().eq(0).after($("<span>"+ content +"<span>"));
							//隐藏修改
							$("#inputxiugai").hide();
							$("#inputback").hide();
							$("#inputliuyan").fadeIn();
							//提交成功，清空输入内容
							myform.title.value = "";
							myform.content.value = "";
							myform.作者.value = "";

							$(".xiugaisuccess").fadeIn(1000).fadeOut(5000);
							// alert('发布成功');
							// $list = $("<div class="out"><div class="biaoti"><span>留言标题：</span><span><?php echo $row["title"] ?></span></div><div class="auther-item"><span>留言作者：</span><span><?php echo $row["作者"] ?></span></div><div class="con"><span>留言内容：</span><span><?php echo $row["content"] ?></span><div class="xiugai"><span id="change"><a href="new_ed.php?id=<?php echo $row['id']?>">修改</a></span><span id="del"><a href="new_del.php?id=<?php echo $row['id']?>">删除</a></span></div></div></div>");
							// location.href = 'title_item.php';
						}
					});

					// })

				}//else



			})//inputxiugai
		})
	</script>

</body>

</html>