<?php 
include_once("./common/header.php");
include_once("../common/db_conn.php");
?>

<html>
  <head>
    <link href="/sgxt/assert/css/table_customers.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
function reset_select() {
	var arr = document.getElementsByName('delete_checkbox');   

	for(var i = 0; i < arr.length; i++){   
		if(arr[i].checked){   
			arr[i].checked = false;
		}   
	}
}
function delete_select() {
/*
	var table = document.getElementById("customers");
	var rows = table.getElementsByTagName("tr");
	
	for(i = 0; i < rows.length; i++) {
		var cells = rows[i].cells
		for (j = 0; j< cells.length; j++) {
			//alert(cells[j].innerHTML);
		}
	}
//*/
	var arr = document.getElementsByName('delete_checkbox');   
	var checked = false;   
	for(var i = 0; i < arr.length; i++){   
		if(arr[i].checked){   
			var v = arr[i].value;   
			checked = true;
			alert(v);
		}   
	}   
	if(checked == false){   
		alert('请选择想删除的项');   
		return false; 
	}
}
	</script>
  </head>
  
  <body>
	<div>
	</br>
	</div>
	<div>
	  <div style='position:absolute;top:15px;right:30px;width:100px;height:80px;border:1px' id='float-div'>
		<button type="button" onclick=reset_select()>复位选择项</button>
		<button type="button" onclick=delete_select()>删除选择项</button>
	  </div>
	</div>
	<div class="list" style="width:90%;">
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
		  <th>删除?</th>
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
			. "<td>" . $row['宿舍号'] . "</td>" 
			. "<td>" . $row['宿舍类型'] . "</td>" 
			. "<td>" . $row['宿舍楼'] . "</td>"
			. "<td>" . $row['入住人数'] . "</td>"
			. "<td>" . $row['登记时间'] . "</td>"
			. "<td>" . $row['最后更新时间'] . "</td>"
			. "<td>" . $row['备注'] . "</td>";
		echo "<td>" . '<input type="checkbox" id="checkbox" name="delete_checkbox" value ="' 
			. '宿舍号' . '='. $row['宿舍号'] .'&'
			. '宿舍楼' . '='. $row['宿舍楼'] 
			. '"\>' . "</td>";
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
