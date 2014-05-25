<?php
$lnk = mysql_connect('localhost', 'root', '') 
    or die ('Not connected : ' . mysql_error());
mysql_select_db('manager_db', $lnk)
    or die ('Can\'t use db : ' . mysql_error());
//support chinese
mysql_query("SET NAMES GBK");
?>