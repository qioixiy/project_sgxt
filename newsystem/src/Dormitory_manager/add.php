<?php 
include_once("./common/header.php");
include_once("../common/db_conn.php");
?>


<form action="" method="post" enctype="multipart/form-data" name="myform" >
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
		      <td align="center" height="25">宿舍楼</td>
		      <td colspan="2"><input type="text" name="xm"  id="xm"/></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">宿舍号</td>
		      <td colspan="2"><input type="text" name="jd" id="jd" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">宿舍类别</td>
		      <td colspan="2"><input type="text" name="lb" id="lb" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td align="center" height="25">几人间</td>
		      <td colspan="2"><input type="text" name="jrj" id="jrj" /></td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td width="9%" height="20"><div align="center">备注</div></td>
		      <td colspan="2" rowspan="2" >
			<label>
			  <textarea name="yy" id="yy" cols="70" rows="10"></textarea>
			</label>
		      </td>
		    </tr>
		    <tr bgcolor="#EEEEEE">
		      <td><div align="center"></div></td>
		    </tr>
		    
		    <tr bgcolor="#EEEEEE">
		      <td height="25">
			<div align="center">登记时间</div>
		      </td>
		      <td colspan="2" >
			<label>
			  <input type="text" name="c" id="c"/>
			</label>
		      </td>
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
