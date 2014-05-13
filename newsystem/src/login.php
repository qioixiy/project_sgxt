<?php
//if($_POST["action"]=="do")
{
	$name=$_POST["name"];
	$pwd=$_POST["password"];

	session_start();
	include("db_conn.php");
	$result=mysql_query("select count(*) from user where xh='$name' and pwd='$pwd'");
	$row = mysql_fetch_array($result);
			
	if($row[0]==0) {
		echo("<script language='javascript'>");
		echo("alert('用户名或密码错误！');");
		echo("window.location.href='../index.php';</script>");	
		exit();
	} else {
		$_SESSION["xh"]=$xh;
		echo "<script language='javascript'>"; 
		echo " location='index.php';";
		echo "</script>"; 	
		exit();
	}	
}

?>
	