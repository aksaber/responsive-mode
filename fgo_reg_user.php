<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","123");
mysql_select_db("laonao");
mysql_query("set names utf8");


$name = $_POST["username"];


// 判断用户名是否存在
	$sql = "select name from user where name='$name'";
	
	$re = mysql_query($sql);
	  if(mysql_num_rows($re) == 0){
		  echo 0;
		  }else{ echo 1; }
		  
mysql_close($con);
?>
