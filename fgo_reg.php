<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","123");
mysql_select_db("laonao");
mysql_query("set names utf8");
		  
$user = $_POST["text"];
$pass = MD5($_POST["pass"]);
$repass = MD5($_POST["repass"]);

$s_user = "select name from user where name='$user'";
$s_users = mysql_query($s_user);

if(mysql_num_rows($s_users) == 0){
	if($pass == $repass){
		  $sql = "insert into user(name,password) values('$user','$pass');";
          $re = mysql_query($sql);		  
          echo "<script>alert('注册成功，请登录！');history.go(-1)</script>";
		}else{
			echo "<script>alert('密码不一致！');history.go(-1);</script>";
			}
  
}else{
	echo "<script>alert('用户名已存在！');history.go(-1);</script>";
	}
		  
mysql_close($con);
?>
