<?php 
include_once("./common/header.php");
include_once("../common/db_conn.php");
?>

<html>
  <head>
    <link href="/sgxt/assert/css/table_customers.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
function delete_select() {
	
}
function reset_select() {
	
}
	</script>
  </head>
  
  <body>
	<div>
	  <div style='position:absolute;top:10px;right:30px;width:100px;height:80px;border:1px' id='float-div'>
		<button type="button" onclick=reset_select()>��λѡ����</button>
		<button type="button" onclick=delete_select()>ɾ��ѡ����</button>
	  </div>
	</div>
	<div class="list" style="width:90%;">
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
		  <th>ɾ��?</th>
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
		echo "<td>" . '<input type="checkbox" name="fruit" value ="mango">' . "</td>";
        echo "</tr>";
    }
?>      
      </table>
	</div>
  </body>
</html>


<?php
include_once("./common/footer.php");
?>
