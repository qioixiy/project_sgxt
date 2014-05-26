<?php
include_once("../common/db_conn.php");
date_default_timezone_set("Asia/Shanghai");
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
function Dorms_delete($param) {
	//echo $param;
	$arr = explode(";", $param);
	//print_r($arr);
	foreach ($arr as $v) {
		$temp = explode(",", $v);
		$sql = "DELETE FROM dorms WHERE '$temp[0]' AND '$temp[1]';";
		echo $sql . "</br>";
		//mysql_query($sql);
	}
	
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
		  <th>ɾ��?</th>
		</tr>
EOT;

	$result = mysql_query("SELECT * FROM dorms");
	
    $index = 0;
	while($row = mysql_fetch_array($result)) {
		$flag = 1;

		
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
		echo "<td>" . '<input type="checkbox" id="checkbox" name="delete_checkbox" value ="' 
			. '�����' . '='. $row['�����'] .','
			. '����¥' . '='. $row['����¥'] 
			. '"\>' . "</td>";
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
} else if ($_GET["op"] == "deletefilter") {//viewfilter use for delete function.
//get parameters from URL
	$param = $_GET["param"];

	Dorms_delete($param);
}

?>
