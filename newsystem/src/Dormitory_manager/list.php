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
	<th>Àﬁ…·∫≈</th>
	<th>Àﬁ…·¿‡–Õ</th>
	<th> Ù”⁄Àﬁ…·¬•</th>
      </tr>
<?php
	$result = mysql_query("SELECT * FROM dorm");

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
			. "<td>" . $row['±‡∫≈'] . "</td>" 
			. "<td>" . $row['type'] . "</td>" 
			. "<td>" . $row['Àﬁ…·¬•'] . "</td>";
        echo "</tr>";
    }
?>      
     
    </table>
  </body>
</html>
