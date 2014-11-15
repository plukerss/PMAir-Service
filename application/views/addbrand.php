<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<div class="sss">
<form action="<?php echo base_url(); ?>index.php/brands/add" method="post" enctype="multipart/form-data">
<center>
เพิ่ม Brand
<table width="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" height="35" align="left">Brand</td>
    <td width="70%"><input class="checkInput" type="text" name="brandName" id="brandName" />      <div class="result"></div></td>
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