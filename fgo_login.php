<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","123");
mysql_select_db("laonao");
mysql_query("set names utf8");

$name = $_POST["text"];
$pass = MD5($_POST["password"]);

$sql = "select name,password from user where name='$name' and password='$pass'";
$re = mysql_query($sql);

if(mysql_fetch_assoc($re)){
	setcookie('name',$name,time()+3600);
	echo "<script>location='fgo.php'</script>";
	}else{
		echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
		}

mysql_close($con);
?>