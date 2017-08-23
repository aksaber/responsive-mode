<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","123");
mysql_select_db("laonao");
mysql_query("set names utf8");

$password = MD5($_POST["password"]);
$repass = MD5($_POST["repass"]);

if($password != $repass){ echo 0; }else{ echo 1; }

mysql_close($con);
?>