<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>�������ϵͳ</title>
    <link href="/sgxt/assert/css/layout.css" rel="stylesheet" type="text/css" />
    <meta name="Keywords" content="�������ϵͳ" />
    <meta name="" content="DIV+CSS" />
    <meta name="author" content="qioixiy" />
    <meta name="Description" content="" />
  </head>

  <body>
    <div class="header">
      <h1 align="center">�������ϵͳ</h1>
    </div>
    <div class="maincontent">
      <div class="sidebar">
	<h4 style="background-color: gray;">&nbsp;<strong>������</strong>&nbsp;</h4>
<?php
     if (isset($_COOKIE["user"]))
         echo "<p align=\"right\" style=\"color: red;\"> Welcome " . $_COOKIE["user"] . "</p>";
     else
         echo "<p align=\"right\" style=\"color: red;\"> Welcome guest!</p>";
?>
      <div id="navi">
	<ul>
	  <li style="border-style: solid; border-width: 0px 0px 1px 0px;" onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="/sgxt/">&nbsp;��¼&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="/sgxt/src">&nbsp;��ҳ&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="/sgxt/src/Dormitory_manager/">&nbsp;�������&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="./add.php">&nbsp;��������&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="./view.php">&nbsp;�鿴������Ϣ&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="./modify.php">&nbsp;�޸�������Ϣ&nbsp;</a></li>
	  <li onmouseout="this.style.backgroundColor=''" onmouseover="this.style.backgroundColor='#778899'"><a href="./delete.php">&nbsp;ɾ������&nbsp;</a></li>
	</ul>
      </div>
    </div>
    <div class="content">
      
      
