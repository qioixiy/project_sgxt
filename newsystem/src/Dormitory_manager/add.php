<?php 
include_once("./common/header.php");
include_once("../common/db_conn.php");
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

db_insert();
?>
<form action="add.php" method="post" enctype="multipart/form-data" name="myform" >
  <tr>
    <td>
      <table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="1" cellpadding="1">
	<tr>
	  <td>
	    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
		<td height="40" class="font42">
		  <table width="1000" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
		    <tr class="CTitle" >
		      <td height="32" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px" bgcolor="#AAAAAA">新增宿舍</td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">宿舍号</td>
		      <td colspan="2"><input type="text" name="宿舍号" id="sushehao" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">宿舍类型</td>
		      <td colspan="2"><input type="text" name="宿舍类型" id="susheleixing" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">宿舍楼</td>
		      <td colspan="2"><input type="text" name="宿舍楼"  id="sushelou"/></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">入住人数</td>
		      <td colspan="2"><input type="text" name="入住人数" id="ruzhurenshu"/></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td width="9%" height="20"><div align="center">备注</div></td>
		      <td colspan="2" rowspan="2" >
			<label>
			  <textarea name="备注" id="beizhu" cols="70" rows="10"></textarea>
			</label>
		      </td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td><div align="center"></div></td>
		    </tr>
		    
		    <tr bgcolor="#EEEEEE">
		      <td height="25" colspan="3">
			<div align="center">
			  <input name="Submit" type="submit" value="提交记录" />
			  <input name="Submit2" type="reset" value="重置记录" />
			</div>
		      </td>
		    </tr>
		  </table>
		</td>
	      </tr>
	    </table>
	  </td>
	</tr>
      </table>
    </td>
  </tr>
</form>

<?php
include_once("./common/footer.php");
?>
