<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>宿舍管理系统</title>
    <link href="/sgxt/newsystem/assert/css/layout.css" rel="stylesheet" type="text/css" />
    <meta name="Keywords" content="宿舍管理系统" />
    <meta name="" content="DIV+CSS" />
    <meta name="author" content="qioixiy" />
    <meta name="Description" content="" />
  </head>

  <body>
    <div class="header">
      <h1 align="center">宿舍管理系统</h1>
    </div>
    <div class="maincontent">
      <div class="sidebar">
	<h4 style="background-color: gray;">&nbsp;<strong>导航栏</strong>&nbsp;</h4>
<?php
     if (isset($_COOKIE["user"]))
         echo "<p align=\"right\" style=\"color: red;\"> Welcome " . $_COOKIE["user"] . "</p>";
     else
         echo "<p align=\"right\" style=\"color: red;\"> Welcome guest!</br>";
?>
      </br>
      <div id="navi">
	<ul>
	  <li><a href="/sgxt/newsystem/">&nbsp;首页&nbsp;</a></li>
	  <li><a href="">&nbsp;宿舍管理&nbsp;</a></li>
	  <li><a href="">&nbsp;班级管理&nbsp;</a></li>
	  <li><a href="">&nbsp;后勤管理&nbsp;</a></li>
	  <li><a href="">&nbsp;个人资料&nbsp;</a></li>
	  <li><a href="">&nbsp;注销系统&nbsp;</a></li>
	</ul>
      </div>
    </div>
    <div class="content">
      
      
