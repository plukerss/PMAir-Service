<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ล็อกอิน</title>
</head>
</div>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
		 <div class="loginf">
        <form action="<?php echo base_url();?>index.php/checkLogin" method="post">
        <br><center>
        <table  width="40%" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <th height="47" colspan="2" align="center" valign="middle" >ลงชื่อเข้าใช้ระบบ</th>
          </tr>
          <tr>
            <td height="59" align="right"><label for="username">ชื่อผู้ใช้&nbsp;:&nbsp;</label></td>
            <td><input type="text" size="30" class="text1" id="text1" name="emUsername" required="required"/></td>
          </tr>
          <tr>
            <td height="47" align="right"><label for="password3">รหัสผ่าน&nbsp;:&nbsp;</label></td>
            <td><input type="password" class="text1"  id="text2" size="30" name="emPassword" required="required"/></td>
          </tr>
          <tr>
            <td height="53">&nbsp;</td>
            <td id="last"><input type="submit"  class="css_button" value="Login"/>
           
            </td>
          </tr>
      </table>
      </center>
    </form>
    
</body>
</html>