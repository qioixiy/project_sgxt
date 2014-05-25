<?php 
include_once("../common/db_conn.php");
include_once("./common/header.php");
?>

<?php
function db_insert() {
	if (isset($_POST["宿舍号"])) {
		date_default_timezone_set("Asia/Shanghai");

		$sushehao = $_POST["宿舍号"];
		$susheleixing = $_POST["宿舍类型"];
		$sushelou = $_POST["宿舍楼"];
		$ruzhurenshu = $_POST["入住人数"];
		$dengjishijian = date('Y-m-d H:i:s');
		$zuihougengxinshijian = date('Y-m-d H:i:s');
		$beizhu = $_POST["备注"];
		//echo $sushehao . $susheleixing . $sushelou . $ruzhurenshu . $beizhu;
		if (empty($sushehao)
			|| empty($susheleixing)
			|| empty($sushelou)
			|| empty($ruzhurenshu)) {
			echo "<p style=\"color:red\">数据不完整！请重新输入。" . "</p>";
			return;
		}
		$sql = "INSERT INTO `manager_db`.`dorms` (`id`, `宿舍号`, `宿舍类型`, `宿舍楼`, `入住人数`, `登记时间`,`最后更新时间`, `备注`)
 VALUES ('', '$sushehao', '$susheleixing', '$sushelou', '$ruzhurenshu', '$dengjishijian', '$zuihougengxinshijian', '$beizhu');";
		if (mysql_query($sql)) {
			echo "<p style=\"color:green\">新增宿舍成功.</p>";
		} else {
			echo "<p style=\"color:red\">Error database: " . mysql_error() . "</p>";
		}	
	} else {
		echo "</br>";
	}
}
//db_insert();
?>

<html>
  <head>
    <link href="/sgxt/newsystem/assert/css/table_customers.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	<!--

function watch_init(){ // 初始
	for(var i=0; i<arguments.length; i++){
		if (i != 0) {
			var oOption=new Option(arguments[i],arguments[i]);
			document.getElementById(arguments[0]).options[i]=oOption;
		} else { //i == 0
			var oOption=new Option("请选择", "请选择");
			document.getElementById(arguments[0]).options[i]=oOption;
		}
	}
}
//select op
function watch_add(f){ // 增加
	var oOption=new Option(f.word.value,f.word.value);
	f.keywords.options[f.keywords.length]=oOption;
}
function watch_sel(f){ // 编辑
	f.word.value = f.keywords.options[f.keywords.selectedIndex].text;
}
function watch_mod(f){ // 修改
	f.keywords.options[f.keywords.selectedIndex].text = f.word.value;
}
function watch_del(f){ // 删除
	f.keywords.options.remove(f.keywords.selectedIndex);
}
function watch_set(f){ // 保存
	var set = "";
	for(var i=0; i<f.keywords.length; i++){
		set += f.keywords.options[i].text + ";";
	}
	confirm(set);
}

function stateChanged() {
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
		alert(xmlHttp.responseText)
		//document.getElementById("txtHint").innerHTML=xmlHttp.responseText 
	}
}

function GetXmlHttpObject() {
	var xmlHttp=null;
	try	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	} catch (e) {
		// Internet Explorer
		try	{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

function select_changed() {
	var susheleixing = document.getElementById("susheleixing").options[document.getElementById("susheleixing").options.selectedIndex].text;
	var sushelou = document.getElementById("sushelou").options[document.getElementById("sushelou").options.selectedIndex].text;
	var ruzhurenshu = document.getElementById("ruzhurenshu").options[document.getElementById("ruzhurenshu").options.selectedIndex].text;

	xmlHttp=GetXmlHttpObject();
	if (xmlHttp==null) {
		alert ("Browser does not support HTTP Request")
		return
	}
	var url="./ajax.php"
	url = url + "?susheleixing=" + susheleixing
	url = url + "&sushelou=" + sushelou
	url = url + "&ruzhurenshu=" + ruzhurenshu

	xmlHttp.onreadystatechange=stateChanged
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}
function onload()
{
	//alert("onload");
	watch_init("susheleixing", "8", "6", "4");
	watch_init("sushelou", "银杏楼", "厚德楼", "达理楼");
	watch_init("ruzhurenshu", "0", "1", "2", "3", "4", "5", "6", "7", "8");
}
//-->
	</script>
  </head>
  
  <body onload="onload()">
	<div class="list" style="height:80%;width:100%;overflow:auto;display:block;">
      <table id="customers">
		<tr style="border-style: solid; border-width: 0px 0px 5px 0px;">
		  <th style="background-color:#FFFFFF;"></th>
		  <th style="background-color:#FFFFFF;"></th>
		  <th style="background-color:#FFFFFF;"><select id="susheleixing" name="keywords" size="1" onchange="select_changed(this)"></select></th>
		  <th style="background-color:#FFFFFF;"><select id="sushelou" name="keywords" size="1" onchange="select_changed(this)"></select></th>
		  <th style="background-color:#FFFFFF;"><select id="ruzhurenshu" name="keywords" size="1" onchange="select_changed(this)"></select></th>
		  <th style="background-color:#FFFFFF;"></th>
		  <th style="background-color:#FFFFFF;"></th>
		  <th style="background-color:#FFFFFF;"></th>
		</tr>
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
        echo "</tr>";
    }
?>      
     
	  </table>
	</div>
	<div style="border-style: solid; border-width: 1px 0px 0px 0px;">
	  
	</div>
  </body>
</html>


<?php
include_once("./common/footer.php");
?>
