<?php 

include("../common/header.php");
include("../common/db_conn.php");

$result = mysql_query("SELECT * FROM students");
?>   
<html>
  <head>
    <link href="/sgxt/newsystem/assert/css/table_customers.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
    <table id="customers">
      <tr>
	<th>ID</th>
	<th>����</th>
	<th>��ϵ��ʽ</th>
	<th>����ʱ��</th>
      </tr>
<?php
    $index = 0;
    while($row = mysql_fetch_array($result)) {
        if ($index == 0) {
            echo "<tr>"; 
            $index = 1;
        } else {
            echo "<tr class='alt'>"; 
            $index = 0;
        }
        echo "<td>" . $row['id'] . "</td>" . "<td>" . $row['name'] . "</td>" . "<td>" . $row['tel'] . "</td>" . "<td>" . $row['created'] . "</td>";
        echo "</tr>";
    }
?>      
     
    </table>
  </body>
</html>

<?php
include("../common/footer.php");
?>
