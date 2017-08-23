<?php
header("content-type:text/html;charset=utf-8");

$con = mysql_connect('localhost','root','123');
mysql_select_db("laonao");
mysql_query("set names utf8");;

setcookie('name',' ');
echo "<script>location='fgo.php'</script>";

mysql_close($con);
?>