<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>登录首页</title>
    <link href="assert/css/Login.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
function validate_required(field,alerttxt)
{
	with (field)
	{
		if (value==null||value=="") {
			//alert(alerttxt);
			return false
		}
		else {
			return true
		}
	}
}

function validate_form(thisform)
{
	with (thisform)
	{
		if (validate_required(name,"must have user name")==false){
			name.focus();
			return false
		}
		if (validate_required(password, "must input your name") == false){
			password.focus();
			return false
		}
		
	}
}
	</script>

  </head>
  <body> 
	<div id="loginfrom">
      <h2 class="caption">宿舍管理信息系统</h2>

      <div id="login">
		<img src="image/hostel.jpg" alt="登录" class="logo" />
		<form action="src/login.php" onsubmit="return validate_form(this)" method="post">
		  <p>用户名：<input type="text" name="name" autofocus="autofocus"/></p>
		  <p>密　码：<input type="password" name="password" />
			<input type="submit" value="Submit" />
		  </p>
		</form>
      </div>

    </div>
  </body>
</html>
