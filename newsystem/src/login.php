<?php

$name=$_POST["name"];
$pwd=$_POST["password"];

setcookie("user", $name, time()+600);
// Print a cookie
//echo $_COOKIE["user"];
// A way to view all cookies
//print_r($_COOKIE);

session_start();
include_once("./common/db_conn.php");
$result=mysql_query("select count(*) from users where name='$name' and password='$pwd'");
$row = mysql_fetch_array($result);
			
if ($row[0]==0) {
    echo("<script language='javascript'>alert('用户名或密码错误！');");		
    echo("window.location.href='../index.php';</script>");

    exit();
} else {
    $_SESSION['name']=$name;
				
    echo "<script language='javascript'>"; 
    echo " location='index.php';";
    echo "</script>"; 	
    exit();
}	

?>
	