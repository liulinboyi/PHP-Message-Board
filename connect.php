<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
$host="localhost";
$db_user="root";
$db_pass="root";
$db_name="lb";
$timezone="Asia/Shanghai";
// header("Content-Type: text/html; charset=utf-8");//设置头部样式
date_default_timezone_set($timezone); //北京时间

$link=mysqli_connect($host,$db_user,$db_pass);//连接数据库主机
if(!$link){
    echo "<script>alert('链接错误！');</script>";
}else{
    mysqli_select_db($link,$db_name);//选择数据库
    mysqli_query($link,"SET names UTF8");//设置数据库编码格式
    $conn=mysqli_connect("localhost","root","root","lb");
}

?>