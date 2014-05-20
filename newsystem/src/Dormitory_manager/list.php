<?php 

include_once("../common/db_conn.php");

?>   
<html>
  <head>
    <link href="/sgxt/newsystem/assert/css/table_customers.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <table id="customers">
      <tr>
	<th>ID</th>
	<th>宿舍号</th>
	<th>宿舍类型</th>
	<th>属于宿舍楼</th>
	<th>入住人数</th>
      </tr>
<?php
	$result = mysql_query("SELECT * FROM dorms");

    $index = 0;
    while($row = mysql_fetch_array($result)) {
        if ($index == 0) {
            echo "<tr>"; 
            $index = 1;
        } else {
            echo "<tr class='alt'>"; 
            $index = 0;
        }
        echo "<td>" . $row['id'] . "</td>" 
			. "<td>" . $row['编号'] . "</td>" 
			. "<td>" . $row['type'] . "</td>" 
			. "<td>" . $row['宿舍楼'] . "</td>"
			. "<td>" . $row['入住人数'] . "</td>";
        echo "</tr>";
    }
?>      
     
    </table>
  </body>
</html>
