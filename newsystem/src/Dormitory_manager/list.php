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
		<th>�����</th>
		<th>��������</th>
		<th>����¥</th>
		<th>��ס����</th>
		<th>�Ǽ�ʱ��</th>
		<th>������ʱ��</th>
		<th>��ע</th>
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
			. "<td>" . $row['�����'] . "</td>" 
			. "<td>" . $row['��������'] . "</td>" 
			. "<td>" . $row['����¥'] . "</td>"
			. "<td>" . $row['��ס����'] . "</td>"
			. "<td>" . $row['�Ǽ�ʱ��'] . "</td>"
			. "<td>" . $row['������ʱ��'] . "</td>"
			. "<td>" . $row['��ע'] . "</td>";
        echo "</tr>";
    }
?>      
     
    </table>
  </body>
</html>
