<?php
include_once("../common/db_conn.php");

header("Content-Type:text/html;charset=gb2312");

function Dorms_view($filter) {
	echo <<<EOT
<table id="customers">
       <tr>
		  <th>ID</th>
		  <th>宿舍号</th>
		  <th>宿舍类型</th>
		  <th>宿舍楼</th>
		  <th>入住人数</th>
		  <th>登记时间</th>
		  <th>最后更新时间</th>
		  <th>备注</th>
		</tr>
EOT;

	$result = mysql_query("SELECT * FROM dorms");
	
    $index = 0;
	while($row = mysql_fetch_array($result)) {
		$flag = 1;
		if ($filter["susheleixing"] != null 
			&& $filter["susheleixing"] != $row['宿舍类型']) {
			$flag = 0;
		}
		if ($filter["sushelou"] != null 
			&& $filter["sushelou"] != $row['宿舍楼']) {
			$flag = 0;
		}
		if ($filter["ruzhurenshu"] != null 
			&& $filter["ruzhurenshu"] != $row['入住人数']) {
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
			. "<td>" . $row['宿舍号'] . "</td>" 
			. "<td>" . $row['宿舍类型'] . "</td>" 
			. "<td>" . $row['宿舍楼'] . "</td>"
			. "<td>" . $row['入住人数'] . "</td>"
			. "<td>" . $row['登记时间'] . "</td>"
			. "<td>" . $row['最后更新时间'] . "</td>"
			. "<td>" . $row['备注'] . "</td>";
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
