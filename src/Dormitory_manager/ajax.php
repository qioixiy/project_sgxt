<?php
include_once("../common/db_conn.php");

header("Content-Type:text/html;charset=gb2312");

function Dorms_view($filter) {
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
		$flag = 1;
		if ($filter["susheleixing"] != null 
			&& $filter["susheleixing"] != $row['��������']) {
			$flag = 0;
		}
		if ($filter["sushelou"] != null 
			&& $filter["sushelou"] != $row['����¥']) {
			$flag = 0;
		}
		if ($filter["ruzhurenshu"] != null 
			&& $filter["ruzhurenshu"] != $row['��ס����']) {
			$flag = 0;
		}
		
		if ($flag == 0) {
			continue;
		}
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
}

//viewfilter use for view function.
if ($_GET["op"] == "viewfilter") {
//get parameters from URL
	$susheleixing = $_GET["susheleixing"];
	$sushelou = $_GET["sushelou"];
	$ruzhurenshu = $_GET["ruzhurenshu"];
	Dorms_view(array("susheleixing"=>$susheleixing,
					 "sushelou"=>$sushelou,
					 "ruzhurenshu"=>$ruzhurenshu));
}

?>
