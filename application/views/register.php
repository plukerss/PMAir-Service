<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<form action="<?php echo base_url(); ?>index.php/customers/add" method="post" enctype="multipart/form-data">
<center>
สมัคสมาชิก
<table width="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" height="35" align="left">Username</td>
    <td width="70%"><input class="checkInput" type="text" name="cusUsername" id="cusUsername" />      <div class="result"></div></td>
  </tr>
  <tr>
    <td height="35" align="left">Password</td>
    <td><input class="checkInput" type="password" name="cusPassword" id="cusPassword" /></td>
  </tr>
  <tr>
    <td height="34" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="cusName" id="cusName" />    </tr>
  <tr>
    <td height="40">นามสกุล</td>
    <td><input class="checkInput" type="text" name="cusLastname" id="cusLastname" /></td>
  </tr>
  <tr>
    <td height="40">E-mail</td>
    <td><input class="checkInput" type="text" name="cusEmail" id="cusEmail" /></td>
  </tr>
  <tr>
    <td height="40">ทีอยู่</td>
    <td><textarea class="checkInput" name="cusAddress" id="cusAddress" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="35">เบอร์โทรศัพ</td>
    <td><input class="checkInput" type="text" name="cusTel" id="cusTel" /></td>
  </tr>
  <tr>
    <td height="35">ละจิจูด</td>
    <td><input class="checkInput" type="text" name="cusLatitude" id="cusLatitude" /></td>
  </tr>
  <tr>
    <td height="35">ลองจิจูด</td>
    <td><input class="checkInput" type="text" name="cusLongitude" id="cusLongitude" /></td>
  </tr>
 
    <td height="40" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
</table>
</center>
</form>
</body>
</html>

</body>
</html>