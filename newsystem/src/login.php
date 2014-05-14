<?php
//if($_POST["action"]=="do")
{
	$name=$_POST["name"];
	$pwd=$_POST["password"];

	session_start();
	include("db_conn.php");
	$result=mysql_query("select count(*) from users where name='$name' and password='$pwd'");
	$row = mysql_fetch_array($result);
			
	if ($row[0]==0) {
		echo("<script language='javascript'>");
		//find users name
		if (mysql_fetch_array(mysql_query("select count(*) from users where name='$name'"))[0]==0) {
			echo("alert('Invalid user');");
		} else {
			echo("alert('wrong password');");
		}
		
		echo("window.location.href='../index.php';</script>");	
		exit();
	} else {
		$_SESSION['name']=$name;
				
		echo "<script language='javascript'>"; 
		echo " location='index.php';";
		echo "</script>"; 	
		exit();
	}	
}

?>
	