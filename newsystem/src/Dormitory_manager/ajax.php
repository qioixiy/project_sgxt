<?php
include_once("../common/db_conn.php");

header("Content-Type:text/html;charset=gb2312");

//get parameters from URL
$susheleixing = $_GET["susheleixing"];
$sushelou = $_GET["sushelou"];
$ruzhurenshu = $_GET["ruzhurenshu"];

echo <<<EOT
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
EOT;

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
     
echo <<<EOF
	  </table>

EOF;
?>
