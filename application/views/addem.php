<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<div class="sss">
<form action="<?php echo base_url(); ?>index.php/employees/add" method="post" enctype="multipart/form-data">
<center>
เพิ่มพนักงาน
<table width="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" height="35" align="left">Username</td>
    <td width="70%"><input class="checkInput" type="text" name="emUsername" id="emUsername" />      <div class="result"></div></td>
  </tr>
  <tr>
    <td height="35" align="left">Password</td>
    <td><input class="checkInput" type="password" name="emPassword" id="emPassword" /></td>
  </tr>
  <tr>
    <td height="34" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="emName" id="emName" />    </tr>
  <tr>
    <td height="40">นามสกุล</td>
    <td><input class="checkInput" type="text" name="emLastname" id="emLastname" /></td>
  </tr>
  <tr>
    <td height="40">E-mail</td>
    <td><input class="checkInput" type="text" name="emEmail" id="emEmail" /></td>
  </tr>
  <tr>
    <td height="40">ทีอยู่</td>
    <td><textarea class="checkInput" name="emAddress" id="emAddress" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="35">เบอร์โทรศัพ</td>
    <td><input class="checkInput" type="text" name="emTel" id="emTel" /></td>
  </tr>
  <tr>
    <td height="40">สถานะ</td>
    <td><select class="checkInput" name="emStatus" id="emStatus">
    	<option value="user">พนักงาน</option>
        <option value="admin">ผู้บริหาร</option>
        </select></td>
  </tr>
  <tr>
    <td height="40"></td>
    <td bgcolor=""><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>
</center>
</form>
</div>
</body>
</html>