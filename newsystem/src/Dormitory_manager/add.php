<?php 
include_once("./common/header.php");
include_once("../common/db_conn.php");
?>

<?php
function db_insert() {
	if (isset($_POST["�����"])) {
		date_default_timezone_set("Asia/Shanghai");

		$sushehao = $_POST["�����"];
		$susheleixing = $_POST["��������"];
		$sushelou = $_POST["����¥"];
		$ruzhurenshu = $_POST["��ס����"];
		$dengjishijian = date('Y-m-d H:i:s');
		$zuihougengxinshijian = date('Y-m-d H:i:s');
		$beizhu = $_POST["��ע"];
		//echo $sushehao . $susheleixing . $sushelou . $ruzhurenshu . $beizhu;
		if (empty($sushehao)
			|| empty($susheleixing)
			|| empty($sushelou)
			|| empty($ruzhurenshu)) {
			echo "<p style=\"color:red\">���ݲ����������������롣" . "</p>";
			return;
		}
		$sql = "INSERT INTO `manager_db`.`dorms` (`id`, `�����`, `��������`, `����¥`, `��ס����`, `�Ǽ�ʱ��`,`������ʱ��`, `��ע`)
 VALUES ('', '$sushehao', '$susheleixing', '$sushelou', '$ruzhurenshu', '$dengjishijian', '$zuihougengxinshijian', '$beizhu');";
		if (mysql_query($sql)) {
			echo "<p style=\"color:green\">��������ɹ�.</p>";
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
		      <td height="32" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px" bgcolor="#AAAAAA">��������</td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">�����</td>
		      <td colspan="2"><input type="text" name="�����" id="sushehao" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">��������</td>
		      <td colspan="2"><input type="text" name="��������" id="susheleixing" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">����¥</td>
		      <td colspan="2"><input type="text" name="����¥"  id="sushelou"/></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">��ס����</td>
		      <td colspan="2"><input type="text" name="��ס����" id="ruzhurenshu"/></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td width="9%" height="20"><div align="center">��ע</div></td>
		      <td colspan="2" rowspan="2" >
			<label>
			  <textarea name="��ע" id="beizhu" cols="70" rows="10"></textarea>
			</label>
		      </td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td><div align="center"></div></td>
		    </tr>
		    
		    <tr bgcolor="#EEEEEE">
		      <td height="25" colspan="3">
			<div align="center">
			  <input name="Submit" type="submit" value="�ύ��¼" />
			  <input name="Submit2" type="reset" value="���ü�¼" />
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
